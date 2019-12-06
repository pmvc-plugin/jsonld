<?php
namespace PMVC\PlugIn\jsonld;

use PHPUnit_Framework_TestCase;

class JsonldTest extends PHPUnit_Framework_TestCase
{
    private $_plug = 'jsonld';
    function testPlugin()
    {
        ob_start();
        print_r(\PMVC\plug($this->_plug));
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertContains($this->_plug,$output);
    }

    function testGetRoot()
    {
        $root = \PMVC\plug($this->_plug)->create();
        $root->setType('ItemList');
        $itemListElement = $root->add('itemListElement');
        $itemListElement->addUrl('http://tw.yahoo.com'); 
        $expected = <<<EOF
<script type="application/ld+json">{
    "@context": "http:\/\/schema.org\/",
    "@type": "ItemList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "url": "http:\/\/tw.yahoo.com"
        }
    ]
}</script>
EOF;
        $actual = (string)$root;
        $this->assertEquals($expected, $actual);
    }

}
