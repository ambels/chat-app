# chat-app using web sockets

###### Requirements
- PHP 7.4.11

###### How to run the application
- Clone the project
- Install the dependecies using Composer
- If you haven't already and if using Apache, enable mod rewrite (sudo a2enmod rewrite and restart the web server)
- Execute this command to start the socket server php bin/chat-server.php
- Open the chat interface by visiting (http://localhost/index.php/chat)
- You can open as many browser windows as you want and the server will dispatch the new messages to all connected users immediately
