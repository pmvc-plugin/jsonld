<?php
namespace PMVC\PlugIn\jsonld;

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\JsonLdProduct';

/**
 * Google
 * https://developers.google.com/search/docs/data-types/products
 *
 * Schema
 * http://schema.org/Product
 */

class JsonLdProduct
{
   function __invoke()
   {
        $root = new Product(); 
        return $root;
   }
}
