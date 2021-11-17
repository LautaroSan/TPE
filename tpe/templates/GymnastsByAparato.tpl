{include file= 'header.tpl'}

<div class="listaPublica">
    <h1>{$titulo}{$aparato->nombre}</h1>

        <ul>
            {foreach from=$gymnasts item=$gymnast}
                <li> {$gymnast->nombre} : {$gymnast->aparato}</li>
            {/foreach}
                
        </ul>
 </div>
    
    
    




 <a href="login" class="btn btn-info" > Volver </a>

{include file='templates/footer.tpl'}