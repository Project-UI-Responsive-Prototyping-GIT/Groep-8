async function formSubmission() {
    try {
        const response = await fetch('./server/bookingHandler.php', {
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
                toestemming: document.getElementById('toestemming').checked
            })
        });
        if (response.ok) {
            const data = await response.json();
            // hier kan je de data verwerken in de front-end (bijv. een succesmelding tonen)
            console.log(data);
        }

        throw new Error('Request niet gelukt!');
    } catch (error) {
        console.error(error);
    }
}

export function formSubmitEvent() {
    document.getElementById('booking-form').addEventListener('submit', function(event) {
        event.preventDefault();
        formSubmission();
    });
}