<?php
require '../modelo/Login.php';
if (!isset($_SESSION)) {
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
        <title>SGSC Web </title>
        <link href="../../static/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/table.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php require '../inicio/menutop.php'; ?>
        </header>
        <article id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="row-fluid">
                        <div class="span12">
                            <ul class="breadcrumb">
                                <li><a href="../inicio/admin.php">Inicio</a><span class="divider"></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12">

                        <div class="panel panel-default panel-table panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col col-xs-1">
                                        <img src="../../static/img/menu/proveedor.png" height="65">
                                    </div>
                                    <div class="col col-xs-3">
                                        <h3>Registro de operador</h3>
                                    </div>                                      
                                </div>                     

                            </div>
                            <div class="panel-body  text-center">
                                <div class="col col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default panel-primary" style="background: #eee">
                                        <div class="panel-heading">
                                            <strong>Ficha de Registro</strong>
                                        </div>
                                        <div class="panel-body">                 
                                            <form id="frm-provincia" class="form-horizontal">

                                                <div class="row-fluid">  
                                                    <input type="hidden" name="action" value="<?= $action ?>">
                                                    <input type="hidden" name="id" value="<?= $id ?>">

                                                    <div class="item form-group hidden">
                                                        <label class="control-label col-xs-2">proId : </label>   
                                                        <div class="col-xs-4">
                                                            <input required="required" name="proId" type="text" class="form-control" value="<?= $this->model->proId ?>">
                                                        </div>   
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-xs-2">Codigo : </label>   
                                                        <div class="col-xs-4">
                                                            <input required="required" name="codigo" type="text" class="form-control" value="<?= $this->model->codigo ?>" onkeypress="return controltag(event)">
                                                        </div>   
                                                    </div> 
                                                    <div class="item form-group">
                                                        <label class="control-label col-xs-2">cedula : </label>   
                                                        <div class="col-xs-4">
                                                            <input required="required" name="ruc" type="text" class="form-control" required placeholder="Ingrese el ruc" value="<?= $this->model->ruc ?>" onkeypress="return controltag(event)">
                                                        </div>                                                        
                                                    </div> 
                                                    <div class="item form-group">
                                                        <label class="control-label col-xs-2">Nombre : </label>   
                                                        <div class="col-xs-6">
                                                            <input required="required" name="nombre" type="text" class="form-control"  placeholder="Ingrese Nombre" value="<?= $this->model->nombre ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,100}">
                                                        </div>                                                        
                                                    </div> 
                                                    <div class="item form-group">
                                                        <label class="control-label col-xs-2">Descripcion : </label>   
                                                        <div class="col-xs-6">
                                                            <input required="required" name="descripcion" type="text" class="form-control" required placeholder="Ingrese Descripcion" value="<?= $this->model->descripcion ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,100}">
                                                        </div>                                                        
                                                    </div> 
                                                    <div class="item form-group">
                                                        <label class="control-label col-xs-2">Telefono : </label>
                                                        <div class="col-xs-3 text-center">
                                                            <input  required="required" class="form-control" type="text" name="telefono" placeholder="Ingrese Numero Telefonico" value="<?= $this->model->telefono ?>" pattern="[0-9]{10}" onkeypress="return controltag(event)">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-xs-2">Email : </label>
                                                        <div class="col-xs-6 text-center">
                                                            <input required="required" class="form-control" type="email" name="email" placeholder="Ingrese Correo Electronico" value="<?= $this->model->email ?>">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-xs-2">Direccion : </label>
                                                        <div class="col-xs-6 text-center">
                                                            <input required="required" class="form-control" type="text" name="direccion" placeholder="Ingrese Direccion" value="<?= $this->model->direccion ?>">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-xs-2">Fecha Registro</label>   
                                                        <div class="col-xs-4">
                                                            <input disabled="" name="fechaRegistroorg" type="text" class="form-control" value="<?= ($this->model->fecharegistro == "" ? date("Y-m-d H:i:s") : $this->model->fecharegistro) ?>">
                                                            <input name="fechaRegistro" type="hidden" class="form-control" value="<?= ($this->model->fecharegistro == "" ? date("Y-m-d H:i:s") : $this->model->fecharegistro) ?>">
                                                        </div>                                                        
                                                    </div> 

                                                    <div class="form-group">
                                                        <label class="control-label col-xs-2">Departamento : </label>   
                                                        <div class="col-xs-5">
                                                            <select class="form-control id_selectProveedorContacto" name="selectProveedorContacto" >
                                                                <?php foreach ($this->dao->listarProveedorcontacto() as $categoriaPerosonal): ?>
                                                                    <option value="<?= $categoriaPerosonal->pcoId ?>"><?= $categoriaPerosonal->nombre ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-xs-2">Estado</label>
                                                        <div class="col-xs-3 text-center">
                                                            <label class="checkbox form-control"><input type="checkbox" name="estado" <?= ($this->model->estado == true ? "checked" : "notchecked") ?> >Activo ?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="form-group">
                                                        <div class="col col-xs-9 col-xs-offset-2">
                                                            <button class="btn btn-success" type="submit">
                                                                <i class="glyphicon glyphicon-save"> </i> 
                                                                Guardar Registro
                                                            </button>                                                            
                                                            <button type="reset" class="btn btn-info">
                                                                <i class="glyphicon glyphicon-refresh"> </i>
                                                                Restablecer
                                                            </button>   
                                                            <button type="reset" onClick="window.location = '../../app/inicio/wproveedor.php?action=tabla'" class="btn btn-danger">
                                                                <i class="glyphicon glyphicon-remove"> </i>
                                                                Cancelar
                                                            </button> 
                                                        </div>                                    
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
            function controltag(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        else if (tecla==0||tecla==9)  return true;
       // patron =/[0-9\s]/;// -> solo letras
        patron =/[0-9\s]/;// -> solo numeros
        te = String.fromCharCode(tecla);
        return patron.test(te);
    }
            $('input:text[name=nombre]').keypress(function (key) {
            window.console.log(key.charCode)
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.charCode != 45) //retroceso
                && (key.charCode != 241) //ñ
                 && (key.charCode != 209) //Ñ
                 && (key.charCode != 32) //espacio
                 && (key.charCode != 225) //á
                 && (key.charCode != 233) //é
                 && (key.charCode != 237) //í
                 && (key.charCode != 243) //ó
                 && (key.charCode != 250) //ú
                 && (key.charCode != 193) //Á
                 && (key.charCode != 201) //É
                 && (key.charCode != 205) //Í
                 && (key.charCode != 211) //Ó
                 && (key.charCode != 218) //Ú
 
                )
                return false;
        });
        
        $('input:text[name=descripcion]').keypress(function (key) {
            window.console.log(key.charCode)
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.charCode != 45) //retroceso
                && (key.charCode != 241) //ñ
                 && (key.charCode != 209) //Ñ
                 && (key.charCode != 32) //espacio
                 && (key.charCode != 225) //á
                 && (key.charCode != 233) //é
                 && (key.charCode != 237) //í
                 && (key.charCode != 243) //ó
                 && (key.charCode != 250) //ú
                 && (key.charCode != 193) //Á
                 && (key.charCode != 201) //É
                 && (key.charCode != 205) //Í
                 && (key.charCode != 211) //Ó
                 && (key.charCode != 218) //Ú
 
                )
                return false;
        });
            $(function () {
                $('.id_selectProveedorContacto').val('<?php echo $this->model->pcoId; ?>');
                $('#frm-provincia').on({
                    submit: function (event) {
                        event.preventDefault();
                        $.ajax({
                            url: 'proveedorAjax.php',
                            type: 'POST',
                            data: $(this).serialize(),
                            dataType: 'json'
                        }).done(function (data) {
                            if (data.resp) {
                                alert("Registro Guardado Correctamente");
                                window.location = '../inicio/wproveedor.php?action=tabla';
                            } else {
                                alert(data.error);
                            }
                        });
                        return false;
                    }
                });
            });
        </script>

    </body>
</html>


