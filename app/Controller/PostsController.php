<?php
App::uses('Controller', 'Controller');
App::uses('AppController', 'Controller');
class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');


public function beforeFilter() {
            $this->Auth->allow('view');
            $this->set('logged_in', $this->Auth->LoggedIn());
            $this->set('current_user', $this->Auth->user());
    }

 public function uploads(){
            $this->set('posts', $this->Post->find('all'));

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES['Post']['fileUpload']['name']);
            $typeFile = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
            $typeFileAllow = array('png','jpg','jpeg', 'gif','rar','mp3','flac',);
            if(!in_array(strtolower($typeFile), $typeFileAllow)){
                $error = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
            }
            // $sizeFile = $_FILES['size'];
            // if($sizeFile > 5242880){
            //     $error = "File bạn chọn không được quá 5MB";
            // }
            if(file_exists($target_file)){
                $error = "File bạn chọn đã tồn tại trên hệ thống";
                echo " =))))))))))) HAHA";
            }            
            if(empty($error)){
                if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)){
                    echo "Bạn đã upload file thành công";
                }  else {
                    echo "File bạn vừa upload gặp sự cố";
                }
            }
        }

    }
    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }


public function home(){
    
}
// View
    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }   
// End View
// Add
public function add(){

        if ($this->request->is('post')) {

            $this->Post->create();
        $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            $_FILES = $this->request->data;
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES['Post']['fileUpload']['name']);
            $typeFile = pathinfo($_FILES['Post']['fileUpload']['name'], PATHINFO_EXTENSION);
            $typeFileAllow = array('png','jpg','jpeg', 'gif','rar','mp3','flac','zip',);
            if(!in_array(strtolower($typeFile), $typeFileAllow)){
                $error = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
            }
            // $sizeFile = $_FILES['size'];
            // if($sizeFile > 5242880){
            //     $error = "File bạn chọn không được quá 5MB";
            // }
            if(file_exists($target_file)){
                $error = "File bạn chọn đã tồn tại trên hệ thống";
                echo "Có rồi mà @@";
            }            
            if(empty($error)){
                if(move_uploaded_file($_FILES['Post']["fileUpload"]["tmp_name"], $target_file)){
                    $_FILES['Post']['fileUpload']=$target_file;

        if ($this->Post->save($_FILES)) {
        $this->Flash->success(__('The user has been saved'));
                    echo "Bạn đã upload file thành công";
        return $this->redirect(array('action' => 'index'));
                }  else {
                    echo "File bạn vừa upload gặp sự cố";
                }
            }
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
        // die(var_dump($_FILES));        
    }
// End Add
// Edit
    public function edit($id) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Post->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }
    $this->set('post', $post);

    if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            $_FILES = $this->request->data;
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES['Post']['fileUpload']['name']);
            $typeFile = pathinfo($_FILES['Post']['fileUpload']['name'], PATHINFO_EXTENSION);
            $typeFileAllow = array('png','jpg','jpeg', 'gif','rar','mp3','flac','zip',);
            if(!in_array(strtolower($typeFile), $typeFileAllow)){
                $error = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
            }
            // $sizeFile = $_FILES['size'];
            // if($sizeFile > 5242880){
            //     $error = "File bạn chọn không được quá 5MB";
            // }
            if(file_exists($target_file)){
        $this->Flash->error(__('Có rồi mà @@ ... Phân quyền xong mới up lại được ^^'));
            }            
            if(empty($error)){
                if(move_uploaded_file($_FILES['Post']["fileUpload"]["tmp_name"], $target_file)){
                    $_FILES['Post']['fileUpload']=$target_file;

                if ($this->Post->save($_FILES)) {
                $this->Flash->success(__('Bạn đã edit file thành công'));
                return $this->redirect(array('action' => 'index'));
                        }  else {
                $this->Flash->error(__('File bạn vừa upload gặp sự cố.'));
                        }
                    }
        }
    }

    if (!$this->request->data) {
        $this->request->data = $post;
    }
}
// End Edit
// Delete
    public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Post->delete($id)) {
        $this->Flash->success(
            __('The post with id: %s has been deleted.', h($id))
        );
    } else {
        $this->Flash->error(
            __('The post with id: %s could not be deleted.', h($id))
        );
    }

    return $this->redirect(array('action' => 'index'));
}
// End Delete
    public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }

    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $postId = (int) $this->request->params['pass'][0];
        if ($this->Post->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}
}