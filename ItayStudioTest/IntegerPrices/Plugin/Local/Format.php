<?php

namespace ItayStudioTest\IntegerPrices\Plugin\Local;

use ItayStudioTest\IntegerPrices\Plugin\PriceFormatPluginAbstract;

class Format extends PriceFormatPluginAbstract
{

    /**
     * {@inheritdoc}
     *
     * @param $subject
     * @param $result
     *
     * @return mixed
     */
    public function afterGetPriceFormat($subject, $result)
    {
        $precision = $this->getPricePrecision();

        if ($this->getConfig()->isEnable()) {
            $result['precision'] = $precision;
            $result['requiredPrecision'] = $precision;
        }

        return $result;
    }
}
