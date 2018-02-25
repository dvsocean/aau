<!-- JS API-->
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Uploaded files'],
            ['JPGS', <?php echo $user->ideas->where('type', '=', 'jpg')->count(); ?>],
            ['PNGS', <?php echo $user->ideas->where('type', '=', 'png')->count(); ?>],
            ['GIF',  <?php echo $user->ideas->where('type', '=', 'gif')->count(); ?>],
            ['DOCX', <?php echo $user->ideas->where('type', '=', 'docx')->count(); ?>],
            ['XLXS', <?php echo $user->ideas->where('type', '=', 'xlxs')->count(); ?>],
            ['PDF', <?php echo $user->ideas->where('type', '=', 'pdf')->count(); ?>],
            ['TXT',  <?php echo $user->ideas->where('type', '=', 'txt')->count(); ?>]
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