<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="../../static/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/table.css" rel="stylesheet" type="text/css"/>
        <style>
            tr:hover{
                color: #000000;
            }
        </style>
    </head>
    <body>
        <article id="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="row-fluid">
                        <div class="span12">
                            <ul class="breadcrumb">
                                <li><a href="../inicio/admin.php">Inicio</a><span class="divider"></span></li>
                                <li><a href="javascript:window.location.reload();" class="active">Articulo</a> <span class="divider">/</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="panel panel-default panel-table panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col col-xs-1">
                                        <img src="../../static/img/menu/inventario_arroz_2.png" height="65">
                                    </div>
                                    <div class="col col-xs-3">
                                        <h3>PRODUCTOS</h3>
                                    </div>                                    
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col col-xs-6">
<!--                                        <div class="input-group">
                                            <div class="input-group-btn search-panel">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                    <span id="search_concept">Buscar Por </span> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#contains">Contains</a></li>                                                    
                                                    <li class="divider"></li>
                                                    <li><a href="#all">Anything</a></li>
                                                </ul>
                                            </div>
                                            <input type="hidden" name="search_param" value="all" id="search_param">         
                                            <input type="text" class="form-control" name="x" placeholder="Buscar Articulos">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                            </span>
                                        </div>-->
                                    </div>
                                    <div class="col col-xs-6 text-right">
                                        <div class="btn-group">
                                            <a class="btn btn-success" href="../ajax/articuloAjax.php?action=nuevo">
                                                <i class="glyphicon glyphicon-plus-sign"> </i>  
                                                Nuevo Registro
                                            </a>
                                            <a href="javascript:window.location.reload();" class="btn btn-primary">
                                                <i class="glyphicon glyphicon-refresh"> </i>
                                                Actualizar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body" style="overflow: auto;">
                                <table class="table table-hover table-bordered table-responsive table-striped" id="tdatos">
                                    <thead>
                                        <tr>
                                            <th>Nº</th>
<!--                                            <th>Codigo</th>-->
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Img</th>
<!--                                             <th>Ubicacion</th>-->
<!--                                            <th>Fechaalta</th>-->
                                            <th>Presentacion</th>
<!--                                            <th>Marca</th>-->
<!--                                            <th>Modelo</th>-->
                                            <th>StockMinimo</th>
                                            <th>Stock</th>
                                            <th>Precio</th>
                                            <th>Costo</th>
                                            <th>Iva</th>
<!--                                            <th>FechaRegistro</th>-->
<!--                                                <th>Observacion</th>-->
                                            <th>Activo</th>
                                            <th class="hidden">proId</th>
                                            <!--<th>Proveedor</th>-->
                                            <th class="hidden">ctgId</th>
                                            <!--<th>Categoria</th>-->
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tdetalle">
                                        <?php foreach ($this->dao->listar() as $articulo): ?>
                                            <tr>
                                                <td align="center"><?= $articulo->artId ?></td>
<!--                                                <td align="center"><?= $articulo->codigo ?></td>-->
                                                <td align="center"><?= $articulo->nombre ?></td>
                                                <td align="center"><?= $articulo->descripcion ?></td>
                                                <td align="center">
                                                    <img src="<?= $articulo->img == '' ? '../../static/img/img/avatar.png' : $articulo->img ?>" height="50"> 
                                                </td>
<!--                                                <td align="center"><?= $articulo->ubicacion ?></td>-->
<!--                                                <td align="center"><?= substr($articulo->fecha_alta,0,10) ?></td>-->
                                                <td align="center"><?= $articulo->presentacion ?></td>
<!--                                                <td align="center"><?= $articulo->marca ?></td>-->
<!--                                                <td align="center"><?= $articulo->modelo ?></td>-->
                                                <td align="center"><?= $articulo->stock_minimo ?></td>
                                                <td align="center"><?= $articulo->stock ?></td>
                                                <td align="center"><?= $articulo->precio ?></td>
                                                <td align="center"><?= $articulo->costo ?></td>
                                                <td align="center"><span class="label label-info" title="Activo"><?= (($articulo->iva == true) ? "Iva" : "Sin Iva") ?></span></td>
<!--                                                <td align="center"><?= substr($articulo->fecharegistro,0,10) ?></td>-->
<!--                                                <td align="center"><?= $articulo->observacion ?></td>-->
                                                <?php if ($articulo->activo != true) { ?>
                                                        <td align="center"><span class="label label-danger" title="Inactivo">Inactivo</span></td>
                                                    <?php } else { ?>
                                                        <td align="center"><span class="label label-success" title="Activo">Activo</span></td>
                                                    <?php } ?>
                                                <!--<td align="center"><span class="label label-success" title="Activo"><?= (($articulo->activo == true) ? "Activo" : "Inactivo") ?></span></td>-->
                                                <td align="center" class="hidden"><?= $articulo->proId->proId ?></td>
                                                <!--<td align="center"><?= $articulo->proId->nombre ?></td>-->
                                                <td align="center" class="hidden"><?= $articulo->ctgId->ctgId ?></td>
                                                <!--<td align="center"><?= $articulo->ctgId->nombre ?></td>-->
                                                <td align="center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            <i class="glyphicon glyphicon-log-in"></i> Opciones
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a rel="action" data-json='{"action":"editar","id":"<?= $articulo->artId ?>"}'>
                                                                    <i class="glyphicon glyphicon-edit"></i> Editar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a rel="action" data-json='{"action":"eliminar","id":"<?= $articulo->artId ?>"}'>
                                                                    <i class="glyphicon glyphicon-remove"></i> Eliminar
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col col-xs-4">Page 1 of 5
                                    </div>
                                    <div class="col col-xs-8">
                                        <ul class="pagination hidden-xs pull-right">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                        </ul>
                                        <ul class="pagination visible-xs pull-right">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </article>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            $(function () {
                $('#tdatos #tdetalle').on('click', 'a[rel="action"]', function () {
                    var data = $(this).data('json');
                    if (data.action === 'editar') {
                        window.location = '../ajax/articuloAjax.php?action=editar&id=' + data.id;
                    } else {
                        $.ajax({
                            url: '../ajax/articuloAjax.php',
                            type: 'POST',
                            data: {'id': data.id, 'action': data.action},
                            dataType: 'json'
                        }).done(function (data) {
                            if (data.resp) {
                                alert("Eliminado");
                                window.location = 'warticulo.php?action=tabla';
                            } else {
                                alert(data.error);
                            }
                        });
                    }
                });
            });
        </script>    
    </body>
</html>



