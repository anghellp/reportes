<?php

class Clientes extends CI_Controller {
    

    function __construct() {
        parent::__construct();
            if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logueado'))){
            redirect('sitwifi/login');
            }
            $this->load->helper(array('codegen_helper'));
            $this->load->model('clientes_model','',TRUE);
            $this->data['menuClientes'] = 'Clientes';
	}	
	
	function index(){
		$this->gestionar();
	}

	function gestionar(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'vCliente')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar clientes.');
           redirect(base_url());
        }
        $this->load->library('table');
        $this->load->library('pagination');
        
        $config['base_url'] = base_url().'index.php/clientes/gestionar/';
        $config['total_rows'] = $this->clientes_model->count('clientes');
        $config['per_page'] = 10;
        $config['next_link'] = 'Próxima';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div class="pagination alternate"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a style="color: #2D335B"><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'Primero';
        $config['last_link'] = 'Último';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        
        $this->pagination->initialize($config); 	
        
	    $this->data['results'] = $this->clientes_model->get('clientes','idClientes,cliente_nombre,cliente_direccion,cliente_telefono,cliente_correo','',$config['per_page'],$this->uri->segment(3));
       	
       	$this->data['view'] = 'clientes/clientes';
       	$this->load->view('tema/nav',$this->data);
	  
       
		
    }
	
    function adicionar() {
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'aCliente')){
           $this->session->set_flashdata('error','No tiene permiso para agregar clientes.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'cliente_nombre' => set_value('cliente_nombre'),
                'cliente_direccion' => set_value('cliente_direccion'),
                'cliente_telefono' => set_value('cliente_telefono'),
                'cliente_correo' => $this->input->post('cliente_correo'),
                'fechaRegistro' => date('Y-m-d')
            );

            if ($this->clientes_model->add('clientes', $data) == TRUE) {
                $this->session->set_flashdata('success','Cliente agregado con éxito!');
                redirect(base_url() . 'index.php/clientes/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocurrio un error.</p></div>';
            }
        }
        $this->data['view'] = 'clientes/adicionarCliente';
        $this->load->view('tema/nav', $this->data);

    }

    function editar() {
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'eCliente')){
           $this->session->set_flashdata('error','No tiene permiso para editar clientes.');
           redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'cliente_nombre' => $this->input->post('cliente_nombre'),
                'cliente_direccion' => $this->input->post('cliente_direccion'),
                'cliente_telefono' => $this->input->post('cliente_telefono'),
                'cliente_correo' => $this->input->post('cliente_correo')
            );

            if ($this->clientes_model->edit('clientes', $data, 'idClientes', $this->input->post('idClientes')) == TRUE) {
                $this->session->set_flashdata('success','Cliente editado con éxito!');
                redirect(base_url() . 'index.php/clientes/editar/'.$this->input->post('idClientes'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocurrio un error</p></div>';
            }
        }


        $this->data['result'] = $this->clientes_model->getById($this->uri->segment(3));
        $this->data['view'] = 'clientes/editarCliente';
        $this->load->view('tema/nav', $this->data);

    }

    public function visualizar(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'vCliente')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar clientes.');
           redirect(base_url());
        }

        $this->data['result'] = $this->clientes_model->getById($this->uri->segment(3));

        $this->data['custom_error'] = '';
        $this->data['view'] = 'clientes/visualizarCliente';
        $this->load->view('tema/nav', $this->data);

        
    }
	
    public function excluir(){

            if(!$this->permission->checkPermission($this->session->userdata('permiso'),'dCliente')){
               $this->session->set_flashdata('error','No tiene permiso para eliminar clientes.');
               redirect(base_url());
            }

            
            $id =  $this->input->post('id');
            if ($id == null){

                $this->session->set_flashdata('error','Error al intentar eliminar Cliente.');            
                redirect(base_url().'index.php/clientes/gestionar/');
            }


            $this->clientes_model->delete('clientes','idClientes',$id); 

            $this->session->set_flashdata('success','Cliente eliminado con éxito!');            
            redirect(base_url().'index.php/clientes/gestionar/');
    }

}