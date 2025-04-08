<?php
define('SERVEUR', 'mysql:server=localhost;dbname=b1cswallet');
define('LOGIN', 'root');
define('MDP', '');

try{

    $cle = new PDO(SERVEUR, LOGIN, MDP);

} catch(Exception $e) {

    echo $e->getMessage();

}
