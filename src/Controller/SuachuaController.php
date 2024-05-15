<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Suachua Controller
 *
 * @property \App\Model\Table\SuachuaTable $Suachua
 */
class SuachuaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Suachua->find();
        $suachua = $this->paginate($query);

        $this->set(compact('suachua'));
    }

    /**
     * View method
     *
     * @param string|null $id Suachua id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $suachua = $this->Suachua->get($id, contain: []);
        $this->set(compact('suachua'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $suachua = $this->Suachua->newEmptyEntity();
        if ($this->request->is('post')) {
            $suachua = $this->Suachua->patchEntity($suachua, $this->request->getData());
            if ($this->Suachua->save($suachua)) {
                $this->Flash->success(__('Thêm thành công.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Xin vui lòng thử lại.'));
        }
        $this->set(compact('suachua'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Suachua id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $suachua = $this->Suachua->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $suachua = $this->Suachua->patchEntity($suachua, $this->request->getData());
            if ($this->Suachua->save($suachua)) {
                $this->Flash->success(__('Sửa thành công.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Xin vui lòng thử lại.'));
        }
        $this->set(compact('suachua'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Suachua id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $suachua = $this->Suachua->get($id);
        if ($this->Suachua->delete($suachua)) {
            $this->Flash->success(__('Xóa thành công.'));
        } else {
            $this->Flash->error(__('Xin vui lòng thử lại.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
