<?php

  class User {
    private $first_name;
    private $last_name;

    public function setfirstname($val){
      $this->first_name = strtolower(strip_tags($val));
    }
    public function getfirstname(){
      return $this->first_name;
    }
    public function setlastname($val){
      $this->last_name = strtolower(strip_tags($val));
    }
    public function getlastname(){
      return $this->last_name;
    }
  }

  $login = new User();
  echo '<h1>HELLO!</h1>';
  $login->setfirstname('bob ');
  $login->setlastname('mob');
  echo $login->getfirstname();
  echo $login->getlastname();
