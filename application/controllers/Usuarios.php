<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

   public function getUsuarios()
    {
        if ($this->input->post()) {
            $draw = $this->input->post('draw');
            $inicio = $this->input->post('start');
            $filas = $this->input->post('length');

            $rol = $this->input->post('rol');
            

            $total = $this->UsuarioModel->getUsuariosM(false, $inicio, $filas, $rol);
            $datos = $this->UsuarioModel->getUsuariosM(true, $inicio, $filas, $rol);

            $resultado = array(
                "draw" => $draw,
                "recordsTotal" => $total,
                "recordsFiltered" => $total,
                "data" => $datos
            );

            echo json_encode($resultado);
        }
    }
}

/* End of file inicioController.php */
