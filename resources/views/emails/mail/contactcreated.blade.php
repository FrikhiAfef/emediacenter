@component('mail::message')
# Mail reçue de la part de
-{{$contact->prenomC}}<br>
-{{$contact->nomC}}<br>
- contenu :{{$contact->message}}<br>

@component('mail::panel')
    {{$contact->email}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
