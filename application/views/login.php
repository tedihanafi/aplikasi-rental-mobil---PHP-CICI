<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El-Hanaf Rental Mobil</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    <script src="<?php echo base_url() . 'assets/js/jquery.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>
    <style>
    body {
        background-color: #f8f9fa;
    }

    .login-container {
        max-width: 400px;
        margin: 100px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .btn-login {
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>El-Hanaf Rental Mobil</h2>

        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-danger'>Login gagal! Username dan password salah.</div>";
            } else if ($_GET['pesan'] == "logout") {
                echo "<div class='alert alert-success'>Anda telah logout.</div>";
            } else if ($_GET['pesan'] == "belumlogin") {
                echo "<div class='alert alert-info'>Silahkan login terlebih dahulu.</div>";
            }
        }
        ?>

        <form method="post" action="<?php echo base_url() . 'welcome/login' ?>">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" class="form-control">
                <?php echo form_error('username'); ?>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
                <?php echo form_error('password'); ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-login">Login</button>
            </div>
        </form>
    </div>
</body>

</html>