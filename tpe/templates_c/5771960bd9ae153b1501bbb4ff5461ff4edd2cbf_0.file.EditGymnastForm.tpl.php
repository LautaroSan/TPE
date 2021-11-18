<?php
/* Smarty version 3.1.39, created on 2021-11-18 19:28:20
  from 'C:\xampp\htdocs\web2\tpe\templates\EditGymnastForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61969b44255269_72836961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5771960bd9ae153b1501bbb4ff5461ff4edd2cbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\EditGymnastForm.tpl',
      1 => 1637260097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61969b44255269_72836961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nombre;?>
 </h1>

<form class="formAparato" action="editGymnast" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="id_gimnasta" value ="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_gimnasta;?>
" >
        <label >Nombre y Apellido:</label>
        <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nombre;?>
" >
        <label >Nacionalidad:</label>
        <input type="text" name="nacionalidad" value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nacionalidad;?>
">
        <label>Aparato</label>
        <select name="id_aparato">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aparatos']->value, 'aparato');
$_smarty_tpl->tpl_vars['aparato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aparato']->value) {
$_smarty_tpl->tpl_vars['aparato']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['aparato']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['aparato']->value->nombre == $_smarty_tpl->tpl_vars['gymnast']->value->aparato) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['aparato']->value->nombre;?>
 
            </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
        </select>
        <label>Altura: </label>
        <input type="text" name="altura" value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->altura;?>
">
        <label>Edad:</label>
        <input type="number" name="edad" value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->edad;?>
">
        <label>Imagen </label>
        <input type="file" name="gymnast_image">
        <input type="submit" class="btn btn-secondary" value="Editar">
    </form>

    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
