<?php

//model
class Salary{
    public function salaryCalculator($brutSalary){
        $netSalary=$brutSalary - (25*$brutSalary)/100 + (10*$brutSalary)/100 + (10*$brutSalary)/100;
        return $netSalary;
    }
}

//view

class SalaryView{
    public function showSalary($netSalary){
        echo "net salary: " . $netSalary;
    }
}

//controller

class SalaryController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new Salary();
        $this->view = new SalaryView();
    }

    public function calculate ($brutSalary){
        $netSalary= $this->model->salaryCalculator($brutSalary);
        $this->view->showSalary($netSalary);
    }
}