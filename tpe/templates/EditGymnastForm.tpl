{include file= 'header.tpl'}
<h1> {$titulo} {$gymnast->nombre} </h1>

<form action="editGymnast" method="POST">
        <label> ID: </label>
         <input type="number" name="id_gimnasta" value ="{$gymnast->id_gimnasta}" readonly>
        <label >Nombre y Apellido:</label>
        <input type="text" name="nombre" value="{$gymnast->nombre}" >
        <label >Nacionalidad:</label>
        <input type="text" name="nacionalidad" value="{$gymnast->nacionalidad}">
        <label>Especialista en: </label>
        <select name="especialista">
            <option value="{$gymnast->aparato}" selected >{$gymnast->aparato}</option>
            <option value="Suelo">Suelo</option>
            <option value="Arzones">Arzones</option>
            <option value="Anillas">Anillas</option>
            <option value="Salto">Salto</option>
            <option value="Paralelas">Paralelas</option>
            <option value="Barra Fija">Barra Fija</option>
            <option value="All-Around">All-Around</option>
        </select>
        <label>ID Especialidad</label>
        <select name="id_aparato">
            <option value="{$gymnast->id_aparato}" selected >{$gymnast->id_aparato}({$gymnast->aparato})</option>
            <option value="1">1 (All-Around)</option>
            <option value="2">2(Suelo)</option>
            <option value="3">3(Arzones)</option>
            <option value="4">4(Anillas)</option>
            <option value="5">5(Salto)</option>
            <option value="6">6(Paralelas)</option>
            <option value="7 Fija">7(Barra Fija)</option>    
        </select>
        <label>Altura: </label>
        <input type="text" name="altura" value="{$gymnast->altura}">
        <label>Edad:</label>
        <input type="number" name="edad" value="{$gymnast->edad}">
        <input type="submit" value="Editar">
    </form>

    {include file='templates/footer.tpl'}