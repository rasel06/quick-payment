<?php

namespace Dspace\QuickPayment;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dspace\QuickPayment\Skeleton\SkeletonClass
 */
class QuickPaymentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'quick-payment';
    }
}
