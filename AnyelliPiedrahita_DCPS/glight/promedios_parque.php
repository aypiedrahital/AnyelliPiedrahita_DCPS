<?php

require('./configs/include.php');
class c_promedios_parque extends super_controller
{
    public function display()
    {
        $options['parque']['lvl2']="by_alto";
        $this->orm->connect();
        $this->orm->read_data(array("parque"),$options);
        
        $parque=$this->orm->get_objects("parque");
        $this->orm->close(); 
        $this->engine->assign('title','Promedio de los parques');
        $this->engine->display('header.tpl');
        $this->engine->display('listar_parques.tpl');
        $this->engine->display('footer.tpl');
    }
    public function run()
    {
        $this->display();
    }
}

$call=new c_promedios_parque();
$call->run();

?>
