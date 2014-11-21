<?php
/**
 * Created by PhpStorm.
 * User: BENJI
 * Date: 21/11/2014
 * Time: 11:54
 */

class parrainnageTest extends PHPUnit_Framework_TestCase {

    public function testEnvoiMail($mail)
    {
        $test = new parrainnage();
        $testmail = $test->envoiMail();
        if(filter_var($testmail, FILTER_VALIDATE_EMAIL)) {

            $verification_code = chr(rand(32, 126));
            return $verification_code;
        }
        else {
            return "Ce n'est pas une adresse mail";
        }
    }
}
 