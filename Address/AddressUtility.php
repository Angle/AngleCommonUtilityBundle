<?php

namespace Angle\Common\UtilityBundle\Address;

class AddressUtility
{
    /**
     * Supported Countries
     * Using 2 letter codes: ISO 3166-1 alpha-2
     * @var array
     */
    private static $countries = array(
        'MX' => 'México',
        'US' => 'Estados Unidos',
        'CA' => 'Canadá',
    );

    /**
     * Get Supported Countries as an array
     * Using 2 letter codes: ISO 3166-1 alpha-2
     * @return array
     */
    public static function getAvailableCountries()
    {
        return self::$countries;
    }

    /**
     * Get Supported regions (ISO 3166-2) in a country as an array
     * @param string $code using ISO 3166-1 alpha-2
     * @return array
     */
    public static function getAvailableRegionsByCountry($code)
    {
        if (array_key_exists($code, self::$countries)) {
            $countryClass = __NAMESPACE__ . '\\Countries\\' . $code;
            $country = new $countryClass();
            return $country::getAvailableRegions();
        } else {
            return array();
        }
    }

    public static function getCountryNameFromCode($code)
    {
        // Uppercase everything
        // Check string length
        // Get country name
    }

    public static function getRegionNameFromCode($code)
    {
        // Uppercase everything
        // Check if the first two characters are letters
        // Check the last 3 letters
        // Load country
    }


}