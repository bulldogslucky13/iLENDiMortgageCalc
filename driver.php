<?php
  error_reporting(E_ALL);
  include 'Classes';
  echo "Testing";
  echo "here";
  $testing = new MortgageCalculator();
  echo "here";
  echo "The value is " . $testing->getPrinciple();
