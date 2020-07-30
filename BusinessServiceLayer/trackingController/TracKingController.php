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
	function viewUnaccepted()
    {
        $Tracking = new TrackingModel();
        return $Tracking->viewUnaccepted();
    }
	
	function viewAccepted()
    {
        session_start();
        $Tracking = new TrackingModel();
        $Tracking->R_ID = $_SESSION['Runner_ID'];
        return $Tracking->viewAccepted();
    }
	
	function runAccept()
    {
        $Tracking = new TrackingModel();
        $Tracking->TrackID = $_POST['TrackID'];
        $Tracking->RunStatus = $_POST['RunStatus'];
        $Tracking->R_ID = $_SESSION['Runner_ID'];

        if ($Tracking->runAccept()) {
            $message = "Success Update!";
            echo "<script type='text/javascript'>alert('$message');
        window.location = '../trackingView/RunJobList.php?TrackID=" . $_POST['TrackID'] . "';</script>";
        }
    }
}