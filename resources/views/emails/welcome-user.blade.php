



@component('mail::message')
# Bienvenue

Merci davoir adherer

@component('mail::button', ['url' => 'http://127.0.0.1:8000/entreprise.addEntreprise'])
veillez cliquer ici pour vous inscrire
@endcomponent

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
