{include file= 'header.tpl'}

<h1>{$titulo}{$aparato->nombre}</h1>

    <ul>
        {foreach from=$gymnasts item=$gymnast}
            <li> {$gymnast->nombre} : {$gymnast->aparato}</li>
        {/foreach}
            
    </ul>
 
    
    
    




 <a href="login" > Volver </a>

{include file='templates/footer.tpl'}