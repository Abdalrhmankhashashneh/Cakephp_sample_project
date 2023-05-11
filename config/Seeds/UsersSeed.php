<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'first_name'    => 'Admin',
            'last_name'     => 'KH',
            'username'      => 'adminkh',
            'email'         => 'admin@example.com',
            'password'      =>  self::passwordHasher('123456'),
            'role'          => '0',
            'created_at'       => date('Y-m-d H:i:s'),
            'updated_at'       => date('Y-m-d H:i:s'),
        ];


        $table = $this->table('users');
        $table->insert($data)->save();
    }
    protected static function passwordHasher($password)
    {
        return (new DefaultPasswordHasher())->hash($password);
    }
}
