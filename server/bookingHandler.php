<?php
    if (isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['telefoonnummer']) && isset($_POST['email']) && isset($_POST['aantal_personen']) && isset($_POST['tijd']) && isset($_POST['date']) && isset($_POST['toestemming'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $telefoonnummer = $_POST['telefoonnummer'];
        $email = $_POST['email'];
        $aantal_personen = $_POST['aantal_personen'];
        $tijd = $_POST['tijd'];
        $date = $_POST['date'];
        $toestemming = $_POST['toestemming']; // denk niet nodig

        $data = array(
            'name' => $name,
            'lastname' => $lastname,
            'telefoonnummer' => $telefoonnummer,
            'email' => $email,
            'aantal_personen' => $aantal_personen,
            'tijd' => $tijd,
            'date' => $date,
            'toestemming' => $toestemming
        );

        $jsonData = json_encode($data);
        
    }
?>