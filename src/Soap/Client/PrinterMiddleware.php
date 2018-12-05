<?php

namespace T3ko\Dpd\Soap\Client;

use Http\Promise\Promise;
use Phpro\SoapClient\Middleware\Middleware;
use Psr\Http\Message\RequestInterface;

class PrinterMiddleware extends Middleware
{
    public function getName(): string
    {
        return 'printer_middleware';
    }

    public function beforeRequest(callable $next, RequestInterface $request): Promise
    {
        echo $request->getBody();
        return $next($request);
    }

}