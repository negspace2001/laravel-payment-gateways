<?php

namespace Negspace2001\PaymentGateway\Exceptions;

class InitializationException extends HttpException
{
    protected $message = 'payment initialization failed';
}
