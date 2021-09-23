{include file= 'header.tpl'}
<h1>{$titulo}</h1>


    <table class="table table-striped table-bordered table-hover ">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Especialidad (Aparato)</th>
                <th>ID Especialidad</th>
                <th>Altura</th>
                <th>Edad</th>
                <th>Eliminar</th>
                <th>Editar</th>
            </tr>
        </thead>
            <tbody>
                {foreach from=$gymnasts item=$gymnast}
                    <tr>
                            <td><a href="viewGymnast/{$gymnast->id_gimnasta}">{$gymnast->nombre}</a></td>
                            <td>{$gymnast->nacionalidad}</td>
                            <td>{$gymnast->aparato}</td>
                            <td>{$gymnast->id_aparato}</td>
                            <td>{$gymnast->altura}</td>
                            <td>{$gymnast->edad}</td>
                            <td><a class="btn btn-danger" href="deleteGymnast/{$gymnast->id_gimnasta}">Eliminar</a></td>
                            <td><a class="btn btn-danger" href="getEditForm/{$gymnast->id_gimnasta}">Editar</a></td>
                    </tr>
                {/foreach}
            </tbody>
    </table>

    <h2>Agregar gimnasta</h2>
    <form action="addGymnast" method="POST">
        <input type="text" name="nombre" placeholder="nombre y apellido">
        <input type="text" name="nacionalidad" placeholder="nacionalidad">
        <label>Especialista en </label>
        <select name="especialista">
            <option value="All-Around">All-Around</option>
            <option value="Suelo">Suelo</option>
            <option value="Arzones">Arzones</option>
            <option value="Anillas">Anillas</option>
            <option value="Salto">Salto</option>
            <option value="Paralelas">Paralelas</option>
            <option value="Barra Fija">Barra Fija</option>   
        </select>
        <label>ID Especialidad </label>
        <select name="id_aparato">
            <option value="1">1 (All-Around)</option>
            <option value="2">2(Suelo)</option>
            <option value="3">3(Arzones)</option>
            <option value="4">4(Anillas)</option>
            <option value="5">5(Salto)</option>
            <option value="6">6(Paralelas)</option>
            <option value="7">7(Barra Fija)</option>  
        </select>
        <input type="text" name="altura" placeholder="altura">
        <input type="number" name="edad" placeholder="edad">
        <input type="submit">
    </form>

    <a href="viewAparatos">Ver Listado de Especialidades</a>

    <h2>Listar gimnastas por Aparato</h2>
    <form action="viewGymnastByAparato" method="POST">
        <select name="especialista">
            <option value="All-Around">1(All-Around) </option>
            <option value="Suelo">2(Suelo)</option>
            <option value="Arzones">3(Arzones)</option>
            <option value="Anillas">4(Anillas)</option>
            <option value="Salto">5(Salto)</option>
            <option value="Paralelas">6(Paralelas)</option>
            <option value="Barra Fija">7(Barra Fija)</option>
        </select>
        <input type="submit">
    </form>

    

{include file='templates/footer.tpl'}