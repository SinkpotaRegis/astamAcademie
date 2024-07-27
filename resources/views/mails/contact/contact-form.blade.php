<x-mail::message>
# Bonjour {{ config('app.name') }}

Vous avez reçu un message de {{ $data['nom'] }} {{ $data['email'] }} . <br>
Voici son Message <br>
{{ $data['message'] }}
<x-mail::button :url="''">
Bien
</x-mail::button>

Merci<br>
{{ config('app.name') }}
</x-mail::message>
