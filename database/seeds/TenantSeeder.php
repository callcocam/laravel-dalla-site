<?php

use Illuminate\Database\Seeder;
use SIGA\Company;

class TenantSeeder extends Seeder
{
    protected $domain;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->domain = env('APP_DOMAIN',request()->getHost());
        $companys = [];
        // TENANT 01
        $tenant = factory(\SIGA\Tenant::class)->create([
            'id' => \Ramsey\Uuid\Uuid::uuid4(),
            'name' => 'SIGA SMART',
            'domain' => $this->domain,
            'main' => 'super',
            'updated_at' => today(),
            'created_at' => today(),
        ]);

        $companys[$tenant->id] =  factory(Company::class)->create([
            'tenant_id' => $tenant->id,
            'name' => 'SIGA MASTER',
            'email' => sprintf('contato@%s', $this->domain)
        ]);


        foreach ($companys as $key => $company) {

            $company->address()->save(factory(\SIGA\Addres::class)->make([
                'tenant_id' => $key
            ]));

            $company->documents()->save(factory(\SIGA\Document::class)->make([
                'tenant_id' => $key
            ]));

            $company->contacts()->save(factory(\SIGA\Contact::class)->make([
                'tenant_id' => $key
            ]));


            $company->social_links()->save(factory(\SIGA\SocialLink::class)->make([
                'tenant_id' => $key
            ]));

            $company->file()->save(factory(\SIGA\File::class)->make([
                'tenant_id' => $key
            ]));
        }
    }
}
