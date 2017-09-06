<?php

class Carts
{
    private $member , $byelist;

    function __construct($member)
    {
        $this->member = $member;
        $this->byelist = array();
    }
    function addTtem($pid,$qty){
//        if(!array_key_exists($pid,$this->byelist)){
//
//        }
        if(!isset($this->byelist[$pid])){
            $this->byelist[$pid]=$qty;
        }
    }
    function edItem($pid,$qty){
        if(isset($this->byelist[$pid])){
            $this->byelist[$pid]=$qty;
        }
    }
    function rmItem($pid){
        if(isset($this->byelist[$pid])){
            unset($this->byelist[$pid]);
        }
    }
    function getButlist(){
        return $this->byelist;
    }
    function getmember(){
        return $this->member;
    }
}

class Menber
{
    private $id , $name , $level;

    function __construct( $id , $name , $level )
    {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }

    function getName()
    {
        return $this->name;
    }

    function getLevel()
    {
        return $this->level;
    }

    function getId()
    {
        return $this->id;
    }
}

class sample{
    var $var1;
}