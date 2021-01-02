<section>
    <h2>Registra un nuovo account</h2>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <?php if(isset($templateParams["erroreSignUp"])): ?>
                <p style="color: red"> <?php echo $templateParams["erroreSignUp"]; ?> </p>
            <?php endif?>
        </div>
        <div class="row justify-content-center align-items-center">
            <form action="registraCliente.php" method="post"> 
                <div class="form-group">
                    <label for="Nome">Nome:</label>
                    <input class="form-control" type="text" id="Nome" name="Nome" required/>
                </div>
                <div class="form-group">
                    <label for="Cognome">Cognome:</label>
                    <input class="form-control" type="text" id="Cognome" name="Cognome" required/>
                </div>
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input class="form-control" type="email" id="Email" name="Email" required/>
                </div>
                <div class="form-group">
                    <label for="Indirizzo">Indirizzo:</label>
                    <input class="form-control" type="text" id="Indirizzo" name="Indirizzo" required/>
                </div>
                <div class="form-group">
                    <label for="Password">Password:</label>
                    <input class="form-control" type="password" id="Password" name="Password" required/>
                </div>
                <div class="form-group">
                    <label for="RipetiPassword">Ripeti Password:</label>
                    <input class="form-control" type="password" id="RipetiPassword" name="RipetiPassword" required/>
                </div>
                <div class="form-group">
                <input class="form-control btn btn-primary" id="signup" type="submit" name="submit" value="Registrati"/>
                </div>
            </form>
        </div>
    </div>
</section>