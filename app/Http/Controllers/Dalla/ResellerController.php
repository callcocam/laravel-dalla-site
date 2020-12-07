<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Controllers\Dalla;

use App\Dalla\Reseller;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\Dalla\ResellerRequest;
use App\Mail\ResellerMail;
use Illuminate\Support\Facades\Mail;

class ResellerController extends AbstractController
{

   protected $template = 'resellers';
   protected $theme = 'dalla';
   protected $model = Reseller::class;

   public function store(ResellerRequest $resellerRequest){

       //AJUDA
       //https://laravel.com/docs/8.x/mail
       $reseller = parent::save($resellerRequest);
       Mail::to("site@dallacervejaria.com.br")
           //->cc($moreUsers)
           ///->bcc($evenMoreUsers)
           ->send(new ResellerMail($resellerRequest->input()));

       return $reseller;
   }

}
