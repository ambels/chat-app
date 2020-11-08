$(document).ready(() => {

    function showMessage(messageHTML) {
        $('#chat-box').append(messageHTML);
    }

    var websocket = new WebSocket("ws://localhost:8099");

    websocket.onmessage = (event) => {
        let data = JSON.parse(event.data);
        showMessage(`<div><span>${data.user}: </span> ${data.message}</div>`);
        $('#chat-message').val('');
    };

    websocket.onerror = (event) => {
        showMessage("<div class='error'>Problème de connexion</div>");
    };

    websocket.onclose = (event) => {
        showMessage("<div class='chat-connection-ack'>Connexion fermée</div>");
    };

    // handle form submission
    $('#chat-form').submit(event => {
        event.preventDefault();
        let message = $('#chat-message').val();
        let user = $('#chat-user').val();

        showMessage(`<div><span>${user}: </span> ${message}</div>`);
        $('#chat-user').attr("type", "hidden");
        var messageJSON = {
            user: user,
            message: message,
        };
        websocket.send(JSON.stringify(messageJSON));
    });
    // handle form submission
});