<?php # handle registration form

    #be sure user clicked submit button
    if(array_key_exists('register', $_POST)) {
        var_dump($_POST);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>

    <body>
        <h1>Register</h1>
        <hr />

        <form method="POST" action="">
            <div>
                <label>First Name</label><br />
                <input type="text" name="fn"/>
            </div>

            <div>
                <label>Last Name</label><br />
                <input type="text" name="ln"/>
            </div>

            <div>
                <label>Email</label><br />
                <input type="email" name="e"/>
            </div>

            <div>
                <label>Password</label><br />
                <input type="password" name="pass" />
            </div>

            <div><input type="submit" name="register" value="register"/></div>
        </form>
    </body>
</html>