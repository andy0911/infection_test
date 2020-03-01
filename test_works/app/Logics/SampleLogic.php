<?php


namespace App\Logics;

/**
 * Class SampleLogic
 * @package App\Logics
 */
class SampleLogic
{

    public function doSomthing(array $params) {
        if (isset($params["test"]) && $params["test"] === false) {
            return false;
        }
        return true;
    }

}
