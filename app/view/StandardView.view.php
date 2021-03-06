<?php

Class StandardView extends Disco\classes\View {

    public function header(){
        return Template::build('header');
    }//header

    public function __construct(){

        $this->scriptSrc('http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
        $this->scriptSrc('/js/modernizr.js');
        //$this->scriptSrc('/js/foundation.min.js');
        $this->scriptSrc('/js/js.js');
		
		//This is the Cool-Kitten dependencies
		$this->scriptSrc('/scripts/jquery.easing.1.3.js');
		$this->scriptSrc('/scripts/jquery.stellar.min.js');
		$this->scriptSrc('/scripts/scripts.js');
		
        // $this->styleSrc('/css/foundation.min.css');
        $this->styleSrc('/css/master.css');
		$this->styleSrc('/css/themes/default/default.css');

        $this->script('$(document).foundation();');

		

    }//construct

    public function footer(){
        return Template::build('footer');
    }//footer

}//Standard

?>
