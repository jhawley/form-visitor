<?php

namespace Hawley\FormVisitor;

interface IValidator extends IFormElementVisitor {
    public function isValid();
}