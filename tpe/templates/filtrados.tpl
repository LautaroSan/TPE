{include file= 'header.tpl'}

<h1>{$titulo}</h1>
<p>{$error}</p>
<ul>
    {foreach from=$gymnasts item=$gymnast}
    <li>
        <a href="viewGymnast/{$gymnast->id_gimnasta}"> {$gymnast->nombre} | {$gymnast->nacionalidad} | {$gymnast->altura} mts.| {$gymnast->edad} años</a>
    </li>
    {/foreach}
</ul>

<a href="verListaPublica"> Volver </a>