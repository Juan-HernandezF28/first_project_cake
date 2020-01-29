<?php

class PostsController extends AppController{

    public $helpers = array('Html','Form');

    /**
    * @method: POST
    */
    public function add() {
        
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success('Your post has been saved.');
                $this->redirect(array('url' => 'index'));
            }
        }

    }
    

    /**
    * @method: GET
    */    
    public function index() {
        /* $posts = $this->paginate();
        if ($this->request->is('requested')) {
            return $posts;
        }
        $this->set('posts', $posts); */

        $this->set('posts', $this->Post->find('all'));

    }

    
    /**
    * @method: GET
    */
    public function view($id = null) {
        $this->set('post', $this->Post->findById($id));    
    }
    

    /**
    * @method: PUT
    * @param: id
    */
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('url' => 'posts'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
    
        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    /**
    * @method: DELETE
    */
    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Flash->success('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('url' => 'posts'));
        }
    }
}