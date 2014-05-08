<?php

namespace Hawley\FormVisitor;

class TextArea extends FormElement {
    use TFormElementAcceptor;
    
    protected function setDefault() {
        $this->value = '';
    }
}