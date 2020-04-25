<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title><?= $title ?></title>
</head>
<style type="text/css">
    .loginbox {
        width: 450px;
        height: 550px;
        background: skyblue;
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
        padding: 70px 30px;
    }

    .avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }

    h1 {
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
    }

    .loginbox p {
        font-weight: bold;
    }

    .loginbox input {
        width: 100%;
        margin-bottom: 20px;
    }

    .loginbox input[type="text"],
    input[type="password"] {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
    }

    .loginbox input[type="submit"] {
        border: none;
        outline: none;
        height: 40px;
        background: greenyellow;
        color: grey;
        font-size: 18px;
        border-radius: 20px;
    }

    .loginbox input[type="submit"]:hover {
        cursor: pointer;
        background: yellowgreen;
        color: black;
    }

    .loginbox a {
        text-decoration: none;
        line-height: 20px;
        color: black;
    }

    .loginbox a:hover {
        color: grey;
    }

    small {
        color: red;
    }
</style>

<body>
    <div class="cover"></div>
    <div class="loginbox">
        <img src="<?= base_url('assets/img/images.png'); ?>" class="avatar">
        <h1>Login Here</h1>

        <?= $this->session->flashdata('message'); ?>

        <form class="user" method="post" action="<?= base_url('auth'); ?>">
            <div>
                <p>username</p>
                <input type="text" name="username" id="username" placeholder="Enter Username" value="<?= set_value('username') ?>">
                <?= form_error('username', '<small>', '</small>'); ?>
            </div>
            <div>
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <?= form_error('password', '<small>', '</small>'); ?>
            </div>
            <input type="submit" value="Login">Login</input>
            <br>
            <br>
            <a href="<?= base_url('auth/registrasi'); ?>">Don't have an account? </a>
        </form>
    </div>

    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>