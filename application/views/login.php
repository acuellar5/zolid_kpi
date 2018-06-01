<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>LOGIN ZOLID</title>
    <!-- ICONO PAGINA -->
    <link rel="icon" href="http://cellaron.com/media/wysiwyg/zte-mwc-2015-8-l-124x124.png">
    <!-- ANIMACION LOGIN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <!-- CSS ESTILOS LOGIN -->
    <link rel="stylesheet" href="<?= base_url('assets/css/login/stylelogin.css'); ?>">
    <!-- JQUERY -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
    <!-- SWEET ALERT -->
    <script type="text/javascript" src="<?= base_url('assets/plugins/sweet-alert/sweetalert.min.js'); ?>"></script>

  </head>
  <body>
    <div id="warp">
      <H2></H2>
      <form id="formu" method="post">
        <div class="admin">
          <div class="rota">
            <h1>ZOLID</h1>
            <input id="username" type="text" name="username" value="" placeholder="Username" required/><br/>
            <input id="password" type="password" name="password" value="" placeholder="Password" required/>            
             <select id="language" type="text" name="language" class="sel_login">
             <option value="ES" />Español</option>
             <option value="EN" />English</option>
           </select>
                        
          </div>
        </div>
        <div class="cms">
          <div class="roti">
            <h1>ZTE</h1>
            <button type="submit" class="button" id="valid" name="valid" onclick = "this.form.action = '<?php echo base_url();?>/User/loginUser'">Login</button><br />
            <p><a href="#">ZTE</a> <a>And</a> <a href="#">ZTE Colombia</a></p>
          </div>
        </div>
      </form>
    </div>

    <?php if (isset($mensaje)): ?>
      <script> swal("ERROR!","Credenciales incorrectas!","info",);  </script>
    <?php endif ?>

    <!-- ANIMACION DE LOGIN -->
    <script>
      $(function () {
        $("#valid").click(function () {
          var username = document.getElementById("username").value;
          var pass     = document.getElementById("password").value;
          if (username != "" && pass != "") {
            $(".admin").addClass("up").delay(100).fadeOut(100);
            $(".cms").addClass("down").delay(150).fadeOut(100);
          }
        });
      });
    </script>
  </body>
</html>
