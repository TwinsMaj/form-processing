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

    // put error function here
    function display_error($field, $_err) {
        if(array_key_exists($field, $_err))  {
            echo '<p>' .$_err[$field].'</p>';
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
                <?php display_error('fn', $errors); ?>
                <input type="text" name="fn"/>
            </div>

            <div>
                <label>Last Name</label><br />
                <?php display_error('ln', $errors); ?>
                <input type="text" name="ln"/>
            </div>

            <div>
                <label>Email</label><br />
                <?php display_error('e', $errors) ?>
                <input type="email" name="e"/>
            </div>

            <div>
                <label>Password</label><br />
                <?php display_error('pass', $errors); ?>
                <input type="password" name="pass" />
            </div>

            <div><input type="submit" name="register" value="register"/></div>
        </form>
    </body>
</html>