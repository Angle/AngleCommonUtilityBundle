<?php

namespace Angle\Common\UtilityBundle\Address\Countries;

use Angle\Common\UtilityBundle\Address\Country;

class MX extends Country
{
    /**
     * @inheritDoc
     * @var array
     */
    private static $regions = array(
        'MX-AGU' => 'Aguascalientes',
        'MX-BCN' => 'Baja California',
        'MX-BCS' => 'Baja California Sur',
        'MX-CAM' => 'Campeche',
        'MX-CHP' => 'Chiapas',
        'MX-CHH' => 'Chihuahua',
        'MX-COA' => 'Coahuila',
        'MX-COL' => 'Colima',
        'MX-DIF' => 'Distrito Federal',
        'MX-DUR' => 'Durango',
        'MX-GUA' => 'Guanajuato',
        'MX-GRO' => 'Guerrero',
        'MX-HID' => 'Hidalgo',
        'MX-JAL' => 'Jalisco',
        'MX-MEX' => 'Estado de México',
        'MX-MIC' => 'Michoacán',
        'MX-MOR' => 'Morelos',
        'MX-NAY' => 'Nayarit',
        'MX-NLE' => 'Nuevo León',
        'MX-OAX' => 'Oaxaca',
        'MX-PUE' => 'Puebla',
        'MX-QUE' => 'Querétaro',
        'MX-ROO' => 'Quintana Roo',
        'MX-SLP' => 'San Luis Potosí',
        'MX-SIN' => 'Sinaloa',
        'MX-SON' => 'Sonora',
        'MX-TAB' => 'Tabasco',
        'MX-TAM' => 'Tamaulipas',
        'MX-TLA' => 'Tlaxcala',
        'MX-VER' => 'Veracruz',
        'MX-YUC' => 'Yucatán',
        'MX-ZAC' => 'Zacatecas',
    );
}