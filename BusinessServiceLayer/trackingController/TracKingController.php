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
	
	function viewComp()
    {
        $Tracking = new TrackingModel();
        $Tracking->Cus_ID = $_SESSION['Cus_ID'];
        return $Tracking->viewComp();
    }
	
	function viewProgress($TrackID)
    {
        $Status = new TrackingModel();
        $Status->TrackID = $TrackID;
        return $Status->viewProgress();
    }
}