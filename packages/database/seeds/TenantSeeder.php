<?php

use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\SIGA\Tenant::class)->create([
            'id'=>\Ramsey\Uuid\Uuid::uuid4(),
            'name'=>'SIGA MASTER',
            'domain'=>'localhost.crm-11.test',
            'main'=>'super',
            'updated_at'=>today(),
            'created_at'=>today(),
        ]);
        factory(\SIGA\Tenant::class)->create([
            'id'=>\Ramsey\Uuid\Uuid::uuid4(),
            'name'=>'SIGA CLIENT 01',
            'domain'=>'localhost.crm01-11.test',
            'updated_at'=>today(),
            'created_at'=>today(),
        ]);
        factory(\SIGA\Tenant::class)->create([
            'id'=>\Ramsey\Uuid\Uuid::uuid4(),
            'name'=>'SIGA CLIENT 02',
            'domain'=>'localhost.crm02-11.test',
            'updated_at'=>today(),
            'created_at'=>today(),
        ]);

    }
}
