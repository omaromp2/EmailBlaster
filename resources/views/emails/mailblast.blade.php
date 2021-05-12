@component('mail::message')
# Hello {{ $data['nombre_de_participante'] }}

Here is your certificate.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
