<?php
/**
 * Created by PhpStorm.
 * User: BENJI
 * Date: 21/11/2014
 * Time: 11:54
 */

class parrainnageTest extends PHPUnit_Framework_TestCase {

    public function testEnvoiMail()
    {
        $recup = new parrainnage();
        $array = array("benjamin@test.fr","benjamin@test","benjamin");
        foreach($array as $test){
            $recup->envoiMail($test);
        }
        

    }
    public function ajoutParrainage($verification_code)
    {
        $test = new inscription($verification_code);
        $sql = "SELECT parrainage_code = ".$verification_code."";
        if($test == ){

        } else {
            return "Ce n'est pas une adresse mail";
        }
    }
}
 