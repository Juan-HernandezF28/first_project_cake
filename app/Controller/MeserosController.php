<?php
class MeserosController extends AppController{

    public $helpers = array('Html', 'Form');
    public $components = array ("Session");

    public function index(){

        $this->set('meseros', $this->Mesero->find('all'));

    }

    public function ver($id=null){

        if(!$id){
            throw new NotFoundException('No existe el Id');
        }
        $mesero = $this->Mesero->findByid($id);

        if(!$mesero){
            throw new NotFoundException('el usuario no fue encontrado');
        }
        $this-> set('mesero', $mesero);
    }

    public function nuevo(){

        if($this->request->is('post')){

            $this->Mesero->create();

            if($this->Mesero->save($this->request->data)){
                $this->Flash->success('el mesero ha sido creado');
                return $this->redirect(array('action'=>'index'));
            }
            $this->Flash->error('no se pudo crear su mesero.');

        }

    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('No hay concidencias.'));
        }
    
        $mesero = $this->Mesero->findById($id);
        if (!$mesero) {
            throw new NotFoundException(__('El mesero no fue encontrado'));
        }
    
        if ($this->request->is(array('post', 'put'))) {

            $this->Mesero->id = $id;
            if ($this->Mesero->save($this->request->data)) {
                $this->Flash->success(__('Your waiter has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your user.'));
        }
    
        if (!$this->request->data) {
            $this->request->data = $mesero;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException('¡ INCORRECTO !');
        }
        if ($this->Mesero->delete($id)) {
            $this->Flash->success('El mesero ha sido eliminado.', $element = 'default', $params = array('class'=>'success'));
            return $this->redirect(array('action' => 'index'));
        }
    }
}