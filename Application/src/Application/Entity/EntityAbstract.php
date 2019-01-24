<?php

namespace Application\Entity;

use Doctrine\ORM\EntityManager;
use Zend\ServiceManager\ServiceLocatorInterface;

class EntityAbstract
{

    /**
     * @var ServiceLocatorInterface
     */
    static protected $_oServiceLocator;
    protected $_oEntityManager;

    public function serialize()
    {
        $className = get_class($this);
        $uow = $this->_getEntityManager()->getUnitOfWork();
        $entityPersister = $uow->getEntityPersister($className);
        $classMetadata = $entityPersister->getClassMetadata();

        $result = array();
        foreach ($uow->getOriginalEntityData($this) as $field => $value) {
            if (isset($classMetadata->associationMappings[$field])) {
                $assoc = $classMetadata->associationMappings[$field];
                if ( ! $assoc['isOwningSide'] || ! ($assoc['type'] & \Doctrine\ORM\Mapping\ClassMetadata::TO_ONE)) {
                    continue;
                }
                if ($value !== null) {
                    $newValId = $uow->getEntityIdentifier($value);
                }
                $targetClass = $this->_getEntityManager()->getClassMetadata($assoc['targetEntity']);

                foreach ($assoc['joinColumns'] as $joinColumn) {
                    $sourceColumn = $joinColumn['name'];
                    $targetColumn = $joinColumn['referencedColumnName'];

                    if ($value === null) {
                        $result[$sourceColumn] = null;
                    } else if ($targetClass->containsForeignIdentifier) {
                        $result[$sourceColumn] = $newValId[$targetClass->getFieldForColumn($targetColumn)];
                    } else {
                        $result[$sourceColumn] = $newValId[$targetClass->fieldNames[$targetColumn]];
                    }
                }
            } elseif (isset($classMetadata->columnNames[$field])) {
                $columnName = $classMetadata->columnNames[$field];
                $result[$columnName] = $value;
            }
        }
        $aReturn = array();
        foreach ($result as $sKey => $sVal){
            $aReturn[$classMetadata->getFieldName($sKey)] = $sVal;
        }
        return $aReturn;
    }

    /**
     * Ustawia w encji parametry z tablicy
     * @param $aData
     * @return $this
     */
    public function setFromArray($aData)
    {
        foreach ($aData as $sKey => $sValue) {
            $aKeyParts = explode('_', $sKey);
            foreach ($aKeyParts as $iNr => $sPart) {
                $aKeyParts[$iNr] = ucfirst($sPart);
            }
            $sEntityFunction = 'set' . implode('', $aKeyParts);
            if (method_exists($this, $sEntityFunction)) {
                if (preg_match("/^[\d]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][\d]|3[01]) (0[1-9]|1[\d]|2[0-3]):(0[1-9]|[1-5][\d]):(0[1-9]|[1-5][\d])$/i", $sValue)) {
                    $sValue = new \DateTime($sValue);
                }
                $this->$sEntityFunction($sValue);
            }
        }
        return $this;
    }

    /**
     * @param ServiceLocatorInterface $serviceLocator
     */
    public static function setServiceLocator(ServiceLocatorInterface $serviceLocator) {
        self::$_oServiceLocator = $serviceLocator;
    }

    /**
     * @return ServiceLocatorInterface
     */
    protected function _getServiceLocator() {
        return self::$_oServiceLocator;
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    protected function _getEntityManager()
    {
        if ($this->_oEntityManager === null) {
            $this->_oEntityManager = $this->_getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->_oEntityManager;
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    protected function _getRepository() {
        return $this->_getEntityManager()->getRepository(get_called_class());
    }
}