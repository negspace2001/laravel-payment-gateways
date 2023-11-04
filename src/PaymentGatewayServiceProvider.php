<?php

namespace Negspace2001\PaymentGateway;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PaymentGatewayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-payment-gateways')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('web');
    }
}
