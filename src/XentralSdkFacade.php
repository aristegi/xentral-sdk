<?php

namespace Deinebaustoffe\XentralSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deinebaustoffe\XentralSdk\Skeleton\SkeletonClass
 */
class XentralSdkFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'xentral-sdk';
    }
}
