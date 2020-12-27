
<div class="row justify-content-center align-items-center" style="margin: 20px 0">
    <?php if(isset($templateParams["erroreSignUp"])): ?>
        <p style="color: red"> <?php echo $templateParams["erroreSignUp"]; ?> </p>
    <?php endif?>
</div>
<div class="row justify-content-center align-items-center" style="margin: 20px 0">
    <form action="registraCliente.php" method="post" style="margin-top: 20px"> 
        <h2 style="font-size: 16pt; align: center">Registra un nuovo account</h2>
        <div class="form-group col-10">
            <label for="Nome">Nome:</label>
            <input class="form-control" type="text" id="Nome" name="Nome" required/>
        </div>
        <div class="form-group col-10">
            <label for="Cognome">Cognome:</label>
            <input class="form-control" type="text" id="Cognome" name="Cognome" required/>
        </div>
        <div class="form-group col-10">
            <label for="Email">Email:</label>
            <input class="form-control" type="email" id="Email" name="Email" required/>
        </div>
        <div class="form-group col-10">
            <label for="Indirizzo">Indirizzo:</label>
            <input class="form-control" type="text" id="Indirizzo" name="Indirizzo" required/>
        </div>
        <div class="form-group col-10">
            <label for="Password">Password:</label>
            <input class="form-control" type="password" id="Password" name="Password" required/>
        </div>
        <div class="form-group col-10">
            <label for="RipetiPassword">Ripeti Password:</label>
            <input class="form-control" type="password" id="RipetiPassword" name="RipetiPassword" required/>
        </div>
        <div class="form-group col-4 " >
        <input class="btn btn-primary" id="signup" type="submit" name="submit" value="Registrati"/>
        </div>
    </form>
</div>