<?php
App::uses('AppController', 'Controller');
/**
 * Mesas Controller
 *
 * @property Mesa $Mesa
 * @property PaginatorComponent $Paginator
 */
class MesasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', "Session");
	public $helpers = array('Html', 'Form', 'Time');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mesa->recursive = 0;
		$this->set('mesas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mesa->exists($id)) {
			throw new NotFoundException(__('Invalid mesa'));
		}
		$options = array('conditions' => array('Mesa.' . $this->Mesa->primaryKey => $id));
		$this->set('mesa', $this->Mesa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mesa->create();

			if ($this->Mesa->save($this->request->data)) {
				$this->Flash->success(__('La mesa ha sido creada'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('La mesa no pudo ser creada.'));
			}
		}
		$meseros = $this->Mesa->Mesero->find('list', array('fields'=> array('id', 'nombre_completo')));
		$this->set('meseros', $meseros);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mesa->exists($id)) {
			throw new NotFoundException(__('Invalid mesa'));
		}

		$mesa = $this ->Mesa->findByid($id);

		if(!$mesa){
			throw new NotFoundException(__('la mesa no ha sido encontrada'));
		}


		if ($this->request->is(array('post', 'put'))) {

			$this->Mesa->id->$id;

			if ($this->Mesa->save($this->request->data)) {
				$this->Flash->success(__('The mesa has been saved.'), $element = 'default', $params = array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mesa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mesa.' . $this->Mesa->primaryKey => $id));
			$this->request->data = $this->Mesa->find('first', $options);
		}

	 	$meseros = $this->Mesa->Mesero->find('list', array('fields'=> array('id', 'nombre_completo')));
		$this->set('meseros', $meseros); 
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Mesa->exists($id)) {
			throw new NotFoundException(__('Invalid mesa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mesa->delete($id)) {
			$this->Flash->success(__('The mesa has been deleted.'));
		} else {
			$this->Flash->error(__('The mesa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
