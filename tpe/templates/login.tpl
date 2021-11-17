{include file='templates/header.tpl'}

    <section class="login">
        <div class="row mt-4">
            <div class="col-md-4">
                <h2>{$titulo}</h2>
                <form class="form-alta" action="verify" method="post">
                    <input placeholder="nombre" type="text" name="nombre" id="nombre" required>
                    <input placeholder="password" type="password" name="password" id="password" required>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
            </div>
            
            <h4 class="alert-danger">{$error}</h4>
            <a class="btn btn-danger register" href="showRegisterForm"> Register </a>
        </div>
        <div>
            <h2> Acceso Público</h2>

            <ul>
                <li>
                    <a href="verListaPublica"> Ver gimnastas</a>
                </li>
                <li>
                    <a href="viewAparatos"> Ver aparatos</a>
                </li>
            </ul>
        </div>

        <div>
            <h4>Listar gimnastas por Aparato</h4>
            <form action="viewGymnastByAparato" method="POST">
                <select name="id_aparato">
                {foreach from=$aparatos item=$aparato}
                    <option value="{$aparato->id}">{$aparato->nombre}</option>
                    {/foreach}
                </select>
                <input type="submit">
            </form>
        </div>
    </section>
    {include file='templates/footer.tpl'}