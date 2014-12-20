@extends('guardian/dashboard')

@section('dashboard-content')
<div class="row-fluid">
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Reports</a>
        </li>
    </ul>
</div>
<script src="{{asset('js/highstock.js')}}"></script>
<script src="{{asset('js/exporting.js')}}"></script>
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
                valueSuffix: '% '
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
<div class="row well" >
     <form id="class_of_students">
            <fieldset >
                <legend>Data Controls</legend>
                <div class="span5">
                    <div class="control-group">
                    <label class="control-label" >Ward</label>
                    <div class="controls">
                        <select class="form-control class_of_students" name="subject">
                            <option value="null">Select Ward</option>

                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" >Subject</label>
                    <div class="controls">
                        <select class="form-control class_of_students" name="subject">
                            <option value="null">Select Subject</option>

                        </select>
                    </div>
                </div>
                </div>
                <div class="span5">
                    <div class="control-group">
                    <label class="control-label" >Range</label>
                    <div class="controls">
                        <select class="form-control class_of_students" name="class">
                            <option value="null">Select Year</option>

                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" >Term</label>
                    <div class="controls">
                        <select class="form-control class_of_students" name="class">
                            <option value="null">Select Term</option>

                        </select>
                    </div>
                </div>    
                </div>
                
                
            </fieldset>
        </form>
    

   
    <button   class="btn btn-large btn-primary" id="render">Render Graph</button>
</div>
@endsection
