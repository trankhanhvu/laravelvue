$(function() {
    'use strict'

    var ticksStyle = {
        fontColor: '#495057',
        fontStyle: 'bold'
    }

    var mode = 'index'
    var intersect = true

    var $salesChart = $('#sales-chart')
    var salesChart = new Chart($salesChart, {
        type: 'bar',
        data: {
            labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            datasets: [{
                    backgroundColor: '#007bff',
                    borderColor: '#007bff',
                    data: [1000, 2000, 3000, 2500, 2700, 2500, 3000]
                },
                {
                    backgroundColor: '#ced4da',
                    borderColor: '#ced4da',
                    data: [700, 1700, 2700, 2000, 1800, 1500, 2000]
                }
            ]
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                mode: mode,
                intersect: intersect
            },
            hover: {
                mode: mode,
                intersect: intersect
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    // display: false,
                    gridLines: {
                        display: true,
                        lineWidth: '4px',
                        color: 'rgba(0, 0, 0, .2)',
                        zeroLineColor: 'transparent'
                    },
                    ticks: $.extend({
                        beginAtZero: true,

                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            if (value >= 1000) {
                                value /= 1000
                                value += 'k'
                            }
                            return '$' + value
                        }
                    }, ticksStyle)
                }],
                xAxes: [{
                    display: true,
                    gridLines: {
                        display: false
                    },
                    ticks: ticksStyle
                }]
            }
        }
    })

    $.ajax({
        type: 'GET',
        url: '/admin/getVisitorAnalytic',
        dataType: 'json',
        success: function(data) {
            var analytic_date = [];
            var analytic_visitor = [];
            var analytic_page_view = [];

            for (var item in data) {
                analytic_date.push(data[item]['date'].replace('-', '/').split('T')[0].replace('-', '/'));
                analytic_visitor.push(data[item]['visitors']);
                analytic_page_view.push(data[item]['pageViews']);
            }

            var $visitorsChart = $('#visitors-chart');
            var visitorsChart = new Chart($visitorsChart, {
                data: {
                    labels: analytic_date,
                    datasets: [{
                            type: 'line',
                            data: analytic_visitor,
                            backgroundColor: 'transparent',
                            borderColor: '#007bff',
                            pointBorderColor: '#007bff',
                            pointBackgroundColor: '#007bff',
                            fill: false
                                // pointHoverBackgroundColor: '#007bff',
                                // pointHoverBorderColor    : '#007bff'
                        },
                        {
                            type: 'line',
                            data: analytic_page_view,
                            backgroundColor: 'tansparent',
                            borderColor: '#ced4da',
                            pointBorderColor: '#ced4da',
                            pointBackgroundColor: '#ced4da',
                            fill: false
                                // pointHoverBackgroundColor: '#ced4da',
                                // pointHoverBorderColor    : '#ced4da'
                        }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        mode: mode,
                        intersect: intersect
                    },
                    hover: {
                        mode: mode,
                        intersect: intersect
                    },
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            // display: false,
                            gridLines: {
                                display: true,
                                lineWidth: '4px',
                                color: 'rgba(0, 0, 0, .2)',
                                zeroLineColor: 'transparent'
                            },
                            ticks: $.extend({
                                beginAtZero: true,
                                suggestedMax: 200
                            }, ticksStyle)
                        }],
                        xAxes: [{
                            display: true,
                            gridLines: {
                                display: false
                            },
                            ticks: ticksStyle
                        }]
                    }
                }
            })
        }
    });



    /* jVector Maps
     * ------------
     * Create a world map with markers
     */
    // $('#world-map-markers').mapael({
    //     map: {
    //         name: "world_countries",
    //         zoom: {
    //             enabled: true,
    //             maxLevel: 10
    //         },
    //     },
    // });

    $.ajax({
        type: 'GET',
        url: '/admin/getCountryAnalytic',
        dataType: 'json',
        success: function(data) {

        }
    });

    var values = {};

    values['ru'] = '5';
    values['ca'] = '5';
    values['au'] = '5';
    values['us'] = '37';
    values['cn'] = '83';

    $('#world-map-markers').vectorMap({
        values: values,
        backgroundColor: 'rgb(80,80,80)',
        scaleColors: ['#C8EEFF', '#006491'], // two colors: for minimum and maximum values 
        normalizeFunction: 'polynomial',
        onRegionLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + values[code] + ')');
            console.log(values[code]);
        }
    });

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.

    var analytic_browser = [0, 0, 0, 0, 0, 0];

    $.ajax({
        type: 'GET',
        url: '/admin/getBrowserAnalytic',
        dataType: 'json',
        success: function(data) {
            for (var item in data) {
                switch (data[item]['browser']) {
                    case 'Chrome':
                        analytic_browser[0] = data[item]['sessions'];
                        break;
                    case 'IE':
                        analytic_browser[1] = data[item]['sessions'];
                        break;
                    case 'FireFox':
                        analytic_browser[2] = data[item]['sessions'];
                        break;
                    case 'Safari':
                        analytic_browser[3] = data[item]['sessions'];
                        break;
                    case 'Opera':
                        analytic_browser[4] = data[item]['sessions'];
                        break;
                    case 'Navigator':
                        analytic_browser[5] = data[item]['sessions'];
                        break;
                }
            }
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
            var pieData = {
                labels: [
                    'Chrome',
                    'IE',
                    'FireFox',
                    'Safari',
                    'Opera',
                    'Navigator',
                ],
                datasets: [{
                    data: analytic_browser,
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }]
            }
            var pieOptions = {
                    legend: {
                        display: false
                    }
                }
                //Create pie or douhnut chart
                // You can switch between pie and douhnut using the method below.
            var pieChart = new Chart(pieChartCanvas, {
                type: 'doughnut',
                data: pieData,
                options: pieOptions
            })

            //-----------------
            //- END PIE CHART -
            //-----------------
        },
    });



})