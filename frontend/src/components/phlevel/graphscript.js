
var timeLabels = ["12:00 AM", "01:00 AM", "02:00 AM", "03:00 AM", "04:00 AM", "05:00 AM"];
var phData = [7.2, 7.0, 6.8, 6.5, 6.7, 7.1]; // pH levels

var ctx = document.getElementById('phChart').getContext('2d');
var phChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: timeLabels,
        datasets: [{
            label: 'pH Level vs. Time',
            data: phData,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false, 
        scales: {
            y: {
                ticks: {
                    beginAtZero: false
                },
                title: {
                    display: true,
                    text: 'pH Level'
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Time'
                }
            }
        }
    }
});
