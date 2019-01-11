<?php

namespace ItayStudioTest\IntegerPrices\Model;

trait PricePrecisionConfigTrait
{

    /**
     * @return \ItayStudioTest\IntegerPrices\Model\ConfigInterface
     */
    public function getConfig()
    {
        return $this->moduleConfig;
    }

    /**
     * @return int|mixed
     */
    public function getPricePrecision()
    {
        if ($this->getConfig()->canShowPriceDecimal()) {
            return $this->getConfig()->getPricePrecision();
        }

        return 0;
    }
}
