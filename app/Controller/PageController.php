<?php
class PageController extends AppController {
      var $layout = "Page";

	public function beforeFilter() {
            $this->Auth->allow('index');
}
	public function index() {

	}
		public function abc(){}
}
