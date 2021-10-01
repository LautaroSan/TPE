{include file= 'header.tpl'}

<h1>{$titulo}</h1>
    <ul>
        {foreach from=$aparatos item=$aparato}
            <li> {$aparato->nombre}</li>
        {/foreach}
            
    </ul>




 <a href="login" > Volver </a>

{include file='templates/footer.tpl'}