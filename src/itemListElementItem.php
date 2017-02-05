<?php
namespace PMVC\PlugIn\jsonld;

class itemListElementItem extends Base 
{
    public function getDefault()
    {
        return [
            '@type'=>'ListItem',
            'position'=> 0,
            'url'=> ''
        ];
    }
}
