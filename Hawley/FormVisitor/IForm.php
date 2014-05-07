<?php

namespace Hawley\FormVisitor;

interface IForm {
    public function addElement(IFormElement $element);
    public function accept(IFormElementVisitor $visitor);
}