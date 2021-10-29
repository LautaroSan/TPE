{include file= 'header.tpl'}
<div class="container">
    <h1 class="mb-4">{$gymnast->nombre}</h1>
    <h2>Nacionalidad: {$gymnast->nacionalidad}</h2>
    <h2>Aparato: {$gymnast->aparato}</h2>
    <h2>Altura: {$gymnast->altura}</h2>
    <h2>Edad: {$gymnast->edad}</h2>

    <a href="verListaPublica"> Volver </a>
</div>

    <div id="contenedor" data-id="{$gymnast->id_gimnasta}" data-rol ="{$rol}">
    </div>


{if $rol }
    <h2> Agregar Comentario </h2>
    <input type="text" id="idGimnasta" hidden value="{$gymnast->id_gimnasta}">
    <input type="text" id="userId" hidden value="{$userId}" >
    <input type="text" id="texto"placeholder="escribi tu comentario">
    <input type = "number"id="puntaje" min="1" max="10" placeholder ="puntaje" >
    <button id="btnComent"> Comentar</button>
{/if}



<script src="js/app.js"></script>
{include file='templates/footer.tpl'}