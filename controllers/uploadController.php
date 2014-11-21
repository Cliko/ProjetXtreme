<?php
class uploadController{

    public function __construct(){
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'POST':
                $this->uploadFile();
                break;
            default:
                $this->showForm();
                break;
        }
    }

    //Show default form
    function showForm(){
        include('views/create_upload.php');
        //echo "test";
    }

    //Post upload form
    function uploadFile(){
        echo "uploading";
    }


}