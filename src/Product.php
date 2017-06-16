<?php

namespace PMVC\PlugIn\jsonld;

class Product extends Root
{
    public function getDefault()
    {
        return [
            '@context' => 'http://schema.org/',
            '@type' => 'Product',
            'name' => '',
            'image' => '',
            'description' => '',
            'mpn' => '',
        ];
    }

    public function setDescription($text)
    {
        $this['description'] = strip_tags($text);
    }

    public function setName($name)
    {
        $this['name'] = $name;
    }

    public function setImage($img)
    {
        $this['image'] = $img;
    }

    public function setId($id)
    {
        $this['mpn'] = $id;
    }

    public function setOffer()
    {
        $this['offers'] = new Offer();
        return $this['offers'];
    }
}
