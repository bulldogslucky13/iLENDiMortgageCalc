<?php
  error_reporting(E_ALL);
  require_once("Classes/MortgageCalculator.php");

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
