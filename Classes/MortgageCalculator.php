<?php
error_reporting(E_ALL);

class MortgageCalculator {
  private $principle;
  private $annualInterestRate;
  private $noMonthlyPayments;

  function __construct(){
    $principle = 0;
    $annualInterestRate = 0;
    $noMonthlyPayments = 0;
  }

  function __construct1($newPrinc, $newAIR, $newNMP){
    $principle = $newPrinc;
    $annualInterestRate = $newAIR;
    $noMonthlyPayments = $newNMP;
  }

  function getPrinciple(){
    echo $principle;
  }
}
