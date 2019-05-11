$(function () {
    "use strict";
    // Build the chart
    Highcharts.chart('IndexChartOne', {
      chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie'
      },
      title: {
          text: 'Monthly Purchase'
      },
      tooltip: {
          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
      },
      plotOptions: {
          pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                  enabled: false
              },
              showInLegend: true
          }
      },
      series: [{
          name: 'Brands',
          colorByPoint: true,
          data: [{
              name: 'Diary',
              y: 22.41,
              sliced: true,
              selected: true
          }, {
              name: 'Vegetables',
              y: 11.84
          }, {
              name: 'Grains',
              y: 10.85
          }, {
              name: 'Sea Food',
              y: 4.67
          }]
      }]
    });

    // Build the chart
    Highcharts.chart('IndexChartTwo', {
      chart: {
        type: 'column'
        },
        title: {
            text: 'Yearly Stores Purchase'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Kanuas',
            data: [49.9, 71.5, 106.4, 129.2]

        }, {
            name: 'Vilnius',
            data: [48.9, 38.8, 39.3, 41.4]

        }, {
            name: 'Palanga',
            data: [42.4, 33.2, 34.5, 39.7]

        }]
    });



});
