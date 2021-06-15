@component('mail::message')
# Saludos, {{ $data['nombre_de_participante'] }}

Saludos,  
<br>
Gracias por participar del servicio ofrecido por A+ Education & Consulting Solutions. Adjunto su certificado de participación.
<br>
De haber algún error en el certificado, favor notificarlo a beatriz.fernandez@quieroaplus.com. Si usted participó en varios servicios, recibirá un email por servicio (1 certificado por email). Nota: Puede ser no reciba todos los certificados el mismo día. Estamos trabajando para que en el mes de Junio 2021 tenga todos los certificados 2020-2021.

Gracias,<br>
{{ config('app.name') }}
@endcomponent
