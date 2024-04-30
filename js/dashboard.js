document.addEventListener('DOMContentLoaded', function() {
    var ticketForm = document.getElementById('ticket-form');
    if(ticketForm) {
        ticketForm.addEventListener('submit', function(event) {
            event.preventDefault();

            var ticketName = document.getElementById('ticket-name').value;
            var ticketProject = document.getElementById('ticket-project').value;
            var ticketDescription = document.getElementById('ticket-description').value;
            console.log("Nombre del Ticket:", ticketName);
            console.log("Proyecto:", ticketProject);
            console.log("Descripción del Ticket:", ticketDescription);
            this.reset();
        });
    }
});

function showTickets() {
    document.getElementById("project-details").style.display = "none";
    document.getElementById("ticket-details").style.display = "block";
    document.getElementById("main-content").innerHTML = "<h2>Lista de Tickets</h2><p>Aquí se mostrarán los tickets...</p>";
    document.querySelector('.ticket-creation').style.display = 'block';
}

function showProjects() {
    document.getElementById("project-details").style.display = "block";
    document.getElementById("ticket-details").style.display = "none";
    document.getElementById("main-content").innerHTML = ""; 
}

function logout() {
}
