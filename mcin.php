<?php
    $object->uuid = $_GET["uuid"];
    $sjson = file_get_contents($object->uuid);
    $object = json_decode($sjson);
    if($_GET["devID"] == "MC")
    {
        $channel = $_GET["channel"];

        switch ($channel) {
            case "MC":
                echo $object->chMC;
                break;

            case "BD":
                echo $object->chBD;
                break;

            case "00":
                echo $object->ch00;
                break;
            
            case "01":
                echo $object->ch01;
                break;

            case "02":
                echo $object->ch02;
                break;

            case "03":
                echo $object->ch03;
                break;

            case "04":
                echo $object->ch04;
                break;
            
            case "05":
                echo $object->ch05;
                break;

            case "06":
                echo $object->ch06;
                break;

            case "07":
                echo $object->ch07;
                break;

            default:
                echo "0";
                break;
        }
    }
    if($_GET["devID"] == "board")
    {
        $object->chMC = $_GET["chMC"];
        $object->chBD = $_GET["chBD"];
        $object->ch00 = $_GET["ch00"];
        $object->ch01 = $_GET["ch01"];
        $object->ch02 = $_GET["ch02"];
        $object->ch03 = $_GET["ch03"];
        $object->ch04 = $_GET["ch04"];
        $object->ch05 = $_GET["ch05"];
        $object->ch06 = $_GET["ch06"];
        $object->ch07 = $_GET["ch07"];

        $jsonobj = json_encode($object);
        file_put_contents($object->uuid, $jsonobj);
    }
?>
