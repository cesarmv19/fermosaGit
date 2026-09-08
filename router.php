<?php

if(isset($_SERVER['REQUEST_METHOD'])){

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        include("services/get.php");
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        include("services/post.php");
    }
    if($_SERVER['REQUEST_METHOD'] == "DELETE"){
        include("services/delete.php");
    }
}

?>