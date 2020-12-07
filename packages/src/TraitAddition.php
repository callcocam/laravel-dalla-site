<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

trait TraitAddition
{
    public function address()
    {

        return $this->morphOne(Addres::class, 'addresable')->select(['id', 'name', 'slug', 'zip', 'city', 'state', 'country', 'street', 'district', 'number', 'complement', 'status']);
    }

    public function getAddressAttribute()
    {

        return $this->address()->first();
    }

    public function contacts()
    {

        return $this->morphOne(Contact::class, 'contactable')->select(['id', 'name', 'slug', 'description', 'status']);
    }

    public function getContactsAttribute()
    {

        return $this->contacts();
    }

    public function documents()
    {

        return $this->morphOne(Document::class, 'documentable')->select(['id', 'name', 'slug', 'description', 'status']);
    }

    public function getDocumentsAttribute()
    {

        return $this->documents();
    }


    public function social_links()
    {

        return $this->morphOne(SocialLink::class, 'sociallinkable')->select(['id', 'name', 'slug', 'description', 'status']);
    }

    public function getSocialLinksAttribute()
    {

        return $this->social_links();
    }
}
