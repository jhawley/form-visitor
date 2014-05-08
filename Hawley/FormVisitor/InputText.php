<?php

namespace Hawley\FormVisitor;

class InputText extends FormElement {
    use TFormElementAcceptor;
    
    protected function setDefault() {
        $this->value = '';
    }
}