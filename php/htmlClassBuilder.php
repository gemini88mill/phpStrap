<?php

/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 7/2/17
 * Time: 1:21 PM
 */
class htmlClassBuilder
{

    private $classNameArr;

    /**
     * htmlClassBuilder constructor.
     * @param $classNameArr
     */
    public function __construct($classNameArr){
        $this->classNameArr = $classNameArr;
    }

    public function __toString(){
        // TODO: Implement __toString() method.
        $arr = $this->getClassNameArr();

        return implode(" ", $arr);
    }



    /**
     * @return mixed
     */
    public function getClassNameArr()
    {
        return $this->classNameArr;
    }


}