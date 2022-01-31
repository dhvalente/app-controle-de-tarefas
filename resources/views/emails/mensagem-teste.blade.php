@component('mail::message')

<b>Diogo Valente </b>

Estudante de Engenharia de Software, apaixonado por PHP e Laravel <br><br>


@component('mail::button', ['url' => 'http://www.google.com'])
Entrar em Contato
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
