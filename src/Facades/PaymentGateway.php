<?php

namespace Negspace2001\PaymentGateway\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Negspace2001\PaymentGateway\PaymentGateway
 */
class PaymentGateway extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Stephenjude\PaymentGateway\PaymentGateway::class;
    }
}
