<?php
namespace App\Controller;

use Cake\Event\EventInterface;
use App\Controller\AppController;
use Cake\Controller\Component\AuthComponent;
class AdminController extends AppController
{
    public function initialize()
    {
        $this->viewBuilder()->setLayout('adminPanel');
        $this->loadComponent('Paginator');
$this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'admin',
                'action' => 'login',
                'plugin' => false
            ],
            'loginRedirect' => [
                'controller' => 'admin',
                'action' => 'index',
                'plugin' => false
            ],
            'logoutRedirect' => [
                'controller' => 'admin',
                'action' => 'login',
                'plugin' => false
            ],
            'authError' => 'You are not authorized to access that location.',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'storage' => 'Session'
        ]);


    }
    public function beforeRender(EventInterface $event)
    {
        $this->set('loggedInUser', $this->Auth->user());

    }
    public function index()
    {
    }
    public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user['role'] == 0){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Incorrect Login');
        }
    }
    public function logout(){
        $this->Flash->success('You are logged out');
        return $this->redirect($this->Auth->logout());
    }

}
