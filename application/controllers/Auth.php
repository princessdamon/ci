<?php

class Auth extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

   public function login()
   {
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $result = $this->user_model->checkLogin($username, $password);
       if($result->num_row > 0){
           //ioggeg in
           redirect('/user/profile');
       }else{
           //fail logged in
        redirect('/');
       }
   }

}
