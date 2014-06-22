<?php

/**
*
*/
class InnerWidget extends CWidget
{

    public function init(){

    }
    public function run(){
        // $array = array(
        //     'title' => '',
        //     'body' => '',
        //     );
        // $array = json_encode($array);
        // Service::variableSet('inner',$array);
        $inner = Service::GetVariable('inner');
        // var_dump($inner);
        $this->render('inner',array('inner' => $inner));
    }
}
?>