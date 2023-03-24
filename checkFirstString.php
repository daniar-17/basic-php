<?php 

    function checkData(array $arrName)
    {
        // $arrName = array("Ani", "diki", "asep", "sulisti");

        for($x = 0; $x < count($arrName); $x++){
            if($arrName[$x][0] == "a" || $arrName[$x][0] == "A"){
                echo $arrName[$x]." Huruf depannya A \n";
            }
        }
    }
    checkData(array("Ani", "diki", "asep", "sulisti"));

?>