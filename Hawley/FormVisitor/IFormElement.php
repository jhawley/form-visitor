<?php

namespace Hawley\FormVisitor;

interface IFormElement {
    public function accept(IFormElementVisitor $visitor);
    public function setValue($value);
    public function getValue();
    public function setAttribute($attribute, $value);
    public function getAttributes();
}