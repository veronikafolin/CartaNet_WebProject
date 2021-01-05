<section>
    <h2>Accedi all'area riservata</h2>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <form action="#" method="post"> 
                <?php if(isset($templateParams["errorelogin"])): ?>
                    <p><?php echo $templateParams["errorelogin"]; ?></p>
                <?php endif; ?>
                <div class="form-group">
                    <label for="username">Email:</label>
                    <input class="form-control" type="email" id="username" name="username" required/>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-control" type="password" id="password" name="password" required/>
                </div>
                <div class="form-group">
                <input class="form-control btn btn-primary" onclick="hashPWD()" type="submit" name="submit" value="Login"/>
                </div>
                <a href="signup.php">Non sei ancora registrato? Clicca qui</a>
            </form>
        </div>
    </div>
</section>
