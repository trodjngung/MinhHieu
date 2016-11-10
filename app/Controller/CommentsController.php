<?php
class CommentsController extends AppController {

 var $helpers = array('Html', 'Form', 'Ajax');
 var $components = array('RequestHandler');

 function index($post_id = null) {
  if (!$post_id) {
   $this->Session->setFlash(__('Invalid Comments', true));
   $this->redirect(array('controller' => 'posts', 'action'=>'index'));
  }
  $this->set('post_id', $post_id);
  $this->Comments->recursive = 0;
  $this->set('Commentss', $this->paginate('Comments', array('post_id' => intval($post_id))));
 }

 function add($post_id = null) {
  if (!$post_id && empty($this->data)) {
   $this->Session->setFlash(__('Invalid Comments', true));
  }
  if (!empty($this->data)) {
   $this->Comments->create();
   if ($this->Comments->save($this->data)) {
    $this->Session->setFlash(__('The Comments has been saved', true));
   } else {
    $this->Session->setFlash(__('The Comments could not be saved. Please, try again.', true));
   }
  } else {
   $this->data['Comments']['post_id'] = $post_id;
  }
 }

 function delete($id = null, $post_id = null) {
  if (!$id || !$post_id) {
   $this->Session->setFlash(__('Invalid id for Comments', true));
  }
  if ($this->Comments->del($id)) {
   $this->Session->setFlash(__('Comments deleted', true));
  }
 }

}