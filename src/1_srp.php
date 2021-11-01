<?php
// Single Responsibility Principe

class Student{
    public $id;
    public $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Printer{
    public $student;

    /**
     * @param Student $student
     */
    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function toJSON(){
        return json_encode([
            'name' => $this->student->name
        ]);
    }

    public function toHTML(){
        return "<div>
                <h1>" . $this->student->name . "</h1>
            </div>
        ";
    }

    public function toXML(){
        return "<student>
                <name>" . $this->student->name . "</name>    
            </student>
        ";
    }
}

$printer = new Printer(new Student("Azizbek Eshonaliyev"));

echo $printer->toJSON();
echo $printer->toHTML();
echo $printer->toXML();