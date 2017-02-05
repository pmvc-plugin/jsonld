<?php
namespace PMVC\PlugIn\jsonld;

class itemListElement extends Base 
{
    private $_i = 0;
    public function add($url)
    {
        $o = new itemListElementItem();
        $o['url'] = $url;
        $o['position'] = $this->_i;
        $this[] = $o;
        $this->_i++;
    }

    public function getDefault()
    {
        return null;
    }
}
