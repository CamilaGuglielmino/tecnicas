<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">


            <main>
                <form action="login.php" method="post">
                    <section>
                        <h3 class="titulo"> Iniciar Sesión</h4>
                    </section>

                    <div class="contenedor">

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="nombre@gmail.com"
                                name="email" required>
                            <label for="floatingInput">Nombre de Usuario</label>
                        </div>
                    </div>
                    <div class="contenedor">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña"
                                name="contraseña" required>
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                    </div>
                    <br>
                    <br>
                    
                    <input class="submitBtn" type="submit" name="iniciar" value="Ingresar">
                   

                </form>
                <br>
                    <br>

            </main>
        </div>
    </div>
</div>