<!DOCTYPE html>
<html>
    <head><meta charset="euc-jp">

        <title>FERRETERIA PLUAS 1.0</title>
        <link href="../../static/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/login.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/estilo.css" rel="stylesheet" type="text/css"/>
        <style>
            body{
                background-image: url('../../static/img/menu/ferreteria_pluas_logo.jpg');
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100%,100%;
                background-color: #464646;
            }
            .logomain:hover{
                background: #b1dcf8;
                cursor: pointer;
            }
            .cuentahover:hover{
                background-color: #b1dcf8;
            }
            .clavehover:hover{
                background: #b1dcf8;
            }
        </style>
    </head>
    <body>
        <!--        
                
                <nav class="navbar navbar-blue navbar-fixed-top" role="navigation" style="background: #388E3C">
             Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
                <div class="left_col">
                    <div class="col-lg-12">
                        <div class="col-lg-3" >
                            <img class="img-rounded logomain" width=75px" height="40px" src="../../static/img/menu/logo2022.png" />
                        </div>
                    </div>
                </div>
            </div>
        
             Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../inicio/admin.php"><span class="glyphicon glyphicon-home"></span>SISTEMA DE GESTION DE SERVICIOS: PILADORA BRITO</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> Calendar</a></li>              
                </ul>
        
                <ul class="nav navbar-nav navbar-right" style="margin-right:1%">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-envelope"></span>Inbox <span class="label label-info">32</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="label label-warning">4:00 AM</span>Favourites Snippet</a></li>
                            <li><a href="#"><span class="label label-warning">4:30 AM</span>Email marketing</a></li>
                            <li><a href="#"><span class="label label-warning">5:00 AM</span>Subscriber focused email
                                    design</a></li>
                            <li class="divider"></li>
                            <li><a href="#" class="text-center"> View All</a></li>
                        </ul>
        
                </ul>
            </div>
             /.navbar-collapse 
        </nav>-->
        
        <div class="span_3_of_2">
            <div >
                <div class="row-fluid">
                    <div class="col-lg-8" style="margin-top: 35px;">
                        <div class="col-lg-offset-7">
                            <div class="card card-container">
                                <div class="row-fluid text-center">
                                    <div id='loading' hidden="">
                                        <img src="../../static/img/menu/loading3.gif" >
                                    </div>
                                </div>
                                <h4 class="text-center">SISTEMA DE INVENTARIO</h4>
                                <h4 class="text-center">FERRETERIA PLUAS</h4>
                                <h4 class="text-center">DAULE - ECUADOR</h4>
                                <img id="profile-img" class="profile-img-card" src="../../static/img/menu/cliente_2.png" width="100" height="100"/>
                                <p id="profile-name" class="profile-name-card"></p>
                                <form class="form-signin" method="POST" id="frm-login" action="../controlador/CtrUsuario.php">
                                    <div style="display: none" class="alert alert-danger alert-dismissable" id="error"></div>
                                    <input type="text" id="cuenta" name="cuenta" class="form-control cuentahover" placeholder="waleska@gmail.com" required autofocus>
                                    <input type="password" id="clave" name="clave" class="form-control clavehover" placeholder="Password ********" required>               
                                    <button id="btnLogin" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">
                                        <span id="caption">INGRESAR AL SISTEMA</span>
                                    </button>
                                </form><!-- /form -->
<!--                                <p style="margin-top: 15px; font-size: 12px;">
                                    En caso de problemas, contactarce a: piladorabrito@gmail.com 
                                </p>-->
                            </div><!-- /card-container -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../static/js/vendor/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="../../static/js/vendor/jquery.min2.0.js" type="text/javascript"></script>
        <script>
            $(function () {
                $('.logomain').on('click', function () {
                    alert();
                });
                $('#frm-login').on({
                    submit: function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: "iniciarsession.php",
                            type: 'POST',
                            data: {cuenta: $('#cuenta').val(), clave: $('#clave').val(), action: 'login'},
                            dataType: 'json',
                            beforeSend: function (xhr) {
                                $('#loading').show('slow');
                            }
                        }).done(function (data) {
                            if (data.resp) {
                                window.location = 'admin.php';
                            } else {
                                alert('el usuario incorrecto');
                            }
                            $('#loading').hide('fast');
                        });
                        return false;
                    }
                });
            });
        </script>
    </body>
</html>