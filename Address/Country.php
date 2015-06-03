<?php

namespace Angle\Common\UtilityBundle\Address;

abstract class Country
{
    /**
     * Supported Regions
     * Using ISO 3166-2
     * @return array
     */
    protected static $regions;

    /**
     * Supported Regions
     * Using ISO 3166-2
     * @return array
     */
    public static function getAvailableRegions()
    {
        return static::$regions;
    }
}