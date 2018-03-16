@component('mail::message')
# New Message

You have received a new message from your website contact form:

From: {{ $name }}<br>
Email: {{ $email }}<br>
Message:<br>
{!! $message !!}

Best Regards,<br>
{{ App\Section::getValue('title') }}
@endcomponent