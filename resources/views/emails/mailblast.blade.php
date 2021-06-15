@component('mail::message')
# Saludos, {{ $data['nombre_de_participante'] }}

Saludos,  
<br>
Gracias por participar del servicio ofrecido por A+ Education & Consulting Solutions. Adjunto su certificado de participación.
<br>
De haber algún error en el certificado, favor notificarlo a beatriz.fernandez@quieroaplus.com. Estamos trabajando por orden de fecha. Si usted participó en varios servicios, recibirá un email por servicio (1 certificado por email).

Gracias,<br>
{{ config('app.name') }}
@endcomponent
