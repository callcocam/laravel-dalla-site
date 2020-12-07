<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResellerMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $user;

    /**
     * Create a new message instance.
     *
     * @param $data
     * @param $user
     */
    public function __construct($data, $user=null)
    {
        //
        $this->data = $data;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')->view('emails.reseller')
            ->with('data',$this->data)
            ->with('user',$this->user);
    }
}
