<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
    <h3>Conferma booking n.{{$booking->id}}</h3>
    <p>Gent.Le {{$booking->booked_name}},</h5> ringraziandoLa per la fiducia accordata, di seguito il riepilogo dei servizi richiesti:<br />

        Prenotazione della risorsa {{$room->name}} presso la sede {{$booking->location}} dal {{$booking->start_date}} al {{$booking->end_date}}</p>

     <div class="container">
        <div class="row">
            <div class="col-md-6" style="">
                Prezzo Risorsa: &euro; {{$booking->price}},00
            </div>
            <div class="col-md-6" style="">
                Coffee break: &euro; {{$optional->coffee_break}},00
            </div>
            <div class="col-md-6" style="">
                Quick Lunch: &euro; {{$optional->quick_lunch}},00
            </div>
            <div class="col-md-6" style="">
                Videoproiettore: &euro; {{$optional->videoproiettore}},00
            </div>
            <div class="col-md-6" style="">
                Permanent Coffee: &euro; {{$optional->permanent_coffee}},00
            </div>
            <div class="col-md-6" style="">
                Wi-Fi: &euro; {{$optional->wifi}},00
            </div>
            <div class="col-md-6" style="">
                Videconferenza: &euro; {{$optional->videoconferenza}},00
            </div>
            <div class="col-md-6" style="">
                Webconference: &euro; {{$optional->webconference}},00
            </div>
            <div class="col-md-6" style="">
                 Lavagna fogli mobili: &euro; {{$optional->lavagna_foglimobili}},00
            </div>
            <div class="col-md-6" style="">
                Stampante: &euro; {{$optional->stampante}},00
            </div>
            <div class="col-md-6" style="">
                Permanent Coffee Plus: &euro; {{$optional->permanent_coffeeplus}},00
            </div>
            <div class="col-md-6" style="">
                Connessione via cavo: &euro; {{$optional->connessione_viacavo}},00
            </div>
            <div class="col-md-6" style="">
                Integrazione Permanent Coffee plus: &euro; {{$optional->integrazione_permanentcoffee}},00
            </div>
            <div class="col-md-6" style="">
                Upgrade banda 10 Mb: &euro; {{$optional->upgrade_banda10mb}},00
            </div>
            <div class="col-md-6" style="">
                Upgrade banda 8Mb: &euro; {{$optional->upgrade_banda8mb}},00
            </div>
            <div class="col-md-6" style="">
                Upgrade banda 20Mb: &euro; {{$optional->upgrade_banda20mb}},00
            </div>
            <div class="col-md-6" style="">
                Wirless 4Mb 20 accessi: &euro; {{$optional->wirless_4mb20accessi}},00
            </div>
            <div class="col-md-6" style="">
                Wirless 8Mb 35 accessi: &euro; {{$optional->wirless_8mb35accessi}},00
            </div>
            <div class="col-md-6" style="">
                Video Registrazione: &euro; {{$optional->videoregistrazione}},00
            </div>
            <div class="col-md-6" style="">
                Fattorino: &euro; {{$optional->fattorino}},00
            </div>
            <div class="col-md-6" style="">
                Lavagna Interattiva: &euro; {{$booking->lavagna_interattiva}},00
            </div>

            <div class="col-md-6" style="">
                -----------------------------------------------------<br />
                Totale: &euro; {{$booking->total_price}},00 + Iva
            </div>

        </div>
    </div>

</div>

</body>
</html>