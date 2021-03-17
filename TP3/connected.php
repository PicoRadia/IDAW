<?php
echo "Login  :";
echo $_POST['login'];
echo '\n Password  ' ; 
echo $_POST['password'];
?>

<
<?php
    $users = array(
    'radia' => 'imt',
    'test' => '123');

    $login = "radia";
    $errorText = "";
    $successfullyLogged = false;
    if(isset($_POST['login']) && isset($_GET['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
    if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
        $successfullyLogged = true;
        $login = $tryLogin;
    } else
        $errorText = "Erreur de login/password";
    } else
        $errorText = "ok";
    if(!$successfullyLogged) {
        echo $errorText;
    } else {
        echo "Hello ".$login;
    }
?>