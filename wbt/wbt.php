<!DOCTYPE html>
<html>
    <head>
    <title>WBT Charts</title>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type='text/javascript'>
google.load('visualization', '1', { packages: ['orgchart'] });
google.setOnLoadCallback(drawChart);
function drawChart() {
    $.ajax({
        type: "POST",
        url: "data.php",
        success: function(result){
            var result = JSON.parse(result);
          if ((emp_count = result.length) > 0) {

            console.log(result);
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'main_task');
            data.addColumn('string', 'subtask');
            data.addRows(emp_count);

            for (i = 0; i < emp_count; i++) {
                data.setCell(i, 0, result[i].main_task);
                data.setCell(i, 1, result[i].subtask);
            }
            var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
             chart.draw(data, { allowHtml: true });
			 
          }
          }
        });
}



</script>
    <link rel="stylesheet" type="text/css" href="../template/template.css">
    </head>
    <body>
    <?php include'../scripts/sql_connect.php'; ?>
    <?php include '../template/blocks/header.html';?>

    <!--Div that will hold the pie chart-->
    <div id='chart_div'></div> 
    <?php include '../scripts/cpanel.php';?>
    <a style="padding-top: 15px;" href="../index.php">Back to home page</a>
    <?php include 'template/blocks/nav.html'; ?>
</body>
</html>