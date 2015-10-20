<?php
/**
 * Braintree PHP Library
 * Creates class_aliases for old class names replaced by PSR-4 Namespaces
 *
 * @copyright  2014 Braintree, a division of PayPal, Inc.
 */

require_once('autoload.php');

class_alias('Braintree\Modification', 'Braintree_Modification');
class_alias('Braintree\Instance', 'Braintree_Instance');
class_alias('Braintree\OAuthCredentials', 'Braintree_OAuthCredentials');
class_alias('Braintree\Address', 'Braintree_Address');
class_alias('Braintree\AddressGateway', 'Braintree_AddressGateway');
class_alias('Braintree\AddOn', 'Braintree_AddOn');
class_alias('Braintree\AddOnGateway', 'Braintree_AddOnGateway');
class_alias('Braintree\AndroidPayCard', 'Braintree_AndroidPayCard');
class_alias('Braintree\ApplePayCard', 'Braintree_ApplePayCard');
class_alias('Braintree\ClientToken', 'Braintree_ClientToken');
class_alias('Braintree\ClientTokenGateway', 'Braintree_ClientTokenGateway');
class_alias('Braintree\CoinbaseAccount', 'Braintree_CoinbaseAccount');
class_alias('Braintree\Collection', 'Braintree_Collection');
class_alias('Braintree\Configuration', 'Braintree_Configuration');
class_alias('Braintree\CredentialsParser', 'Braintree_CredentialsParser');
class_alias('Braintree\CreditCard', 'Braintree_CreditCard');
class_alias('Braintree\CreditCardGateway', 'Braintree_CreditCardGateway');
class_alias('Braintree\Customer', 'Braintree_Customer');
class_alias('Braintree\CustomerGateway', 'Braintree_CustomerGateway');
class_alias('Braintree\CustomerSearch', 'Braintree_CustomerSearch');
class_alias('Braintree\DisbursementDetails', 'Braintree_DisbursementDetails');
class_alias('Braintree\Dispute', 'Braintree_Dispute');
class_alias('Braintree\Dispute\TransactionDetails', 'Braintree_Dispute_TransactionDetails');
class_alias('Braintree\Descriptor', 'Braintree_Descriptor');
class_alias('Braintree\Digest', 'Braintree_Digest');
class_alias('Braintree\Discount', 'Braintree_Discount');
class_alias('Braintree\DiscountGateway', 'Braintree_DiscountGateway');
class_alias('Braintree\IsNode', 'Braintree_IsNode');
class_alias('Braintree\EuropeBankAccount', 'Braintree_EuropeBankAccount');
class_alias('Braintree\EqualityNode', 'Braintree_EqualityNode');
class_alias('Braintree\Exception', 'Braintree_Exception');
class_alias('Braintree\Gateway', 'Braintree_Gateway');
class_alias('Braintree\Http', 'Braintree_Http');
class_alias('Braintree\KeyValueNode', 'Braintree_KeyValueNode');
class_alias('Braintree\Merchant', 'Braintree_Merchant');
class_alias('Braintree\MerchantGateway', 'Braintree_MerchantGateway');
class_alias('Braintree\MerchantAccount', 'Braintree_MerchantAccount');
class_alias('Braintree\MerchantAccountGateway', 'Braintree_MerchantAccountGateway');
class_alias('Braintree\MerchantAccount\BusinessDetails', 'Braintree_MerchantAccount_BusinessDetails');
class_alias('Braintree\MerchantAccount\FundingDetails', 'Braintree_MerchantAccount_FundingDetails');
class_alias('Braintree\MerchantAccount\IndividualDetails', 'Braintree_MerchantAccount_IndividualDetails');
class_alias('Braintree\MerchantAccount\AddressDetails', 'Braintree_MerchantAccount_AddressDetails');
class_alias('Braintree\MultipleValueNode', 'Braintree_MultipleValueNode');
class_alias('Braintree\MultipleValueOrTextNode', 'Braintree_MultipleValueOrTextNode');
class_alias('Braintree\OAuthGateway', 'Braintree_OAuthGateway');
class_alias('Braintree\PartialMatchNode', 'Braintree_PartialMatchNode');
class_alias('Braintree\Plan', 'Braintree_Plan');
class_alias('Braintree\PlanGateway', 'Braintree_PlanGateway');
class_alias('Braintree\RangeNode', 'Braintree_RangeNode');
class_alias('Braintree\ResourceCollection', 'Braintree_ResourceCollection');
class_alias('Braintree\RiskData', 'Braintree_RiskData');
class_alias('Braintree\ThreeDSecureInfo', 'Braintree_ThreeDSecureInfo');
class_alias('Braintree\SettlementBatchSummary', 'Braintree_SettlementBatchSummary');
class_alias('Braintree\SettlementBatchSummaryGateway', 'Braintree_SettlementBatchSummaryGateway');
class_alias('Braintree\SignatureService', 'Braintree_SignatureService');
class_alias('Braintree\Subscription', 'Braintree_Subscription');
class_alias('Braintree\SubscriptionGateway', 'Braintree_SubscriptionGateway');
class_alias('Braintree\SubscriptionSearch', 'Braintree_SubscriptionSearch');
class_alias('Braintree\Subscription\StatusDetails', 'Braintree_Subscription_StatusDetails');
class_alias('Braintree\TextNode', 'Braintree_TextNode');
class_alias('Braintree\Transaction', 'Braintree_Transaction');
class_alias('Braintree\TransactionGateway', 'Braintree_TransactionGateway');
class_alias('Braintree\Disbursement', 'Braintree_Disbursement');
class_alias('Braintree\TransactionSearch', 'Braintree_TransactionSearch');
class_alias('Braintree\TransparentRedirect', 'Braintree_TransparentRedirect');
class_alias('Braintree\TransparentRedirectGateway', 'Braintree_TransparentRedirectGateway');
class_alias('Braintree\Util', 'Braintree_Util');
class_alias('Braintree\Version', 'Braintree_Version');
class_alias('Braintree\Xml', 'Braintree_Xml');
class_alias('Braintree\Error\Codes', 'Braintree_Error_Codes');
class_alias('Braintree\Error\ErrorCollection', 'Braintree_Error_ErrorCollection');
class_alias('Braintree\Error\Validation', 'Braintree_Error_Validation');
class_alias('Braintree\Error\ValidationErrorCollection', 'Braintree_Error_ValidationErrorCollection');
class_alias('Braintree\Exception\Authentication', 'Braintree_Exception_Authentication');
class_alias('Braintree\Exception\Authorization', 'Braintree_Exception_Authorization');
class_alias('Braintree\Exception\Configuration', 'Braintree_Exception_Configuration');
class_alias('Braintree\Exception\DownForMaintenance', 'Braintree_Exception_DownForMaintenance');
class_alias('Braintree\Exception\ForgedQueryString', 'Braintree_Exception_ForgedQueryString');
class_alias('Braintree\Exception\InvalidChallenge', 'Braintree_Exception_InvalidChallenge');
class_alias('Braintree\Exception\InvalidSignature', 'Braintree_Exception_InvalidSignature');
class_alias('Braintree\Exception\NotFound', 'Braintree_Exception_NotFound');
class_alias('Braintree\Exception\ServerError', 'Braintree_Exception_ServerError');
class_alias('Braintree\Exception\SSLCertificate', 'Braintree_Exception_SSLCertificate');
class_alias('Braintree\Exception\SSLCaFileNotFound', 'Braintree_Exception_SSLCaFileNotFound');
class_alias('Braintree\Exception\Unexpected', 'Braintree_Exception_Unexpected');
class_alias('Braintree\Exception\TestOperationPerformedInProduction', 'Braintree_Exception_TestOperationPerformedInProduction');
class_alias('Braintree\Exception\UpgradeRequired', 'Braintree_Exception_UpgradeRequired');
class_alias('Braintree\Exception\ValidationsFailed', 'Braintree_Exception_ValidationsFailed');
class_alias('Braintree\Result\CreditCardVerification', 'Braintree_Result_CreditCardVerification');
class_alias('Braintree\Result\Error', 'Braintree_Result_Error');
class_alias('Braintree\Result\Successful', 'Braintree_Result_Successful');
class_alias('Braintree\Test\CreditCardNumbers', 'Braintree_Test_CreditCardNumbers');
class_alias('Braintree\Test\MerchantAccount', 'Braintree_Test_MerchantAccount');
class_alias('Braintree\Test\TransactionAmounts', 'Braintree_Test_TransactionAmounts');
class_alias('Braintree\Test\VenmoSdk', 'Braintree_Test_VenmoSdk');
class_alias('Braintree\Test\Nonces', 'Braintree_Test_Nonces');
class_alias('Braintree\Transaction\AddressDetails', 'Braintree_Transaction_AddressDetails');
class_alias('Braintree\Transaction\AndroidPayCardDetails', 'Braintree_Transaction_AndroidPayCardDetails');
class_alias('Braintree\Transaction\ApplePayCardDetails', 'Braintree_Transaction_ApplePayCardDetails');
class_alias('Braintree\Transaction\CoinbaseDetails', 'Braintree_Transaction_CoinbaseDetails');
class_alias('Braintree\Transaction\EuropeBankAccountDetails', 'Braintree_Transaction_EuropeBankAccountDetails');
class_alias('Braintree\Transaction\CreditCardDetails', 'Braintree_Transaction_CreditCardDetails');
class_alias('Braintree\Transaction\PayPalDetails', 'Braintree_Transaction_PayPalDetails');
class_alias('Braintree\Transaction\CustomerDetails', 'Braintree_Transaction_CustomerDetails');
class_alias('Braintree\Transaction\StatusDetails', 'Braintree_Transaction_StatusDetails');
class_alias('Braintree\Transaction\SubscriptionDetails', 'Braintree_Transaction_SubscriptionDetails');
class_alias('Braintree\WebhookNotification', 'Braintree_WebhookNotification');
class_alias('Braintree\WebhookTesting', 'Braintree_WebhookTesting');
class_alias('Braintree\Xml\Generator', 'Braintree_Xml_Generator');
class_alias('Braintree\Xml\Parser', 'Braintree_Xml_Parser');
class_alias('Braintree\CreditCardVerification', 'Braintree_CreditCardVerification');
class_alias('Braintree\CreditCardVerificationGateway', 'Braintree_CreditCardVerificationGateway');
class_alias('Braintree\CreditCardVerificationSearch', 'Braintree_CreditCardVerificationSearch');
class_alias('Braintree\PartnerMerchant', 'Braintree_PartnerMerchant');
class_alias('Braintree\PayPalAccount', 'Braintree_PayPalAccount');
class_alias('Braintree\PayPalAccountGateway', 'Braintree_PayPalAccountGateway');
class_alias('Braintree\PaymentMethod', 'Braintree_PaymentMethod');
class_alias('Braintree\PaymentMethodGateway', 'Braintree_PaymentMethodGateway');
class_alias('Braintree\PaymentMethodNonce', 'Braintree_PaymentMethodNonce');
class_alias('Braintree\PaymentMethodNonceGateway', 'Braintree_PaymentMethodNonceGateway');
class_alias('Braintree\PaymentInstrumentType', 'Braintree_PaymentInstrumentType');
class_alias('Braintree\UnknownPaymentMethod', 'Braintree_UnknownPaymentMethod');
class_alias('Braintree\Test\Transaction', 'Braintree_Test_Transaction');
class_alias('Braintree\TestingGateway', 'Braintree_TestingGateway');

if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    throw new Braintree_Exception('PHP version >= 5.4.0 required');
}


function requireDependencies() {
    $requiredExtensions = array('xmlwriter', 'openssl', 'dom', 'hash', 'curl');
    foreach ($requiredExtensions AS $ext) {
        if (!extension_loaded($ext)) {
            throw new Braintree_Exception('The Braintree library requires the ' . $ext . ' extension.');
        }
    }
}

requireDependencies();
