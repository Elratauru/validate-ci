<?php

/*
 * This File is part of the Validate CI Package.
 */

namespace ValidateCI;

class Validator
{   
    /*
    RegExp Constant.
    */
    const RegExp = '/^(\d{6,7})(\-)(\d{1})$/';

    public function __construct()
    {
        //Let's keep a constructor.
    }

    /*
    Inputs String. 
    Returns Boolean for Validation.
    */
    public function validate($string){
        //Cleanup the input.
        $cleanString = self::cleanUp($string);

        //Validate using constant.
        $isValidString = preg_match(self::RegExp,$cleanString,$matches, PREG_OFFSET_CAPTURE);

        if($isValidString){
            //Do calculations to validate the CI itself.
            $mainNumber = $matches[1][0];
            $validatorDigit = $matches[3][0];

            //For validation, we need to split the main number and check each digit.
            $mainTotal = 0;
            $validatorDigitCalculated;

            $mainArray = str_split($mainNumber);
            $validatorArray = str_split('2987634');

            foreach ($mainArray as $index => $number) {
                $mainTotal += (intval($number) * intval($validatorArray[$index])) % 10;
            }

            //If the number has module of 0, then this digit should be 0.
            //If not, we need to remove 10 from the module of it. 
            switch($mainTotal){
                case (($mainTotal % 10) === 0):
                    $validatorDigitCalculated = 0;
                break;
                default:
                    $validatorDigitCalculated = 10 - $mainTotal % 10;
                break;
            }
            
            $valid = ($validatorDigit == $validatorDigitCalculated) ? true : false;
        } else {
            $valid = false;
        }

        return $valid;
    }

    /*
    * Inputs Raw string, cleans up the dots used in Uruguayan ID Cards.
    */
    private function cleanUp($string){
        return str_replace(".", "", $string);
    }
}