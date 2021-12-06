google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['tiến độ', 'Hours per Day'],
          ['Doanh thu',     11],
          ['Lãi',      2],
          ['Lỗ',  2],
          ['Nợ', 2],
          ['Yêu đời',    7]
        ]);

        var options = {
          title: 'Doanh thu tháng vừa qua'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }