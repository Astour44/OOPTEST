<?php
interface Run{
    public function run();
}
//interface為單一控制 
interface Boot{
    public function boot();
}

interface Passenger{
    public function passenger();
}
interface Twohandle{
    public function Twohandle();
}
class Vehicle{
    protected $wheel;
    protected $doors;

    public function enging(){
        //引擎使用模式
    }
}
//class為父類別，凡是繼承父類別的子類別都需要繼承父類別的東西
class Car extends Vehicle implements Run,Boot,Passenger{


    public function run(){
        //移動方式
    }
    public function boot(){
        //啟動方式
    }
    public function passenger()
    {
        //可以有乘客
    }
}
class Moto extends vehicle implements Run,Boot,Twohandle{


    public function run(){
        //移動方式
    }
    public function boot(){
        //啟動方式
    }
    public function Twohandle(){
        //兩個手把
    }
}
// 若是有單一控制 例如這邊兩個手把只有機車有 就可以用interface

?>