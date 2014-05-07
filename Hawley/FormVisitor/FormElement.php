<?php

namespace Hawley\FormVisitor;

abstract class FormElement implements IFormElement {
    protected $value;
    protected $attributes = array();
    
    public function __construct() {
        $this->setDefault();
    }
    
    abstract protected function setDefault();
    abstract public function accept(IFormElementVisitor $visitor);
    
    public function setValue($value) {
        $this->value = $value;
    }
    
    public function getValue() {
        return $this->value;
    }
    
    public function setAttribute($attribute, $value) {
        $this->attributes[$attribute] = $value;
    }
    
    public function getAttributes() {
        return $this->attributes;
    }
}