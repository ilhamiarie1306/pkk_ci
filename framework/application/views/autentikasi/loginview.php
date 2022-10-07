<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>PKK Code Igniter</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/reset.min.css">

    <link rel="icon" href="<?php echo base_url('assets/'); ?>bersalaman_kecil.ico" type="image/icon" />
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css">


</head>

<body>
    <div class="login-container">
        <section class="login" id="login">
            <header >
                <h2> 
                    <center><a href="<?php echo base_url(); ?>" target="_blank"><img src="<?php echo base_url('assets/'); ?>bersalaman2.png" style="width:75px;"></a></center>
                    <center>Menjaga Silaturahmi</center>
                </h2>
                <h4>
                    <center>Login Webreport</center>
                </h4>
            </header>

            <form class="login-form" action="<?php echo base_url('autentikasi/') ?>" method="post">
                <?php echo isset($login_fail)?'<small  style="color: red;font-size: 12px;">'.$login_fail.'</small>':''; ?>
                <?= form_error('username', '<small  style="color: red;font-size: 12px;">', '</small>'); ?>
                <input type="text" name="username" class="login-input" value="<?php echo set_value('username'); ?>" placeholder="username" required autofocus />
                <?= form_error('password', '<small  style="color: red;font-size: 12px;">', '</small>'); ?>
                <input type="password" name="password" class="login-input" value="<?php echo set_value('password'); ?>" placeholder="Password" required />
                <div class="submit-container">
                    <button type="submit" class="login-button">SIGN IN</button>
                </div>
            </form>
        </section>
        <p>2022 - <a href="<?php echo base_url(''); ?>" target="_blank">PKK Code Igniter</a></p>
    </div>


    <script src="<?php echo base_url('assets/'); ?>js/index.js"></script>

</body>
</html>