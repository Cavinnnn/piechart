<!DOCTYPE html>
<html>
    <head>
        
        <title>pie</title>
        
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        
        
      
        
    </head>
    <body>
    
    <p id="demo"></p>
    <p id="demo1"></p>
    <p id="demo"></p>
    <p id="demo"></p>
    <p id="demo"></p>
    <p id="demo"></p>
    <script>
        
    var text = '{ "chart1" : [' +
    '{ "value":"10000"},' +
    '{ "value1":"20000"},' +
    '{ "value":"30000"},' +
    '{ "value":"40000"},' +
    '{ "value":"50000"},' +
    '{ "value":"60000"},' +
    '{ "value":"70000"},' +
    '{ "value":"80000"} ]}';
        
        obj = JSON.parse(text);
        document.getElementById("demo").innerHTML =
        obj.chart1[0].value;
        
        obj1 = JSON.parse(text);
        document.getElementById("demo1").innerHTML =
        obj1.chart1[1].value;
        
        obj.chart1[2].value;
        
        obj.chart1[3].value;
        obj.chart1[4].value;

    </script>
    
          
        <div id="container" style="float:right;">
            <div class="row">
                <div = "col-sm-6 col-md-6">
                    <div id="con1"></div>
                </div>
                
                <div = "col-sm-6 col-md-6">
                    <div id="con2"></div>
                </div>
                
                <div = "col-sm-6 col-md-6">
                    <div id="con3"></div>
                </div>
                
                <div = "col-sm-6 col-md-6">
                    <div id="con4"></div>
                </div>   
                
                <div = "col-sm-6 col-md-6">
                    <div id="con5"></div>
                </div>
                
            </div>
        </div>
    
    
    
    
    <script>
    
    
    var i = 0;
    var x = 10000;
    
   Highcharts.chart('con1', {

    title: {
        text: 'Project'
    },

    yAxis: {
        title: {
            text: 'subject'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },




    series: [{
        name: 'Installation',
        data: [i, 52503, 57177, 69658, x, 119931, 137133, 150000]
    }, {
        name: 'Manufacturing',
        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    }, {
        name: 'Sales & Distribution',
        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
    }, {
        name: 'Project Development',
        data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
    }, {
        name: 'Other',
        data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
    </script>
    
    </body>
</html>