@component('mail::message')
# You have a new website inquery

Name: _{{ $name }}_

Email: <a href="{{ $email }}">_{{ $email }}_</a>

Name: _{{ $subject }}_

Message:
_{{ $message }}_

@endcomponent
