<?php
/**
 * @see http://schema.org/Offer
 *
 * Google
 *  https://developers.google.com/search/docs/data-types/products#offer_properties
 */

namespace PMVC\PlugIn\jsonld;

class Offer extends Base
{
    public function getDefault()
    {
        return [
            '@type' => 'Offer',
            'price'=>'',
            'priceCurrency'=>'',
            'availability'=>'http://schema.org/InStock'
        ];
    }

    public function setPrice($price)
    {
        $this['price'] = $price;
    }

    public function setPriceCurrency($s)
    {
        $this['priceCurrency'] = $s;
    }
}
