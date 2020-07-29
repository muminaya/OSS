<?php
require_once '../../libs/database.php';


class TrackingModel
{
    public
        $TrackID, $Cus_ID, $Ord_ID, $sp_id, $CusStatus, $RunStatus, $Ship_Add, $R_ID;

    function viewOnD()
    {
        $sql = "select Service.S_Name, Tracking.Ship_Add, Tracking.TrackID from Tracking inner join order1 on Tracking.Ord_ID=order1.Ord_ID inner join service on Order1.Service_ID=Service.Service_ID where Tracking.CusStatus LIKE 'On Delivery' and Tracking.Cus_ID=:cus_ID and order1.Cus_ID=:cus_ID ";
        $args = [':cus_ID' => $this->Cus_ID];
        return DB::run($sql, $args);
    }
	
	function viewComp()
    {
        $sql = "select * from Tracking inner join order1 on Tracking.Ord_ID=order1.Ord_ID inner join service on Order1.Service_ID=Service.Service_ID  where Tracking.CusStatus LIKE 'Completed' and Tracking.Cus_ID=:cus_ID and order1.Cus_ID=:cus_ID and Tracking.FeedbackStatus=0 ";

        $args = [':cus_ID' => $this->Cus_ID];
        return DB::run($sql, $args);
    }
}