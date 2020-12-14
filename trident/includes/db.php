<?php

//FOR LOCAL HOSTING
$host = "localhost";
$user = "root";
$password = "";
$dbase = "cl_trident";

//FOR ONLINE HOSTING WITH GODADDY
//==============================
// $host = "localhost";
// $user = "XTqf2wTwqXrMHIiv";
// $password = "&BBxGJ%8aY~d";
// $dbase = "cl_trident";

//FOR ONLINE HOSTING WITH NAMECHEAP
//=================================
// $host = "localhost";
// $user = "chriirfa_tridentadmin";
// $password = "f_pogPkktG9T";
// $dbase = "chriirfa_trident";

$connection = mysqli_connect($host, $user, $password, $dbase);

/*if($connection){
    echo "yes";
}else{
    echo "no";
}*/

?>