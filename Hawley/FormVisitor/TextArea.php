<?php

namespace Hawley\FormVisitor;

class TextArea extends FormElement {
    protected function setDefault() {
        $this->value = '';
    }
    
    public function accept(IFormElementVisitor $visitor) {
        $visitor->visitTextArea($this);
    }
}