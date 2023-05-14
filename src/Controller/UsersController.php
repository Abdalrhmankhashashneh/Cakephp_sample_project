<?php

namespace App\Controller;
use App\Controller\AdminController;
use App\Model\Table\UsersTable;
use Cake\Auth\DefaultPasswordHasher;

class UsersController extends AdminController
{
    protected static function passwordHasher($password)
    {
        return (new DefaultPasswordHasher())->hash($password);
    }
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

    public function addUser()
    {
        if ($this->request->is('post')) {
            $user = new UsersTable();
            $data = $this->request->getData();
            $data['password'] = self::passwordHasher($data['password']);
            $data = $user->newEntity($data);
            $user->save($data);

            if (count($data->getErrors()) > 0){
            dd($data->getErrors());
            }


        }

        $this->render('../Admin/users/index');
    }

    public function editUserForm($user_id){
        $this->viewBuilder()->setLayout('models');
        $user = new UsersTable();
        $user = $user->find()->where('id', $user_id)->first();
        $this->set(compact('user'));
        $this->render('../Admin/Users/ajax/edit_user_form');
    }
    public function editUser($user_id)
    {
        $this->autoRender = false;
        return $user_id;
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
