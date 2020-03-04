<?php
  error_reporting(E_ALL);

  class MortgageCalculator {
    public $principle = 0;
    public $annualInterestRate = 0;
    public $noMonthlyPayments = 0;

    public function __construct(){
      $a = func_get_args();
      $i = func_num_args();
      if (method_exists($this,$f='__construct'.$i)) {
          call_user_func_array(array($this,$f),$a);
      }
    }

    public function __construct3($newPrinc, $newAIR, $newNMP){
      $this->principle = $newPrinc;
      $this->annualInterestRate = $newAIR;
      $this->noMonthlyPayments = $newNMP;
    }
  }
  echo "Testing ";
  $testing = new MortgageCalculator(27000,5,6);
  echo "The value is " . $testing->principle;
