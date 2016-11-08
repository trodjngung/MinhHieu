<?php
class HomeController extends AppController {
      var $layout = "home";

	public function beforeFilter() {
            $this->Auth->allow('index');
}
	public function index() {
		        $this->loadModel('Post');

	}
}