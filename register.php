<?php # handle registration form

    # create errors array
    $errors = [];

    #be sure user clicked submit button
    if(array_key_exists('register', $_POST)) {
        
        // validate firstname field
        if(empty($_POST['fn'])) {
            $errors['fn'] = 'Please enter a first name';
        }

        if(empty($_POST['ln'])) {
            $errors['ln'] = 'Please enter a last name';
        }

        if(empty($_POST['e'])) {
            $errors['e'] = 'Please enter an email';
        }

        if(empty($_POST['pass'])) {
            $errors['pass'] = 'Please enter a password';
        }
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
                <?php
                    if(array_key_exists('fn', $errors)) {
                        echo '<p>'.$errors['fn'].'<p>';
                    }
                ?>
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