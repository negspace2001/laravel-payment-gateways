<?php

namespace Negspace2001\PaymentGateway;

use BadMethodCallException;
use ReflectionClass;
use Negspace2001\PaymentGateway\Providers\AbstractProvider;
use Negspace2001\PaymentGateway\Providers\PaystackProvider;

/**
 * @method PaystackProvider paystack()
 * @method PaystackProvider flutterwave()
 * @method PaystackProvider monnify()
 * @method PaystackProvider stripe()
 * @method PaystackProvider paypal()
 */
class PaymentGateway
{
    public function __call(string $provider, array $arguments)
    {
        return static::make($provider);
    }

    public static function make(string $proivder): AbstractProvider
    {
        $class = '\\Stephenjude\\PaymentGateway\\Providers\\'.ucwords($proivder).'Provider';

        if (class_exists($class) && ! (new ReflectionClass($class))->isAbstract()) {
            return new $class();
        }

        throw new BadMethodCallException("Undefined provider [$proivder] called.");
    }
}
