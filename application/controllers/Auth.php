<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function login()
	{
        check_already_login();
		$this->load->view('login');
	}

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            ?>

    <script src="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js" type="text/javascript"></script>
    <link href="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/plugins/sweetalert2/animate.min.css" rel="stylesheet" type="text/css" />
    <style>
        body{
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 1.124em;
        font-weight:normal;
        }
        
    </style>
    <body>
        
    </body>
    <?php

            if($query->num_rows() > 0) {
                $row = $query->row();                
                $params = array(
                    'user_id' => $row->user_id,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                ?>
   
    
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Selamat, login berhasil'
        }).then((result) => {
            window.location='<?=site_url('dashboard')?>';
        })
    </script>
               
                    <!-- window.location='".site_url('dashboard')."'; -->
             
                <?php
            }else { ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Failure',
                        text: 'Login gagal, username / password salah',
                        showClass: {
                        popup: 'animate__animated animate__swing'
                        }
                    }).then((result) => {
                        window.location='<?=site_url('auth/login')?>';
                    })
                </script>
                <?php
            }
        }
    }

    public function logout() {
        $params = array('user_id', 'level');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}
