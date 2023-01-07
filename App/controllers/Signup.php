<?php



class Signup extends Controller{
    
   public  function index(){

   $user = new User();
   $result = $user->validate($_POST);
   var_dump($result);
     show($_POST);
    $data['title'] = "signup";
        $this->view('signup', $data);
    }


}