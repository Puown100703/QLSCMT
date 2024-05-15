<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Khachhang Controller
 *
 */
class KhachhangController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Khachhang->find();
        $khachhang = $this->paginate($query);

        $this->set(compact('khachhang'));
    }

    /**
     * View method
     *
     * @param string|null $id Khachhang id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $khachhang = $this->Khachhang->get($id, contain: []);
        $this->set(compact('khachhang'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $khachhang = $this->Khachhang->newEmptyEntity();
        if ($this->request->is('post')) {
            $khachhang = $this->Khachhang->patchEntity($khachhang, $this->request->getData());
            if ($this->Khachhang->save($khachhang)) {
                $this->Flash->success(__('Thêm thành công.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Vui lòng thử lại.'));
        }
        $this->set(compact('khachhang'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Khachhang id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $khachhang = $this->Khachhang->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $khachhang = $this->Khachhang->patchEntity($khachhang, $this->request->getData());
            if ($this->Khachhang->save($khachhang)) {
                $this->Flash->success(__('Sửa thành công.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Vui lòng thử lại.'));
        }
        $this->set(compact('khachhang'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Khachhang id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $khachhang = $this->Khachhang->get($id);
        if ($this->Khachhang->delete($khachhang)) {
            $this->Flash->success(__('Xóa thành công.'));
        } else {
            $this->Flash->error(__('Vui lòng thử lại.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
