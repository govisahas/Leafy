<?php



class User{
    
    public $errors = [];
    protected $table = "users";

 //validate function to be accessible from outside the class
   public  function validate($data)
   {
    $this->errors =[];
    //$_Post is the data
     if (empty($data))
     {
       
     }
   if(empty($this->errors))
   {
       return true;
   }
        return false;
    }


}