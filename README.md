# Purpose
To provide a simple form framework example using the visitor pattern

# Example
    $this->form = new Form();
    $this->form->addElement(new InputText());
    $this->form->addElement(new TextArea());
    $this->form->addElement(new Submit());
    ob_start();
    $this->form->accept(new Printer());
    $this->assertPattern('/^<input(.)*textarea(.)*submit(.)*$/', 
      ob_get_contents());
    ob_clean();
    ob_flush();

# Installation
Install simpletest in the /Hawley/FormVisitor/tests directory

# License
Public domain without warranties