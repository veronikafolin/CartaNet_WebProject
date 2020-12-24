<form action="#" method="POST">
    <div class="d-flex justify-content-center col-xl-12">
        <h2 >Login</h2>
        <?php if(isset($templateParams["errorelogin"])): ?>
        <p><?php echo $templateParams["errorelogin"]; ?></p>
        <?php endif; ?>
        <ul style="list-style:none">
            <li>
                <label for="username">Username:</label><input class="form-control form-control-sm col-xl-8" type="text" id="username" name="username" />
            </li>
            <li>
                <label for="password">Password:</label><input class="form-control form-control-sm col-xl-8" type="password" id="password" name="password" />
            </li>
            <li>
                <input type="submit" name="submit" value="Invia" />
            </li>
        </ul>
    </div>
        </form>