<?php

class Helper{

    
   

    public function setSettings($data){

        $getsetting = mysqli_query($GLOBALS['con'], "SELECT * FROM settings  WHERE name = '$data->name'");
        if(mysqli_affected_rows($GLOBALS['con']) > 0){

            $updatesettings = mysqli_query($GLOBALS['con'], "UPDATE settings set name ='$data->name', value = '$data->value' WHERE id = '$data->id'") or die(mysqli_error($GLOBALS['con']));

        }else{
        $setusd = mysqli_query($GLOBALS['con'],"INSERT INTO settings (name,value,dateAdded,dateUpdated) VALUES('$data->name', '$data->value', NOW(), NOW())") or die(mysqli_error($GLOBALS['con']));
        }
    }
 
    public function getGHCRate(){

        $ghc = mysqli_fetch_assoc(mysqli_query($GLOBALS['con'], " SELECT  value FROM settings WHERE name = 'ghcrate'"));
        if(mysqli_affected_rows($GLOBALS['con']) > 0)
        return $ghc['value'];
    else
    return 0;
    }

    public function getGHCRateId(){

        $ghc = mysqli_fetch_assoc(mysqli_query($GLOBALS['con'], " SELECT  id FROM settings WHERE name = 'ghcrate'"));
        if(mysqli_affected_rows($GLOBALS['con']) > 0)
        return $ghc['id'];
    else
    return 0;
    }

    public function getRestAPI(){
        $restapi = mysqli_fetch_assoc(mysqli_query($GLOBALS['con'], "SELECT value FROM settings WHERE name = 'cryptoapi'"));
        if(mysqli_affected_rows($GLOBALS['con']) > 0)
        return $restapi['value'];
        else 
        return "";
    }

    public function getRestAPI_id(){

        $ghc = mysqli_fetch_assoc(mysqli_query($GLOBALS['con'], " SELECT  id FROM settings WHERE name = 'cryptoapi'"));
        if(mysqli_affected_rows($GLOBALS['con']) > 0)
        return $ghc['id'];
    else
    return 0;
    }

}