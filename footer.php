

<div class="footer">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>mmit aligarh</h1>
                    </div>
                    <div class="col-sm-3">
                    
                    </div>
                    <div class="col-sm-3">
                        6397075715
                    </div>
                </div>

            </div>


</body>

<script>
  var statusValues = ["Present", "Absent",];
  var dataValues = [17, 3];
  var barColors = [
    "#b91d47",
    "#00aba9",

  ];

  new Chart("myChart", {
    type: "doughnut",
    data: {
      labels: statusValues,
      datasets: [{
        backgroundColor: barColors,
        data: dataValues
      }]
    },
    options: {
      title: {
        display: true,
        text: "Attendance this month"
      }
    }
  });
</script>
<script>
  var subjectValues = ["SE", "CAHM", "IOT", "PYTHON", "WDUP"];
  var attValues = [8, 7, 9, 8, 11];
  var barColors = ["red", "green", "blue", "orange", "brown"];

  new Chart("myChart2", {
    type: "bar",
    data: {
      labels: subjectValues,
      datasets: [{
        backgroundColor: barColors,
        data: attValues
      }]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: "Attendance for each subject"
      }
    }
  });
</script>

</html>