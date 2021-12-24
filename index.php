<?php

require './vendor/autoload.php';
require ('./core/init.php');



$user = new \Chat\UserController();
$message = new \Chat\MessageController();




/*
$newName = "Ham";
$newPassword = "kwgnokwn21";
$id = 3;

$stst = $connexion -> prepare(
    "UPDATE user SET
    firstame=:newName ,
    password=:newPassword
    WHERE id_user=:id
"
);

$stst->bindParam (":newName", $newName, PDO::PARAM_STR);
$stst->bindParam (":newPassword", $newPassword, PDO::PARAM_STR);
$stst->bindParam (":id", $id, PDO::PARAM_INT);
$stst->execute();
*/
/*
$stst = $connexion -> prepare(
    "INSERT INTO user VALUE
    firstame=:newName ,
    lastname=:newLastname ,
    password=:newPassword ,
    is_connected=:newisconnected ,
    email=:newemail ,
    avatar=:newavatar
    WHERE id_user=:id
"

$insert->bindParam (":newName", $newName, PDO::PARAM_STR);
$insert->bindParam (":newPassword", $newPassword, PDO::PARAM_STR);
$insert->bindParam (":id", $id, PDO::PARAM_INT);
$insert->execute();

*/


try {
    if (empty($_GET['page'])) {
        
        throw new Exception('Page not found');
} else {
    $uri = filter_var($_GET['page'], FILTER_SANITIZE_URL);
    $url = explode('/', $uri);

    if (empty($url[0])) {
        throw new Exception ('URl not found');
    }
    else {
        switch ($url[0]) {
            case 'admin':
                switch ($url[1]) {
                    case'login':
                        $user->home();
                        break;
                    case "signup":
                        $user->signup();
                        break;
                    case "logout":
                        $message->indexb();
                        break;
                    case 'profile':$message->index();
                        break;
                    default:
                        throw new Exception ('Page not found');
                }
                break;
                
            case 'user':
                echo "this is page user";
                break;
        }
    }
}
} catch (Exception $e) {
    $message = $e ->getMessage();
    printf("An internal error is occured in the Server : %s \n", $e->getMessage());
    die();
}



