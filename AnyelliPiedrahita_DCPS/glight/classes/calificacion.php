<?php

class calificacion extends object_standard
{
    //atributos
    
    protected $calificacion;
    protected $parque;

    
    //components
    var $components = array();
    
    var $auxiliars = array();
    
    public function metadata()
    {
        return array("calificacion"=>array(),
            "parque"=>array("forign_name"=>"c_p","foreign"=>"parque","foreign_attribute"=>"codigo"));
    }
    
    public function primary_key()
    {
        return array();
    }
    
    public function relational_keys($class, $rel_name)
    {
        switch($class)
        {
            case "parque":
                switch ($rel_name)
                {
                    case "c_p":
                        return array("parque");
                    break;
                }
                break;
                    default:
                        break;
        }
    }
    // espacio para funciones y metodos de la clase

}
