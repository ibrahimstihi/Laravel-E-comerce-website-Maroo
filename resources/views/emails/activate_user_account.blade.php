@component('mail::message')
   #Merci de bien activer votre compt 
@component('mail::panel')
    pour activer votre compt
@endcomponent
@component('mail::button',['url'=>$url])
    cliquez ici
@endcomponent
Merci<br>
Store {{ config("app.name") }}

@endcomponent