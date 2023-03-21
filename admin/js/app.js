(function(window, document, $, undefined) {

    $(function() {
        var apexChart = jQuery(".apexchart-wrapper");
    if (apexChart.length > 0) {
        var colorPalette = ['#00D8B6','#008FFB',  '#FEB019', '#FF4560', '#775DD0']


                var jobsetchart = jQuery('#jobsetchart')
                if (jobsetchart.length > 0) {
                  var options = {
                    chart: {
                        height: 350,
                        type: 'area',
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'smooth'
                    },
                    series: [{
                        name: 'series1',
                        data: [31, 40, 28, 51, 42, 109, 100]
                    }, {
                        name: 'series2',
                        data: [11, 32, 45, 32, 34, 52, 41]
                    }],
                    colors: ['#8E54E9', '#2bcbba'],
                    xaxis: {
                        type: 'datetime',
                        categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],                
                    },
                    tooltip: {
                        x: {
                            format: 'dd/MM/yy HH:mm'
                        },
                    }
                }
        
                var chart = new ApexCharts(
                    document.querySelector("#jobsetchart"),
                    options
                );
        
                chart.render();
                }     
                             
        }
    });

})(window, document, window.jQuery);