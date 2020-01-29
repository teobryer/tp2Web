<?php 

//require ("IManager.php");
require ("Employee.php");

class Manager extends Employee {// implements IManager  {
    
    private $id;
    private $name;
    private $salary;
    private $age;
    private $employees;
    
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
    
    public function add(int $employeeId){
        $this->employees[] = $employeeId;
    }
    
    public function getArrEmployeesId() : array{
        return $this->employees;
    }
    
}





?>