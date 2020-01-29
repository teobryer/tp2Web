<?php 

class Employee implements IEmployee {
    
    private $id;
    private $name;
    private $salary;
    private $age;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    function __construct(int $id, string $name, float $salary, int $age){
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
    }
    
    
    
    function __toString(){
        $t=get_object_vars($this);
        $s="";
        foreach($t as $key=>$value)$s.="$key = $value\n";
        return $s;
    }
    
}

















?>