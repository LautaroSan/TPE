{include file= 'header.tpl'}

<h1>{$titulo}</h1>

<ul>
    {foreach from=$gymnasts item=$gymnast}
    <li>
        <a href="viewGymnast/{$gymnast->id_gimnasta}"> {$gymnast->nombre} : {$gymnast->aparato}</a>
    </li>
    {/foreach}
</ul>

<a href="login"> volver </a>




{include file='templates/footer.tpl'}