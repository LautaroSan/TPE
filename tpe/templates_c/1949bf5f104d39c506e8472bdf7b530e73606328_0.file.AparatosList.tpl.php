<?php
/* Smarty version 3.1.39, created on 2021-09-22 22:21:31
  from 'C:\xampp\htdocs\web2\tpe\templates\AparatosList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b904bf04259_41818587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1949bf5f104d39c506e8472bdf7b530e73606328' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\AparatosList.tpl',
      1 => 1632342089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_614b904bf04259_41818587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aparatos']->value, 'aparato');
$_smarty_tpl->tpl_vars['aparato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aparato']->value) {
$_smarty_tpl->tpl_vars['aparato']->do_else = false;
?>
            <li> <?php echo $_smarty_tpl->tpl_vars['aparato']->value->nombre;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
    </ul>




 <a href="home" > Volver </a>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
