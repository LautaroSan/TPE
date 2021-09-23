
<h1>{$titulo}</h1>


    <table class="table table-striped table-bordered table-hover ">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Orden Olimpico</th>
                <th>Eliminar</th>
                <th>Editar</th>

            </tr>
        </thead>
            <tbody>
                {foreach from=$aparatos item=$aparato}
                    <tr>
                            <td>{$aparato->nombre}</td>
                            <td>{$aparato->descripcion}</td>
                            <td>{$aparato->orden_olimpico}</td>
                            <td><a class="btn btn-danger" href="deleteAparato/{$aparato->id}">Eliminar</a></td>
                            <td><a class="btn btn-danger" href="getEditFormAparato/{$aparato->id}">Editar</a></td>
                    </tr>
                {/foreach}
            </tbody>
    </table>
    <h2>Agregar Aparato</h2>
    <form action="addAparato" method="POST">

        <input type="text" name="nombre" placeholder="nombre Aparato">
        <textarea name="descripcion" cols="60" rows="1" placeholder="Descripcion aparato"></textarea>
        <input type="text" name="orden_olimpico" placeholder="orden olimpico">
        <input type="submit">
    </form>


    