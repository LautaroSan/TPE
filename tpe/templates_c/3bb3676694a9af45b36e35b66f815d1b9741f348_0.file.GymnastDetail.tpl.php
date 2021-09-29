<?php
/* Smarty version 3.1.39, created on 2021-09-29 23:19:14
  from 'C:\xampp\htdocs\web2\tpe\templates\GymnastDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154d8524a2876_19847746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb3676694a9af45b36e35b66f815d1b9741f348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\GymnastDetail.tpl',
      1 => 1632949846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6154d8524a2876_19847746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nombre;?>
</h1>
    <h2>Nacionalidad: <?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nacionalidad;?>
</h2>
    <h2>ID Especialidad: <?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_aparato;?>
</h2>
    <h2>Altura: <?php echo $_smarty_tpl->tpl_vars['gymnast']->value->altura;?>
</h2>
    <h2>Edad: <?php echo $_smarty_tpl->tpl_vars['gymnast']->value->edad;?>
</h2>

    <a href="home" > Volver </a>
</div>






<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
