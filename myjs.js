function scheduleAppointment() {
    const name = document.getElementById('name').value;
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    const appointmentDetails = `${name}'s appointment on ${date} at ${time}`;

    const appointmentsContainer = document.getElementById('appointments');
    const appointmentElement = document.createElement('div');
    appointmentElement.classList.add('appointment-box');

    const detailsElement = document.createElement('div');
    detailsElement.classList.add('appointment-details');
    detailsElement.textContent = appointmentDetails;

    const nameElement = document.createElement('div');
    nameElement.classList.add('appointment-name');
    nameElement.textContent = name;

    appointmentElement.appendChild(detailsElement);
    appointmentElement.appendChild(nameElement);

    appointmentsContainer.appendChild(appointmentElement);

    // Clear the form after scheduling
    document.getElementById('appointmentForm').reset();
}