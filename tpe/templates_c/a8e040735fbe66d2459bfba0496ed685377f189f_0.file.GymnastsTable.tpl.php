<?php
/* Smarty version 3.1.39, created on 2021-11-18 01:11:20
  from 'C:\xampp\htdocs\web2\tpe\templates\GymnastsTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61959a2846bda5_60256970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8e040735fbe66d2459bfba0496ed685377f189f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\GymnastsTable.tpl',
      1 => 1637194124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61959a2846bda5_60256970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>


    <table class="table table-striped table-bordered table-hover ">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Aparato</th>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nombre;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nacionalidad;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->aparato;?>
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

<div class="formContainer"> 
    <h2>Agregar gimnasta</h2>
    <form class="formAparato" action="addGymnast" method="POST" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="nombre y apellido">
        <input type="text" name="nacionalidad" placeholder="nacionalidad">
        <label>Seleccionar Aparato </label>
        <select name="id_aparato">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aparatos']->value, 'aparato');
$_smarty_tpl->tpl_vars['aparato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aparato']->value) {
$_smarty_tpl->tpl_vars['aparato']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['aparato']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['aparato']->value->nombre;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
        </select>
        <input type="text" name="altura" placeholder="altura">
        <input type="number" name="edad" placeholder="edad">
        <label>Imagen </label>
        <input type="file" name="gymnast_image" >
        <input type="submit" class="btn btn-secondary">
    </form>
</div>

   <div class="volver">
    <a href="home" class="btn btn-info"> volver </a>
</div> 

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
