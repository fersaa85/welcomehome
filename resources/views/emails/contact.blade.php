@component('mail::message')
# Mensaje de contacto

Nombre: {{ $name  }}<br>
Email: {{ $email  }}<br>
Mensaje: {{ $message  }}<br>
Deseas recibir información: {{ $infoMessage }}

@endcomponent
