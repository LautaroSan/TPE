<?php
/* Smarty version 3.1.39, created on 2021-09-23 15:11:37
  from 'C:\xampp\htdocs\web2\tpe\templates\EditGymnastForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c7d092aa4f9_78019753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5771960bd9ae153b1501bbb4ff5461ff4edd2cbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\EditGymnastForm.tpl',
      1 => 1632402062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_614c7d092aa4f9_78019753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nombre;?>
 </h1>

<form action="editGymnast" method="POST">
        <label> ID: </label>
         <input type="number" name="id_gimnasta" value ="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_gimnasta;?>
" readonly>
        <label >Nombre y Apellido:</label>
        <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nombre;?>
" >
        <label >Nacionalidad:</label>
        <input type="text" name="nacionalidad" value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nacionalidad;?>
">
        <label>Especialista en: </label>
        <select name="especialista">
            <option value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->aparato;?>
" selected ><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->aparato;?>
</option>
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
            <option value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_aparato;?>
" selected ><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_aparato;?>
(<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->aparato;?>
)</option>
            <option value="1">1 (All-Around)</option>
            <option value="2">2(Suelo)</option>
            <option value="3">3(Arzones)</option>
            <option value="4">4(Anillas)</option>
            <option value="5">5(Salto)</option>
            <option value="6">6(Paralelas)</option>
            <option value="7 Fija">7(Barra Fija)</option>    
        </select>
        <label>Altura: </label>
        <input type="text" name="altura" value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->altura;?>
">
        <label>Edad:</label>
        <input type="number" name="edad" value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->edad;?>
">
        <input type="submit" value="Editar">
    </form>

    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
