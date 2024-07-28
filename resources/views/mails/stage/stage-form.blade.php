<x-mail::message>
    # Bonjour {{ config('app.name') }}
Vous avez reçu une demande de Stage de {{ $data['nom'] }} . <br>
Voici ses informations <br>
Email : {{ $data['email'] }} <br>
Phone : {{ $data['phone'] }} <br>
Poste : {{ $data['poste'] }} <br>
Catégorie : {{ $data['categorie'] }} <br>
Pays d'origine : {{ $data['pays'] }} <br> <br> <hr>
Motivation : {{ $data['motivation'] }} <br>
<x-mail::button :url="''">
STAGE
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
