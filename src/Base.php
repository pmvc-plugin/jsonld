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
        foreach ($this as $k=>$v) {
            if (\PMVC\isArrayAccess($v)) {
                \PMVC\ref($this->{$k}, $v->toArray());
            }
            if (0!==$v && false!==$v && empty($v)) {
                unset($this[$k]);
            }
        }
        return \PMVC\get($this);
    }

    public function getInitialState()
    {
        return $this->getDefault();
    }

    abstract public function getDefault();
}
