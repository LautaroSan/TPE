{include file='templates/header.tpl'}

<div class="container">
<h2>{$titulo}</h2>

    <a class="btn btn-warning" href="logout">Logout </a>
    {if $rol =="admin"}
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
{/if}


<ul>
    <li>
        <a href="verListaPublica"> ver gimnastas</a> 
    </li>
    <li>
        <a href="viewAparatos"> ver aparatos</a>
    </li>
    

    
</div>

   {include file='templates/footer.tpl'}