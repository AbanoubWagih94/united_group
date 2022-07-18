@php
 $settings = DB::table('settings')->first();   
@endphp
@component('mail::message')
Dear {{$settings->website_name_en}} Admins

    You have new message from your website

    Details below

    Sendr Name: {{ $details['name'] }}

    Sender Email: {{ $details['email'] }}

    Sender Phone: {{ $details['phone'] }}

    
    
    @if($details['message'])
    
    Sender Message: {{ $details['message'] }}
    
    @endif

    Time: {{ $details['created_at'] }}
@endcomponent
