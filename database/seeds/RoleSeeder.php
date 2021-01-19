<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    protected $domain = "ep3mglobal.com.br";
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->domain = env('APP_DOMAIN', request()->getHost());
        \SIGA\Acl\Role::query()->delete();
        $this->addroles([
            'name' => "Super Admin",
            'email' => $this->email('super-admin')
        ]);
    }

    protected function email($email)
    {
        return sprintf("%s@%s", $email, $this->domain);
    }
    protected function addroles($data)
    {

        factory(\SIGA\Acl\Role::class, 1)->create([
            'name' => 'Super Admin',
            'slug' => 'super-admin',
            'special' => 'all-access',
            'description' => 'Consegue administrar tudo no sistema mas as configurações'
        ])->each(function ($role) use ($data) {
            $this->users(1, $role, $data);
        });

        factory(\SIGA\Acl\Role::class, 1)->create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => null,
            'description' => 'Consegue administrar tudo no sistema'
        ])->each(function ($role) {
            $this->users(1, $role, [
                'name' => "Super Admin",
                'email' => $this->email('admin')
            ]);
        });


        factory(\SIGA\Acl\Role::class, 1)->create([
            'name' => 'Gerente',
            'slug' => 'gerente',
            'special' => null,
            'description' => 'Consegue fazer todas as operações de um Gerente no sistema',
        ])->each(function ($role) {
            $this->users(1, $role, [
                'name' => "Gerente",
                'email' => $this->email('gerente')
            ]);
        });

        factory(\SIGA\Acl\Role::class, 1)->create([
            'name' => 'Funcionário',
            'slug' => 'funcionario',
            'special' => null,
            'description' => 'Consegue fazer todas as operações de um Funcionário no sistema',
        ])->each(function ($role) {
            $this->users(1, $role, [
                'name' => "Funcionário",
                'email' => $this->email('funcionario')
            ]);
        });

        factory(\SIGA\Acl\Role::class, 1)->create([
            'name' => 'Cliente',
            'slug' => 'cliente',
            'special' => null,
            'description' => 'Consegue fazer pedidos, acompanhar pedidos, e so temacesso ao site',
        ])->each(function ($role) {
            $this->users(1, $role, [
                'name' => "Cliente",
                'email' => $this->email('cliente')
            ]);
        });
    }

    private function users($amount, $role, $data = [])
    {
        factory(\SIGA\User::class, $amount)->create($data)->each(function (\SIGA\User $user) use ($role) {
            $user->address()->save(factory(\SIGA\Addres::class)->make());
            $user->contacts()->save(factory(\SIGA\Contact::class)->make());
            $user->documents()->save(factory(\SIGA\Document::class)->make());
            $user->social_links()->save(factory(\SIGA\SocialLink::class)->make());
            $user->file()->save(factory(\SIGA\File::class)->make());
            $role->user_id = $user->id;
            $role->update();
            $user->roles()->sync($role);
            //$this->blog($user);
        });
    }
}
