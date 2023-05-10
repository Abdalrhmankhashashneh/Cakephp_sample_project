<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Website Controller
 *
 *
 * @method \App\Model\Entity\Website[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WebsiteController extends AppController
{
    public function initialize()
    {
        $this->viewBuilder()->setLayout('website');
    }

    public function index()
    {
    }

    public function about()
    {
    }

    public function services()
    {
    }

    public function login()
    {
    }

}
