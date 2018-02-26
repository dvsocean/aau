<?php
use App\Idea;
$jpg = Idea::where('type', 'jpg')->get(['type']);
$docx = Idea::where('type', 'docx')->get(['type']);
$txt = Idea::where('type', 'txt')->get(['type']);
$png = Idea::where('type', 'png')->get(['type']);
$jpeg = Idea::where('type', 'jpeg')->get(['type']);
$xlxs = Idea::where('type', 'xlxs')->get(['type']);
$ppt = Idea::where('type', 'ppt')->get(['type']);
$pdf = Idea::where('type', 'pdf')->get(['type']);
$pptx = Idea::where('type', 'pptx')->get(['type']);
?>

<!--CONTAINER-->
<div id="piechart"></div>
<!--CONTAINER-->

<!-- JS API-->
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Uploaded files'],
            ['JPG', <?php echo $jpg->count(); ?>],
            ['DOCX', <?php echo $docx->count(); ?>],
            ['TXT', <?php echo $txt->count(); ?>],
            ['PNG', <?php echo $png->count(); ?>],
            ['JPEG', <?php echo $jpeg->count(); ?>],
            ['XLXS', <?php echo $xlxs->count(); ?>],
            ['PPT', <?php echo $ppt->count(); ?>],
            ['PDF', <?php echo $pdf->count(); ?>],
            ['PPTX', <?php echo $pptx->count(); ?>]
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