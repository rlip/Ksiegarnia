<?php
/**
 * Test with Allegro for 'https://webapi.allegro.pl/service.php?wsdl'
 * @package Allegro
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/AllegroAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a AllegroWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[AllegroWsdlClass::WSDL_URL] = 'https://webapi.allegro.pl/service.php?wsdl';
 * $wsdl[AllegroWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[AllegroWsdlClass::WSDL_TRACE] = true;
 * $wsdl[AllegroWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[AllegroWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new AllegroWsdlClass($wsdl);
 */
/**
 * Examples
 */


/******************************
 * Example for AllegroServiceDo
 */
$allegroServiceDo = new AllegroServiceDo();
// sample call for AllegroServiceDo::doAddDescToItems()
if($allegroServiceDo->doAddDescToItems(new AllegroStructDoAddDescToItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doAddPackageInfoToPostBuyForm()
if($allegroServiceDo->doAddPackageInfoToPostBuyForm(new AllegroStructDoAddPackageInfoToPostBuyFormRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doAddToBlackList()
if($allegroServiceDo->doAddToBlackList(new AllegroStructDoAddToBlackListRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doAddToWatchList()
if($allegroServiceDo->doAddToWatchList(new AllegroStructDoAddToWatchListRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doBidItem()
if($allegroServiceDo->doBidItem(new AllegroStructDoBidItemRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doCancelBidItem()
if($allegroServiceDo->doCancelBidItem(new AllegroStructDoCancelBidItemRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doCancelRefundForm()
if($allegroServiceDo->doCancelRefundForm(new AllegroStructDoCancelRefundFormRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doCancelRefundWarning()
if($allegroServiceDo->doCancelRefundWarning(new AllegroStructDoCancelRefundWarningRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doCancelTransaction()
if($allegroServiceDo->doCancelTransaction(new AllegroStructDoCancelTransactionRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doChangeItemFields()
if($allegroServiceDo->doChangeItemFields(new AllegroStructDoChangeItemFieldsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doChangePriceItem()
if($allegroServiceDo->doChangePriceItem(new AllegroStructDoChangePriceItemRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doChangeQuantityItem()
if($allegroServiceDo->doChangeQuantityItem(new AllegroStructDoChangeQuantityItemRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doCheckItemDescription()
if($allegroServiceDo->doCheckItemDescription(new AllegroStructDoCheckItemDescriptionRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doCheckNewAuctionExt()
if($allegroServiceDo->doCheckNewAuctionExt(new AllegroStructDoCheckNewAuctionExtRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doCreateItemTemplate()
if($allegroServiceDo->doCreateItemTemplate(new AllegroStructDoCreateItemTemplateRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doFeedback()
if($allegroServiceDo->doFeedback(new AllegroStructDoFeedbackRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doFeedbackMany()
if($allegroServiceDo->doFeedbackMany(new AllegroStructDoFeedbackManyRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doFinishItem()
if($allegroServiceDo->doFinishItem(new AllegroStructDoFinishItemRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doFinishItems()
if($allegroServiceDo->doFinishItems(new AllegroStructDoFinishItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetAdminUserLicenceDate()
if($allegroServiceDo->doGetAdminUserLicenceDate(new AllegroStructDoGetAdminUserLicenceDateRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetArchiveRefundsList()
if($allegroServiceDo->doGetArchiveRefundsList(new AllegroStructDoGetArchiveRefundsListRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetBidItem2()
if($allegroServiceDo->doGetBidItem2(new AllegroStructDoGetBidItem2Request(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetBlackListUsers()
if($allegroServiceDo->doGetBlackListUsers(new AllegroStructDoGetBlackListUsersRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetCategoryPath()
if($allegroServiceDo->doGetCategoryPath(new AllegroStructDoGetCategoryPathRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetCatsData()
if($allegroServiceDo->doGetCatsData(new AllegroStructDoGetCatsDataRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetCatsDataCount()
if($allegroServiceDo->doGetCatsDataCount(new AllegroStructDoGetCatsDataCountRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetCatsDataLimit()
if($allegroServiceDo->doGetCatsDataLimit(new AllegroStructDoGetCatsDataLimitRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetCountries()
if($allegroServiceDo->doGetCountries(new AllegroStructDoGetCountriesRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetDeals()
if($allegroServiceDo->doGetDeals(new AllegroStructDoGetDealsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetFavouriteCategories()
if($allegroServiceDo->doGetFavouriteCategories(new AllegroStructDoGetFavouriteCategoriesRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetFavouriteSellers()
if($allegroServiceDo->doGetFavouriteSellers(new AllegroStructDoGetFavouriteSellersRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetFeedback()
if($allegroServiceDo->doGetFeedback(new AllegroStructDoGetFeedbackRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetFilledPostBuyForms()
if($allegroServiceDo->doGetFilledPostBuyForms(new AllegroStructDoGetFilledPostBuyFormsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetFreeDeliveryAmount()
if($allegroServiceDo->doGetFreeDeliveryAmount(new AllegroStructDoGetFreeDeliveryAmountRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetItemFields()
if($allegroServiceDo->doGetItemFields(new AllegroStructDoGetItemFieldsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetItemTemplates()
if($allegroServiceDo->doGetItemTemplates(new AllegroStructDoGetItemTemplatesRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetItemsImages()
if($allegroServiceDo->doGetItemsImages(new AllegroStructDoGetItemsImagesRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetItemsInfo()
if($allegroServiceDo->doGetItemsInfo(new AllegroStructDoGetItemsInfoRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetItemsList()
if($allegroServiceDo->doGetItemsList(new AllegroStructDoGetItemsListRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMessageToBuyer()
if($allegroServiceDo->doGetMessageToBuyer(new AllegroStructDoGetMessageToBuyerRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyAddresses()
if($allegroServiceDo->doGetMyAddresses(new AllegroStructDoGetMyAddressesRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyBidItems()
if($allegroServiceDo->doGetMyBidItems(new AllegroStructDoGetMyBidItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyCurrentShipmentPriceType()
if($allegroServiceDo->doGetMyCurrentShipmentPriceType(new AllegroStructDoGetMyCurrentShipmentPriceTypeRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyData()
if($allegroServiceDo->doGetMyData(new AllegroStructDoGetMyDataRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyFutureItems()
if($allegroServiceDo->doGetMyFutureItems(new AllegroStructDoGetMyFutureItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyIncomingPayments()
if($allegroServiceDo->doGetMyIncomingPayments(new AllegroStructDoGetMyIncomingPaymentsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyIncomingPaymentsRefunds()
if($allegroServiceDo->doGetMyIncomingPaymentsRefunds(new AllegroStructDoGetMyIncomingPaymentsRefundsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyNotSoldItems()
if($allegroServiceDo->doGetMyNotSoldItems(new AllegroStructDoGetMyNotSoldItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyNotWonItems()
if($allegroServiceDo->doGetMyNotWonItems(new AllegroStructDoGetMyNotWonItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyPayments()
if($allegroServiceDo->doGetMyPayments(new AllegroStructDoGetMyPaymentsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyPaymentsInfo()
if($allegroServiceDo->doGetMyPaymentsInfo(new AllegroStructDoGetMyPaymentsInfoRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyPaymentsRefunds()
if($allegroServiceDo->doGetMyPaymentsRefunds(new AllegroStructDoGetMyPaymentsRefundsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyPayouts()
if($allegroServiceDo->doGetMyPayouts(new AllegroStructDoGetMyPayoutsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMySellItems()
if($allegroServiceDo->doGetMySellItems(new AllegroStructDoGetMySellItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMySellRating()
if($allegroServiceDo->doGetMySellRating(new AllegroStructDoGetMySellRatingRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMySoldItems()
if($allegroServiceDo->doGetMySoldItems(new AllegroStructDoGetMySoldItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyWatchItems()
if($allegroServiceDo->doGetMyWatchItems(new AllegroStructDoGetMyWatchItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyWatchedItems()
if($allegroServiceDo->doGetMyWatchedItems(new AllegroStructDoGetMyWatchedItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetMyWonItems()
if($allegroServiceDo->doGetMyWonItems(new AllegroStructDoGetMyWonItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetPaymentData()
if($allegroServiceDo->doGetPaymentData(new AllegroStructDoGetPaymentDataRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetPaymentMethods()
if($allegroServiceDo->doGetPaymentMethods(new AllegroStructDoGetPaymentMethodsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetPostBuyData()
if($allegroServiceDo->doGetPostBuyData(new AllegroStructDoGetPostBuyDataRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetPostBuyFormsDataForBuyers()
if($allegroServiceDo->doGetPostBuyFormsDataForBuyers(new AllegroStructDoGetPostBuyFormsDataForBuyersRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetPostBuyFormsDataForSellers()
if($allegroServiceDo->doGetPostBuyFormsDataForSellers(new AllegroStructDoGetPostBuyFormsDataForSellersRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetPostBuyFormsIds()
if($allegroServiceDo->doGetPostBuyFormsIds(new AllegroStructDoGetPostBuyFormsIdsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetPostBuyItemInfo()
if($allegroServiceDo->doGetPostBuyItemInfo(new AllegroStructDoGetPostBuyItemInfoRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetRefundsDeals()
if($allegroServiceDo->doGetRefundsDeals(new AllegroStructDoGetRefundsDealsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetRefundsList()
if($allegroServiceDo->doGetRefundsList(new AllegroStructDoGetRefundsListRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetRefundsReasons()
if($allegroServiceDo->doGetRefundsReasons(new AllegroStructDoGetRefundsReasonsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetRelatedItems()
if($allegroServiceDo->doGetRelatedItems(new AllegroStructDoGetRelatedItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSellFormAttribs()
if($allegroServiceDo->doGetSellFormAttribs(new AllegroStructDoGetSellFormAttribsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSellFormFields()
if($allegroServiceDo->doGetSellFormFields(new AllegroStructDoGetSellFormFieldsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSellFormFieldsExt()
if($allegroServiceDo->doGetSellFormFieldsExt(new AllegroStructDoGetSellFormFieldsExtRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSellFormFieldsExtLimit()
if($allegroServiceDo->doGetSellFormFieldsExtLimit(new AllegroStructDoGetSellFormFieldsExtLimitRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSellFormFieldsForCategory()
if($allegroServiceDo->doGetSellFormFieldsForCategory(new AllegroStructDoGetSellFormFieldsForCategoryRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSellFormFieldsLimit()
if($allegroServiceDo->doGetSellFormFieldsLimit(new AllegroStructDoGetSellFormFieldsLimitRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSellRatingReasons()
if($allegroServiceDo->doGetSellRatingReasons(new AllegroStructDoGetSellRatingReasonsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetServiceInfo()
if($allegroServiceDo->doGetServiceInfo(new AllegroStructDoGetServiceInfoRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetServiceInfoCategories()
if($allegroServiceDo->doGetServiceInfoCategories(new AllegroStructDoGetServiceInfoCategoriesRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetServiceTemplates()
if($allegroServiceDo->doGetServiceTemplates(new AllegroStructDoGetServiceTemplatesRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSessionHandleForWidget()
if($allegroServiceDo->doGetSessionHandleForWidget(new AllegroStructDoGetSessionHandleForWidgetRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetShipmentData()
if($allegroServiceDo->doGetShipmentData(new AllegroStructDoGetShipmentDataRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetShipmentDataForRelatedItems()
if($allegroServiceDo->doGetShipmentDataForRelatedItems(new AllegroStructDoGetShipmentDataForRelatedItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetShipmentPriceTypes()
if($allegroServiceDo->doGetShipmentPriceTypes(new AllegroStructDoGetShipmentPriceTypesRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetShopCatsData()
if($allegroServiceDo->doGetShopCatsData(new AllegroStructDoGetShopCatsDataRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetShopsTags()
if($allegroServiceDo->doGetShopsTags(new AllegroStructDoGetShopsTagsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSiteJournal()
if($allegroServiceDo->doGetSiteJournal(new AllegroStructDoGetSiteJournalRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSiteJournalDeals()
if($allegroServiceDo->doGetSiteJournalDeals(new AllegroStructDoGetSiteJournalDealsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSiteJournalDealsInfo()
if($allegroServiceDo->doGetSiteJournalDealsInfo(new AllegroStructDoGetSiteJournalDealsInfoRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSiteJournalInfo()
if($allegroServiceDo->doGetSiteJournalInfo(new AllegroStructDoGetSiteJournalInfoRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSitesFlagInfo()
if($allegroServiceDo->doGetSitesFlagInfo(new AllegroStructDoGetSitesFlagInfoRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSitesInfo()
if($allegroServiceDo->doGetSitesInfo(new AllegroStructDoGetSitesInfoRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSpecialItems()
if($allegroServiceDo->doGetSpecialItems(new AllegroStructDoGetSpecialItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetStatesInfo()
if($allegroServiceDo->doGetStatesInfo(new AllegroStructDoGetStatesInfoRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetSystemTime()
if($allegroServiceDo->doGetSystemTime(new AllegroStructDoGetSystemTimeRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetTransactionsIDs()
if($allegroServiceDo->doGetTransactionsIDs(new AllegroStructDoGetTransactionsIDsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetUserID()
if($allegroServiceDo->doGetUserID(new AllegroStructDoGetUserIDRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetUserItems()
if($allegroServiceDo->doGetUserItems(new AllegroStructDoGetUserItemsRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetUserLicenceDate()
if($allegroServiceDo->doGetUserLicenceDate(new AllegroStructDoGetUserLicenceDateRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetUserLogin()
if($allegroServiceDo->doGetUserLogin(new AllegroStructDoGetUserLoginRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetWaitingFeedbacks()
if($allegroServiceDo->doGetWaitingFeedbacks(new AllegroStructDoGetWaitingFeedbacksRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doGetWaitingFeedbacksCount()
if($allegroServiceDo->doGetWaitingFeedbacksCount(new AllegroStructDoGetWaitingFeedbacksCountRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doInternalIStoreChange()
if($allegroServiceDo->doInternalIStoreChange(new AllegroStructDoInternalIStoreChangeRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doLogin()
if($allegroServiceDo->doLogin(new AllegroStructDoLoginRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doLoginEnc()
if($allegroServiceDo->doLoginEnc(new AllegroStructDoLoginEncRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doLoginWithAccessToken()
if($allegroServiceDo->doLoginWithAccessToken(new AllegroStructDoLoginWithAccessTokenRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doMyAccount2()
if($allegroServiceDo->doMyAccount2(new AllegroStructDoMyAccount2Request(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doMyAccountItemsCount()
if($allegroServiceDo->doMyAccountItemsCount(new AllegroStructDoMyAccountItemsCountRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doMyBilling()
if($allegroServiceDo->doMyBilling(new AllegroStructDoMyBillingRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doMyBillingItem()
if($allegroServiceDo->doMyBillingItem(new AllegroStructDoMyBillingItemRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doMyContact()
if($allegroServiceDo->doMyContact(new AllegroStructDoMyContactRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doMyFeedback2()
if($allegroServiceDo->doMyFeedback2(new AllegroStructDoMyFeedback2Request(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doMyFeedback2Limit()
if($allegroServiceDo->doMyFeedback2Limit(new AllegroStructDoMyFeedback2LimitRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doNewAuctionExt()
if($allegroServiceDo->doNewAuctionExt(new AllegroStructDoNewAuctionExtRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doQueryAllSysStatus()
if($allegroServiceDo->doQueryAllSysStatus(new AllegroStructDoQueryAllSysStatusRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doQuerySysStatus()
if($allegroServiceDo->doQuerySysStatus(new AllegroStructDoQuerySysStatusRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doRemoveFromBlackList()
if($allegroServiceDo->doRemoveFromBlackList(new AllegroStructDoRemoveFromBlackListRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doRemoveFromWatchList()
if($allegroServiceDo->doRemoveFromWatchList(new AllegroStructDoRemoveFromWatchListRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doRemoveItemTemplates()
if($allegroServiceDo->doRemoveItemTemplates(new AllegroStructDoRemoveItemTemplatesRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doRequestCancelBid()
if($allegroServiceDo->doRequestCancelBid(new AllegroStructDoRequestCancelBidRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doRequestPayout()
if($allegroServiceDo->doRequestPayout(new AllegroStructDoRequestPayoutRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doRequestSurcharge()
if($allegroServiceDo->doRequestSurcharge(new AllegroStructDoRequestSurchargeRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doSearch()
if($allegroServiceDo->doSearch(new AllegroStructDoSearchRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doSellSomeAgain()
if($allegroServiceDo->doSellSomeAgain(new AllegroStructDoSellSomeAgainRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doSellSomeAgainInShop()
if($allegroServiceDo->doSellSomeAgainInShop(new AllegroStructDoSellSomeAgainInShopRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doSendEmailToUser()
if($allegroServiceDo->doSendEmailToUser(new AllegroStructDoSendEmailToUserRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doSendPostBuyForm()
if($allegroServiceDo->doSendPostBuyForm(new AllegroStructDoSendPostBuyFormRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doSendRefundForm()
if($allegroServiceDo->doSendRefundForm(new AllegroStructDoSendRefundFormRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doSetFreeDeliveryAmount()
if($allegroServiceDo->doSetFreeDeliveryAmount(new AllegroStructDoSetFreeDeliveryAmountRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doSetShipmentPriceType()
if($allegroServiceDo->doSetShipmentPriceType(new AllegroStructDoSetShipmentPriceTypeRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doSetUserLicenceDate()
if($allegroServiceDo->doSetUserLicenceDate(new AllegroStructDoSetUserLicenceDateRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doShowCat()
if($allegroServiceDo->doShowCat(new AllegroStructDoShowCatRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doShowItemInfoExt()
if($allegroServiceDo->doShowItemInfoExt(new AllegroStructDoShowItemInfoExtRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doShowUser()
if($allegroServiceDo->doShowUser(new AllegroStructDoShowUserRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doShowUserPage()
if($allegroServiceDo->doShowUserPage(new AllegroStructDoShowUserPageRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
// sample call for AllegroServiceDo::doVerifyItem()
if($allegroServiceDo->doVerifyItem(new AllegroStructDoVerifyItemRequest(/*** update parameters list ***/)))
    print_r($allegroServiceDo->getResult());
else
    print_r($allegroServiceDo->getLastError());
