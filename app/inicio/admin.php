<?php
require '../modelo/Login.php';
require '../modelo/Tipo_usuario.php';

if (session_id() == '') {
    session_start();
}
if (empty($_SESSION['_USER_'])) {
    header('location:login.php');
    exit();
}
$user = $_SESSION['_USER_'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PILADORA 1.0</title>
        <link href="../../static/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/estilo.css" rel="stylesheet" type="text/css"/>

        <style>
            .logomain:hover{
                background: #b1dcf8;
                cursor: pointer;
            }

            #fondo{
                background: #388E3C;
            }
        </style>

    </head>
    <body>
        <header>
            <?php require './menutop.php'; ?>
        </header>
        <!-- /top nav -->
        <article id="content">
<!--            <div class="container">
                <div class="panel panel-primary text-center">-->
                    <!--<div id="fondo" class="panel-heading "><h4>BIENVENIDOS AL SISTEMA DE GESTION DE SERVICIOS: PILADORA BRITO</h4></div>-->
                    <div class="panel-body">
                        <div class="container-fluid">
                            <div class="row-fluid" id="menu">                                
                                <a href="../../app/vista/vVentaEstable.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/vender.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">VENTA DE PRODUCTOS</h4>
                                            <span class="icondesc">VENTA DE PRODUCTOS</span>
                                        </div>
                                    </div>
                                </a>
                                
                                <a href="../../app/vista/vCompra.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/compra1.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">REGISTRAR PRODUCTOS AL INVENTARIO</h4>
                                            <span class="icondesc">REGISTRAR PRODUCTOS AL INVENTARIO</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="warticulo.php?action=tabla" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/producto_1.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">PRODUCTOS EN LA BODEGA</h4>
                                            <span class="icondesc">PRODUCTOS EN LA BODEGA</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="wcategoriaArticulo.php?action=tabla" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/articulo.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">TIPO DE PRODUCTOS</h4>
                                            <span class="icondesc">TIPO DE PRODUCTOS</span>
                                        </div>
                                    </div>
                                </a>                               
                                <a href="wproveedor.php?action=tabla" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/proveedor_2.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">PROVEEDORES</h4>
                                            <span class="icondesc">PROVEEDORES</span>
                                        </div>
                                    </div>
                                </a>
                                <?php if ($user->tpuId != 98): ?>
                                    <a href="./wusuario.php?action=tabla" class="icon well sbox">
                                        <div class="iconimage">
                                            <div class="pd">
                                                <img src="../../static/img/menu/usuario.png" border="0">
                                            </div>
                                        </div>
                                        <div class="iconname">
                                            <div class="pd">
                                                <h4 class="tituloicon">USUARIOS DEL SISTEMA</h4>
                                                <span class="icondesc">USUARIOS DEL SISTEMA</span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                                <!--                                <a href="./wcategoriaPersonal.php?action=tabla" class="icon well sbox">
                                                                    <div class="iconimage">
                                                                        <div class="pd">
                                                                            <img src="../../static/img/menu/ct5.png" border="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="iconname">
                                                                        <div class="pd">
                                                                            <h4 class="tituloicon">Categoria Personal</h4>
                                                                            <span class="icondesc">Administración de Categoria Personal</span>
                                                                        </div>
                                                                    </div>
                                                                </a>-->
                                <!--                                <a href="wpersonal.php?action=tabla" class="icon well sbox">
                                                                    <div class="iconimage">
                                                                        <div class="pd">
                                                                            <img src="../../static/img/menu/per.png" border="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="iconname">
                                                                        <div class="pd">
                                                                            <h4 class="tituloicon">Personal</h4>
                                                                            <span class="icondesc">Administración de Personal</span>
                                                                        </div>
                                                                    </div>
                                                                </a>-->
                                <!--                                <a href="wproveedorContacto.php?action=tabla" class="icon well sbox">
                                                                    <div class="iconimage">
                                                                        <div class="pd">
                                                                            <img src="../../static/img/menu/proveedor.png" border="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="iconname">
                                                                        <div class="pd">
                                                                            <h4 class="tituloicon">Proveedor Contacto</h4>
                                                                            <span class="icondesc">Administración de Proveedor Contacto</span>
                                                                        </div>
                                                                    </div>
                                                                </a>-->
                                
                                

                                <!--                                <a href="wtipoUsuario.php?action=tabla" class="icon well sbox">
                                                                    <div class="iconimage">
                                                                        <div class="pd">
                                                                            <img src="../../static/img/menu/tu.png" border="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="iconname">
                                                                        <div class="pd">
                                                                            <h4 class="tituloicon">Tipo Usuario</h4>
                                                                            <span class="icondesc">Administración de Tipo de Usuario</span>
                                                                        </div>
                                                                    </div>
                                                                </a>-->
                                <!--                                <a href="wciudad.php?action=tabla" class="icon well sbox">
                                                                    <div class="iconimage">
                                                                        <div class="pd">
                                                                            <img src="../../static/img/menu/ciudad_agricola.png" border="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="iconname">
                                                                        <div class="pd">
                                                                            <h4 class="tituloicon">Lugar de Ubicacion</h4>
                                                                            <span class="icondesc">Administración de Ubicacion</span>
                                                                        </div>
                                                                    </div>
                                                                </a>-->
                                <!--                                <a href="wprovincia.php?action=tabla" class="icon well sbox">
                                                                    <div class="iconimage">
                                                                        <div class="pd">
                                                                            <img src="../../static/img/menu/provincia1.png" border="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="iconname">
                                                                        <div class="pd">
                                                                            <h4 class="tituloicon">Provincia</h4>
                                                                            <span class="icondesc">Administración de Provincias</span>
                                                                        </div>
                                                                    </div>
                                                                </a>-->
                                <a href="wcliente.php?action=tabla" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/cliente.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">CLIENTES DEL SISTEMA</h4>
                                            <span class="icondesc">CLIENTES DEL SISTEMA</span>
                                        </div>
                                    </div>
                                </a>

                                <!--                                <a href="../../app/vista/vCompra.php" class="icon well sbox">
                                                                    <div class="iconimage">
                                                                        <div class="pd">
                                                                            <img src="../../static/img/menu/pagoservicios.png" border="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="iconname">
                                                                        <div class="pd">
                                                                            <h4 class="tituloicon">Pago Servicios</h4>
                                                                            <span class="icondesc">Servicios Basicos</span>
                                                                        </div>
                                                                    </div>
                                                                </a>-->

                                <!--                                <a href="../../app/vista/vCompra.php" class="icon well sbox">
                                                                    <div class="iconimage">
                                                                        <div class="pd">
                                                                            <img src="../../static/img/menu/pagoempleados.png" border="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="iconname">
                                                                        <div class="pd">
                                                                            <h4 class="tituloicon">Pago Empleados</h4>
                                                                            <span class="icondesc">Pago de Empleados</span>
                                                                        </div>
                                                                    </div>
                                                                </a>-->

