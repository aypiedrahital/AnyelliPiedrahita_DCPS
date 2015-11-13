<div class="square">
    <table border="0" width="100%" cellpadding='0' cellspacing='10'>
        <tr><td><b>Listado de Parques</b></td></tr>
        {section loop=$parque name=i}
            <tr><td>
                    <b>Codigo: </b>{$parque[i]->get('codigo')}<br/>
                    <b>Nombre: </b>{$parque[i]->get('nombre')}<br/>
                    <b>Municipio: </b>{$parque[i]->get('municipio')}<br/>
            </td></tr>
        {/section}
    </table>
</div>