<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Farm Cup Login </title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/10.0.0/material-components-web.min.css">

        <link rel="stylesheet" href="./style.css">

    </head>
    <body>
        <div class="login-container">
            <h1 class="login-header"> Login </h1>
            <div class="login-form">
                <div class="md-text-field">
                    <label for="username">Username</label>
                    <input type="text" id="username">
                </div>
                <div class="md-text-field">
                    <label for="password">Password</label>
                    <input type="password" id="password">
                </div>
                <button class="md-button" onclick="login()">Login</button>
            </div>
        </div>
    
        <script src="script.js"></script>
    </body>
</html>