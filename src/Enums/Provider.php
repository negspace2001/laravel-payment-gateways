<?php

namespace Negspace2001\PaymentGateway\Enums;

use ArchTech\Enums\InvokableCases;
use ArchTech\Enums\Names;
use ArchTech\Enums\Options;
use ArchTech\Enums\Values;

enum Provider: string
{
    use InvokableCases;
    use Names;
    use Values;
    use Options;

    case STRIPE = 'stripe';

    case ORANGEMONEY = 'orangemoney';

    case MTNMONEY = 'mtnmoney';

    case FLUTTERWAVE = 'flutterwave';
}
