<?php

namespace Hawley\FormVisitor;

class Form implements IForm {
    protected $elements = array();
    
    public function accept(IFormElementVisitor $visitor) {
        foreach($this->elements as $element) {
            $element->accept($visitor);
        }
    }
    
    public function addElement(IFormElement $element) {
        $this->elements[] = $element;
    }
}