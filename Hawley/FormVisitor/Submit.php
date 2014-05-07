<?php

namespace Hawley\FormVisitor;

class Submit extends FormElement {
    protected function setDefault() {
        $this->value = 'Submit';
    }
    
    public function accept(IFormElementVisitor $visitor) {
        $visitor->visitSubmit($this);
    }
}