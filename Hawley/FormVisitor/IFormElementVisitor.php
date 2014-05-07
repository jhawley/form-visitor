<?php

namespace Hawley\FormVisitor;

interface IFormElementVisitor {
    public function visitInputText(IFormElement $element);
    public function visitTextArea(IFormElement $element);
    public function visitSubmit(IFormElement $element);
}