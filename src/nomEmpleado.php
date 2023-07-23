<?php
class nomEmpleado {
    private $name;
    private $hrJob;
    private $hrValue;

    public function __construct($name, $hrJob, $hrValue) {
        $this->name = $name;
        $this->horasTrabajadas = $hrJob;
        $this->hrValue = $hrValue;
    }

    public function calcBasicSalary() {
        return $this->horasTrabajadas * $this->hrValue;
    }

    public function calcSubsidy() {
        if($this->calcBasicSalary()<2000000){
            return $this->calcBasicSalary() * 0.1;
        }else{
            return 0;
        }
         
    }
    
    public function wholdSource(){
        if($this->calcBasicSalary()<2000000){
            return 0;
        }else{
            if($this->calcBasicSalary()>=2000000 and $this->calcBasicSalary() < 4000000){
                return $this->calcBasicSalary() * 0.07;
            }else{
                return $this->calcBasicSalary() * 0.13;
            }  
        }
    }

    public function sSecurity(){
        return  $this->calcBasicSalary() * 0.04;
    }

    public function extHour(){
        if($this->horasTrabajadas>48){
            $horasExt = $this->horasTrabajadas - 48;
            return $horasExt * ($this->hrValue * 2);
        }else{
            return 0;
        }
    }
    public function netIncome(){
        return $this->calcBasicSalary() + $this->extHour() + $this->calcSubsidy() - $this->sSecurity() - $this->wholdSource();
    }
}
