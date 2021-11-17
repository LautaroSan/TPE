{include file= 'header.tpl'}
<div class="container">
    <h1 class="mb-4">{$gymnast->nombre}</h1>
    <h2>Nacionalidad: {$gymnast->nacionalidad}</h2>
    <h2>Aparato: {$gymnast->aparato}</h2>
    <h2>Altura: {$gymnast->altura}</h2>
    <h2>Edad: {$gymnast->edad}</h2>

    <a href="verListaPublica" class="btn btn-info volver"> Volver </a>
</div>

    <div id="contenedor" data-id="{$gymnast->id_gimnasta}" data-rol ="{$rol}">
    </div>


{if $rol }
<div class="d-flex align-items-center flex-column">
    <h2> Agregar Comentario </h2>
    <form class="formAparato">
    <input type="text" id="idGimnasta" hidden value="{$gymnast->id_gimnasta}">
    <input type="text" id="userId" hidden value="{$userId}" >
    <input required type="text" id="texto"placeholder="escribi tu comentario">
    <input required type = "number"id="puntaje" min="1" max="10" placeholder ="puntaje" >
    <button class="btn btn-secondary" id="btnComent"> Comentar</button>
    </form>
</div>
<div class="d-flex align-items-center flex-column ">
    <h2> Ordenar Comentarios </h2>
    <div class="ordenar">
        <button class="btnOrden btn btn-secondary" data-criterio="puntaje" data-orden="asc"> Ordenar Comentarios por Puntaje Ascendente</button>
        <button class="btnOrden btn btn-secondary" data-criterio="puntaje" data-orden="desc"> Ordenar Comentarios por Puntaje Descendente</button>
        <button class="btnOrden btn btn-secondary" data-criterio="fecha" data-orden="asc"> Ordenar Comentarios por Fecha Ascendente</button>
        <button class="btnOrden btn btn-secondary" data-criterio="fecha" data-orden="desc"> Ordenar Comentarios por Fecha Descendente</button>
    </div>
</div>
<div class="d-flex align-items-center flex-column filtro">
   <h3> Filtrar comentarios por puntaje </h3>
   <form>
    <label> Mostrar comentarios con puntaje =  </label>
        <input id="puntajeFiltro" type="number" min="1" max ="5" >
        <input id="filtrarPorPuntaje" type="submit" class="btn btn-secondary" >
   </form>
</div>
{/if}



<script src="js/app.js"></script>
{include file='templates/footer.tpl'}