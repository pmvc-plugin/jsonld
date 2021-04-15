<?php
namespace PMVC\PlugIn\jsonld;

abstract class Base extends \PMVC\HashMap
{
    public function &__invoke($state = NULL)
    {
        return $this;
    }

    public function toArray()
    {
        $arr = [];
        if (!count($this)) {
            return $arr;
        }
        foreach ($this as $k=>$v) {
            if (0!==$v && false!==$v && empty($v)) {
                unset($this[$k]);
            }
            if (\PMVC\isArrayAccess($v)) {
                \PMVC\ref($this->{$k}, $v->toArray());
            }
            $arr[$k] = $this[$k];
        }
        return $arr;
    }

    public function getInitialState()
    {
        return $this->getDefault();
    }

    abstract public function getDefault();
}
