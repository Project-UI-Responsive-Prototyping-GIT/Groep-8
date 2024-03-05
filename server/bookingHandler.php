<?php
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

    // Return response naar de client-side
    // $response = array('success' => true, 'message' => 'Your booking has been received.');
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