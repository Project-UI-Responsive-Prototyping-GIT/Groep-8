async function formSubmission() {
    try {
        const response = await fetch('server/bookingHandler.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                name: document.getElementById('name').value,
                tussenvoegsel: document.getElementById('tussenvoegsel').value,
                lastname: document.getElementById('lastname').value,
                telefoonnummer: document.getElementById('telefoonnummer').value,
                email: document.getElementById('email').value,
                aantalPersonen: document.getElementById('aantal_personen').value,
                tijd: document.getElementById('tijd').value,
                date: document.getElementById('date').value,
                toestemming: document.getElementById('toestemming').value
            })
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        const data = await response.json();

        // Alert the user
        // alert('Your booking has been sent!');
        console.log(data);
        console.log(response);

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