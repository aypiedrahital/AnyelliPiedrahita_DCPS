<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 16:32:54
         compiled from "C:/wamp/www/glight/templates\registrar_parque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26694564602a6045759-62037021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b27dccabdfbace29689a9017f953b37f1504520' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\registrar_parque.tpl',
      1 => 1447428628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26694564602a6045759-62037021',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form class="well form-search" method="post" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrar_parque.php?option=add">
    <h3>Registrar un parque</h3>
    <fieldset>
        <table cellspacing="2" style="width: 50%">
            <tr>
                <td><b>Ingrese el codigo</b></td>
                <td><input type="text" name="codigo" value="<?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value->codigo)){?><?php echo $_smarty_tpl->getVariable('object')->value->codigo;?>
<?php }?>"></td>
            </tr>    
            <tr>
                <td><b>Ingrese el nombre</b></td>
                <td><input type="text" name="nombre" value="<?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value->name)){?><?php echo $_smarty_tpl->getVariable('object')->value->nombre;?>
<?php }?>"></td>
            </tr>


            <tr>
                <td><b>Seleccione el municipio</b></td>
                <td><select name='municipio'>
                        <option value='Medellín'>Medellín</option>
                        <option value='Rionegro'>Rionegro</option>
                        <option value='La_estrella'>La_estrella</option>
                        <option value='Copacabana'>Copacabana</option>
						 <option value='Guatape'>Guatape</option>
                    </select> 
                </td>        
            </tr>        
            <tr> 
            <tr>
                <td><b>Seleccione el nivel</b></td>
                <td><select name='nivel'>
                        <option value='Alto'>Alto</option>
                        <option value='Bajo'>Bajo</option>
                    </select> 
                </td>        
            </tr>        
            <tr>                 
                <td> <input class="btn btn-primary" type="submit" value="Registrar"> <td>
            </tr>   
            
        </table>
    </fieldset>
</form> 