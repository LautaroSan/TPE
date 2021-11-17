{include file= 'header.tpl'}
<h1> {$titulo} </h1>
<table class="table table-striped table-bordered table-hover ">
    <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th> Rol</th>
            <th> Permisos </th>
            <th>Eliminar</th>
        </tr>
    </thead>
    {foreach from=$users item=$user}
        <tr>
             <td>
                 {$user->nombre} 
             </td>
             <td>
                {$user->rol}
             </td>
              
             <td> 
                <form action="otorgarPermiso/{$user->id}" method="POST">
                    <select name="permiso" id="">
                        <option value="admin">Si</option>
                        <option value="noAdmin">No</option>
                    </select>
                    <input type="submit" value="Otorgar">
                </form> 
            </td>
            <td>
                <a class="btn btn-danger" href="deleteUser/{$user->id}">Eliminar</a>
            </td>
             
        </tr>
        
    {/foreach}
</table>

<div class="volver">
    <a href="home" class="btn btn-info"> volver </a>
</div>
{include file='templates/footer.tpl'}