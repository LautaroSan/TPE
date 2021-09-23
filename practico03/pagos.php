<form action="" method="POST">
    <input type="text" name="deudor" placeholder="deudor">
    <input type="text" name="cuota" placeholder="cuota">
    <input type="text" name="monto" placeholder="monto">
    <input type="date" name="fecha" placeholder="fecha">
    <input type="submit">
</form>



<form action="" method="POST">
    <input type="text" name="id" placeholder="id">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="profesor" placeholder="profesor">
    <input type="submit">
</form>

<h2>selector carrera</h2>
<form action="" method="POST">
    <input type="text" name="nombreMateria" placeholder=" nombre de la materia">
    <input type="submit">
</form>

<?php
if(!empty($_POST)){
    filtrarMateria($_POST['nombreMateria']);
}
function filtrarMateria ($nombreMat){
    $db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    $sentencia = $db->prepare("select * from materia where carrera like ?");
    $sentencia->execute(array($nombreMat));
    $materias= $sentencia->fetchAll(PDO::FETCH_OBJ);
    mostrarMaterias($materias);
    
}

function listarCarrerasDeTresAnios(){
    $db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    $sentencia = $db->prepare("select * from materia inner join carreras on materia.carrera = carreras.carrera where carreras.duracion > ?");
    $sentencia->execute(array(3));
    $materias= $sentencia->fetchAll(PDO::FETCH_OBJ);
    mostrarMaterias($materias);
}


if(!empty($_GET)){
    $id = (int) $_GET['id'];
    var_dump($id);
    eliminarMateria($id);
}

function eliminarMateria($id){
    $db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    $sentencia = $db->prepare("DELETE FROM materia WHERE id=?");
    $sentencia->execute(array($id));
    header("Location: http://localhost/web2/practico03/pagos.php ");
}

/*if(!empty($_POST)){
    agregarMateria($_POST['id'],$_POST['nombre'],$_POST['profesor']);
}
function agregarMateria($deudor,$cuota,$monto){
    $db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    $sentencia = $db->prepare(" INSERT into materia(id,nombre,profesor) values (?,?,?)");
    $sentencia->execute(array($deudor,$cuota,$monto));
    header("Location: http://localhost/web2/practico03/pagos.php ");
}*/

function getMaterias(){
    $db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    $sentencia = $db->prepare('SELECT * FROM materia');
    $sentencia->execute();

    $materias = $sentencia->fetchAll(PDO::FETCH_OBJ);

    mostrarMaterias($materias);
}

function mostrarMaterias($materias){
    

    $html = "<table>
                <tr> 
                    <th> Id </th>
                    <th> Nombre</th> 
                    <th> Profesor </th>
                    <th> Carrera </th>
                    <th> eliminar </th>
                    <th> editar </th>
    
                </tr>";
    foreach ($materias as $materia) {
        $html.= ' <tr>
                    <td>'. $materia->id . ' </td>
                    <td>'. $materia->nombre . ' </td>
                    <td>'. $materia->profesor . ' </td>
                    <td>'. $materia->carrera . ' </td>
                    <td> <a href=http://localhost/web2/practico03/pagos.php?id='.$materia->id. '> eliminar </a> </td>
                    <td> <a href=""> editar </a> </td>
                    </tr>';
    }
    $html.= "</table>";
    echo $html;
}


getMaterias();
//listarCarrerasDeTresAnios();

/*if(!empty($_POST)){
    agregarPago($_POST['deudor'],$_POST['cuota'],$_POST['monto'],$_POST['fecha']);
}
function agregarPago($deudor,$cuota,$monto,$fecha){
    $db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    $sentencia = $db->prepare(" INSERT into pagos(deudor,cuota,cuota_capital,fecha_pago) values (?,?,?,?)");
    $sentencia->execute(array($deudor,$cuota,$monto,$fecha));
    header("Location: http://localhost/web2/practico03/pagos.php ");
}*/

/*function getPagos(){
    $db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    $sentencia = $db->prepare('SELECT * FROM pagos');
    $sentencia->execute();

    $pagos = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $pagos;
}


$pagos = getPagos();

$html = "<table>
            <tr> 
                <th> Deudor </th>
                <th> Cuota</th> 
                <th> Monto </th>
                <th> Fecha </th>
            </tr>";
foreach ($pagos as $pago) {
    $html.= " <tr>
                <td>". $pago->deudor . " </td>
                <td>". $pago->cuota . " </td>
                <td>". $pago->cuota_capital . " </td>
                <td>". $pago->fecha_pago . " </td>
                </tr>";
}
$html.= "</table>";
echo $html;*/

function agregarListaHardCode (){
    $db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    $sentencia = $db->prepare(" INSERT into pagos(deudor,cuota,cuota_capital,fecha_pago) values (?,?,?,?)");
    $sentencia->execute(array('gustavo',1,250,'2021/11/08'));
}









?>


