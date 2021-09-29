{include file= 'header.tpl'}
<div class="container">
    <h1 class="mb-4">{$gymnast->nombre}</h1>
    <h2>Nacionalidad: {$gymnast->nacionalidad}</h2>
    <h2>ID Especialidad: {$gymnast->id_aparato}</h2>
    <h2>Altura: {$gymnast->altura}</h2>
    <h2>Edad: {$gymnast->edad}</h2>

    <a href="home" > Volver </a>
</div>






{include file='templates/footer.tpl'}