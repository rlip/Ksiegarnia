<?php
namespace Admin\Controller;

use Admin\Operation\Auction;
use ExtJs\Controller\ControllerAbstractExtJs;

class AuctionController extends ControllerAbstractExtJs
{

    public function __construct()
    {
        parent:: __construct(new Auction());
    }

    public function getAuctionScenarioListAction()
    {
        return $this->_getOperation()->getAuctionScenarioList();
    }

    public function updateAuctionScenarioListAction()
    {
        return $this->_getOperation()->updateAuctionScenarioList();
    }

}
