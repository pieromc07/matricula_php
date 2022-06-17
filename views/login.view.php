<?php require 'views/template/head.view.php'; ?>

<form class="login-container py-4" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div class="login">

        <p class="login-title">INICIAR SESION</p>

        <div class="logo">
            <i class="fa-regular fa-address-book"></i>
        </div>

        <div class="group-input">
            <label for="correo">Correo Electronico</label>
            <input type="email" id="correo" name="correo" required>
        </div>


        <!-- contraseña -->
        <div class="group-input">
            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" required>
        </div>

        <!-- button  -->
        <div class="group-input">
            <button type="submit" class="btn-login">Iniciar Sesion</button>
        </div>

    </div>
</form>




<?php require 'views/template/body.view.php'; ?>