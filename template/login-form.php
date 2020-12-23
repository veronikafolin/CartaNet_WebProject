<form action="#" method="POST">
    <div class="form-group" style="text-align: center;">
        <h2 >Login</h2>
        <?php if(isset($templateParams["errorelogin"])): ?>
        <p><?php echo $templateParams["errorelogin"]; ?></p>
        <?php endif; ?>
        <ul style="list-style:none">
            <li>
                <label for="username">Username:</label><input class="form-control form-control-sm col-xl-4" type="text" id="username" name="username" />
            </li>
            <li>
                <label for="password">Password:</label><input class="form-control form-control-sm col-xl-4" type="password" id="password" name="password" />
            </li>
            <li>
                <input type="submit" name="submit" value="Invia" />
            </li>
        </ul>
    </div>
        </form>