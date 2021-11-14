<?php

date_default_timezone_set("Asia/Manila");
class TaskTimer
{
    public function setTime($id)
    {
        $datex =  date("Y-m-d h:m:s");

        //PLACE VALIDATION HERE IF TIME started

        $cnn  = new mysqli("localhost", "root", "", "project_mgmt");
        $stmt = $cnn->prepare("UPDATE task_list SET task_start_time = ? WHERE task_id = ?");
        $stmt->bind_param("ss", $datex, $id);
        $stmt->execute();

        return [
            'success' => true,
            'data' => $datex
        ];
    }

    public function stopTime($id)
    {
        $datex =  date("Y-m-d h:m:s");

        //validate if time is started, if not then return like this
        /**
         * return ['success' => false, 'data' => 'no data'];
         */
        
        $cnn  = new mysqli("localhost", "root", "", "project_mgmt");
        $stmt = $cnn->prepare("UPDATE task_list SET task_end_time = ? WHERE task_id = ?");
        $stmt->bind_param("ss", $datex, $id);
        $stmt->execute();

        return [
            'success' => true,
            'data' => $datex
        ];
    }
}
