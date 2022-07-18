<?php

namespace App\Mail;

use App\Models\E_Tower\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerEmail extends Mailable
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
        $setting = Setting::first();
        $name = $setting->website_name_en;
        $subject ='New career request from your website';


        return $this->subject($subject)->from($this->message['email'] ,$this->message['name'])->
        markdown('mail.career_email',[
            'details' => $this->message,
            'name'=> $name,
        ]);

    }
}
