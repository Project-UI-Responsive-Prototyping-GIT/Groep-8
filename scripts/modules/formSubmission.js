async function formSubmission() {
    try {
        const response = await fetch('server/bookingHandler.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                naam: document.getElementById('naam').value,
                tussenvoegsel: document.getElementById('tussenvoegsel').value,
                achterNaam: document.getElementById('achterNaam').value,
                telefoonnummer: document.getElementById('telefoonnummer').value,
                email: document.getElementById('email').value,
                aantalPersonen: document.getElementById('aantal_personen').value,
                tijd: document.getElementById('tijd').value,
                datum: document.getElementById('datum').value,
                toestemming: document.getElementById('toestemming').value
            })
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        const data = await response.json();

        // Alert de user
        alert(data.success ? `Bedankt ${data.naam} voor het reserveren! op ${data.datum} om ${data.tijd}:00 Uw krijgt een bevestiging per mail. op ${data.email}` : data.error);
        console.log(data); // debug TODO: remove
        console.log(response); // debug TODO: remove

    } catch (error) {
        console.error(`onverwachte error met de fetch: ${error.message}`);
    }
}

export function formSubmitEvent() {
    document.getElementById('booking-form').addEventListener('submit', function(event) {
        event.preventDefault();
        formSubmission();
    });
}