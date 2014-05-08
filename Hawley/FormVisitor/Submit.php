<?php

namespace Hawley\FormVisitor;

class Submit extends FormElement {
    use TFormElementAcceptor;
    
    protected function setDefault() {
        $this->value = 'Submit';
    }
}