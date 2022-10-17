<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class FooPayload extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
}