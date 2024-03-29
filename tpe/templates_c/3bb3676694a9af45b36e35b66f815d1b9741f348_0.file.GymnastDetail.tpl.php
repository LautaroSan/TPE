<?php
/* Smarty version 3.1.39, created on 2021-11-18 19:00:22
  from 'C:\xampp\htdocs\web2\tpe\templates\GymnastDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619694b678e9f9_56833865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb3676694a9af45b36e35b66f815d1b9741f348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\GymnastDetail.tpl',
      1 => 1637258419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619694b678e9f9_56833865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div >
<?php if ($_smarty_tpl->tpl_vars['gymnast']->value->img) {?>

    <img src="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->img;?>
" alt="imagen gimnasta">
    
<?php }?>
</div>
    <div >
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
    
    <a href="verListaPublica" class="btn btn-info volver"> Volver </a>
</div>
    


    <div id="contenedor" data-id="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_gimnasta;?>
" data-rol ="<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
">
    </div>


<?php if ($_smarty_tpl->tpl_vars['rol']->value) {?>
<div class="d-flex align-items-center flex-column">
    <h2> Agregar Comentario </h2>
    <form class="formAparato">
    <input type="text" id="idGimnasta" hidden value="<?php echo $_smarty_tpl->tpl_vars['gymnast']->value->id_gimnasta;?>
">
    <input type="text" id="userId" hidden value="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" >
    <input required type="text" id="texto"placeholder="escribi tu comentario">
    <input required type = "number"id="puntaje" min="1" max="5" placeholder ="puntaje (máximo 5)" >
    <button class="btn btn-secondary" id="btnComent"> Comentar</button>
    </form>
</div>
<div class="d-flex align-items-center flex-column ">
    <h2> Ordenar Comentarios </h2>
    <div class="ordenar">
        <button class="btnOrden btn btn-secondary" data-criterio="puntaje" data-orden="asc"> Ordenar Comentarios por Puntaje Ascendente</button>
        <button class="btnOrden btn btn-secondary" data-criterio="puntaje" data-orden="desc"> Ordenar Comentarios por Puntaje Descendente</button>
        <button class="btnOrden btn btn-secondary" data-criterio="fecha" data-orden="asc"> Ordenar Comentarios por Fecha Ascendente</button>
        <button class="btnOrden btn btn-secondary" data-criterio="fecha" data-orden="desc"> Ordenar Comentarios por Fecha Descendente</button>
    </div>
</div>
<div class="d-flex align-items-center flex-column filtro">
   <h3> Filtrar comentarios por puntaje </h3>
   <form>
    <label> Mostrar comentarios con puntaje =  </label>
        <input id="puntajeFiltro" type="number" min="1" max ="5" >
        <input id="filtrarPorPuntaje" type="submit" class="btn btn-secondary" >
   </form>
</div>
<?php }?>



<?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