<!--                                                                <a href="../../app/vista/vCompra.php" class="icon well sbox">
                                                                    <div class="iconimage">
                                                                        <div class="pd">
                                                                            <img src="../../static/img/menu/margenganancias.png" border="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="iconname">
                                                                        <div class="pd">
                                                                            <h4 class="tituloicon">Margen Ganancias</h4>
                                                                            <span class="icondesc">Margen de Ganancias</span>
                                                                        </div>
                                                                    </div>
                                                                </a>-->

<!--                                <a href="../../app/reporte/vReporteGanancia.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/estadoresultados.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Estado Resultados</h4>
                                            <span class="icondesc">Estado de Resultados</span>
                                        </div>
                                    </div>
                                </a>-->

                                <a href="../../app/reporte/vReportesEstable.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/reporte.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Reportes</h4>
                                            <span class="icondesc">Administracón de Reportes</span>
                                        </div>
                                    </div>
                                </a>
                                <!--
                                <a href="../../app/reporte/vReportesTop.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/top1.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Top Clientes</h4>
                                            <span class="icondesc">Reportes de Clientes en Ventas</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="../../app/reporte/vReporteGanancia.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/ganancia.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Ganancia</h4>
                                            <span class="icondesc">Reportes de Ganancia : Venta, Compra, Empleados</span>
                                        </div>
                                    </div>
                                </a>
                                -->
                            </div>
                            <hr>
                        </div>
                    </div>
<!--                </div>
            </div>-->
        </article>
        <script src="../../static/js/vendor/jquery-1.11.2.js" type="text/javascript"></script>
        <script src="../../static/js/vendor/bootstrap.min_1.js" type="text/javascript"></script>
    </body>
</html>
