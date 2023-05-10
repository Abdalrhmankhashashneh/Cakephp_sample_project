<?php
namespace App\Controller;

use App\Controller\AppController;

class AdminController extends AppController
{
    public function initialize()
    {
        $this->viewBuilder()->setLayout('adminPanel');
    }

    public function index()
    {
    }
}
