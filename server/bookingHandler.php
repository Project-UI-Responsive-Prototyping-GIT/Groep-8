<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        // Als de request niet van de POST methode komt, stuur een error terug
        exit(json_encode(array('error' => 'Server only accepts POST requests.')));
    }

    // Ontvangt de JSON data
    $json_data = file_get_contents('php://input');

    $data = json_decode($json_data, true);

    // zorgt dat de user een alert krijgt als de reservering is gelukt
    $success = false;

    if (!isset($data['naam']) || !isset($data['achterNaam']) || !isset($data['telefoonnummer']) || !isset($data['email']) || !isset($data['aantalPersonen']) || !isset($data['tijd']) || !isset($data['datum']) || !isset($data['toestemming'])) {
        exit(json_encode(array('error' => 'One or more required fields are missing.')));
    }

    // process de data
    $naam = $data['naam'];
    $tussenvoegsel = $data['tussenvoegsel'];
    $achterNaam = $data['achterNaam'];
    $telefoonnummer = $data['telefoonnummer'];
    $email = $data['email'];
    $aantal_personen = $data['aantalPersonen'];
    $tijd = $data['tijd'];
    $datum = $data['datum'];
    $toestemming = $data['toestemming']; // denk dat dit niet nodig is

    // TODO: zorgen dat de user een bevestiging mail krijgt.
    $emailSubject = "Bevestiging van uw reservering bij PizzaDen";
    $emailMessage = "Beste $naam\n Dit is een automatische bevestiging om te laten weten dat we uw reservering hebben ontvangen bij PizzaDen. Hieronder vindt u de details van uw reservering:\n\nNaam: $naam $tussenvoegsel $achterNaam\nTelefoonnummer: $telefoonnummer\nEmail: $email\nDatum: $datum\nTijd: $tijd\nAantal personen: $aantal_personen\n\nU hoeft niet te antworden op deze mail, aangezien dit een automatische bevestiging is. Als u vragen heeft over uw reservering of als u wijzigignen wilt aanbrengen, kunt u contact met ons opnemen via telefoon 071-7431791 of via email info@pizzaden.nl. We helpen u graag verder.\n\nMet vriendelijke groet,\nPizzaDen";
    $emailMessage = strip_tags($emailMessage); // Remove HTML tags
    $emailMessage = wordwrap($emailMessage, 70);
    $emailHeaders = "From: voerSenderMail@gmail.com";

    // FIXME: zorgen dat de mail ook daadwerkelijk verstuurd wordt geeft nu een Unexpected token error
    // if (mail($email, $emailSubject, $emailMessage, $emailHeaders)) {
    //     $success = true;
    // } else {
    //     echo json_encode(array('error' => 'Unable to send email.'));
    // }

    $success = true; // tijdelijke oplossing

    // Return response naar de client-side
    $response = array(
        'success' => $success,
        'naam' => $naam,
        'achterNaam' => $achterNaam,
        'telefoonnummer' => $telefoonnummer,
        'email' => $email,
        'aantal_personen' => $aantal_personen,
        'tijd' => $tijd,
        'datum' => $datum,
    );
    echo json_encode($response);
    exit;
?>