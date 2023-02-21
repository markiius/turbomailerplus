<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('rol')) {
            header('Location:'. base_url() .'Bienvenido');
        }
    }

    public function index()
    {
        $datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
            array("template/modulos/user/bienvenida.js")
        );
		$this->load->view('generales/head', $datos);
		$this->load->view('welcome_message');
		$this->load->view('generales/footer');
    }

    public function iniciarSesion()
    {

        if ($this->input->post()) {

            $email = $this->input->post('correo');
            $password = $this->input->post('pass');
            $row = $this->UsuarioModel->getUser($email, $password);
            if ($row) {
                if ($row->verificacioncontrasena == 1) {
                    $data = array(
                        "email" => $row->email,
                        "nombre" => $row->nombre,
                        "numerocelular" => $row->numerocelular,
                        "cedula" => $row->cedula,
                        "fechanacimiento" => $row->fechanacimiento,
                        "codigociudad" => $row->codigociudad,
                        "rol" => $row->rol
                    );
                    $this->session->set_userdata($data);
                    echo $row->rol;
                }else{
                    echo json_encode(false);
                }
            } else {
                echo json_encode(false);
            }
        }
    }

    public function destruir()
    {
        $this->session->sess_destroy();
        header('Location: ' . base_url());
    }
}
