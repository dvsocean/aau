<!-- JS API-->

<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Uploaded files'],
            ['JPGS', <?php echo $jpgs->count(); ?>],
            ['PNGS', <?php echo $ideas->count(); ?>],
            ['GIF',  <?php echo $ideas->count(); ?>],
            ['DOCX', <?php echo $ideas->count(); ?>],
            ['XLXS', <?php echo $ideas->count(); ?>],
            ['PDF',  <?php echo $ideas->count(); ?>],
            ['TXT',  <?php echo $ideas->count(); ?>]
        ]);
        var options = {
            title: 'Activity',
            backgroundColor: 'transparent',
            is3D: true,
            pieSliceText: "none"
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
<!-- JS API-->