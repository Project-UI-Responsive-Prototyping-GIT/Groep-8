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