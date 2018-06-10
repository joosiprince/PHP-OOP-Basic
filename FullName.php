<?php
/**
 * Created by PhpStorm.
 * User: tanvi
 * Date: 6/6/2018
 * Time: 12:22 PM
 */

class FullName
{
    function makeFullName($data){

        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $fullName = $firstName.' '.$lastName;

        $prince = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'fullName' => $fullName,
        ];

        return $prince;

    }

    function makeSerialNumber($data){


        $startNumber = $data['startNumber'];
        $endNumber = $data['endNumber'];



        $result = '';

        if ($startNumber < $endNumber){

            for ($i = $startNumber; $i<=$endNumber; $i++){

                $result .= $i.' ';   // ডট " . " Use Dot . for not changing value
            }                    // আগের টাও আসবে পরের টাও আসবে
            return $result;


        }else {
            $result = " you are such a cow. Put the first number smaller ";
            return $result;
        }


    }
}