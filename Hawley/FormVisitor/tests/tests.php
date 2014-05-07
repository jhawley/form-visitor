<?php
require_once(dirname(__FILE__) . '/simpletest/autorun.php');
require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/autoload.php');

use Hawley\FormVisitor\Form;
use Hawley\FormVisitor\InputText;
use Hawley\FormVisitor\Submit;
use Hawley\FormVisitor\TextArea;
use Hawley\FormVisitor\Printer;
use Hawley\FormVisitor\SpecificValidator;

class TestOfVisitors extends UnitTestCase {  
    private $form;
    
    public function setUp() {
        $this->form = new Form();
        $this->form->addElement(new InputText());
        $this->form->addElement(new TextArea());
        $this->form->addElement(new Submit());
    }
    
    public function testOfPrinter() {
        ob_start();
        $this->form->accept(new Printer());
        $this->assertPattern('/^<input(.)*textarea(.)*submit(.)*$/', 
          ob_get_contents());
        ob_clean();
        ob_flush();
    }
    
    public function testOfValidationFailure() {
        $validator = new SpecificValidator();
        $this->form->accept($validator);
        $this->assertEqual($validator->isValid(), false);
    }
    
    public function testOfValidationSuccess() {
        $validator = new SpecificValidator();
        $form = new Form();
        $itext = new InputText();
        $tarea = new TextArea();
        $itext->setValue("nonblank");
        $tarea->setValue("also nonblank");
        $form->addElement($itext);
        $form->addElement($tarea);
        $form->accept($validator);
        $this->assertEqual($validator->isValid(), true);
    }
}