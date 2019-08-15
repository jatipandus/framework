<?php

class Validation extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]',
                        array('required' => 'You must provide a %s.','min_length'=>'%s Harus Lebih Dari 5 karakter')
                );
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('forminput');
                }
                else
                {
                        echo "Berhasil";
                        //$this->load->view('formsuccess');
                }
        }
}

?>