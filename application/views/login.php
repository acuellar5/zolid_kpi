<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>ZOLID LOGIN</title>
    <!-- SWEET ALERT -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.css'); ?>" />
    <script type="text/javascript" src="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>
    <!-- ICONO PAGINA -->
    <link rel="icon" href="http://cellaron.com/media/wysiwyg/zte-mwc-2015-8-l-124x124.png">
    <!-- ANIMACION LOGIN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <!-- CSS ESTILOS LOGIN -->
    <link rel="stylesheet" href="<?= base_url('assets/css/login/stylelogin.css'); ?>">
    <!-- JQUERY -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

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

    <?php if (isset($error)): ?>
      <script> swan("error", "credenciales incorrectas", "error"); </script>
    <?php endif ?>

    ANIMACION DE LOGIN
    <script src="<?= base_url('assets/js/index.js?v=1.2'); ?>"></script>
  </body>
</html>
