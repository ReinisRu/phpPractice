<?php

include_once "../bootcamp_app/classes/DB.php";
class Cars extends DB {
   
    public function setData() {
        $this->set([
            "brand" => "Mercedes",
            "model" => "E63",
            "color" => "red"
        ]);
    }
}
