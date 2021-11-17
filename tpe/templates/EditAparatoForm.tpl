{include file= 'header.tpl'}
<h1> {$titulo} {$aparato->nombre} </h1>

<form class="formAparato" action="editAparato" method="POST">
        <input type="hidden" name="id" value ="{$aparato->id}" >
        <label >Nombre:</label>
        <input type="text" name="nombre" value="{$aparato->nombre}" >
        <label >Descripcion:</label> 
        <textarea name="descripcion" cols="60" rows="5" placeholder="Descripcion aparato"> {$aparato->descripcion}</textarea>
        <label>Orden Olimpico: </label>
        <input type="text" name="orden_olimpico" value="{$aparato->orden_olimpico}" >
        <input type="submit" class="btn btn-secondary" value="Editar">
    </form>

    {include file='templates/footer.tpl'}