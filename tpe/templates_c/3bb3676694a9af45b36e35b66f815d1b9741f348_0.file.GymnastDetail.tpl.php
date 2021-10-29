<?php
/* Smarty version 3.1.39, created on 2021-10-29 22:01:08
  from 'C:\xampp\htdocs\web2\tpe\templates\GymnastDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617c53041edd46_52541222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb3676694a9af45b36e35b66f815d1b9741f348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\GymnastDetail.tpl',
      1 => 1635537666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_617c53041edd46_52541222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nombre;?>
</h1>
    <h2>Nacionalidad: <?php echo $_smarty_tpl->tpl_vars['gymnast']->value->nacionalidad;?>
</h2>
    <h2>Aparato: <?php echo $_smarty_tpl->tpl_vars['gymnast']->value->aparato;?>
</h2>
    <h2>Altura: <?php echo $_smarty_tpl->tpl_vars['gymnast']->value->altura;?>
</h2>
    <h2>Edad: <?php echo $_smarty_tpl->tpl_vars['gymnast']->value->edad;?>
</h2>

    <a href="verListaPublica"> Volver </a>
</div>

    <div id="contenedor" data-id="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_gimnasta;?>
" data-rol ="<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
">
    </div>


<?php if ($_smarty_tpl->tpl_vars['rol']->value) {?>
    <h2> Agregar Comentario </h2>
    <input type="text" id="idGimnasta" hidden value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_gimnasta;?>
">
    <input type="text" id="userId" hidden value="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" >
    <input type="text" id="texto"placeholder="escribi tu comentario">
    <input type = "number"id="puntaje" min="1" max="10" placeholder ="puntaje" >
    <button id="btnComent"> Comentar</button>
<?php }?>



<?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
