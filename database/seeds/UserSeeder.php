<?php

use Illuminate\Database\Seeder;
use SIGA\Acl\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();

        foreach ($roles as $role) {

            $this->users(1, $role);
        }
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
