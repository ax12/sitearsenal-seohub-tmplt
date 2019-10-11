
<!--=================================
register-form  -->

<?php


$admin = 'admin';
$pass = '9a5e071ba31bbaf8d0cbe95db108a907';


if($_POST['submit']){
    if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
        $_SESSION['admin'] = $admin;
        header("Location: /");
        exit;
    }else echo '<p>Логин или пароль неверны!</p>';
}
?>

<section class="login-form page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h4>Режим обслуживания</h4>
                <form class="gray-form mt-2 clearfix" method="post">
                    <div class="form-group">

                        <input id="name" class="form-control" type="text" placeholder="User name" name="user">
                    </div>
                    <div class="form-group">

                        <input id="Password" class="form-control" type="password" placeholder="Password" name="pass">
                    </div>
                    <div class="form-group">

                    </div>

                    <input class="button" type="submit" name="submit" value="Я админъ!" />
                </form>
            </div>

        </div>
    </div>
</section>

<!--=================================
register-form  -->