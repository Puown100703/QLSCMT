<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Nhanvien Controller
 *
 * @property \App\Model\Table\NhanvienTable $Nhanvien
 */
class NhanvienController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Nhanvien->find();
        $nhanvien = $this->paginate($query);

        $this->set(compact('nhanvien'));
    }

    /**
     * View method
     *
     * @param string|null $id Nhanvien id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nhanvien = $this->Nhanvien->get($id, contain: []);
        $this->set(compact('nhanvien'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nhanvien = $this->Nhanvien->newEmptyEntity();
        if ($this->request->is('post')) {
            $nhanvien = $this->Nhanvien->patchEntity($nhanvien, $this->request->getData());
            if ($this->Nhanvien->save($nhanvien)) {
                $this->Flash->success(__('Thêm Nhân viên thành công.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Xin vui lòng thử lại.'));
        }
        $this->set(compact('nhanvien'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nhanvien id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nhanvien = $this->Nhanvien->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nhanvien = $this->Nhanvien->patchEntity($nhanvien, $this->request->getData());
            if ($this->Nhanvien->save($nhanvien)) {
                $this->Flash->success(__('Sửa thành công.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Xin vui lòng thử lại.'));
        }
        $this->set(compact('nhanvien'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nhanvien id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nhanvien = $this->Nhanvien->get($id);
        if ($this->Nhanvien->delete($nhanvien)) {
            $this->Flash->success(__('Xóa thành công.'));
        } else {
            $this->Flash->error(__('Xin vui lòng thử lại.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
