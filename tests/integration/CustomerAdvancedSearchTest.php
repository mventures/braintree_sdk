<?php
require_once realpath(dirname(__FILE__)) . '/../TestHelper.php';

class Braintree_CustomerAdvancedSearchTest extends PHPUnit_Framework_TestCase
{
    function testNoMatches()
    {
        $collection = Braintree_Customer::search(array(
            Braintree_CustomerSearch::company()->is('badname')
        ));

        $this->assertEquals(0, $collection->maximumCount());
    }

    function testSearchOnTextFields()
    {
        $token  = 'cctoken' . rand();

        $search_criteria = array(
            'firstName' => 'Timmy',
            'lastName' => 'OToole',
            'company' => 'OToole and Son(s)' . rand(),
            'email' => 'timmy@example.com',
            'website' => 'http://example.com',
            'phone' => '3145551234',
            'fax' => '3145551235',
            'creditCardExpirationDate' => '05/2010',
            'paymentMethodToken' => $token,
            'addressFirstName' => 'Thomas',
            'addressLastName' => 'Otool',
            'addressStreetAddress' => '1 E Main St',
            'addressExtendedAddress' => 'Suite 3',
            'addressLocality' => 'Chicago',
            'addressRegion' => 'Illinois',
            'addressPostalCode' => '60622'
        );

        $customer = Braintree_Customer::createNoValidate(array(
            'firstName' => $search_criteria['firstName'],
            'lastName' => $search_criteria['lastName'],
            'company' => $search_criteria['company'],
            'email' => $search_criteria['email'],
            'fax' => $search_criteria['fax'],
            'phone' => $search_criteria['phone'],
            'website' => $search_criteria['website'],
            'creditCard' => array(
                'number' => '4111111111111111',
                'expirationDate' => $search_criteria['creditCardExpirationDate'],
                'token' => $token,
                'billingAddress' => array(
                    'firstName' => $search_criteria['addressFirstName'],
                    'lastName' => $search_criteria['addressLastName'],
                    'streetAddress' => $search_criteria['addressStreetAddress'],
                    'extendedAddress' => $search_criteria['addressExtendedAddress'],
                    'locality' => $search_criteria['addressLocality'],
                    'region' => $search_criteria['addressRegion'],
                    'postalCode' => $search_criteria['addressPostalCode'],
                    'countryName' => 'United States of America'
                )
            )
        ));

        $query = array(Braintree_CustomerSearch::id()->is($customer->id));
        foreach ($search_criteria AS $criterion => $value) {
            $query[] = Braintree_CustomerSearch::$criterion()->is($value);
        }

        $collection = Braintree_Customer::search($query);

        $this->assertEquals(1, $collection->maximumCount());
        $this->assertEquals($customer->id, $collection->firstItem()->id);

        foreach ($search_criteria AS $criterion => $value) {
            $collection = Braintree_Customer::search(array(
                Braintree_CustomerSearch::$criterion()->is($value),
                Braintree_CustomerSearch::id()->is($customer->id)
            ));
            $this->assertEquals(1, $collection->maximumCount());
            $this->assertEquals($customer->id, $collection->firstItem()->id);

            $collection = Braintree_Customer::search(array(
                Braintree_CustomerSearch::$criterion()->is('invalid_attribute'),
                Braintree_CustomerSearch::id()->is($customer->id)
            ));
            $this->assertEquals(0, $collection->maximumCount());
        }
    }
}
?>