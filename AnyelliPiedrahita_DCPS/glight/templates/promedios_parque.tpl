<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr><td><b>Promedio parques nivel alto</b></td></tr>

{section loop=$parque name=i}
<tr><td>
    <b>Nombre:</b> {$parque[i]->get('nombre')}<br />
    </td></tr>
{/section}
</table>