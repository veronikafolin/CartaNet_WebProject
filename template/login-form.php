
 <div class="row justify-content-center align-items-center" style="margin: 20px 0">
    <form action="#" method="post" style="margin-top: 20px"> 
        <h2 style="font-size: 16pt; align: center">Accedi all'area riservata</h2>
        <?php if(isset($templateParams["errorelogin"])): ?>
            <p><?php echo $templateParams["errorelogin"]; ?></p>
        <?php endif; ?>
        <div class="form-group col-10">
            <label for="username">Email:</label>
            <input class="form-control" type="email" id="username" name="username" required/>
        </div>
        <div class="form-group col-10">
            <label for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password" required/>
        </div>
        <div class="form-group col-4 " >
        <input class="btn btn-primary" type="submit" name="submit" value="Login"/>
        </div>
        <a href="signup.php">Non sei ancora registrato? Clicca qui</a>
    </form>
</div>