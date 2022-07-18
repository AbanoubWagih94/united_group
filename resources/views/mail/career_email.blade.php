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

    @if($details['expected_salary'])
    Expected Salary: {{ $details['expected_salary'] }}
    @endif
    
    
    @if($details['current_salary'])
    Current Salary: {{ $details['current_salary'] }}
    @endif

    @if($details['graduation_year'])
    Graduation Year: {{ $details['graduation_year'] }}
    @endif
    
    
    {{-- @if($details['cv'])
    Cv: @component('mail::button', ['url' => asset('uploads/cvs/'.$details['cv'])])
    Click here
    @endcomponent
    @endif --}}

    @if($details['message'])
    
    Sender Message: {{ $details['message'] }}
    
    @endif

    Time: {{ $details['created_at'] }}
@endcomponent
