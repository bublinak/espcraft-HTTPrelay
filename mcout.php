<?php
    $object->uuid = $_GET["uuid"];
    $sjson = file_get_contents($object->uuid);
    $object = json_decode($sjson);
    $object->uuid = $_GET["uuid"];
    if($_GET["devID"] == "MC")
    {
        $channel = $_GET["channel"];

        switch ($channel) {
            case "MC":
                $object->chMC = $_GET["data"];
                break;

            case "BD":
                $object->chBD = $_GET["data"];
                break;

            case "00":
                $object->ch00 = $_GET["data"];
                break;
            
            case "01":
                $object->ch01 = $_GET["data"];
                break;

            case "02":
                $object->ch02 = $_GET["data"];
                break;

            case "03":
                $object->ch03 = $_GET["data"];
                break;

            case "04":
                $object->ch04 = $_GET["data"];
                break;
            
            case "05":
                $object->ch05 = $_GET["data"];
                break;

            case "06":
                $object->ch06 = $_GET["data"];
                break;

            case "07":
                $object->ch07 = $_GET["data"];
                break;

            default:
                echo "0";
                break;
        }
        $jsonobj = json_encode($object);
        file_put_contents($object->uuid, $jsonobj);
    }
    if($_GET["devID"] == "board")
    {
        $jsonobj = json_encode($object);
        echo $jsonobj;
    }
?>
