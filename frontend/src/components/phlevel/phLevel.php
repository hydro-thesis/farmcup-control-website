<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> pH Level </title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/10.0.0/material-components-web.min.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-2">
                menu
            </div>
            <div class="mdc-layout-grid__cell--span-10">
                <div class='navigation-header'> Home > pH Level </div>
                
                <div class='page-header'>
                    <h1 class='parameter-name-title'>pH Level</h1>
                </div>

                <div class='updated-parameter-container'>
                    <h2 class='parameter-name'>Value</h2>
                    <text class='paramter-last-value'>9.00</text>
                    <p class='parameter-last-updated'>Last Updated: April 12, 2024, 15:30</p>
                </div> 

                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-6">
                        <table class=parameters>
                            <thead>
                                <tr>
                                    <th>Value</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>9.00</td>
                                    <td>15:00</td>
                            </tbody>
                        </table>
                    </div>
                    <div class="mdc-layout-grid__cell--span-6">
                        <canvas id="phChart" width="800" height="400"></canvas>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/10.0.0/material-components-web.min.js"></script>
    <script src="./graphscript.js"></script>
    <script>
        mdc.autoInit();
    </script>
    </body>
</html>