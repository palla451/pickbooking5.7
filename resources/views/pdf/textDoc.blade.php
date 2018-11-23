<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Title of the document</title>
    <style>
        body {
            font-family: ff2;
            font-size: 18px;
        }
    </style>
</head>


<body>

<p style="text-align: center;"><span style="display: inline !important; float: none; background-color: transparent; color: #ff6600; font-family: ff2; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 72.2px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-shadow: none; text-transform: none; visibility: visible; -webkit-text-stroke-color: transparent; -webkit-text-stroke-width: 0.72px; white-space: pre; word-spacing: 0px;">Modulo di prenotazione per day office o sala riunioni</span></p>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">Dati della societa' o ditta individuale</h3>
<table style="width: 100%;" border="1,8" cellpadding="4"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 13.2px;">
        <td style="width: 40.7259%; height: 13.2px;">denominazione*</td>
        <td style="width: 54.2741%; height: 13.2px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">sede legale in (citta' e prov) *</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">via civico e cap*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">telefono*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">fax*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">email*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">codice fiscale*</td>
        <td style="width: 54.2741%; height: 13px;">{{$user->ragione_sociale}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">partita iva*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">Codice Destinatario Univoco ***</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">PEC - Posta elettronica certificata ***</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">attivitta' esercitata**</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    </tbody>
</table>
<h3>&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">Dati del richiedente</h3>
<table style="width: 100%;" border="1" cellpadding="4"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 13.2px;">
        <td style="height: 13.2px; width: 40.1749%;">nome e cognome*</td>
        <td style="height: 13.2px; width: 53.8251%;">{{$booking->booked_name}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.1749%;">in qualita'&nbsp; di *</td>
        <td style="height: 13px; width: 53.8251%;">&nbsp;</td>
    </tr>
    </tbody>
</table>
<p>&nbsp;</p>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">Dati dell'utilizzatore del servizio</h3>
<table style="width: 100%;" border="1" cellpadding="4"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">nome e cognome**</td>
        <td style="height: 13px; width: 53.2825%;">{{$booking->booked_name}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">cittadinanza**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">residente in (citta' e prov)**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">via civico e cap**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">telefono**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">email**</td>
        <td style="height: 13px; width: 53.2825%;">{{$user->email}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">documento di identita'</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">numero **</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">rilasciato il **</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">rilasciato da**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    </tbody>
</table>
<p>&nbsp;</p>
<p style="font-size: 9px; font-style: oblique;">* Campo obbligatorio</p>
<p style="font-size: 9px; font-style: oblique;">** Campi da compilare prima dell'effettivo utilizzo unitamente alla consegna di una fotocopia del documento di identit&agrave; dell'utilizzatore</p>
<p style="font-size: 9px; font-style: oblique;">*** Fatturazione Elettronica obbligatoria dal 01/01/2019</p>
<p>&nbsp;</p>
<h4 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">CON LA PRESENTE RICHIEDE LA SOMMINISTRAZIONE DEL SEGUENTE SERVIZIO</h4>
<table style="background-color: #d4efff; width: 100%;" border="1"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 12.3125px;">
        <td style="width: 21.6471%; height: 12.3125px;">location</td>
        <td style="width: 74.3529%; height: 12.3125px;">{{$booking->location}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">data inizio</td>
        <td style="width: 74.3529%; height: 13px;">{{$booking->start_date}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">data fine</td>
        <td style="width: 74.3529%; height: 13px;">{{$booking->end_date}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">numero persone</td>
        <td style="width: 74.3529%; height: 13px;">{{$room->pax}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">optional</td>
        <td style="width: 74.3529%; height: 13px;">&nbsp;</td>
    </tr>
    </tbody>
</table>
<p>&nbsp;</p>

</body>

</html>