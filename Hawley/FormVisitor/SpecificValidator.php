<?php

namespace Hawley\FormVisitor;

class SpecificValidator extends Validator {
    public function __construct() {
        $this->valid = true;
    }
    
    public function visitInputText(IFormElement $element) {
        $this->valid = $this->valid && ($element->getValue() != '');
    }
    
    public function visitTextArea(IFormElement $element) {
        $this->valid = $this->valid && ($element->getValue() != '');
    }
    
    public function visitSubmit(IFormElement $element) {}
}