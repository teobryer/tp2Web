<?php 
require("Employee.php");
require("Manager.php");
class Team {
    
  private $employees;
  private $managers;
/**
     * @return mixed
     */
    public function getEmployees()
    {
        return $this->employees[];
    }

/**
     * @return mixed
     */
    public function getManagers()
    {
        return $this->managers;
    }

/**
     * @param mixed $employees
     */
    public function addEmployee($employee)
    {
        $this->employees[] = $employees;
    }

/**
     * @param mixed $managers
     */
    public function addManager($manager)
    {
        $this->managers[] = $managers;
    }

  
}




?>