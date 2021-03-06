{include file= 'header.tpl'}
<h1>{$titulo}</h1>


    <table class="table table-striped table-bordered table-hover ">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Aparato</th>
                <th>Altura</th>
                <th>Edad</th>
                <th>Eliminar</th>
                <th>Editar</th>
            </tr>
        </thead>
            <tbody>
                {foreach from=$gymnasts item=$gymnast}
                    <tr>
                            <td>{$gymnast->nombre}</td>
                            <td>{$gymnast->nacionalidad}</td>
                            <td>{$gymnast->aparato}</td>
                            <td>{$gymnast->altura}</td>
                            <td>{$gymnast->edad}</td>
                            <td><a class="btn btn-danger" href="deleteGymnast/{$gymnast->id_gimnasta}">Eliminar</a></td>
                            <td><a class="btn btn-danger" href="getEditForm/{$gymnast->id_gimnasta}">Editar</a></td>
                    </tr>
                {/foreach}
            </tbody>
    </table>

<div class="formContainer"> 
    <h2>Agregar gimnasta</h2>
    <form class="formAparato" action="addGymnast" method="POST" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="nombre y apellido">
        <input type="text" name="nacionalidad" placeholder="nacionalidad">
        <label>Seleccionar Aparato </label>
        <select name="id_aparato">
        {foreach from=$aparatos item=$aparato}
            <option value="{$aparato->id}">{$aparato->nombre}</option>
        {/foreach}   
        </select>
        <input type="text" name="altura" placeholder="altura">
        <input type="number" name="edad" placeholder="edad">
        <label>Imagen </label>
        <input type="file" name="gymnast_image" >
        <input type="submit" class="btn btn-secondary">
    </form>
</div>

   <div class="volver">
    <a href="home" class="btn btn-info"> volver </a>
</div> 

{include file='templates/footer.tpl'}