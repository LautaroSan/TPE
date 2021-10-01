{include file='templates/header.tpl'}

    
        <div class="row mt-4">
            <div class="col-md-4">
                <h2>{$titulo}</h2>
                <form class="form-alta" action="verify" method="post">
                    <input placeholder="nombre" type="text" name="nombre" id="nombre" required>
                    <input placeholder="password" type="password" name="password" id="password" required>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
            </div>
        </div>
        <h4 class="alert-danger">{$error}</h4>
        <a class="btn btn-danger" href="showRegisterForm"> Register </a>

    
        <h2> Acceso Público</h2>

        <ul>
            <li>
                <a href="verListaPublica"> Ver gimnastas</a>
            </li>
            <li>
                 <a href="viewAparatos"> Ver aparatos</a>
            </li>
        </ul>

        <h4>Listar gimnastas por Aparato</h4>
    <form action="viewGymnastByAparato" method="POST">
        <select name="id_aparato">
            <option value="1">All-Around </option>
            <option value="2">Suelo</option>
            <option value="3">Arzones</option>
            <option value="4">Anillas</option>
            <option value="5">Salto</option>
            <option value="6">Paralelas</option>
            <option value="10">Barra Fija</option>
        </select>
        <input type="submit">
    </form>
    
    {include file='templates/footer.tpl'}