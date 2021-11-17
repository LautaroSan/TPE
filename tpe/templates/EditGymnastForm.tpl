{include file= 'header.tpl'}
<h1> {$titulo} {$gymnast->nombre} </h1>

<form class="formAparato" action="editGymnast" method="POST">
         <input type="hidden" name="id_gimnasta" value ="{$gymnast->id_gimnasta}" >
        <label >Nombre y Apellido:</label>
        <input type="text" name="nombre" value="{$gymnast->nombre}" >
        <label >Nacionalidad:</label>
        <input type="text" name="nacionalidad" value="{$gymnast->nacionalidad}">
        <label>Aparato</label>
        <select name="id_aparato">
        
        {foreach from=$aparatos item=$aparato}
            <option value="{$aparato->id}"{if $aparato->nombre == $gymnast->aparato} selected {/if}>{$aparato->nombre} 
            </option>
        {/foreach}    
        </select>
        <label>Altura: </label>
        <input type="text" name="altura" value="{$gymnast->altura}">
        <label>Edad:</label>
        <input type="number" name="edad" value="{$gymnast->edad}">
        <input type="submit" class="btn btn-secondary" value="Editar">
    </form>

    {include file='templates/footer.tpl'}