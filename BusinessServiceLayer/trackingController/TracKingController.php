<?php
require_once __DIR__ . '/../trackingModel/TrackingModel.php';

class TrackingController
{

    function viewOnD()
    {
        session_start();
        $Tracking = new TrackingModel();
        $Tracking->Cus_ID = $_SESSION['Cus_ID'];
        return $Tracking->viewOnD();
    }
}