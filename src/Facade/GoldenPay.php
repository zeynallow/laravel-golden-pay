<?php

namespace Orkhanahmadov\LaravelGoldenPay\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class LaravelGoldenPay
 * @package Orkhanahmadov\LaravelGoldenPay\Facade
 */
class GoldenPay extends Facade {
    /**
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'laravelgoldenpay';
    }
}
