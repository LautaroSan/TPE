<?php
/* Smarty version 3.1.39, created on 2021-11-07 18:02:16
  from 'C:\xampp\htdocs\web2\tpe\templates\GymnastDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618806982f7677_87866025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb3676694a9af45b36e35b66f815d1b9741f348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\GymnastDetail.tpl',
      1 => 1636304511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_618806982f7677_87866025 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form>
    <input type="text" id="idGimnasta" hidden value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_gimnasta;?>
">
    <input type="text" id="userId" hidden value="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" >
    <input type="text" id="texto"placeholder="escribi tu comentario">
    <input type = "number"id="puntaje" min="1" max="10" placeholder ="puntaje" >
    <button id="btnComent"> Comentar</button>
    </form>
    <div>
    <button class="btnOrden" data-criterio="puntaje" data-orden="asc"> Ordenar Comentarios por Puntaje Ascendente</button>
    <button class="btnOrden" data-criterio="puntaje" data-orden="desc"> Ordenar Comentarios por Puntaje Descendente</button>
    <button class="btnOrden" data-criterio="fecha" data-orden="asc"> Ordenar Comentarios por Fecha Ascendente</button>
    <button class="btnOrden" data-criterio="fecha" data-orden="desc"> Ordenar Comentarios por Fecha Descendente</button>
    </div>
   
   <h3> Filtrar comentarios por puntaje </h3>
   <form>
   <label> Mostrar comentarios con puntaje =  </label>
    <input id="puntajeFiltro" type="number" min="1" max ="5" >
    <input id="filtrarPorPuntaje" type="submit">
   </form>

<?php }?>



<?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
