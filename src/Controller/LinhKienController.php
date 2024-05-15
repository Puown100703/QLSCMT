<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LinhKien Controller
 *
 * @property \App\Model\Table\LinhKienTable $LinhKien
 */
class LinhKienController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->LinhKien->find();
        $linhKien = $this->paginate($query);

        $this->set(compact('linhKien'));
    }

    /**
     * View method
     *
     * @param string|null $id Linh Kien id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $linhKien = $this->LinhKien->get($id, contain: []);
        $this->set(compact('linhKien'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $linhKien = $this->LinhKien->newEmptyEntity();
        if ($this->request->is('post')) {
            $linhKien = $this->LinhKien->patchEntity($linhKien, $this->request->getData());
            if ($this->LinhKien->save($linhKien)) {
                $this->Flash->success(__('The linh kien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The linh kien could not be saved. Please, try again.'));
        }
        $this->set(compact('linhKien'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Linh Kien id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $linhKien = $this->LinhKien->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $linhKien = $this->LinhKien->patchEntity($linhKien, $this->request->getData());
            if ($this->LinhKien->save($linhKien)) {
                $this->Flash->success(__('The linh kien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The linh kien could not be saved. Please, try again.'));
        }
        $this->set(compact('linhKien'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Linh Kien id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $linhKien = $this->LinhKien->get($id);
        if ($this->LinhKien->delete($linhKien)) {
            $this->Flash->success(__('The linh kien has been deleted.'));
        } else {
            $this->Flash->error(__('The linh kien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
