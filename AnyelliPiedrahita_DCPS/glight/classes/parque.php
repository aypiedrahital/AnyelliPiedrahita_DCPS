<?php

class parque extends object_standard
{
    //atributos
    protected $codigo;
    protected $nombre;
    protected $municipio;
    protected $nivel;
    
    //componentes
    var $components = array();
    
    //auxiliar for primary key and for files
    var $auxiliars = array();
    
    //datos de los atributos
    public function metadata()
    {
            return array("codigo"=>array(),"nombre"=>array(),"municipio"=>array(),"nivel"=>array());
    }
    
    public function primary_key()
    {
        return array("codigo");
    }
    
    public function relational_keys($class, $rel_name)
    {
        switch($class)
        {
            default:
                break;
        }
    }
}
