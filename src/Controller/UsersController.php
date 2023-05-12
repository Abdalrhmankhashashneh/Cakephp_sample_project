<?php

namespace App\Controller;
use App\Controller\AdminController;

class UsersController extends AdminController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 10,
            'order' => ['created' => 'desc'],
            // Add conditions or joins if needed
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->render('../Admin/Users/index');
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }
    public function addUserForm(){
        $this->viewBuilder()->setLayout('models');
        return $this->render('../Admin/Users/ajax/add_user_form');
    }

    public function add_user()
    {
        dd($this->request->getData());
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function editUserForm($user_id){
        $this->viewBuilder()->setLayout('models');
        $this->render('../Admin/Users/ajax/edit_user_form');
    }
    public function edit_user($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
