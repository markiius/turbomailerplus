<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function getUser($email, $password)
    {
        $this->db->select('email,nombre,numerocelular,cedula,fechanacimiento,codigociudad,rol,verificacioncontrasena');
        $this->db->from('usuarios');
        $this->db->where('email', $email);
        $this->db->where('contraseña', $password);
        $query = $this->db->get();

        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function getUsuariosM($nocontar, $inicio, $filas, $rol)
    {
        $this->db->select("*");
        $this->db->from('usuarios');
        $this->db->where('rol', $rol);
        $this->db->order_by('id ASC');
        if ($nocontar) {
            if ($filas > 0) {
                $this->db->limit($filas, $inicio);
            }
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return false;
            }
        } else {
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->num_rows();
            } else {
                return false;
            }
        }
    }

   
}

/* End of file usuarioModel.php */
