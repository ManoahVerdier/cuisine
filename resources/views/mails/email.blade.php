Vous avez recu un email depuis {{env('APP_NAME')}} 
<p>
    Nom: {{ $nom }}
</p>
<p>
    Email: {{ $email }}
</p>
<p>
    Téléphone: {{ $telephone }}
</p>
<p>
    Entreprise: {{ $entreprise }}
</p>
<p>
    Nombre de techniciens: {{ $nb_tech }}
</p>
<p>
    Démo: {{ $demo }}
</p>
<p>
    Message: {{ print_r($message_ctc,true) }}
</p>
