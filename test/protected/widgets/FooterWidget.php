<?php
/**
* footer widget 公用的widget
*/
class FooterWidget extends CWidget
{
	public function init(){

	}
	public function run(){
		$result = Service::listAllLink();
		$hot_result = Service::hotProduct();
		$index_variable = Service::GetVariable('index_boom_info');
		$this->render('footer',array(
			'result' => $result,
			'hot_result' => $hot_result,
			'index_variable' => $index_variable
			));
	}
}
?>