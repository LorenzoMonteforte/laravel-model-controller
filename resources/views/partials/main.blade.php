<main>
    @for ($i=0; $i<sizeof($movies); $i++)
        <ul>
            <li>ID: {{ $movies[$i]["id"] }}</li>
            <li>Titolo: {{ $movies[$i]["title"] }}</li>
            <li>Titolo originale: {{ $movies[$i]["original_title"] }}</li>
            <li>Nazionalità: {{ $movies[$i]["nationality"] }}</li>
            <li>Data: {{ $movies[$i]["date"] }}</li>
            <li>Voto: {{ $movies[$i]["vote"] }}</li>
        </ul>
    @endfor
</main>