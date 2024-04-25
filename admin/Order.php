<?php

class Order{

    public function getAllOrders(){

        $order = mysqli_query($GLOBALS['con'], "SELECT * FROM orders") or die(mysqli_error($GLOBALS['con']));

        return $order;
    }


    public function addDailySales($data){
        $daily = mysqli_query($GLOBALS['con'], "INSERT INTO orders ()");

    }


}