{include file= 'header.tpl'}

<div class="listaPublica">
    <h1>{$titulo}</h1>
        <ul>
            {foreach from=$aparatos item=$aparato}
                <li> {$aparato->nombre}</li>
            {/foreach}
                
        </ul>

</div>


 <a href="home" class="btn btn-info" > Volver </a>

{include file='templates/footer.tpl'}