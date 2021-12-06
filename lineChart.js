google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
      
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Thời gian', 'Giá bán', 'Chi phí'],
                ['6',  1000,      400],
                ['7',  1170,      460],
                ['8',  660,       1120],
                ['9',  1030,      540]
              ]);
      
              var options = {
                title: 'Mức tiêu thụ của công ty',
                curveType: 'function',
                legend: { position: 'bottom' }
              };
      
              var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
      
              chart.draw(data, options);
            }