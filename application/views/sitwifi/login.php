<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>.:Sit-Wifi:.</title>

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/img/sitwifi.ico">

	<link rel="stylesheet" href="<?php echo base_url()?>assets/login/css/reset.css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/login/css/style.css">

</head>
<body>

	<!-- Form Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Bienvenido</h1>
  <h3>WiFi Administrable</h3>
  </br>
  <h3>Usuarios</h3>
  <h5>sitroot:1234</h5>
  <h5>anghellp:1234</h5>
</div>

	<!-- Form Module-->
	<div class="module form-module">
	  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
	    <div class="tooltip">Registrarse</div>
	  </div>
	  <div class="form">
	    <h2>Accede a tu cuenta</h2>
	    <form id="formLogin" method="post" action="<?php echo base_url()?>index.php/sitwifi/verificarLogin">
	      <input id="user" name="user" type="text" placeholder="Usuario" autocomplete="off" required />
	      <input id="pass" name="pass" type="password" placeholder="Contraseña" autocomplete="off" required /></i>
	      <button>Iniciar Sesión</button>
	    </form>
	  </div>
	  <div class="form">
	    <h2>Crea una cuenta</h2>
	    <form>
	      <input type="text" placeholder="Usuario"/>
	      <input type="password" placeholder="Contraseña"/>
	      <input type="email" placeholder="Correo electrónico"/>
	      <input type="tel" placeholder="Número de teléfono"/>
	      <button>Registro</button>
	    </form>
	  </div>
	  <div class="cta"><a href="#">¿Olvidaste tu contraseña?</a></div>
	</div>
	<!-- !Form Module-->

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="<?php echo base_url()?>assets/login/js/index.js"></script>

	<script type="text/javascript">
            $(document).ready(function(){

                $('#user').focus();
                $("#formLogin").validate({
                     rules :{
                          user: { required: true},
                          pass: { required: true}
                    },
                    messages:{
                          user: { required: 'Campo Requerido.'},
                          pass: { required: 'Campo Requerido.'}
                    },
                   submitHandler: function( form ){       
                         var datos = $( form ).serialize();
                    
                        $.ajax({
                          type: "POST",
                          url: "<?php echo base_url();?>index.php/sitwifi/verificarLogin?ajax=true",
                          data: datos,
                          dataType: 'json',
                          success: function(data)
                          {
                            if(data.result == true){
                                window.location.href = "<?php echo base_url();?>index.php/sitwifi";
                            }
                            else{
                                $('#call-modal').trigger('click');
                            }
                          }
                          });

                          return false;
                    },

                    errorClass: "help-inline",
                    errorElement: "span",
                    highlight:function(element, errorClass, validClass) {
                        $(element).parents('.control-group').addClass('error');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).parents('.control-group').removeClass('error');
                        $(element).parents('.control-group').addClass('success');
                    }
                });

            });

        </script>

</body>
</html>