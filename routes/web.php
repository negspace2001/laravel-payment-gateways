<?php

use Illuminate\Support\Facades\Route;
use Negspace2001\PaymentGateway\Http\Controllers\CheckoutController;
use Negspace2001\PaymentGateway\Http\Controllers\CompletePaymentController;
use Negspace2001\PaymentGateway\Http\Controllers\ErrorController;

Route::get(config('payment-gateways.routes.callback.path'), CompletePaymentController::class)
    ->name(config('payment-gateways.routes.callback.name'));

Route::get(config('payment-gateways.routes.checkout.path'), CheckoutController::class)
    ->name(config('payment-gateways.routes.checkout.name'));

Route::get(config('payment-gateways.routes.error.path'), ErrorController::class)
    ->name(config('payment-gateways.routes.error.name'));
