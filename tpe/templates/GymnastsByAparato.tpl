{include file= 'header.tpl'}

<h1>{$titulo}{$aparato->nombre}</h1>

    <ul>
        {foreach from=$gymnasts item=$gymnast}
            <li> {$gymnast->nombre}</li>
        {/foreach}
            
    </ul>
 
    
    
    




 <a href="home" > Volver </a>

{include file='templates/footer.tpl'}