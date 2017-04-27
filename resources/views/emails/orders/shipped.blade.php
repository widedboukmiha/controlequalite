

@component('mail::message')

@component('mail::panel')
analyse terminé avec succée 
@endcomponent
@component('mail::button', ['url' => ''])
{{ $content['button'] }}
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent