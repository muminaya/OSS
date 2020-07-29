<?php
require_once __DIR__ . '/../viewServiceModel/viewServiceModel.php';



class viewServiceController
{
    function viewProductList($list)
    {
        $ser = new ServiceModel();
        $ser->list = $list;
        return $ser->viewProductList();
    }


    function viewSortedFromLow($list)
    {
        $ser = new ServiceModel();
        $ser->list = $list;
        return $ser->viewSortedFromLow();
    }

    function viewSortedByRating($list)
    {
        $ser = new ServiceModel();
        $ser->list = $list;
        return $ser->viewSortedByRating();;
    }

    function viewServicewithoutRating($list)
    {
        $ser = new ServiceModel();
        $ser->list = $list;
        return $ser->viewServicewithoutRating();
    }
}