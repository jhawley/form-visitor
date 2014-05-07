<?php

namespace Hawley\FormVisitor;

abstract class Validator implements IValidator {
    protected $valid;
    
    public function isValid() {
        return $this->valid;
    }
}