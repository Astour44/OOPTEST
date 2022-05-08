<?php

class machine
{

    public $run;
    
    protected function launch()
    {
        echo "accelerator";
    }
}

class car extends machine
{
    public $fourwheels;
    function launch()
    {
        parent::launch();
    }
}


class locomotive extends machine
{
    public $twowheels;
}
