{include file= 'header.tpl'}


<div class="listaPublica">
    <h1>{$titulo}</h1>
    <ul>
        {foreach from=$gymnasts item=$gymnast}
        <li>
            <a href="viewGymnast/{$gymnast->id_gimnasta}"> {$gymnast->nombre} | {$gymnast->aparato}</a>
        </li>
        {/foreach}
    </ul>


    {if $page!= 0}
        <a href="verListaPublica?page={$page-1}" class="btn btn-info ">anterior </a>  
    {/if}    
    {if $page<$ultimaPag}
        <a href="verListaPublica?page={$page+1}" class="btn btn-info">siguiente </a>
    {/if}
</div>



{if $rol}
<div class="listaPublica">
    <h2> Busqueda Avanzada </h2>
    <h3> Buscar gimnasta.. </h3>
        <form action="busquedaAvanzada" method="post">
        <input type="text" name="nacionalidad" placeholder="  de nacionalidad..." >
        <input type="text" name="alturaMayor" placeholder=" de mayor altura que..." >
        <input type="text" name="alturaMenor" placeholder=" de menor altura que..." >
        <input type="number" name="edadMayor" placeholder=" de edad mayor a... " >
        <input type="number" name="edadMenor" placeholder=" de edad menor a..." >
        <input type="submit" class="btn btn-secondary">
    </form>
</div>


    
{/if}

<div class="volver">
    <a href="home" class="btn btn-info"> volver </a>
</div>



{include file='templates/footer.tpl'}