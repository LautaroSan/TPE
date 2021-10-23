{include file='templates/header.tpl'}
<div class="container">
<h2>{$titulo}</h2>

    <a class="btn btn-warning" href="logout">Logout </a>

    <ul>
                <li>
                    <a href="administrarGymnasts"> Administrar gimnastas</a>
                </li>
                <li>
                    <a href="administrarAparatos"> Administrar aparatos</a>
                </li>
                <li>
                    <a href="administrarUsuarios"> Administrar usuarios</a>
                </li>
    </ul>
</div>

   {include file='templates/footer.tpl'}