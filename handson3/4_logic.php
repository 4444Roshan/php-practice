<?php
class Manager
{
    protected $empid;
    protected $empname;
    protected $salary;
    public function __construct($empid, $empname, $salary)
    {
        $this->empid = $empid;
        $this->empname = $empname;
        $this->salary = $salary;
    }
    public function displayManagerDetails()
    {
        echo "Manager ID: {$this->empid}<br>";
        echo "Manager Name: {$this->empname}<br>";
        echo "Salary: $ {$this->salary}<br>";
    }
}
class Employee extends Manager
{
    private $department_name;
    private $job_description;
    public function __construct($empid, $empname, $salary, $department_name, $job_description)
    {
        parent::__construct($empid, $empname, $salary);
        $this->department_name = $department_name;
        $this->job_description = $job_description;
    }
    public function displayEmployeeDetails()
    {
        echo "Employee ID: {$this->empid}<br>";
        echo "Employee Name: {$this->empname}<br>";
        echo "Salary: $ {$this->salary}<br>";
        echo "Department: {$this->department_name}<br>";
        echo "Job Description: {$this->job_description}<br>";
    }
}
$manager = new Manager("M123", "John Doe", 80000);
$manager->displayManagerDetails();
echo "<br>Employee Details<br><br>";
$employee = new Employee("E456", "Jane Smith", 60000, "IT", "Software Engineer");
$employee->displayEmployeeDetails();
?>