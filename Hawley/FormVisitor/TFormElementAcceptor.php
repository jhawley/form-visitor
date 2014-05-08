<?php

namespace Hawley\FormVisitor;

trait TFormElementAcceptor {
    public function accept(IFormElementVisitor $visitor) {
        $visitor->{'visit'.substr(__CLASS__, strlen(__NAMESPACE__)+1)}($this);
    }
}