<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
class User extends Entity
{
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'username' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'role' => true,
        'created_at' => true,
        'updated_at' => true,
    ];

    protected $_hidden = [
        'password',
    ];

}
