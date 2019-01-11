<?php

namespace ItayStudioTest\IntegerPrices\Model;

interface ConfigInterface
{
    /**
     * @return \Magento\Framework\App\Config\ScopeConfigInterface
     */
    public function getScopeConfig();
    /**
     * @return mixed
     */
    public function isEnable();
}
