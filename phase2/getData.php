<?php

    include "include/config.php";

    if(! function_exists('getData')){
        /**
         * @param int $offset
        * @param int $limit
        * @return array|null
        */


        function getData($offset, $limit, $db){
            $offset = (int)$offset;
            $limit  = (int)$limit;
            $sql = "SELECT * FROM `posts` ORDER BY `uploaded_time` DESC LIMIT $limit OFFSET $offset";
            $result = $db->query($sql);
            $rows = [];
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $rows[]= $row;
            }
            return $rows;
        }
    }


?>