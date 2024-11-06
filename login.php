<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssphp.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <!-- Inclusion du script de traitement PHP -->
                <?php include 'configprjt.php'; ?>

                <!-- Formulaire de connexion -->
                <form class="login" method="POST" action="">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="emailmane" class="login__input" placeholder="User name / Email" required>
                        <?php if (isset($error)): ?>
                            <p style="color: red;"><?php echo $error; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="passname" class="login__input" placeholder="Password" required>
                    </div>
                    <button type="submit" class="button login__submit">
                        <span class="button__text">Log In Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>

                <div class="social-login">
                    <h3>log in via</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>
</html>
