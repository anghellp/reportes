<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Permission Class
 *
 * Biblioteca para controle de permissões
 *
 * @author		Ramon Silva
 * @copyright	        Copyright (c) 2013, Ramon Silva.
 * @since		Version 1.0
 * v... Visualizar
 * e... Editar
 * d... Deletar ou Desabilitar
 * c... Cadastrar
 * array de permissoes para o autosig.
 */

class Permission{

    var $Permission = array();
    var $table = 'permisos';//Nombre de la tabla donde se almacenan los permisos
    var $pk = 'idPermisos';// Nombre Llave Primaria tabla principal
    var $select = 'permiso';// El campo donde es la matriz de permisos

    public function  __construct() {
        log_message('debug', "Permission Class Initialized");
        $this->CI =& get_instance();
        $this->CI->load->database();

    }

    public function checkPermission($idPermiso = null,$actividad = null){
        if($idPermiso == null || $actividad == null){
            return false;
        }
        // Si los permisos no se cargan, requisitos de carga
        if($this->Permission == null){
            // Compara la actividad solicitada por el permiso.
            if(!$this->loadPermission($idPermiso)){
                return false;
            }
        }

        if(is_array($this->Permission[0])){

        
            if(array_key_exists($actividad, $this->Permission[0])){
                // Asignar los permisos al atributo permiso
                if ($this->Permission[0][$actividad] == 1) {
                    return true;
                } else {
                    return false;
                }
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }

    }

    private function loadPermission($id = null){

        if($id != null){
            $this->CI->db->select($this->table.'.'.$this->select);
            $this->CI->db->where($this->pk,$id);
            $this->CI->db->limit(1);
            $array = $this->CI->db->get($this->table)->row_array();
            
            if(count($array) > 0){

                $array = unserialize($array[$this->select]);
                //Asignar los permisos al atributo permiso
                $this->Permission = array($array);
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

}