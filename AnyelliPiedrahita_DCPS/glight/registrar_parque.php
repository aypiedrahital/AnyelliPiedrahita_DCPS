<?php
require('configs/include.php');

class c_registrar_parque extends super_controller
{
    public function add()
    {
        $parque = new parque($this->post);
        if(is_empty($parque->get('codigo')))
        {
            throw_exception("Debe ingresar un codigo");
        }
     
        $this->orm->connect();
        $this->orm->insert_data("normal",$parque);
        $this->orm->close();
        
        $this->temp_aux ='message.tpl';
        $this->engine->assign('type_warning',"success");
        $this->engine->assign('msg_warning',"parque registrado correctamente");
    }
    
    public function display()
    {

        $this->engine->assign('title','Registrar parque');
        $this->engine->display('header.tpl');
        if($this->error==1)
        {
            $this->engine->assign('object',$this->post); 
            $this->engine->assign('type_warning',$this->type_warning); 
            $this->engine->assign('msg_warning',$this->msg_warning); 
            $this->temp_aux = 'message.tpl';            
        }
        $this->engine->display($this->temp_aux); 
        $this->engine->display('registrar_parque.tpl'); 
        $this->engine->display('footer.tpl');         
    }
    
    public function run() 
    { 
        try {if (isset($this->get->option)){$this->{$this->get->option}();}} 
        catch (Exception $e) {$this->error=1; $this->msg_warning=$e->getMessage();}     
        $this->display(); 
    }     
}

$call = new c_registrar_parque();
$call->run();
