@component('mail::message')
# Replied Message

Thank you {{ $name }} for contacting us.

{!! $reply !!}

Best Regards,<br>
{{ App\Section::getValue('title') }}
@endcomponent