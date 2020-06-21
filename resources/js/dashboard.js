import Chart from 'chart.js';

window.randomScalingFactor = function () {
    return Math.round(Math.random() * 1000);
};
window.chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    grey: 'rgb(201, 203, 207)'
};
$(function () {
    var ctx = document.getElementById('js-dashboard').getContext('2d');
    var timeFormat = 'DD/MM/YYYY HH:mm';
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            datasets: [{
                label: 'Все заявки',
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                data: [
                    {
                        x: '01/06/2020 08:00',
                        y: 1
                    },
                    {
                        x: '01/06/2020 09:00',
                        y: 5
                    },
                    {
                        x: '01/06/2020 10:00',
                        y: 7
                    },
                    {
                        x: '01/06/2020 11:00',
                        y: -2
                    },
                    {
                        x: '01/06/2020 12:00',
                        y: -10
                    }
                ],
                fill: false,
            },{
                label: 'Целевые',
                backgroundColor: window.chartColors.purple,
                borderColor: window.chartColors.purple,
                data: [
                    {
                        x: '01/06/2020 08:00',
                        y: 1000
                    },
                    {
                        x: '01/06/2020 09:00',
                        y: 52
                    },
                    {
                        x: '01/06/2020 10:00',
                        y: 7345
                    },
                    {
                        x: '01/06/2020 11:00',
                        y: -233
                    },
                    {
                        x: '01/06/2020 12:00',
                        y: -1220
                    }
                ],
                fill: false,
            }],
        },
        options: {
            title: {
                text: 'Chart.js Time Scale'
            },
            scales: {
                xAxes: [{
                    type: 'time',
                    time: {
                        parser: timeFormat,
                        // round: 'day'
                        tooltipFormat: 'll HH:mm'
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Date'
                    }
                }],
                yAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'value'
                    }
                }]
            },
        },
    });
});
