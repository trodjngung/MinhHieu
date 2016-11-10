<?php
App::uses('Controller', 'Controller');
App::uses('AppController', 'Controller');
class HomeController extends AppController {
      var $layout = "home";

	public function beforeFilter() {
            $this->Auth->allow('index');
}
	public function index() {
		        $this->loadModel('Post');

	}
}