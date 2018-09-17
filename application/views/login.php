<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>LOGIN BESTANDVET</title>
    <!-- ICONO PAGINA -->
    <link rel="icon" href="<?= base_url('assets/images/BestandVET.png'); ?>">
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
    <?php if ($this->session->userdata('id')) {
      $this->session->sess_destroy();
    }
    ?>
    <div id="warp">
      <H2></H2>
      <form id="formu" method="post">
        <div class="admin">
          <div class="rota">
            <h1>BESTAND</h1>
            <input id="username" type="text" name="username" value="" placeholder="Username" required/><br/>
            <input id="password" type="password" name="password" value="" placeholder="Password" required/>            
              <div class="form_radio">
                <input type="radio" id="espanol"
                 name="language" value="spanish" checked>
                <label for="espanol">Español</label>
                &nbsp;
                <input type="radio" id="english"
                 name="language" value="english">
                <label for="english">English</label>
              </div>  
          </div>
        </div>
        <div class="cms">
          <div class="roti">
            <h1>VET</h1>
            <button type="submit" class="button" id="valid" name="valid" onclick = "this.form.action = '<?php echo base_url();?>principal'">Login</button><br />
            
          </div>
        </div>
      </form>
    </div>

    <?php if (isset($mensaje)): ?>
      <script> swal("ERROR!","incorrect credentials!","info",);  </script>
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
