<?php

require('./configs/include.php');

class c_calificar_parque extends super_controller
{
    public function calificar()
    {
        $calificacion = new calificacion($this->post);
     
        $this->orm->connect();
        $this->orm->insert_data("normal",$calificacion);
        $this->orm->close();
        
        $this->temp_aux ='message.tpl';
        $this->engine->assign('type_warning',"success");
        $this->engine->assign('msg_warning',"Calificación registrada");        
    }
    
    public function display()
    {
  
        $options['parque']['lvl2']="all";
        $this->orm->connect();
        $this->orm->read_data(array("parque"),$options);
        
        $parque=$this->orm->get_objects("parque");
        $this->orm->close();
        $this->engine->assign('parque',$parque);
        
        
        $this->engine->assign('title','Calificar parque'); 
        $this->engine->display('header.tpl'); 
               if($this->error==1)
        {
            $this->engine->assign('object',$this->post); 
            $this->engine->assign('type_warning',$this->type_warning); 
            $this->engine->assign('msg_warning',$this->msg_warning); 
            $this->temp_aux = 'message.tpl';            
        }
        $this->engine->display($this->temp_aux);
        $this->engine->display('calificar_parque.tpl'); 
        $this->engine->display('footer.tpl');
    }
    public function run() 
    { 
        if (isset($this->get->option)){$this->{$this->get->option}();} 
        $this->display();         
    }     
}

$call = new c_calificar_parque(); 
$call->run(); 

?>
