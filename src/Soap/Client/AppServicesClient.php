<?php

namespace T3ko\Dpd\Soap\Client;

use Phpro\SoapClient\Client;
use T3ko\Dpd\Soap\Types\ImportPackagesXV1Request;
use T3ko\Dpd\Soap\Types\ImportPackagesXV1Response;

class AppServicesClient extends Client
{
    public function importPackagesXV1(ImportPackagesXV1Request $importPackagesXV1)
    {
        return $this->call('importPackagesXV1', $importPackagesXV1);
    }
}