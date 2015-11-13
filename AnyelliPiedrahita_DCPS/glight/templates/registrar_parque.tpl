<form class="well form-search" method="post" action="{$gvar.l_global}registrar_parque.php?option=add">
    <h3>Registrar un parque</h3>
    <fieldset>
        <table cellspacing="2" style="width: 50%">
            <tr>
                <td><b>Ingrese el codigo</b></td>
                <td><input type="text" name="codigo" value="{if isset($object->codigo)}{$object->codigo}{/if}"></td>
            </tr>    
            <tr>
                <td><b>Ingrese el nombre</b></td>
                <td><input type="text" name="nombre" value="{if isset($object->name)}{$object->nombre}{/if}"></td>
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