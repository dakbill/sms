<div class="row">
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url().$this->session->userdata('role')?>">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>View Report</a>
        </li>
    </ul>
</div>
<script src="<?php echo base_url()?>assets/js/highstock.js"></script>
<script src="<?php echo base_url()?>assets/js/exporting.js"></script>
<script>
    $(function () {
        $('#container').highcharts({
            title: {
                text: 'Kofi Dwomoh\'s performance in 2012',
                x: -20 //center
            },
            subtitle: {
                text: 'Source: smart sms system',
                x: -20
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Marks'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: '°C'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [ {
                name: 'Math',
                data: [80, 85, 79, 83, 89, 89.2, 81, 77, 90, 85, 85, 88]
            }]
        });
    });
</script>
<div class="row">
    <div id="container" style="min-width: 310px; height: 450px; margin: 0 auto"></div>
</div>
<div class="row well" style="height: 150px">
    dash board
    <button   class="btn btn-large btn-primary">Render Graph</button>
</div>
