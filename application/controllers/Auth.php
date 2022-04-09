<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_perpus');
    }
    public function index(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');
        if($this->form_validation->run() == false){
            $this->load->view('v_login');
        }
        else{
            $this->login();
        }
    }

    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
        
        $user = $this->db->get_where('tbl_users', ['username' => $username])->row_array();
		$cek = $this->M_perpus->cek_login("tbl_users",$where)->num_rows();
		// if($cek > 0){
		// 	$data_session = array(
		// 		'username' => $username,
		// 		'status' => "login"
		// 		);
		// 	$this->session->set_userdata($data_session);
		// 	redirect(base_url("admin"));
		// }else{
		// 	echo "Username dan password salah !";
		// }
        if($this->form_validation->run() == true){
            if($user){
                if($cek > 0){
                    $data = [
                    'id_users' => $user['id_users'],
                    'username' => $user['username'],
                    // 'role_id' => 1,
                    'status' => 'login'
                    ];
                    $this->session->set_userdata($data);
                    redirect('Perpus');
                    // print_r($this->session->userdata());
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><strong>Password salah</strong></div>');
                    redirect('auth'); 
                }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><strong>Akun tidak terdaftar!</strong></div>');
                redirect('auth'); 
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><strong>Silahkan Isi Username dan Password terlebih dahulu!</strong></div>');
            // redirect('auth'); 
            // echo "gagal";
            var_dump($username);
            var_dump($password);
        }
	}

    public function logout(){
        $this->session->unset_userdata('username');
        //$this->session->unset_userdata('role_id');
        // $this->session->session_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah logout</div>');
        redirect('auth');
    }
}
?>
<!-- <script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 1000);

  window.setTimeout(function() {
    $(".alert2").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 2000);
</script> -->