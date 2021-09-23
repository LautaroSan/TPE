<?php
/* Smarty version 3.1.39, created on 2021-09-23 14:40:59
  from 'C:\xampp\htdocs\web2\tpe\templates\GymnastsTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c75dba7c4a6_54800650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8e040735fbe66d2459bfba0496ed685377f189f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\GymnastsTable.tpl',
      1 => 1632400858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_614c75dba7c4a6_54800650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>


    <table class="table table-striped table-bordered table-hover ">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Especialidad (Aparato)</th>
                <th>ID Especialidad</th>
                <th>Altura</th>
                <th>Edad</th>
                <th>Eliminar</th>
                <th>Editar</th>
            </tr>
        </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gymnasts']->value, 'gymnast');
$_smarty_tpl->tpl_vars['gymnast']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gymnast']->value) {
$_smarty_tpl->tpl_vars['gymnast']->do_else = false;
?>
                    <tr>
                            <td><a href="viewGymnast/<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_gimnasta;?>
"><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nombre;?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nacionalidad;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->aparato;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_aparato;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->altura;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->edad;?>
</td>
                            <td><a class="btn btn-danger" href="deleteGymnast/<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_gimnasta;?>
">Eliminar</a></td>
                            <td><a class="btn btn-danger" href="getEditForm/<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_gimnasta;?>
">Editar</a></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
    </table>

    <h2>Agregar gimnasta</h2>
    <form action="addGymnast" method="POST">
        <input type="text" name="nombre" placeholder="nombre y apellido">
        <input type="text" name="nacionalidad" placeholder="nacionalidad">
        <label>Especialista en </label>
        <select name="especialista">
            <option value="All-Around">All-Around</option>
            <option value="Suelo">Suelo</option>
            <option value="Arzones">Arzones</option>
            <option value="Anillas">Anillas</option>
            <option value="Salto">Salto</option>
            <option value="Paralelas">Paralelas</option>
            <option value="Barra Fija">Barra Fija</option>   
        </select>
        <label>ID Especialidad </label>
        <select name="id_aparato">
            <option value="1">1 (All-Around)</option>
            <option value="2">2(Suelo)</option>
            <option value="3">3(Arzones)</option>
            <option value="4">4(Anillas)</option>
            <option value="5">5(Salto)</option>
            <option value="6">6(Paralelas)</option>
            <option value="7">7(Barra Fija)</option>  
        </select>
        <input type="text" name="altura" placeholder="altura">
        <input type="number" name="edad" placeholder="edad">
        <input type="submit">
    </form>

    <a href="viewAparatos">Ver Listado de Especialidades</a>

    <h2>Listar gimnastas por Aparato</h2>
    <form action="viewGymnastByAparato" method="POST">
        <select name="especialista">
            <option value="All-Around">1(All-Around) </option>
            <option value="Suelo">2(Suelo)</option>
            <option value="Arzones">3(Arzones)</option>
            <option value="Anillas">4(Anillas)</option>
            <option value="Salto">5(Salto)</option>
            <option value="Paralelas">6(Paralelas)</option>
            <option value="Barra Fija">7(Barra Fija)</option>
        </select>
        <input type="submit">
    </form>

    

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
