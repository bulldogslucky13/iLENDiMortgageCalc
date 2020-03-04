<?php
  error_reporting(E_ALL);

  class MortgageCalculator {
    public $principle = 0;
    public $annualInterestRate = 0;
    public $loanDuration = 0;
    //For testing purposes, the annual income will be set to a fixed $150000.
    public $annual_income = 150000; //TODO Allow this to be changed before a push to production
    public $DTI = 0;
    public $monthly_income;
    public $monthly_payment;
    public $other_debt = 1500; //TODO Allow this to be changed before a push to production
    public $down_payment = 150;

    public function __construct(){
      $a = func_get_args();
      $i = func_num_args();
      if (method_exists($this,$f='__construct'.$i)) {
          call_user_func_array(array($this,$f),$a);
      }
    }

    public function __construct4($newPrinc, $newAIR, $newDur, $newDTI){
      $this->principle = $newPrinc;
      $this->annualInterestRate = $newAIR;
      $this->loanDuration = $newDur;
      $this->DTI = $newDTI;
      $this->calcMonthlyIncome();
      $this->calcMonthlyPayment();
      $this->calcDownPayment($this->principle); //TODO Move to calculate this only after the mortgage is calculated
    }

    public function monthlyIncomeCalc(){
      $this->monthly_income = $this->annual_income/12;
    }

    public function calcMonthlyIncome(){
      $this->monthly_income = $this->annual_income/12;
    }

    public function calcMonthlyPayment(){
      $this->monthly_payment = $this->monthly_income*$this->DTI-$this->other_debt;
    }

    public function convertDecimalToPercentage($a){
      return $a*100;
    }

    public function calcDownPayment($mortgage){
      $this->down_payment = ($mortgage*.2);
    }
  }

  echo "<p>We're going to do some real neat testing stuff here</p>";
  $testing = new MortgageCalculator(300000,5,30,.36);
  echo "<p>The <b>principle</b> value is $" . $testing->principle."</p>";
  echo "<p>The <b>annual interest rate</b> is " . $testing->annualInterestRate."%</p>";
  echo "<p>The <b>loan duration</b> is " . $testing->loanDuration." years</p>";
  echo "<p>Your <b>annual gross income</b> is $" . $testing->annual_income."</p>";
  echo "<p>That means you have a <b>monthly income</b> of $" . $testing->monthly_income."</p>";
  echo "<p>The <b>DTI</b> used for this calculation is " . $testing->convertDecimalToPercentage($testing->DTI)."%</p>";
  echo "<p>That means you have a <b>monthly payment</b> of $" . $testing->monthly_payment."</p>";
  echo "<p>The <b>initial down payment</b> used for this calculation is $" . $testing->down_payment."</p>";
