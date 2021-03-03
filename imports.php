<?php
    function sanitize($data): string{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = addslashes($data);

        return $data;
    }

    require "./Classes/DB.php";
    $conn = DB::getInstance();
?>