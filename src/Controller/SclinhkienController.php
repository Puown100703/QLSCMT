<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sclinhkien Controller
 *
 * @property \App\Model\Table\SclinhkienTable $Sclinhkien
 */
class SclinhkienController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Sclinhkien->find();
        $sclinhkien = $this->paginate($query);

        $this->set(compact('sclinhkien'));
    }

    /**
     * View method
     *
     * @param string|null $id Sclinhkien id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sclinhkien = $this->Sclinhkien->get($id, contain: []);
        $this->set(compact('sclinhkien'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sclinhkien = $this->Sclinhkien->newEmptyEntity();
        if ($this->request->is('post')) {
            $sclinhkien = $this->Sclinhkien->patchEntity($sclinhkien, $this->request->getData());
            if ($this->Sclinhkien->save($sclinhkien)) {
                $this->Flash->success(__('Thêm thành công.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Xin vui lòng thử lại.'));
        }
        $this->set(compact('sclinhkien'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sclinhkien id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sclinhkien = $this->Sclinhkien->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sclinhkien = $this->Sclinhkien->patchEntity($sclinhkien, $this->request->getData());
            if ($this->Sclinhkien->save($sclinhkien)) {
                $this->Flash->success(__('Sửa thành công.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Xin vui lòng thử lại.'));
        }
        $this->set(compact('sclinhkien'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sclinhkien id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sclinhkien = $this->Sclinhkien->get($id);
        if ($this->Sclinhkien->delete($sclinhkien)) {
            $this->Flash->success(__('Xóa thành công.'));
        } else {
            $this->Flash->error(__('Xin vui lòng thử lại.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
