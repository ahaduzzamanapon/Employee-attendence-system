<?php
include "zklibrary.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $devices = array(
        array("ip" => "192.168.30.14", "port" => 4370),
        array("ip" => "192.168.30.20", "port" => 4370)
        // Add more devices as needed
    );
 
   // global $last_punch_id;
    $last_punch_id = [300, 300];

    // Function to connect to a device, retrieve attendance data within a time range, and display it
    function retrieveAttendance($ip, $port, $index)
    {

        $last_punch = $last_punch_id;
        echo '<pre>';
        print_r($last_punch);
        echo '</pre>';
        exit;


        $zk = new zklibrary($ip, $port);
        $zk->connect();
        $zk->disableDevice();
        $attendance = $zk->getAttendance();
        $zk->enableDevice();
        $zk->disconnect();

        // Filter attendance data based on the time range
        $filteredAttendance = array();
        // foreach ($attendance as $at) {
        //     $punch_id = strtotime($at[0]);
        //     if ($punch_id >= ) {
        //         $filteredAttendance[] = $at;
        //     }
        // }

        return $filteredAttendance;
    }

    $today_data = array();
    foreach ($devices as $index => $device) {
        $attendance = retrieveAttendance($device["ip"], $device["port"], $index);
        foreach ($attendance as $at) {
            $today_data[] = array(
                'uid' => $at[0],
                'id' => $at[1],
                'state' => $index,
                'time' => $at[3]
            );
        }
    }
}

header('Content-Type: application/json');
echo json_encode($today_data);
?>
