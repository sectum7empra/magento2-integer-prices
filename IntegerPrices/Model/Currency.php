<?php

namespace ItayStudioTest\IntegerPrices\Model;

use Magento\Framework\Currency as MagentoCurrency;
use Magento\Framework\CurrencyInterface;

/** @method getPricePrecision */
class Currency extends MagentoCurrency implements CurrencyInterface
{
    use PricePrecisionConfigTrait;

    /**
     * @var \ItayStudioTest\IntegerPrices\Model\ConfigInterface
     */
    public $moduleConfig;

    /**
     * Currency constructor.
     *
     * @param \Magento\Framework\App\CacheInterface      $appCache
     * @param \ItayStudioTest\IntegerPrices\Model\ConfigInterface $moduleConfig
     * @param null                                       $options
     * @param null                                       $locale
     */
    public function __construct(
        \Magento\Framework\App\CacheInterface $appCache,
        ConfigInterface $moduleConfig,
        $options = null,
        $locale = null
    ) {
        $this->moduleConfig = $moduleConfig;
        parent::__construct($appCache, $options, $locale);
    }
}
