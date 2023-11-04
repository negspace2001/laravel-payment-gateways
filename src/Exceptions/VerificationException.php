<?php

namespace Negspace2001\PaymentGateway\Exceptions;

class VerificationException extends HttpException
{
    protected $message = 'payment verification failed';
}
