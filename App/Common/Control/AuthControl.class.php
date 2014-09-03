<?php
   if (!defined("HDPHP_PATH")) exit("error commit!");
   class AuthControl extends Control{
   public function __init(){
   if (!$this->checkAuth()) {
      echo "<script>top.location.href='"
      .U("Admin/Login/login").
      "';</script>";
      exit;
   }
   }

   public function checkAuth(){
   if (session("AID")) {
   	   return true;
   }else{
   		return false;
   }
   }
   }
