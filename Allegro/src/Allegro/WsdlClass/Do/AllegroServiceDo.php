<?php
/**
 * File for class AllegroServiceDo
 * @package Allegro
 * @subpackage Services
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroServiceDo originally named Do
 * @package Allegro
 * @subpackage Services
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroServiceDo extends AllegroWsdlClass
{
    /**
     * Method to call the operation originally named doAddDescToItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoAddDescToItemsRequest $_allegroStructDoAddDescToItemsRequest
     * @return AllegroStructDoAddDescToItemsResponse
     */
    public function doAddDescToItems(AllegroStructDoAddDescToItemsRequest $_allegroStructDoAddDescToItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doAddDescToItems($_allegroStructDoAddDescToItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doAddPackageInfoToPostBuyForm
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoAddPackageInfoToPostBuyFormRequest $_allegroStructDoAddPackageInfoToPostBuyFormRequest
     * @return AllegroStructDoAddPackageInfoToPostBuyFormResponse
     */
    public function doAddPackageInfoToPostBuyForm(AllegroStructDoAddPackageInfoToPostBuyFormRequest $_allegroStructDoAddPackageInfoToPostBuyFormRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doAddPackageInfoToPostBuyForm($_allegroStructDoAddPackageInfoToPostBuyFormRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doAddToBlackList
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoAddToBlackListRequest $_allegroStructDoAddToBlackListRequest
     * @return AllegroStructDoAddToBlackListResponse
     */
    public function doAddToBlackList(AllegroStructDoAddToBlackListRequest $_allegroStructDoAddToBlackListRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doAddToBlackList($_allegroStructDoAddToBlackListRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doAddToWatchList
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoAddToWatchListRequest $_allegroStructDoAddToWatchListRequest
     * @return AllegroStructDoAddToWatchListResponse
     */
    public function doAddToWatchList(AllegroStructDoAddToWatchListRequest $_allegroStructDoAddToWatchListRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doAddToWatchList($_allegroStructDoAddToWatchListRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doBidItem
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoBidItemRequest $_allegroStructDoBidItemRequest
     * @return AllegroStructDoBidItemResponse
     */
    public function doBidItem(AllegroStructDoBidItemRequest $_allegroStructDoBidItemRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doBidItem($_allegroStructDoBidItemRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doCancelBidItem
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoCancelBidItemRequest $_allegroStructDoCancelBidItemRequest
     * @return AllegroStructDoCancelBidItemResponse
     */
    public function doCancelBidItem(AllegroStructDoCancelBidItemRequest $_allegroStructDoCancelBidItemRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doCancelBidItem($_allegroStructDoCancelBidItemRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doCancelRefundForm
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoCancelRefundFormRequest $_allegroStructDoCancelRefundFormRequest
     * @return AllegroStructDoCancelRefundFormResponse
     */
    public function doCancelRefundForm(AllegroStructDoCancelRefundFormRequest $_allegroStructDoCancelRefundFormRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doCancelRefundForm($_allegroStructDoCancelRefundFormRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doCancelRefundWarning
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoCancelRefundWarningRequest $_allegroStructDoCancelRefundWarningRequest
     * @return AllegroStructDoCancelRefundWarningResponse
     */
    public function doCancelRefundWarning(AllegroStructDoCancelRefundWarningRequest $_allegroStructDoCancelRefundWarningRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doCancelRefundWarning($_allegroStructDoCancelRefundWarningRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doCancelTransaction
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoCancelTransactionRequest $_allegroStructDoCancelTransactionRequest
     * @return AllegroStructDoCancelTransactionResponse
     */
    public function doCancelTransaction(AllegroStructDoCancelTransactionRequest $_allegroStructDoCancelTransactionRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doCancelTransaction($_allegroStructDoCancelTransactionRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doChangeItemFields
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoChangeItemFieldsRequest $_allegroStructDoChangeItemFieldsRequest
     * @return AllegroStructDoChangeItemFieldsResponse
     */
    public function doChangeItemFields(AllegroStructDoChangeItemFieldsRequest $_allegroStructDoChangeItemFieldsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doChangeItemFields($_allegroStructDoChangeItemFieldsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doChangePriceItem
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoChangePriceItemRequest $_allegroStructDoChangePriceItemRequest
     * @return AllegroStructDoChangePriceItemResponse
     */
    public function doChangePriceItem(AllegroStructDoChangePriceItemRequest $_allegroStructDoChangePriceItemRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doChangePriceItem($_allegroStructDoChangePriceItemRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doChangeQuantityItem
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoChangeQuantityItemRequest $_allegroStructDoChangeQuantityItemRequest
     * @return AllegroStructDoChangeQuantityItemResponse
     */
    public function doChangeQuantityItem(AllegroStructDoChangeQuantityItemRequest $_allegroStructDoChangeQuantityItemRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doChangeQuantityItem($_allegroStructDoChangeQuantityItemRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doCheckItemDescription
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoCheckItemDescriptionRequest $_allegroStructDoCheckItemDescriptionRequest
     * @return AllegroStructDoCheckItemDescriptionResponse
     */
    public function doCheckItemDescription(AllegroStructDoCheckItemDescriptionRequest $_allegroStructDoCheckItemDescriptionRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doCheckItemDescription($_allegroStructDoCheckItemDescriptionRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doCheckNewAuctionExt
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoCheckNewAuctionExtRequest $_allegroStructDoCheckNewAuctionExtRequest
     * @return AllegroStructDoCheckNewAuctionExtResponse
     */
    public function doCheckNewAuctionExt(AllegroStructDoCheckNewAuctionExtRequest $_allegroStructDoCheckNewAuctionExtRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doCheckNewAuctionExt($_allegroStructDoCheckNewAuctionExtRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doCreateItemTemplate
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoCreateItemTemplateRequest $_allegroStructDoCreateItemTemplateRequest
     * @return AllegroStructDoCreateItemTemplateResponse
     */
    public function doCreateItemTemplate(AllegroStructDoCreateItemTemplateRequest $_allegroStructDoCreateItemTemplateRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doCreateItemTemplate($_allegroStructDoCreateItemTemplateRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doFeedback
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoFeedbackRequest $_allegroStructDoFeedbackRequest
     * @return AllegroStructDoFeedbackResponse
     */
    public function doFeedback(AllegroStructDoFeedbackRequest $_allegroStructDoFeedbackRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doFeedback($_allegroStructDoFeedbackRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doFeedbackMany
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoFeedbackManyRequest $_allegroStructDoFeedbackManyRequest
     * @return AllegroStructDoFeedbackManyResponse
     */
    public function doFeedbackMany(AllegroStructDoFeedbackManyRequest $_allegroStructDoFeedbackManyRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doFeedbackMany($_allegroStructDoFeedbackManyRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doFinishItem
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoFinishItemRequest $_allegroStructDoFinishItemRequest
     * @return AllegroStructDoFinishItemResponse
     */
    public function doFinishItem(AllegroStructDoFinishItemRequest $_allegroStructDoFinishItemRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doFinishItem($_allegroStructDoFinishItemRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doFinishItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoFinishItemsRequest $_allegroStructDoFinishItemsRequest
     * @return AllegroStructDoFinishItemsResponse
     */
    public function doFinishItems(AllegroStructDoFinishItemsRequest $_allegroStructDoFinishItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doFinishItems($_allegroStructDoFinishItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetAdminUserLicenceDate
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetAdminUserLicenceDateRequest $_allegroStructDoGetAdminUserLicenceDateRequest
     * @return AllegroStructDoGetAdminUserLicenceDateResponse
     */
    public function doGetAdminUserLicenceDate(AllegroStructDoGetAdminUserLicenceDateRequest $_allegroStructDoGetAdminUserLicenceDateRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetAdminUserLicenceDate($_allegroStructDoGetAdminUserLicenceDateRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetArchiveRefundsList
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetArchiveRefundsListRequest $_allegroStructDoGetArchiveRefundsListRequest
     * @return AllegroStructDoGetArchiveRefundsListResponse
     */
    public function doGetArchiveRefundsList(AllegroStructDoGetArchiveRefundsListRequest $_allegroStructDoGetArchiveRefundsListRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetArchiveRefundsList($_allegroStructDoGetArchiveRefundsListRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetBidItem2
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetBidItem2Request $_allegroStructDoGetBidItem2Request
     * @return AllegroStructDoGetBidItem2Response
     */
    public function doGetBidItem2(AllegroStructDoGetBidItem2Request $_allegroStructDoGetBidItem2Request)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetBidItem2($_allegroStructDoGetBidItem2Request));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetBlackListUsers
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetBlackListUsersRequest $_allegroStructDoGetBlackListUsersRequest
     * @return AllegroStructDoGetBlackListUsersResponse
     */
    public function doGetBlackListUsers(AllegroStructDoGetBlackListUsersRequest $_allegroStructDoGetBlackListUsersRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetBlackListUsers($_allegroStructDoGetBlackListUsersRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetCategoryPath
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetCategoryPathRequest $_allegroStructDoGetCategoryPathRequest
     * @return AllegroStructDoGetCategoryPathResponse
     */
    public function doGetCategoryPath(AllegroStructDoGetCategoryPathRequest $_allegroStructDoGetCategoryPathRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetCategoryPath($_allegroStructDoGetCategoryPathRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetCatsData
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetCatsDataRequest $_allegroStructDoGetCatsDataRequest
     * @return AllegroStructDoGetCatsDataResponse
     */
    public function doGetCatsData(AllegroStructDoGetCatsDataRequest $_allegroStructDoGetCatsDataRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetCatsData($_allegroStructDoGetCatsDataRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetCatsDataCount
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetCatsDataCountRequest $_allegroStructDoGetCatsDataCountRequest
     * @return AllegroStructDoGetCatsDataCountResponse
     */
    public function doGetCatsDataCount(AllegroStructDoGetCatsDataCountRequest $_allegroStructDoGetCatsDataCountRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetCatsDataCount($_allegroStructDoGetCatsDataCountRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetCatsDataLimit
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetCatsDataLimitRequest $_allegroStructDoGetCatsDataLimitRequest
     * @return AllegroStructDoGetCatsDataLimitResponse
     */
    public function doGetCatsDataLimit(AllegroStructDoGetCatsDataLimitRequest $_allegroStructDoGetCatsDataLimitRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetCatsDataLimit($_allegroStructDoGetCatsDataLimitRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetCountries
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetCountriesRequest $_allegroStructDoGetCountriesRequest
     * @return AllegroStructDoGetCountriesResponse
     */
    public function doGetCountries(AllegroStructDoGetCountriesRequest $_allegroStructDoGetCountriesRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetCountries($_allegroStructDoGetCountriesRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetDeals
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetDealsRequest $_allegroStructDoGetDealsRequest
     * @return AllegroStructDoGetDealsResponse
     */
    public function doGetDeals(AllegroStructDoGetDealsRequest $_allegroStructDoGetDealsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetDeals($_allegroStructDoGetDealsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetFavouriteCategories
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetFavouriteCategoriesRequest $_allegroStructDoGetFavouriteCategoriesRequest
     * @return AllegroStructDoGetFavouriteCategoriesResponse
     */
    public function doGetFavouriteCategories(AllegroStructDoGetFavouriteCategoriesRequest $_allegroStructDoGetFavouriteCategoriesRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetFavouriteCategories($_allegroStructDoGetFavouriteCategoriesRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetFavouriteSellers
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetFavouriteSellersRequest $_allegroStructDoGetFavouriteSellersRequest
     * @return AllegroStructDoGetFavouriteSellersResponse
     */
    public function doGetFavouriteSellers(AllegroStructDoGetFavouriteSellersRequest $_allegroStructDoGetFavouriteSellersRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetFavouriteSellers($_allegroStructDoGetFavouriteSellersRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetFeedback
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetFeedbackRequest $_allegroStructDoGetFeedbackRequest
     * @return AllegroStructDoGetFeedbackResponse
     */
    public function doGetFeedback(AllegroStructDoGetFeedbackRequest $_allegroStructDoGetFeedbackRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetFeedback($_allegroStructDoGetFeedbackRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetFilledPostBuyForms
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetFilledPostBuyFormsRequest $_allegroStructDoGetFilledPostBuyFormsRequest
     * @return AllegroStructDoGetFilledPostBuyFormsResponse
     */
    public function doGetFilledPostBuyForms(AllegroStructDoGetFilledPostBuyFormsRequest $_allegroStructDoGetFilledPostBuyFormsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetFilledPostBuyForms($_allegroStructDoGetFilledPostBuyFormsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetFreeDeliveryAmount
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetFreeDeliveryAmountRequest $_allegroStructDoGetFreeDeliveryAmountRequest
     * @return AllegroStructDoGetFreeDeliveryAmountResponse
     */
    public function doGetFreeDeliveryAmount(AllegroStructDoGetFreeDeliveryAmountRequest $_allegroStructDoGetFreeDeliveryAmountRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetFreeDeliveryAmount($_allegroStructDoGetFreeDeliveryAmountRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetItemFields
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetItemFieldsRequest $_allegroStructDoGetItemFieldsRequest
     * @return AllegroStructDoGetItemFieldsResponse
     */
    public function doGetItemFields(AllegroStructDoGetItemFieldsRequest $_allegroStructDoGetItemFieldsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetItemFields($_allegroStructDoGetItemFieldsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetItemTemplates
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetItemTemplatesRequest $_allegroStructDoGetItemTemplatesRequest
     * @return AllegroStructDoGetItemTemplatesResponse
     */
    public function doGetItemTemplates(AllegroStructDoGetItemTemplatesRequest $_allegroStructDoGetItemTemplatesRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetItemTemplates($_allegroStructDoGetItemTemplatesRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetItemsImages
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetItemsImagesRequest $_allegroStructDoGetItemsImagesRequest
     * @return AllegroStructDoGetItemsImagesResponse
     */
    public function doGetItemsImages(AllegroStructDoGetItemsImagesRequest $_allegroStructDoGetItemsImagesRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetItemsImages($_allegroStructDoGetItemsImagesRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetItemsInfo
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetItemsInfoRequest $_allegroStructDoGetItemsInfoRequest
     * @return AllegroStructDoGetItemsInfoResponse
     */
    public function doGetItemsInfo(AllegroStructDoGetItemsInfoRequest $_allegroStructDoGetItemsInfoRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetItemsInfo($_allegroStructDoGetItemsInfoRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetItemsList
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetItemsListRequest $_allegroStructDoGetItemsListRequest
     * @return AllegroStructDoGetItemsListResponse
     */
    public function doGetItemsList(AllegroStructDoGetItemsListRequest $_allegroStructDoGetItemsListRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetItemsList($_allegroStructDoGetItemsListRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMessageToBuyer
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMessageToBuyerRequest $_allegroStructDoGetMessageToBuyerRequest
     * @return AllegroStructDoGetMessageToBuyerResponse
     */
    public function doGetMessageToBuyer(AllegroStructDoGetMessageToBuyerRequest $_allegroStructDoGetMessageToBuyerRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMessageToBuyer($_allegroStructDoGetMessageToBuyerRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyAddresses
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyAddressesRequest $_allegroStructDoGetMyAddressesRequest
     * @return AllegroStructDoGetMyAddressesResponse
     */
    public function doGetMyAddresses(AllegroStructDoGetMyAddressesRequest $_allegroStructDoGetMyAddressesRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyAddresses($_allegroStructDoGetMyAddressesRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyBidItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyBidItemsRequest $_allegroStructDoGetMyBidItemsRequest
     * @return AllegroStructDoGetMyBidItemsResponse
     */
    public function doGetMyBidItems(AllegroStructDoGetMyBidItemsRequest $_allegroStructDoGetMyBidItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyBidItems($_allegroStructDoGetMyBidItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyCurrentShipmentPriceType
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyCurrentShipmentPriceTypeRequest $_allegroStructDoGetMyCurrentShipmentPriceTypeRequest
     * @return AllegroStructDoGetMyCurrentShipmentPriceTypeResponse
     */
    public function doGetMyCurrentShipmentPriceType(AllegroStructDoGetMyCurrentShipmentPriceTypeRequest $_allegroStructDoGetMyCurrentShipmentPriceTypeRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyCurrentShipmentPriceType($_allegroStructDoGetMyCurrentShipmentPriceTypeRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyData
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyDataRequest $_allegroStructDoGetMyDataRequest
     * @return AllegroStructDoGetMyDataResponse
     */
    public function doGetMyData(AllegroStructDoGetMyDataRequest $_allegroStructDoGetMyDataRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyData($_allegroStructDoGetMyDataRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyFutureItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyFutureItemsRequest $_allegroStructDoGetMyFutureItemsRequest
     * @return AllegroStructDoGetMyFutureItemsResponse
     */
    public function doGetMyFutureItems(AllegroStructDoGetMyFutureItemsRequest $_allegroStructDoGetMyFutureItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyFutureItems($_allegroStructDoGetMyFutureItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyIncomingPayments
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyIncomingPaymentsRequest $_allegroStructDoGetMyIncomingPaymentsRequest
     * @return AllegroStructDoGetMyIncomingPaymentsResponse
     */
    public function doGetMyIncomingPayments(AllegroStructDoGetMyIncomingPaymentsRequest $_allegroStructDoGetMyIncomingPaymentsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyIncomingPayments($_allegroStructDoGetMyIncomingPaymentsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyIncomingPaymentsRefunds
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyIncomingPaymentsRefundsRequest $_allegroStructDoGetMyIncomingPaymentsRefundsRequest
     * @return AllegroStructDoGetMyIncomingPaymentsRefundsResponse
     */
    public function doGetMyIncomingPaymentsRefunds(AllegroStructDoGetMyIncomingPaymentsRefundsRequest $_allegroStructDoGetMyIncomingPaymentsRefundsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyIncomingPaymentsRefunds($_allegroStructDoGetMyIncomingPaymentsRefundsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyNotSoldItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyNotSoldItemsRequest $_allegroStructDoGetMyNotSoldItemsRequest
     * @return AllegroStructDoGetMyNotSoldItemsResponse
     */
    public function doGetMyNotSoldItems(AllegroStructDoGetMyNotSoldItemsRequest $_allegroStructDoGetMyNotSoldItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyNotSoldItems($_allegroStructDoGetMyNotSoldItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyNotWonItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyNotWonItemsRequest $_allegroStructDoGetMyNotWonItemsRequest
     * @return AllegroStructDoGetMyNotWonItemsResponse
     */
    public function doGetMyNotWonItems(AllegroStructDoGetMyNotWonItemsRequest $_allegroStructDoGetMyNotWonItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyNotWonItems($_allegroStructDoGetMyNotWonItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyPayments
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyPaymentsRequest $_allegroStructDoGetMyPaymentsRequest
     * @return AllegroStructDoGetMyPaymentsResponse
     */
    public function doGetMyPayments(AllegroStructDoGetMyPaymentsRequest $_allegroStructDoGetMyPaymentsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyPayments($_allegroStructDoGetMyPaymentsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyPaymentsInfo
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyPaymentsInfoRequest $_allegroStructDoGetMyPaymentsInfoRequest
     * @return AllegroStructDoGetMyPaymentsInfoResponse
     */
    public function doGetMyPaymentsInfo(AllegroStructDoGetMyPaymentsInfoRequest $_allegroStructDoGetMyPaymentsInfoRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyPaymentsInfo($_allegroStructDoGetMyPaymentsInfoRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyPaymentsRefunds
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyPaymentsRefundsRequest $_allegroStructDoGetMyPaymentsRefundsRequest
     * @return AllegroStructDoGetMyPaymentsRefundsResponse
     */
    public function doGetMyPaymentsRefunds(AllegroStructDoGetMyPaymentsRefundsRequest $_allegroStructDoGetMyPaymentsRefundsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyPaymentsRefunds($_allegroStructDoGetMyPaymentsRefundsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyPayouts
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyPayoutsRequest $_allegroStructDoGetMyPayoutsRequest
     * @return AllegroStructDoGetMyPayoutsResponse
     */
    public function doGetMyPayouts(AllegroStructDoGetMyPayoutsRequest $_allegroStructDoGetMyPayoutsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyPayouts($_allegroStructDoGetMyPayoutsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMySellItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMySellItemsRequest $_allegroStructDoGetMySellItemsRequest
     * @return AllegroStructDoGetMySellItemsResponse
     */
    public function doGetMySellItems(AllegroStructDoGetMySellItemsRequest $_allegroStructDoGetMySellItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMySellItems($_allegroStructDoGetMySellItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMySellRating
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMySellRatingRequest $_allegroStructDoGetMySellRatingRequest
     * @return AllegroStructDoGetMySellRatingResponse
     */
    public function doGetMySellRating(AllegroStructDoGetMySellRatingRequest $_allegroStructDoGetMySellRatingRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMySellRating($_allegroStructDoGetMySellRatingRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMySoldItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMySoldItemsRequest $_allegroStructDoGetMySoldItemsRequest
     * @return AllegroStructDoGetMySoldItemsResponse
     */
    public function doGetMySoldItems(AllegroStructDoGetMySoldItemsRequest $_allegroStructDoGetMySoldItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMySoldItems($_allegroStructDoGetMySoldItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyWatchItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyWatchItemsRequest $_allegroStructDoGetMyWatchItemsRequest
     * @return AllegroStructDoGetMyWatchItemsResponse
     */
    public function doGetMyWatchItems(AllegroStructDoGetMyWatchItemsRequest $_allegroStructDoGetMyWatchItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyWatchItems($_allegroStructDoGetMyWatchItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyWatchedItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyWatchedItemsRequest $_allegroStructDoGetMyWatchedItemsRequest
     * @return AllegroStructDoGetMyWatchedItemsResponse
     */
    public function doGetMyWatchedItems(AllegroStructDoGetMyWatchedItemsRequest $_allegroStructDoGetMyWatchedItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyWatchedItems($_allegroStructDoGetMyWatchedItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetMyWonItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetMyWonItemsRequest $_allegroStructDoGetMyWonItemsRequest
     * @return AllegroStructDoGetMyWonItemsResponse
     */
    public function doGetMyWonItems(AllegroStructDoGetMyWonItemsRequest $_allegroStructDoGetMyWonItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetMyWonItems($_allegroStructDoGetMyWonItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetPaymentData
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetPaymentDataRequest $_allegroStructDoGetPaymentDataRequest
     * @return AllegroStructDoGetPaymentDataResponse
     */
    public function doGetPaymentData(AllegroStructDoGetPaymentDataRequest $_allegroStructDoGetPaymentDataRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetPaymentData($_allegroStructDoGetPaymentDataRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetPaymentMethods
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetPaymentMethodsRequest $_allegroStructDoGetPaymentMethodsRequest
     * @return AllegroStructDoGetPaymentMethodsResponse
     */
    public function doGetPaymentMethods(AllegroStructDoGetPaymentMethodsRequest $_allegroStructDoGetPaymentMethodsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetPaymentMethods($_allegroStructDoGetPaymentMethodsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetPostBuyData
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetPostBuyDataRequest $_allegroStructDoGetPostBuyDataRequest
     * @return AllegroStructDoGetPostBuyDataResponse
     */
    public function doGetPostBuyData(AllegroStructDoGetPostBuyDataRequest $_allegroStructDoGetPostBuyDataRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetPostBuyData($_allegroStructDoGetPostBuyDataRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetPostBuyFormsDataForBuyers
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetPostBuyFormsDataForBuyersRequest $_allegroStructDoGetPostBuyFormsDataForBuyersRequest
     * @return AllegroStructDoGetPostBuyFormsDataForBuyersResponse
     */
    public function doGetPostBuyFormsDataForBuyers(AllegroStructDoGetPostBuyFormsDataForBuyersRequest $_allegroStructDoGetPostBuyFormsDataForBuyersRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetPostBuyFormsDataForBuyers($_allegroStructDoGetPostBuyFormsDataForBuyersRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetPostBuyFormsDataForSellers
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetPostBuyFormsDataForSellersRequest $_allegroStructDoGetPostBuyFormsDataForSellersRequest
     * @return AllegroStructDoGetPostBuyFormsDataForSellersResponse
     */
    public function doGetPostBuyFormsDataForSellers(AllegroStructDoGetPostBuyFormsDataForSellersRequest $_allegroStructDoGetPostBuyFormsDataForSellersRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetPostBuyFormsDataForSellers($_allegroStructDoGetPostBuyFormsDataForSellersRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetPostBuyFormsIds
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetPostBuyFormsIdsRequest $_allegroStructDoGetPostBuyFormsIdsRequest
     * @return AllegroStructDoGetPostBuyFormsIdsResponse
     */
    public function doGetPostBuyFormsIds(AllegroStructDoGetPostBuyFormsIdsRequest $_allegroStructDoGetPostBuyFormsIdsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetPostBuyFormsIds($_allegroStructDoGetPostBuyFormsIdsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetPostBuyItemInfo
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetPostBuyItemInfoRequest $_allegroStructDoGetPostBuyItemInfoRequest
     * @return AllegroStructDoGetPostBuyItemInfoResponse
     */
    public function doGetPostBuyItemInfo(AllegroStructDoGetPostBuyItemInfoRequest $_allegroStructDoGetPostBuyItemInfoRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetPostBuyItemInfo($_allegroStructDoGetPostBuyItemInfoRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetRefundsDeals
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetRefundsDealsRequest $_allegroStructDoGetRefundsDealsRequest
     * @return AllegroStructDoGetRefundsDealsResponse
     */
    public function doGetRefundsDeals(AllegroStructDoGetRefundsDealsRequest $_allegroStructDoGetRefundsDealsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetRefundsDeals($_allegroStructDoGetRefundsDealsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetRefundsList
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetRefundsListRequest $_allegroStructDoGetRefundsListRequest
     * @return AllegroStructDoGetRefundsListResponse
     */
    public function doGetRefundsList(AllegroStructDoGetRefundsListRequest $_allegroStructDoGetRefundsListRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetRefundsList($_allegroStructDoGetRefundsListRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetRefundsReasons
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetRefundsReasonsRequest $_allegroStructDoGetRefundsReasonsRequest
     * @return AllegroStructDoGetRefundsReasonsResponse
     */
    public function doGetRefundsReasons(AllegroStructDoGetRefundsReasonsRequest $_allegroStructDoGetRefundsReasonsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetRefundsReasons($_allegroStructDoGetRefundsReasonsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetRelatedItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetRelatedItemsRequest $_allegroStructDoGetRelatedItemsRequest
     * @return AllegroStructDoGetRelatedItemsResponse
     */
    public function doGetRelatedItems(AllegroStructDoGetRelatedItemsRequest $_allegroStructDoGetRelatedItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetRelatedItems($_allegroStructDoGetRelatedItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSellFormAttribs
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSellFormAttribsRequest $_allegroStructDoGetSellFormAttribsRequest
     * @return AllegroStructDoGetSellFormAttribsResponse
     */
    public function doGetSellFormAttribs(AllegroStructDoGetSellFormAttribsRequest $_allegroStructDoGetSellFormAttribsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSellFormAttribs($_allegroStructDoGetSellFormAttribsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSellFormFields
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSellFormFieldsRequest $_allegroStructDoGetSellFormFieldsRequest
     * @return AllegroStructDoGetSellFormFieldsResponse
     */
    public function doGetSellFormFields(AllegroStructDoGetSellFormFieldsRequest $_allegroStructDoGetSellFormFieldsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSellFormFields($_allegroStructDoGetSellFormFieldsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSellFormFieldsExt
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSellFormFieldsExtRequest $_allegroStructDoGetSellFormFieldsExtRequest
     * @return AllegroStructDoGetSellFormFieldsExtResponse
     */
    public function doGetSellFormFieldsExt(AllegroStructDoGetSellFormFieldsExtRequest $_allegroStructDoGetSellFormFieldsExtRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSellFormFieldsExt($_allegroStructDoGetSellFormFieldsExtRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSellFormFieldsExtLimit
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSellFormFieldsExtLimitRequest $_allegroStructDoGetSellFormFieldsExtLimitRequest
     * @return AllegroStructDoGetSellFormFieldsExtLimitResponse
     */
    public function doGetSellFormFieldsExtLimit(AllegroStructDoGetSellFormFieldsExtLimitRequest $_allegroStructDoGetSellFormFieldsExtLimitRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSellFormFieldsExtLimit($_allegroStructDoGetSellFormFieldsExtLimitRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSellFormFieldsForCategory
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSellFormFieldsForCategoryRequest $_allegroStructDoGetSellFormFieldsForCategoryRequest
     * @return AllegroStructDoGetSellFormFieldsForCategoryResponse
     */
    public function doGetSellFormFieldsForCategory(AllegroStructDoGetSellFormFieldsForCategoryRequest $_allegroStructDoGetSellFormFieldsForCategoryRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSellFormFieldsForCategory($_allegroStructDoGetSellFormFieldsForCategoryRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSellFormFieldsLimit
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSellFormFieldsLimitRequest $_allegroStructDoGetSellFormFieldsLimitRequest
     * @return AllegroStructDoGetSellFormFieldsLimitResponse
     */
    public function doGetSellFormFieldsLimit(AllegroStructDoGetSellFormFieldsLimitRequest $_allegroStructDoGetSellFormFieldsLimitRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSellFormFieldsLimit($_allegroStructDoGetSellFormFieldsLimitRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSellRatingReasons
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSellRatingReasonsRequest $_allegroStructDoGetSellRatingReasonsRequest
     * @return AllegroStructDoGetSellRatingReasonsResponse
     */
    public function doGetSellRatingReasons(AllegroStructDoGetSellRatingReasonsRequest $_allegroStructDoGetSellRatingReasonsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSellRatingReasons($_allegroStructDoGetSellRatingReasonsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetServiceInfo
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetServiceInfoRequest $_allegroStructDoGetServiceInfoRequest
     * @return AllegroStructDoGetServiceInfoResponse
     */
    public function doGetServiceInfo(AllegroStructDoGetServiceInfoRequest $_allegroStructDoGetServiceInfoRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetServiceInfo($_allegroStructDoGetServiceInfoRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetServiceInfoCategories
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetServiceInfoCategoriesRequest $_allegroStructDoGetServiceInfoCategoriesRequest
     * @return AllegroStructDoGetServiceInfoCategoriesResponse
     */
    public function doGetServiceInfoCategories(AllegroStructDoGetServiceInfoCategoriesRequest $_allegroStructDoGetServiceInfoCategoriesRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetServiceInfoCategories($_allegroStructDoGetServiceInfoCategoriesRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetServiceTemplates
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetServiceTemplatesRequest $_allegroStructDoGetServiceTemplatesRequest
     * @return AllegroStructDoGetServiceTemplatesResponse
     */
    public function doGetServiceTemplates(AllegroStructDoGetServiceTemplatesRequest $_allegroStructDoGetServiceTemplatesRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetServiceTemplates($_allegroStructDoGetServiceTemplatesRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSessionHandleForWidget
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSessionHandleForWidgetRequest $_allegroStructDoGetSessionHandleForWidgetRequest
     * @return AllegroStructDoGetSessionHandleForWidgetResponse
     */
    public function doGetSessionHandleForWidget(AllegroStructDoGetSessionHandleForWidgetRequest $_allegroStructDoGetSessionHandleForWidgetRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSessionHandleForWidget($_allegroStructDoGetSessionHandleForWidgetRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetShipmentData
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetShipmentDataRequest $_allegroStructDoGetShipmentDataRequest
     * @return AllegroStructDoGetShipmentDataResponse
     */
    public function doGetShipmentData(AllegroStructDoGetShipmentDataRequest $_allegroStructDoGetShipmentDataRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetShipmentData($_allegroStructDoGetShipmentDataRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetShipmentDataForRelatedItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetShipmentDataForRelatedItemsRequest $_allegroStructDoGetShipmentDataForRelatedItemsRequest
     * @return AllegroStructDoGetShipmentDataForRelatedItemsResponse
     */
    public function doGetShipmentDataForRelatedItems(AllegroStructDoGetShipmentDataForRelatedItemsRequest $_allegroStructDoGetShipmentDataForRelatedItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetShipmentDataForRelatedItems($_allegroStructDoGetShipmentDataForRelatedItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetShipmentPriceTypes
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetShipmentPriceTypesRequest $_allegroStructDoGetShipmentPriceTypesRequest
     * @return AllegroStructDoGetShipmentPriceTypesResponse
     */
    public function doGetShipmentPriceTypes(AllegroStructDoGetShipmentPriceTypesRequest $_allegroStructDoGetShipmentPriceTypesRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetShipmentPriceTypes($_allegroStructDoGetShipmentPriceTypesRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetShopCatsData
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetShopCatsDataRequest $_allegroStructDoGetShopCatsDataRequest
     * @return AllegroStructDoGetShopCatsDataResponse
     */
    public function doGetShopCatsData(AllegroStructDoGetShopCatsDataRequest $_allegroStructDoGetShopCatsDataRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetShopCatsData($_allegroStructDoGetShopCatsDataRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetShopsTags
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetShopsTagsRequest $_allegroStructDoGetShopsTagsRequest
     * @return AllegroStructDoGetShopsTagsResponse
     */
    public function doGetShopsTags(AllegroStructDoGetShopsTagsRequest $_allegroStructDoGetShopsTagsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetShopsTags($_allegroStructDoGetShopsTagsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSiteJournal
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSiteJournalRequest $_allegroStructDoGetSiteJournalRequest
     * @return AllegroStructDoGetSiteJournalResponse
     */
    public function doGetSiteJournal(AllegroStructDoGetSiteJournalRequest $_allegroStructDoGetSiteJournalRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSiteJournal($_allegroStructDoGetSiteJournalRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSiteJournalDeals
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSiteJournalDealsRequest $_allegroStructDoGetSiteJournalDealsRequest
     * @return AllegroStructDoGetSiteJournalDealsResponse
     */
    public function doGetSiteJournalDeals(AllegroStructDoGetSiteJournalDealsRequest $_allegroStructDoGetSiteJournalDealsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSiteJournalDeals($_allegroStructDoGetSiteJournalDealsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSiteJournalDealsInfo
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSiteJournalDealsInfoRequest $_allegroStructDoGetSiteJournalDealsInfoRequest
     * @return AllegroStructDoGetSiteJournalDealsInfoResponse
     */
    public function doGetSiteJournalDealsInfo(AllegroStructDoGetSiteJournalDealsInfoRequest $_allegroStructDoGetSiteJournalDealsInfoRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSiteJournalDealsInfo($_allegroStructDoGetSiteJournalDealsInfoRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSiteJournalInfo
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSiteJournalInfoRequest $_allegroStructDoGetSiteJournalInfoRequest
     * @return AllegroStructDoGetSiteJournalInfoResponse
     */
    public function doGetSiteJournalInfo(AllegroStructDoGetSiteJournalInfoRequest $_allegroStructDoGetSiteJournalInfoRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSiteJournalInfo($_allegroStructDoGetSiteJournalInfoRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSitesFlagInfo
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSitesFlagInfoRequest $_allegroStructDoGetSitesFlagInfoRequest
     * @return AllegroStructDoGetSitesFlagInfoResponse
     */
    public function doGetSitesFlagInfo(AllegroStructDoGetSitesFlagInfoRequest $_allegroStructDoGetSitesFlagInfoRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSitesFlagInfo($_allegroStructDoGetSitesFlagInfoRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSitesInfo
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSitesInfoRequest $_allegroStructDoGetSitesInfoRequest
     * @return AllegroStructDoGetSitesInfoResponse
     */
    public function doGetSitesInfo(AllegroStructDoGetSitesInfoRequest $_allegroStructDoGetSitesInfoRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSitesInfo($_allegroStructDoGetSitesInfoRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSpecialItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSpecialItemsRequest $_allegroStructDoGetSpecialItemsRequest
     * @return AllegroStructDoGetSpecialItemsResponse
     */
    public function doGetSpecialItems(AllegroStructDoGetSpecialItemsRequest $_allegroStructDoGetSpecialItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSpecialItems($_allegroStructDoGetSpecialItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetStatesInfo
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetStatesInfoRequest $_allegroStructDoGetStatesInfoRequest
     * @return AllegroStructDoGetStatesInfoResponse
     */
    public function doGetStatesInfo(AllegroStructDoGetStatesInfoRequest $_allegroStructDoGetStatesInfoRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetStatesInfo($_allegroStructDoGetStatesInfoRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetSystemTime
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetSystemTimeRequest $_allegroStructDoGetSystemTimeRequest
     * @return AllegroStructDoGetSystemTimeResponse
     */
    public function doGetSystemTime(AllegroStructDoGetSystemTimeRequest $_allegroStructDoGetSystemTimeRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetSystemTime($_allegroStructDoGetSystemTimeRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetTransactionsIDs
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetTransactionsIDsRequest $_allegroStructDoGetTransactionsIDsRequest
     * @return AllegroStructDoGetTransactionsIDsResponse
     */
    public function doGetTransactionsIDs(AllegroStructDoGetTransactionsIDsRequest $_allegroStructDoGetTransactionsIDsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetTransactionsIDs($_allegroStructDoGetTransactionsIDsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetUserID
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetUserIDRequest $_allegroStructDoGetUserIDRequest
     * @return AllegroStructDoGetUserIDResponse
     */
    public function doGetUserID(AllegroStructDoGetUserIDRequest $_allegroStructDoGetUserIDRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetUserID($_allegroStructDoGetUserIDRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetUserItems
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetUserItemsRequest $_allegroStructDoGetUserItemsRequest
     * @return AllegroStructDoGetUserItemsResponse
     */
    public function doGetUserItems(AllegroStructDoGetUserItemsRequest $_allegroStructDoGetUserItemsRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetUserItems($_allegroStructDoGetUserItemsRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetUserLicenceDate
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetUserLicenceDateRequest $_allegroStructDoGetUserLicenceDateRequest
     * @return AllegroStructDoGetUserLicenceDateResponse
     */
    public function doGetUserLicenceDate(AllegroStructDoGetUserLicenceDateRequest $_allegroStructDoGetUserLicenceDateRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetUserLicenceDate($_allegroStructDoGetUserLicenceDateRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetUserLogin
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetUserLoginRequest $_allegroStructDoGetUserLoginRequest
     * @return AllegroStructDoGetUserLoginResponse
     */
    public function doGetUserLogin(AllegroStructDoGetUserLoginRequest $_allegroStructDoGetUserLoginRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetUserLogin($_allegroStructDoGetUserLoginRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetWaitingFeedbacks
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetWaitingFeedbacksRequest $_allegroStructDoGetWaitingFeedbacksRequest
     * @return AllegroStructDoGetWaitingFeedbacksResponse
     */
    public function doGetWaitingFeedbacks(AllegroStructDoGetWaitingFeedbacksRequest $_allegroStructDoGetWaitingFeedbacksRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetWaitingFeedbacks($_allegroStructDoGetWaitingFeedbacksRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doGetWaitingFeedbacksCount
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoGetWaitingFeedbacksCountRequest $_allegroStructDoGetWaitingFeedbacksCountRequest
     * @return AllegroStructDoGetWaitingFeedbacksCountResponse
     */
    public function doGetWaitingFeedbacksCount(AllegroStructDoGetWaitingFeedbacksCountRequest $_allegroStructDoGetWaitingFeedbacksCountRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doGetWaitingFeedbacksCount($_allegroStructDoGetWaitingFeedbacksCountRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doInternalIStoreChange
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoInternalIStoreChangeRequest $_allegroStructDoInternalIStoreChangeRequest
     * @return AllegroStructDoInternalIStoreChangeResponse
     */
    public function doInternalIStoreChange(AllegroStructDoInternalIStoreChangeRequest $_allegroStructDoInternalIStoreChangeRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doInternalIStoreChange($_allegroStructDoInternalIStoreChangeRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doLogin
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoLoginRequest $_allegroStructDoLoginRequest
     * @return AllegroStructDoLoginResponse
     */
    public function doLogin(AllegroStructDoLoginRequest $_allegroStructDoLoginRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doLogin($_allegroStructDoLoginRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doLoginEnc
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoLoginEncRequest $_allegroStructDoLoginEncRequest
     * @return AllegroStructDoLoginEncResponse
     */
    public function doLoginEnc(AllegroStructDoLoginEncRequest $_allegroStructDoLoginEncRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doLoginEnc($_allegroStructDoLoginEncRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doLoginWithAccessToken
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoLoginWithAccessTokenRequest $_allegroStructDoLoginWithAccessTokenRequest
     * @return AllegroStructDoLoginWithAccessTokenResponse
     */
    public function doLoginWithAccessToken(AllegroStructDoLoginWithAccessTokenRequest $_allegroStructDoLoginWithAccessTokenRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doLoginWithAccessToken($_allegroStructDoLoginWithAccessTokenRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doMyAccount2
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoMyAccount2Request $_allegroStructDoMyAccount2Request
     * @return AllegroStructDoMyAccount2Response
     */
    public function doMyAccount2(AllegroStructDoMyAccount2Request $_allegroStructDoMyAccount2Request)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doMyAccount2($_allegroStructDoMyAccount2Request));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doMyAccountItemsCount
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoMyAccountItemsCountRequest $_allegroStructDoMyAccountItemsCountRequest
     * @return AllegroStructDoMyAccountItemsCountResponse
     */
    public function doMyAccountItemsCount(AllegroStructDoMyAccountItemsCountRequest $_allegroStructDoMyAccountItemsCountRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doMyAccountItemsCount($_allegroStructDoMyAccountItemsCountRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doMyBilling
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoMyBillingRequest $_allegroStructDoMyBillingRequest
     * @return AllegroStructDoMyBillingResponse
     */
    public function doMyBilling(AllegroStructDoMyBillingRequest $_allegroStructDoMyBillingRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doMyBilling($_allegroStructDoMyBillingRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doMyBillingItem
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoMyBillingItemRequest $_allegroStructDoMyBillingItemRequest
     * @return AllegroStructDoMyBillingItemResponse
     */
    public function doMyBillingItem(AllegroStructDoMyBillingItemRequest $_allegroStructDoMyBillingItemRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doMyBillingItem($_allegroStructDoMyBillingItemRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doMyContact
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoMyContactRequest $_allegroStructDoMyContactRequest
     * @return AllegroStructDoMyContactResponse
     */
    public function doMyContact(AllegroStructDoMyContactRequest $_allegroStructDoMyContactRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doMyContact($_allegroStructDoMyContactRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doMyFeedback2
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoMyFeedback2Request $_allegroStructDoMyFeedback2Request
     * @return AllegroStructDoMyFeedback2Response
     */
    public function doMyFeedback2(AllegroStructDoMyFeedback2Request $_allegroStructDoMyFeedback2Request)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doMyFeedback2($_allegroStructDoMyFeedback2Request));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doMyFeedback2Limit
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoMyFeedback2LimitRequest $_allegroStructDoMyFeedback2LimitRequest
     * @return AllegroStructDoMyFeedback2LimitResponse
     */
    public function doMyFeedback2Limit(AllegroStructDoMyFeedback2LimitRequest $_allegroStructDoMyFeedback2LimitRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doMyFeedback2Limit($_allegroStructDoMyFeedback2LimitRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doNewAuctionExt
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoNewAuctionExtRequest $_allegroStructDoNewAuctionExtRequest
     * @return AllegroStructDoNewAuctionExtResponse
     */
    public function doNewAuctionExt(AllegroStructDoNewAuctionExtRequest $_allegroStructDoNewAuctionExtRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doNewAuctionExt($_allegroStructDoNewAuctionExtRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doQueryAllSysStatus
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoQueryAllSysStatusRequest $_allegroStructDoQueryAllSysStatusRequest
     * @return AllegroStructDoQueryAllSysStatusResponse
     */
    public function doQueryAllSysStatus(AllegroStructDoQueryAllSysStatusRequest $_allegroStructDoQueryAllSysStatusRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doQueryAllSysStatus($_allegroStructDoQueryAllSysStatusRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doQuerySysStatus
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoQuerySysStatusRequest $_allegroStructDoQuerySysStatusRequest
     * @return AllegroStructDoQuerySysStatusResponse
     */
    public function doQuerySysStatus(AllegroStructDoQuerySysStatusRequest $_allegroStructDoQuerySysStatusRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doQuerySysStatus($_allegroStructDoQuerySysStatusRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doRemoveFromBlackList
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoRemoveFromBlackListRequest $_allegroStructDoRemoveFromBlackListRequest
     * @return AllegroStructDoRemoveFromBlackListResponse
     */
    public function doRemoveFromBlackList(AllegroStructDoRemoveFromBlackListRequest $_allegroStructDoRemoveFromBlackListRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doRemoveFromBlackList($_allegroStructDoRemoveFromBlackListRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doRemoveFromWatchList
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoRemoveFromWatchListRequest $_allegroStructDoRemoveFromWatchListRequest
     * @return AllegroStructDoRemoveFromWatchListResponse
     */
    public function doRemoveFromWatchList(AllegroStructDoRemoveFromWatchListRequest $_allegroStructDoRemoveFromWatchListRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doRemoveFromWatchList($_allegroStructDoRemoveFromWatchListRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doRemoveItemTemplates
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoRemoveItemTemplatesRequest $_allegroStructDoRemoveItemTemplatesRequest
     * @return AllegroStructDoRemoveItemTemplatesResponse
     */
    public function doRemoveItemTemplates(AllegroStructDoRemoveItemTemplatesRequest $_allegroStructDoRemoveItemTemplatesRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doRemoveItemTemplates($_allegroStructDoRemoveItemTemplatesRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doRequestCancelBid
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoRequestCancelBidRequest $_allegroStructDoRequestCancelBidRequest
     * @return AllegroStructDoRequestCancelBidResponse
     */
    public function doRequestCancelBid(AllegroStructDoRequestCancelBidRequest $_allegroStructDoRequestCancelBidRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doRequestCancelBid($_allegroStructDoRequestCancelBidRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doRequestPayout
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoRequestPayoutRequest $_allegroStructDoRequestPayoutRequest
     * @return AllegroStructDoRequestPayoutResponse
     */
    public function doRequestPayout(AllegroStructDoRequestPayoutRequest $_allegroStructDoRequestPayoutRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doRequestPayout($_allegroStructDoRequestPayoutRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doRequestSurcharge
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoRequestSurchargeRequest $_allegroStructDoRequestSurchargeRequest
     * @return AllegroStructDoRequestSurchargeResponse
     */
    public function doRequestSurcharge(AllegroStructDoRequestSurchargeRequest $_allegroStructDoRequestSurchargeRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doRequestSurcharge($_allegroStructDoRequestSurchargeRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doSearch
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoSearchRequest $_allegroStructDoSearchRequest
     * @return AllegroStructDoSearchResponse
     */
    public function doSearch(AllegroStructDoSearchRequest $_allegroStructDoSearchRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doSearch($_allegroStructDoSearchRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doSellSomeAgain
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoSellSomeAgainRequest $_allegroStructDoSellSomeAgainRequest
     * @return AllegroStructDoSellSomeAgainResponse
     */
    public function doSellSomeAgain(AllegroStructDoSellSomeAgainRequest $_allegroStructDoSellSomeAgainRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doSellSomeAgain($_allegroStructDoSellSomeAgainRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doSellSomeAgainInShop
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoSellSomeAgainInShopRequest $_allegroStructDoSellSomeAgainInShopRequest
     * @return AllegroStructDoSellSomeAgainInShopResponse
     */
    public function doSellSomeAgainInShop(AllegroStructDoSellSomeAgainInShopRequest $_allegroStructDoSellSomeAgainInShopRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doSellSomeAgainInShop($_allegroStructDoSellSomeAgainInShopRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doSendEmailToUser
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoSendEmailToUserRequest $_allegroStructDoSendEmailToUserRequest
     * @return AllegroStructDoSendEmailToUserResponse
     */
    public function doSendEmailToUser(AllegroStructDoSendEmailToUserRequest $_allegroStructDoSendEmailToUserRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doSendEmailToUser($_allegroStructDoSendEmailToUserRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doSendPostBuyForm
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoSendPostBuyFormRequest $_allegroStructDoSendPostBuyFormRequest
     * @return AllegroStructDoSendPostBuyFormResponse
     */
    public function doSendPostBuyForm(AllegroStructDoSendPostBuyFormRequest $_allegroStructDoSendPostBuyFormRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doSendPostBuyForm($_allegroStructDoSendPostBuyFormRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doSendRefundForm
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoSendRefundFormRequest $_allegroStructDoSendRefundFormRequest
     * @return AllegroStructDoSendRefundFormResponse
     */
    public function doSendRefundForm(AllegroStructDoSendRefundFormRequest $_allegroStructDoSendRefundFormRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doSendRefundForm($_allegroStructDoSendRefundFormRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doSetFreeDeliveryAmount
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoSetFreeDeliveryAmountRequest $_allegroStructDoSetFreeDeliveryAmountRequest
     * @return AllegroStructDoSetFreeDeliveryAmountResponse
     */
    public function doSetFreeDeliveryAmount(AllegroStructDoSetFreeDeliveryAmountRequest $_allegroStructDoSetFreeDeliveryAmountRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doSetFreeDeliveryAmount($_allegroStructDoSetFreeDeliveryAmountRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doSetShipmentPriceType
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoSetShipmentPriceTypeRequest $_allegroStructDoSetShipmentPriceTypeRequest
     * @return AllegroStructDoSetShipmentPriceTypeResponse
     */
    public function doSetShipmentPriceType(AllegroStructDoSetShipmentPriceTypeRequest $_allegroStructDoSetShipmentPriceTypeRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doSetShipmentPriceType($_allegroStructDoSetShipmentPriceTypeRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doSetUserLicenceDate
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoSetUserLicenceDateRequest $_allegroStructDoSetUserLicenceDateRequest
     * @return AllegroStructDoSetUserLicenceDateResponse
     */
    public function doSetUserLicenceDate(AllegroStructDoSetUserLicenceDateRequest $_allegroStructDoSetUserLicenceDateRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doSetUserLicenceDate($_allegroStructDoSetUserLicenceDateRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doShowCat
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoShowCatRequest $_allegroStructDoShowCatRequest
     * @return AllegroStructDoShowCatResponse
     */
    public function doShowCat(AllegroStructDoShowCatRequest $_allegroStructDoShowCatRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doShowCat($_allegroStructDoShowCatRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doShowItemInfoExt
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoShowItemInfoExtRequest $_allegroStructDoShowItemInfoExtRequest
     * @return AllegroStructDoShowItemInfoExtResponse
     */
    public function doShowItemInfoExt(AllegroStructDoShowItemInfoExtRequest $_allegroStructDoShowItemInfoExtRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doShowItemInfoExt($_allegroStructDoShowItemInfoExtRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doShowUser
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoShowUserRequest $_allegroStructDoShowUserRequest
     * @return AllegroStructDoShowUserResponse
     */
    public function doShowUser(AllegroStructDoShowUserRequest $_allegroStructDoShowUserRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doShowUser($_allegroStructDoShowUserRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doShowUserPage
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoShowUserPageRequest $_allegroStructDoShowUserPageRequest
     * @return AllegroStructDoShowUserPageResponse
     */
    public function doShowUserPage(AllegroStructDoShowUserPageRequest $_allegroStructDoShowUserPageRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doShowUserPage($_allegroStructDoShowUserPageRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doVerifyItem
     * @uses AllegroWsdlClass::getSoapClient()
     * @uses AllegroWsdlClass::setResult()
     * @uses AllegroWsdlClass::saveLastError()
     * @param AllegroStructDoVerifyItemRequest $_allegroStructDoVerifyItemRequest
     * @return AllegroStructDoVerifyItemResponse
     */
    public function doVerifyItem(AllegroStructDoVerifyItemRequest $_allegroStructDoVerifyItemRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doVerifyItem($_allegroStructDoVerifyItemRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see AllegroWsdlClass::getResult()
     * @return AllegroStructDoAddDescToItemsResponse|AllegroStructDoAddPackageInfoToPostBuyFormResponse|AllegroStructDoAddToBlackListResponse|AllegroStructDoAddToWatchListResponse|AllegroStructDoBidItemResponse|AllegroStructDoCancelBidItemResponse|AllegroStructDoCancelRefundFormResponse|AllegroStructDoCancelRefundWarningResponse|AllegroStructDoCancelTransactionResponse|AllegroStructDoChangeItemFieldsResponse|AllegroStructDoChangePriceItemResponse|AllegroStructDoChangeQuantityItemResponse|AllegroStructDoCheckItemDescriptionResponse|AllegroStructDoCheckNewAuctionExtResponse|AllegroStructDoCreateItemTemplateResponse|AllegroStructDoFeedbackManyResponse|AllegroStructDoFeedbackResponse|AllegroStructDoFinishItemResponse|AllegroStructDoFinishItemsResponse|AllegroStructDoGetAdminUserLicenceDateResponse|AllegroStructDoGetArchiveRefundsListResponse|AllegroStructDoGetBidItem2Response|AllegroStructDoGetBlackListUsersResponse|AllegroStructDoGetCategoryPathResponse|AllegroStructDoGetCatsDataCountResponse|AllegroStructDoGetCatsDataLimitResponse|AllegroStructDoGetCatsDataResponse|AllegroStructDoGetCountriesResponse|AllegroStructDoGetDealsResponse|AllegroStructDoGetFavouriteCategoriesResponse|AllegroStructDoGetFavouriteSellersResponse|AllegroStructDoGetFeedbackResponse|AllegroStructDoGetFilledPostBuyFormsResponse|AllegroStructDoGetFreeDeliveryAmountResponse|AllegroStructDoGetItemFieldsResponse|AllegroStructDoGetItemsImagesResponse|AllegroStructDoGetItemsInfoResponse|AllegroStructDoGetItemsListResponse|AllegroStructDoGetItemTemplatesResponse|AllegroStructDoGetMessageToBuyerResponse|AllegroStructDoGetMyAddressesResponse|AllegroStructDoGetMyBidItemsResponse|AllegroStructDoGetMyCurrentShipmentPriceTypeResponse|AllegroStructDoGetMyDataResponse|AllegroStructDoGetMyFutureItemsResponse|AllegroStructDoGetMyIncomingPaymentsRefundsResponse|AllegroStructDoGetMyIncomingPaymentsResponse|AllegroStructDoGetMyNotSoldItemsResponse|AllegroStructDoGetMyNotWonItemsResponse|AllegroStructDoGetMyPaymentsInfoResponse|AllegroStructDoGetMyPaymentsRefundsResponse|AllegroStructDoGetMyPaymentsResponse|AllegroStructDoGetMyPayoutsResponse|AllegroStructDoGetMySellItemsResponse|AllegroStructDoGetMySellRatingResponse|AllegroStructDoGetMySoldItemsResponse|AllegroStructDoGetMyWatchedItemsResponse|AllegroStructDoGetMyWatchItemsResponse|AllegroStructDoGetMyWonItemsResponse|AllegroStructDoGetPaymentDataResponse|AllegroStructDoGetPaymentMethodsResponse|AllegroStructDoGetPostBuyDataResponse|AllegroStructDoGetPostBuyFormsDataForBuyersResponse|AllegroStructDoGetPostBuyFormsDataForSellersResponse|AllegroStructDoGetPostBuyFormsIdsResponse|AllegroStructDoGetPostBuyItemInfoResponse|AllegroStructDoGetRefundsDealsResponse|AllegroStructDoGetRefundsListResponse|AllegroStructDoGetRefundsReasonsResponse|AllegroStructDoGetRelatedItemsResponse|AllegroStructDoGetSellFormAttribsResponse|AllegroStructDoGetSellFormFieldsExtLimitResponse|AllegroStructDoGetSellFormFieldsExtResponse|AllegroStructDoGetSellFormFieldsForCategoryResponse|AllegroStructDoGetSellFormFieldsLimitResponse|AllegroStructDoGetSellFormFieldsResponse|AllegroStructDoGetSellRatingReasonsResponse|AllegroStructDoGetServiceInfoCategoriesResponse|AllegroStructDoGetServiceInfoResponse|AllegroStructDoGetServiceTemplatesResponse|AllegroStructDoGetSessionHandleForWidgetResponse|AllegroStructDoGetShipmentDataForRelatedItemsResponse|AllegroStructDoGetShipmentDataResponse|AllegroStructDoGetShipmentPriceTypesResponse|AllegroStructDoGetShopCatsDataResponse|AllegroStructDoGetShopsTagsResponse|AllegroStructDoGetSiteJournalDealsInfoResponse|AllegroStructDoGetSiteJournalDealsResponse|AllegroStructDoGetSiteJournalInfoResponse|AllegroStructDoGetSiteJournalResponse|AllegroStructDoGetSitesFlagInfoResponse|AllegroStructDoGetSitesInfoResponse|AllegroStructDoGetSpecialItemsResponse|AllegroStructDoGetStatesInfoResponse|AllegroStructDoGetSystemTimeResponse|AllegroStructDoGetTransactionsIDsResponse|AllegroStructDoGetUserIDResponse|AllegroStructDoGetUserItemsResponse|AllegroStructDoGetUserLicenceDateResponse|AllegroStructDoGetUserLoginResponse|AllegroStructDoGetWaitingFeedbacksCountResponse|AllegroStructDoGetWaitingFeedbacksResponse|AllegroStructDoInternalIStoreChangeResponse|AllegroStructDoLoginEncResponse|AllegroStructDoLoginResponse|AllegroStructDoLoginWithAccessTokenResponse|AllegroStructDoMyAccount2Response|AllegroStructDoMyAccountItemsCountResponse|AllegroStructDoMyBillingItemResponse|AllegroStructDoMyBillingResponse|AllegroStructDoMyContactResponse|AllegroStructDoMyFeedback2LimitResponse|AllegroStructDoMyFeedback2Response|AllegroStructDoNewAuctionExtResponse|AllegroStructDoQueryAllSysStatusResponse|AllegroStructDoQuerySysStatusResponse|AllegroStructDoRemoveFromBlackListResponse|AllegroStructDoRemoveFromWatchListResponse|AllegroStructDoRemoveItemTemplatesResponse|AllegroStructDoRequestCancelBidResponse|AllegroStructDoRequestPayoutResponse|AllegroStructDoRequestSurchargeResponse|AllegroStructDoSearchResponse|AllegroStructDoSellSomeAgainInShopResponse|AllegroStructDoSellSomeAgainResponse|AllegroStructDoSendEmailToUserResponse|AllegroStructDoSendPostBuyFormResponse|AllegroStructDoSendRefundFormResponse|AllegroStructDoSetFreeDeliveryAmountResponse|AllegroStructDoSetShipmentPriceTypeResponse|AllegroStructDoSetUserLicenceDateResponse|AllegroStructDoShowCatResponse|AllegroStructDoShowItemInfoExtResponse|AllegroStructDoShowUserPageResponse|AllegroStructDoShowUserResponse|AllegroStructDoVerifyItemResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
