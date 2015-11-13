    <div class="square">
    <h4>Calificar parque</h4>
    <form class="well form-search" method="post" action="{$gvar.l_global}calificar_parque.php?option=calificar">
        <b>Nombre: </b>
        <select name='parque'>
            {section loop=$parque name=i}
                <option value={$parque[i]->get('codigo')}> {$parque[i]->get('nombre')}</option>
            {/section}  
        </select> 
        <br />
        <b>Calificacion: </b>
        <select name='calificacion'>
                <option value=1>1 - Baja</option>
                <option value=5>5 - Alta</option>
        </select>
        <br />
		<b>Seleccione Fecha: </b>
        <select name='fecha'>
				<option value=1>Dia</option>
                <option value=30> Mes</option>
				<option value=1> Año</option>
            
        </select> 
        <br />
        <br /> 
        
        <input class="btn btn-primary" type="submit" value="Calificar"> 
    </form>
   </div>