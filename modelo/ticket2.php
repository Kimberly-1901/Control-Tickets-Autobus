<?php
        session_start();
        $data = json_decode($_POST["lista"]);
        echo $data;
        var_dump($data);
        $_SESSION['lista'] = $data;
?>