<?php
App::uses('AppController', 'Controller');
/**
 * ProductDetails Controller
 *
 * @property ProductDetail $ProductDetail
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProductDetailsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductDetail->recursive = 0;
		$this->set('productDetails', $this->Paginator->paginate());
	}

    /**
     * index method
     *
     * @return void
     */
    public function catalog() {
        $this->ProductDetail->recursive = 0;
        $this->set('productDetails', $this->Paginator->paginate());
    }


    /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductDetail->exists($id)) {
			throw new NotFoundException(__('Invalid product detail'));
		}
		$options = array('conditions' => array('ProductDetail.' . $this->ProductDetail->primaryKey => $id));
		$this->set('productDetail', $this->ProductDetail->find('first', $options));
	}

    /**
     * viewCat method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view_cat($id = null) {
        if (!$this->ProductDetail->exists($id)) {
            throw new NotFoundException(__('Invalid product detail'));
        }
        $options = array('conditions' => array('ProductDetail.' . $this->ProductDetail->primaryKey => $id));
        $this->set('productDetail', $this->ProductDetail->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductDetail->create();
			if ($this->ProductDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The product detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product detail could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductDetail->exists($id)) {
			throw new NotFoundException(__('Invalid product detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The product detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductDetail.' . $this->ProductDetail->primaryKey => $id));
			$this->request->data = $this->ProductDetail->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductDetail->id = $id;
		if (!$this->ProductDetail->exists()) {
			throw new NotFoundException(__('Invalid product detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductDetail->delete()) {
			$this->Session->setFlash(__('The product detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
