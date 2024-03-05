<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        // Als de request niet van de POST methode komt, stuur een error terug
        echo json_encode(array('error' => 'Server only accepts POST requests.'));
        exit;
    }

    // Retrieve the JSON data sent from the client-side
    $json_data = file_get_contents('php://input');

    // Decode the JSON data into a PHP associative array
    $data = json_decode($json_data, true);

    if (!isset($data['name']) || !isset($data['lastname']) || !isset($data['telefoonnummer']) || !isset($data['email']) || !isset($data['aantalPersonen']) || !isset($data['tijd']) || !isset($data['date']) || !isset($data['toestemming'])) {
        // error als er iets mist
        echo json_encode(array('error' => 'One or more required fields are missing.'));
        exit;
    }

    // process de data
    $name = $data['name'];
    $tussenvoegsel = $data['tussenvoegsel'];
    $lastname = $data['lastname'];
    $telefoonnummer = $data['telefoonnummer'];
    $email = $data['email'];
    $aantal_personen = $data['aantalPersonen'];
    $tijd = $data['tijd'];
    $date = $data['date'];
    $toestemming = $data['toestemming']; // denk dat dit niet nodig is

    // TODO: zorgen dat de user een bevestiging mail krijgt.
    $emailSubject = "Bevestiging van uw reservering bij PizzaDen";
    $emailMessage = "Beste $name\n Dit is een automatische bevestiging om te laten weten dat we uw reservering hebben ontvangen bij PizzaDen. Hieronder vindt u de details van uw reservering:\n\nNaam: $name $tussenvoegsel $lastname\nTelefoonnummer: $telefoonnummer\nEmail: $email\nDatum: $date\nTijd: $tijd\nAantal personen: $aantal_personen\n\nU hoeft niet te antworden op deze mail, aangezien dit een automatische bevestiging is. Als u vragen heeft over uw reservering of als u wijzigignen wilt aanbrengen, kunt u contact met ons opnemen via telefoon 071-7431791 of via email info@pizzaden.nl. We helpen u graag verder.\n\nMet vriendelijke groet,\nPizzaDen";
    $emailMessage = strip_tags($emailMessage); // Remove HTML tags
    $emailMessage = wordwrap($emailMessage, 70);
    $emailHeaders = "From: patrickstaats@outlook.com";

    // FIXME: zorgen dat de mail ook daadwerkelijk verstuurd wordt geeft nu een Unexpected token error
    // if (mail($email, $emailSubject, $emailMessage, $emailHeaders)) {
    //     echo json_encode(array('success' => true));
    // } else {
    //     echo json_encode(array('error' => 'Unable to send email.'));
    // }

    // Return response naar de client-side
    $response = array(
        'name' => $name,
        'lastname' => $lastname,
        'telefoonnummer' => $telefoonnummer,
        'email' => $email,
        'aantal_personen' => $aantal_personen,
        'tijd' => $tijd,
        'date' => $date,
    );
    echo json_encode($response);
    exit;
?>