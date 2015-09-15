<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitwifi extends CI_Controller {

	/*public function index()
	{
		$this->load->view('sitwifi');
	}*/

	public function __construct() {
        parent::__construct();
        $this->load->model('sitwifi_model','',TRUE);
        
    }

	public function index() {
        if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logueado'))){
            redirect('sitwifi/login');
        }
        
        $this->data['menuPanel'] = 'Panel';
        $this->data['view'] = 'sitwifi/contenido';
        $this->load->view('tema/nav',  $this->data);
      
    }

    public function miCuenta() {
        if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logueado'))){
            redirect('sitwifi/login');
        }

        $this->data['usuario'] = $this->sitwifi_model->getById($this->session->userdata('id'));
        $this->data['view'] = 'sitwifi/miCuenta';
        $this->load->view('tema/nav',  $this->data);
    }

	public function login(){
        $this->load->view('sitwifi/login');
    }
    
    public function salir(){
        $this->session->sess_destroy();
        redirect('sitwifi/login');
    }


    public function verificarLogin(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('user','Usuario','required|xss_clean|trim');
        $this->form_validation->set_rules('pass','Contraseña','required|xss_clean|trim');
        $ajax = $this->input->get('ajax');
        if ($this->form_validation->run() == false) {
            
            if($ajax == true){
                $json = array('result' => false);
                echo json_encode($json);
            }
            else{
                $this->session->set_flashdata('error','Los datos de acceso son incorrectos.');
                redirect($this->login);
            }
        } 
        else {

            $user = $this->input->post('user');
            $pass = $this->input->post('pass');

            $this->load->library('encrypt');   
            $pass = $this->encrypt->sha1($pass);

            $this->db->where('user',$user);
            $this->db->where('pass',$pass);
            $this->db->where('estado',1);
            $this->db->limit(1);
            $usuario = $this->db->get('usuarios')->row();
            if(count($usuario) > 0){
                $datos = array('nombre' => $usuario->nombre, 'id' => $usuario->idUsuarios, 'permiso' => $usuario->permisos_id , 'logueado' => TRUE);
                $this->session->set_userdata($datos);

                if($ajax == true){
                    $json = array('result' => true);
                    echo json_encode($json);
                }
                else{
                    redirect(base_url().'index.php');
                }

                
            }
            else{
                                
                if($ajax == true){
                    $json = array('result' => false);
                    echo json_encode($json);
                }
                else{
                    $this->session->set_flashdata('error','Los datos de acceso son incorrectos.');
                    redirect($this->login);
                }
            }
            
        }
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */