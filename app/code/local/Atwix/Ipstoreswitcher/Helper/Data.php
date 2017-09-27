<?php
/**
 * Atwix
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Atwix Mod
 * @package     Atwix_Ipstoreswitcher
 * @author      Atwix Core Team
 * @copyright   Copyright (c) 2014 Atwix (http://www.atwix.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
/* app/code/local/Atwix/Ipstoreswitcher/Helper/Data.php */
class Atwix_Ipstoreswitcher_Helper_Data extends Mage_Core_Helper_Abstract
{
    const DEFAULT_STORE_CODE = 'row';

    /**
     * countries to store relation
     * default is default
     * @var array
     */
    protected $_countryToStoreCode = array(
        'AU' => 'au',
        'CA' => 'ca',
        'AL' => 'eu',
        'AD' => 'eu',
        'AM' => 'eu',
        'AT' => 'eu',
        'BY' => 'eu',
        'BE' => 'eu',
        'BA' => 'eu',
        'BG' => 'eu',
        'HR' => 'eu',
        'CY' => 'eu',
        'CZ' => 'eu',
        'DK' => 'eu',
        'EE' => 'eu',
        'FI' => 'eu',
        'FR' => 'eu',
        'GE' => 'eu',
        'DE' => 'eu',
        'GR' => 'eu',
        'HU' => 'eu',
        'IS' => 'eu',
        'IE' => 'eu',
        'IT' => 'eu',
        'KZ' => 'eu',
        'XK' => 'eu', //KOSOVO TEMP CODE
        'LV' => 'eu',
        'LI' => 'eu',
        'LU' => 'eu',
        'MK' => 'eu',
        'MT' => 'eu',
        'MD' => 'eu',
        'MC' => 'eu',
        'ME' => 'eu',
        'NL' => 'eu',
        'NO' => 'eu',
        'PL' => 'eu',
        'PT' => 'eu',
        'RO' => 'eu',
        'RU' => 'eu',
        'SM' => 'eu',
        'RS' => 'eu',
        'SK' => 'eu',
        'SI' => 'eu',
        'ES' => 'eu',
        'SE' => 'eu',
        'TR' => 'eu',
        'UA' => 'eu',
        'VA' => 'eu',
        'NZ' => 'nz',
        'GB' => 'uk',
        'US' => 'us'
    );

    /**
     * get store view code by country
     * @param $country
     * @return bool
     */
    public function getStoreCodeByCountry($country)
    {
        if (isset($this->_countryToStoreCode[$country])) {
            return $this->_countryToStoreCode[$country];
        }
        return self::DEFAULT_STORE_CODE;
    }
}
