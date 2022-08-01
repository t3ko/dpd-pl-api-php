<?php

namespace T3ko\DpdTests\Api;

use T3ko\Dpd\Request\FindPostalCodeRequest;

class FindPostalCodeTest extends ApiIntegrationTestCase
{

    /**
     * @dataProvider postalCodeDataProvider
     */
    public function testFindPostalCodeResponse($code, $expected)
    {
        $result = self::$api->findPostalCode(FindPostalCodeRequest::from($code[0], $code[1]));
        self::assertNotNull($result);
        self::assertEquals($expected, $result->getStatus());

    }

    public function postalCodeDataProvider()
    {
        return [
            'correct PL code' => [
                'code' => ['05807', 'PL'],
                'expected' => 'OK'
            ],
            'correct DE code' => [
                'code' => ['03116', 'DE'],
                'expected' => 'OK'
            ],
            'incorrect PL code' => [
                'code' => ['99900', 'PL'],
                'expected' => 'NONEXISTING_POSTAL_CODE'
            ],
            'incorrect DE code' => [
                'code' => ['99999', 'DE'],
                'expected' => 'NONEXISTING_POSTAL_CODE'
            ],
            'nonexisting country code' => [
                'code' => ['ABCD', 'XX'],
                'expected' => 'NONEXISTING_COUNTRY_CODE'
            ],

        ];
    }
}
