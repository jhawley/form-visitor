<?php

namespace Hawley\FormVisitor;

class Printer implements IFormElementVisitor {
    public function visitInputText(IFormElement $element) {
        echo '<input type="input"';
        foreach($element->getAttributes() as $attr => $val) {
            echo ' '.$attr.'="'.$val.'"';
        }
        echo ' value="'.$element->getValue().'" />';
    }
    
    public function visitTextArea(IFormElement $element) {
        echo '<textarea';
        foreach($element->getAttributes() as $attr => $val) {
            echo ' '.$attr.'="'.$val.'"';
        }
        echo ' value="'.$element->getValue().'"></textarea>';
    }
    
    public function visitSubmit(IFormElement $element) {
        echo '<input type="submit" value="'.$element->getValue().'" />';
    }
}