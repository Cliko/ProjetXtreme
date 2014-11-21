<?php

    class uploadTest extends PHPUnit_Framework_TestCase{

        public function uploadFail(){

            $submit = new showForm();
            $submitTest = $submit->showForm();

            if($submitTest == ""){
                echo "NULL MAHI";
            }

        }

    }