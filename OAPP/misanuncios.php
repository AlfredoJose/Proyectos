<?php   

    require_once("sesion.php");
    require_once("DBManager.php");
    
    $sesion = new sesion();
    $usuario = $sesion->get("usuario");
    $nombre = $sesion->get("nombre");
    

    
    if( $usuario == false ){    
        header("Location: index.php");      
    }
    
    require_once("cusuarios.php");
    $objUsuario=new usuarios();
    
    if(isset($_GET["operacion"]))
        $operacion=$_GET["operacion"];


     $objUsuario=new usuarios();
    $arreglo=$objUsuario->estado($usuario);
    $perfil=$arreglo[0];
    


    //include 'log.php';

?>
<!DOCTYPE html>
<html lang="es" >
<head>
	<title>TopShop</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/boot.css">
	<link rel="shortcut icon" href="img/m.png">
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
	<link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />


</head>
<body>

	 
	
	<div class="panel">
		<div class="sidebar-toggle-box hidden-phone">

    <div class="icon-reorder"></div>

</div>
<a class="brand" href="index.php" style="color:#FFF">

    
    <p class="op">OAPP Online La mejor Forma de Comprar y Vender</p>
           

</a>
</div>
<div class="m">
<ul class="nav pull-right top-menu">

    <!--

     BEGIN SUPPORT 

    -->
    <div class="dropmover">
     <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Premium" href="misanuncios.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-bookmark-empty"></i>
       </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Premium" href="premium.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-star"></i>
       </a>


    </li>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="publicara.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-bullhorn"></i>
        </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="cerrarsesion.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-minus-sign"></i>


    </li>
      <li class="dropdown-2ppp">
       
            <span class="usuariosesion" ><a class="username" href="top.php">Inicio</a></span>
            <b class="caret"></b>

        

        <ul class="dropdown-menu extended logout">
           
        </ul>
    </li>

    </div>

   
  
    <!--

     END USER LOGIN DROPDOWN 

    -->

</ul>

</div>

<section>
<div id="barra1p"><h2 class="pp"><i class=" icon-bullhorn"></i> Mis Anuncios.</h2></div>
    
    <?php 
 $tamano_pagina=10;

    if (isset($_GET['pagina']))
        $pagina= $_GET["pagina"];
    else 
        $pagina='';
   
    if (!$pagina) {
        $inicio = 0; 
        $pagina=1;
    }
    else {
        $inicio = ($pagina - 1) * $tamano_pagina;
    }



    $objUsuario =new usuarios();

    $result=$objUsuario->consultar_mis_anuncios("");


    $num_total_registros = pg_num_rows($result);

    $total_paginas = ceil($num_total_registros / $tamano_pagina);

    $result=$objUsuario->consulta_limitada("",$tamano_pagina,$inicio);

    $numero=pg_num_rows($result);


    
    
    
         while ($arr = pg_fetch_array($result, NULL, PGSQL_ASSOC )) {

            
            
            
        echo "<a href='productos.php?id=".$arr['id']."'>";
        echo "<div class='row-fluid product-search'>";
        
        
        echo '<div class="span4 product-text">
               <img alt="" class="imggg" src="imgproductos/'.$arr["imagen"].'">
                <div class="portfolio-text-info">
                  <h4 class="tituloar">'.$arr["nombre"].' </h4>
               
                  </div>
                  </div>
                  ';
        echo "<div class='span8'>
           <div class='product-info'>
                 Vendidos
                 <span>0</span>
            </div>
            <div class='product-info'>
                 Existentes
            <span>".$arr['exsistencias']."</span>
            </div>
            <div class='product-info'>
                 Precio
            <span>".$arr['precio']."</span>
            </div>
            <div class='product-info'>
                 Editar
            <span><a class='inconoeliminar' href='misanuncios.php?operacion=actualizar&nombre=$arr[nombre]&precio=$arr[precio]&exsistencias=$arr[exsistencias]&descipcion[descipcion]&id=$arr[id]'><i class='icon-edit'></i></a></span>
            </div>
            <div class='product-info'>
                 Eliminar
            <span><a class='inconoeliminar' href='misanuncios.php?operacion=eliminar&id=$arr[id]'><i class='icon-remove-sign'></i></a></span>
            </div>
            
             </div>
        </div>";
        echo "</a>";
       
    
        if(@$operacion=="eliminar"){
            $id = $_GET["id"];
            $objUsuario=new usuarios();                        
                $result=$objUsuario->eliminar($id);
            if($result)
                header("Location: misanuncios.php");
            else
                echo "usuario no fue eliminado con exito";
                            
    }
     if(@$operacion=="actualizar"){ 
                            if(!isset($_POST["actualizar"])){//el usuario no le ha dado click a actualizar
                                $nombre = $_GET["nombre"];
                                $precio = $_GET["precio"];
                                $exsistencias = $_GET["exsistencias"];
                                $descipcion = $_GET["descipcion"];

                                ?>
                                <div id="actualizar" class="myform">
                                    <form id="frmactu" name="frmactu" action="<?php echo $_SERVER['PHP_SELF'].'?operacion=actualizar' ?>" method="POST">
                                        <h2 class="actualizaranuncios">Actualizar El Anuncio</h1>
                                        <p class="minitut">Actualiza Todos Los Campos..</p>
                                        <label>Nombre</label>
                                        <input class="text" type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" />
                                        <label>Precio</label>
                                        <input class="text" type="text" name="precio" id="precio" value="" />
                                        <label>Existencias</label>
                                        <input class="text" type="number" name="exsistencias" value="<?php echo $exsistencias; ?>" /><br>
                                        <label>Descripcion</label>
                                        <textarea class="des" name="descipcion"></textarea>
                                        <button class="botoncitop" type='submit' name='actualizar'>Actualizar</button>                            
                                        <div class="spacer"></div>
                                    </form>
                                </div>
                        <?php
                            }
                            else{
                                $nombre= $_POST["nombre"];
                                $precio = $_POST["precio"];
                                $exsistencias = $_POST["exsistencias"];
                                $descipcion = $_POST["descipcion"];
                                                                  
      
                                $objUsuario=new usuarios();                        
                                $result=$objUsuario->actualizar($nombre,$precio,$exsistencias,$descipcion);
                                if($result)
                                    header("Location: misanuncios.php");
                                else
                                    echo "La Publicacion No Fue Actualizado Con Exito... Intente De Nuevo";
                            }
                        }
    

        
}


       
    if($num_total_registros) {
        echo "<div style='clear: bont;'></div><div class='page'>Pagina:</div> ";
            for ($i=1; $i<=$total_paginas; $i++){
                if ($pagina == $i)
                    echo "<div style='clear: bont;'></div><div class='page'>".$pagina."</div> ";
                else
                    echo "<div style='clear: bont;'></div><a class='color' href='top.php?pagina=$i'>$i</a>";
            }    
        }


         ?>
        

</section>
