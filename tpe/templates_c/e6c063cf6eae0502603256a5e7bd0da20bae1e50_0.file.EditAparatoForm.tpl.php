<?php
/* Smarty version 3.1.39, created on 2021-10-08 00:41:55
  from 'C:\xampp\htdocs\web2\tpe\templates\EditAparatoForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f77b3ece419_49584112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c063cf6eae0502603256a5e7bd0da20bae1e50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\EditAparatoForm.tpl',
      1 => 1633646510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615f77b3ece419_49584112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['aparato']->value->nombre;?>
 </h1>

<form action="editAparato" method="POST">
        <input type="hidden" name="id" value ="<?php echo $_smarty_tpl->tpl_vars['aparato']->value->id;?>
" >
        <label >Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['aparato']->value->nombre;?>
" >
        <label >Descripcion:</label> 
        <textarea name="descripcion" cols="60" rows="5" placeholder="Descripcion aparato"> <?php echo $_smarty_tpl->tpl_vars['aparato']->value->descripcion;?>
</textarea>
        <label>Orden Olimpico: </label>
        <input type="text" name="orden_olimpico" value="<?php echo $_smarty_tpl->tpl_vars['aparato']->value->orden_olimpico;?>
" >
        <input type="submit" value="Editar">
    </form>

    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
