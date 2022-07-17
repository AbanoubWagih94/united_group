<?php

namespace App\Mail;

use App\Models\E_Tower\Setting as E_TowerSetting;
use App\Models\Website\ContactUs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact_usMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $message;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $setting = E_TowerSetting::first();
        $name = $setting->website_name_en;
        $subject ='New message from your website';


        return $this->subject($subject)->from($this->message['email'] ,$this->message['name'].''.$this->message['last_name'])->
        markdown('mail.contact_us_mail',[
            'details' => $this->message,
            'name'=> $name,
        ]);

    }
}
