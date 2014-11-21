<?php

    class uploadTest extends PHPUnit_Framework_TestCase{

        public function uploadFail(){

            $submit = new uploadFile();
            $submitTest = $submit->uploadFile();

            if($submitTest == ""){
                echo "NULL MAHI";
            }

        }

    }