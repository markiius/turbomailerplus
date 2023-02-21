<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bienvenido extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('rol') == 1) {
            $this->admin();
        }else if($this->session->userdata('rol') == 0){
            $this->usuario();
        }else{
            header('Location:'. base_url());
        }
    }

    public function index(){}

    public function admin()
    {
        $datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
            array("template/modulos/admin/usuarios.js")
        );
        $this->load->view('partials/header', $datos);
        $this->load->view('partials/navbar');
        $this->load->view('administrador/index');
        $this->load->view('partials/footer');
    }

    public function usuario(){
        $datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
            array()
        );
		$this->load->view('generales/head', $datos);
		$this->load->view('welcome_message');
		$this->load->view('generales/footer');
    }

}
