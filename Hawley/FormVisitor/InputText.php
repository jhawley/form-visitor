<?php

namespace Hawley\FormVisitor;

class InputText extends FormElement {
    protected function setDefault() {
        $this->value = '';
    }
    
    public function accept(IFormElementVisitor $visitor) {
        $visitor->visitInputText($this);
    }
}