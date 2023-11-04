<?php

namespace Negspace2001\PaymentGateway\Contracts;

use Laravel\SerializableClosure\SerializableClosure;
use Negspace2001\PaymentGateway\DataObjects\SessionData;
use Negspace2001\PaymentGateway\DataObjects\TransactionData;

interface ProviderInterface
{
    public function initializeCheckout(array $parameters = []): SessionData;

    /**
     * @deprecated use initializeCheckout() method
     */
    public function initializePayment(array $parameters = []): SessionData;

    public function getCheckout(string $sessionReference): ?SessionData;

    public function destroyCheckout(string $sessionReference): void;

    public function confirmTransaction(string $reference, ?SerializableClosure $closure): ?TransactionData;

    public function findTransaction(string $reference): TransactionData;

    public function listTransactions(
        ?string $from = null,
        ?string $to = null,
        ?string $page = null,
        ?string $status = null,
        ?string $reference = null,
        ?string $amount = null,
        ?string $customer = null, // this could be email or id
    ): array|null;

    public function transactionDTO(array $transaction): TransactionData;
}
