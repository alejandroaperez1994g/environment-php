<?php
session_start();

function authUser()
{
    $useremail = $_POST['useremail'];
    $password = $_POST['password'];
    validateUser($useremail, $password);
    // echo $useremail . $password;
}



function validateUser($useremail, $password)
{

    $dbUserEmail = 'alejandroaperez1994g@gmail.com';
    $dbPassword = password_hash('123', PASSWORD_DEFAULT);

    if ($useremail === $dbUserEmail && password_verify($password, $dbPassword)) {
        $_SESSION['useremail'] = $useremail;
        $_SESSION['password'] = $password;
        header("Location: ../home.php");
    } else {
        header("Location: ../index.php?auth-error");
    }
}

function logOut()
{
    unset($_SESSION);

    // destroy session cookie
    destroyCookies();

    // destroy the session
    session_destroy();

    header("Location: ../index.php?logout");
}


function destroyCookies()
{
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
}

function checkErr($typeError)
{
    if (count($typeError) > 0) {
        $error = '';
        switch ($typeError) {
            case isset($typeError['logout']):
                $error = "<div class='alert alert-primary mt-2'  role='alert'>
                You logout successfully!!
              </div>";
                break;
            case isset($typeError['auth-error']):
                $error =  "<div class='alert alert-primary mt-2'  role='alert'>
                Authentication Error!!
              </div>";
                break;
            case isset($typeError['permission-error']):
                $error =  "<div class='alert alert-primary mt-2'  role='alert'>
                Permission Denied!!
              </div>";
                break;
            default:
                $error = '';
        }

        return $error;
    } else {
        return "";
    }
}
