<?php

namespace ItayStudioTest\IntegerPrices\Plugin;

use ItayStudioTest\IntegerPrices\Model\ConfigInterface;
use ItayStudioTest\IntegerPrices\Model\PricePrecisionConfigTrait;

abstract class PriceFormatPluginAbstract
{
    use PricePrecisionConfigTrait;

    /** @var ConfigInterface  */
    protected $moduleConfig;

    /**
     * @param \ItayStudioTest\IntegerPrices\Model\ConfigInterface $moduleConfig
     */
    public function __construct(
        ConfigInterface $moduleConfig
    ) {
        $this->moduleConfig  = $moduleConfig;
    }
}
