<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \SIGA\Acl\Role::query()->delete();
        $this->addroles([
            'name' => "Super Admin",
            'email' => "admin@localhost.crm-09.test"
        ]);
    }

    protected function addroles($data){

        factory(\SIGA\Acl\Role::class,1)->create([
            'name'=>'Super Admin',
            'slug'=>'super-admin',
            'special'=>'all-access'
        ])->each(function ($role) use ($data){
            $this->users(1,$role,$data);
        });

        factory(\SIGA\Acl\Role::class,1)->create([
            'name'=>'Admin',
            'slug'=>'admin',
            'special'=>null
        ])->each(function ($role){
            $this->users(1,$role);
        });


        factory(\SIGA\Acl\Role::class,1)->create([
            'name'=>'Gerente',
            'slug'=>'gerente',
            'special'=>null,
            'description'=>'Consegue fazer todas as operações no sistema',
        ])->each(function ($role){
            $this->users(1,$role);
        });

        factory(\SIGA\Acl\Role::class,1)->create([
            'name'=>'Funcionário',
            'slug'=>'funcionario',
            'special'=>null,
            'description'=>'Consegue visualizar eventos',
        ])->each(function ($role)  {
            $this->users(5,$role);
        });

        factory(\SIGA\Acl\Role::class,1)->create([
            'name'=>'Cliente',
            'slug'=>'cliente',
            'special'=>null,
            'description'=>'Consegue fazer pedidos, acompanhar pedidos ',
        ])->each(function ($role) {
            $this->users(10,$role);
        });
    }

    private function users($amount,$role,$data=[]){
        factory(\SIGA\User::class,$amount)->create($data)->each(function (\SIGA\User $user) use ($role){
           // $user->address()->save(factory(\SIGA\Addres::class)->make());
           // $user->file()->save(factory(\SIGA\File::class)->make());
            //$role->user_id = $user->id;
          //  $role->update();
           // $user->roles()->sync($role);
            //$this->blog($user);
        });
    }
}
