<?php
namespace PMVC\PlugIn\jsonld;

class Root extends Base 
{
    public function __tostring()
    {
        return '<script type="application/ld+json">'.
        json_encode($this->toArray()).
        '</script>';
    }

    public function setType($type)
    {
        $this['@type'] = $type;
    }

    public function add($key)
    {
        $class = __NAMESPACE__.'\\'.$key;
        $o = new $class(); 
        $this[$key] = $o;
        return $o;
    }

    public function getDefault()
    {
        return [
            '@context'=>'http://schema.org/',
        ];
    }
}
