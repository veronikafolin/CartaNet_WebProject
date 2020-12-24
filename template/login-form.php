<form action="#" method="POST">
    <div style=" width: 70%; margin:20px 15% 20px; padding:0;">
        <h2 style="font-size: 14pt; width:80%; margin: 0 10% 15px;">Accedi all'area riservata</h2>
        <?php if(isset($templateParams["errorelogin"])): ?>
        <p><?php echo $templateParams["errorelogin"]; ?></p>
        <?php endif; ?>
        <ul style="list-style:none">
            <li>
                <label for="username">Username:</label><input type="text" id="username" name="username" />
            </li>
            <li>
                <label for="password">Password:</label><input type="password" id="password" name="password" />
            </li>
            <li>
                <input type="submit" name="submit" value="Invia" />
            </li>
        </ul>
    </div>
        </form>