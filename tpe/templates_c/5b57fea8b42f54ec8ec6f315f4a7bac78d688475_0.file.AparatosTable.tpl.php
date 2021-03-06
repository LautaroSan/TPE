<?php
/* Smarty version 3.1.39, created on 2021-11-17 18:50:04
  from 'C:\xampp\htdocs\web2\tpe\templates\AparatosTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619540cc921b42_36656147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b57fea8b42f54ec8ec6f315f4a7bac78d688475' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\AparatosTable.tpl',
      1 => 1637171390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619540cc921b42_36656147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    
        <table class="table table-striped table-bordered table-hover ">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Orden Olimpico</th>
                    <th>Eliminar</th>
                    <th>Editar</th>

                </tr>
            </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aparatos']->value, 'aparato');
$_smarty_tpl->tpl_vars['aparato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aparato']->value) {
$_smarty_tpl->tpl_vars['aparato']->do_else = false;
?>
                        <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['aparato']->value->nombre;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['aparato']->value->descripcion;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['aparato']->value->orden_olimpico;?>
</td>
                                <td><a class="btn btn-danger" href="deleteAparato/<?php echo $_smarty_tpl->tpl_vars['aparato']->value->id;?>
">Eliminar</a></td>
                                <td><a class="btn btn-danger" href="getEditFormAparato/<?php echo $_smarty_tpl->tpl_vars['aparato']->value->id;?>
">Editar</a></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
        </table>
     <div class="formContainer">   
        <h2>Agregar Aparato</h2>
        <form class="formAparato" action="addAparato" method="POST">

            <input type="text" name="nombre" placeholder="nombre Aparato">
            <textarea name="descripcion" cols="60" rows="1" placeholder="Descripcion aparato"></textarea>
            <input type="text" name="orden_olimpico" placeholder="orden olimpico">
            <input type="submit" class="btn btn-secondary">
        </form>
    </div>
<div class="volver">
    <a href="home" class="btn btn-info"> volver </a>
</div>
  <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}
