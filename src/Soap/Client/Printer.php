<?php

namespace T3ko\Dpd\Soap\Client;

use Http\Promise\Promise;
use Phpro\SoapClient\Middleware\Middleware;
use Psr\Http\Message\RequestInterface;

class Printer extends Middleware
{
    public function getName(): string
    {
        return 'printer';
    }

    public function beforeRequest(callable $next, RequestInterface $request): Promise
    {
        //echo "********\n\n\n";
        echo $request->getBody();

        return $next($request);
    }
}
