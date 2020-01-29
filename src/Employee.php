<?php 

require ("IEmployee.php");

class Employee implements IEmployee {
    
    private $id;
    private $name;
    private $salary;
    private $age;
    
    /**
     * @return mixed
     */
    public function getId():int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSalary():float
    {
        return $this->salary;
    }

    /**
     * @return mixed
     */
    public function getAge():int
    {
        return $this->age;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

    /**
     * @param mixed $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    function __construct(int $id, string $name, float $salary, int $age){
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
    }
    
    
    
    function __toString(): string{
        $t=get_object_vars($this);
        $s="";
        foreach($t as $key=>$value)$s.="$key = $value\n";
        return $s;
    }
    
}

















?>