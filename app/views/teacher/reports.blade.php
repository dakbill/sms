@extends('teacher/dashboard')

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

    <div class="span6">
        <form id="single_student">
            <fieldset >
                <legend>Single Student Controls</legend>
                <div class="control-group">
                    <label class="control-label" >Student ID</label>
                    <div class="controls">
                        <input class="single_student" type="text"  placeholder="e.g. 10346353" >
                    </div>
                </div>
            </fieldset>
        </form>

    </div>

    <div class="span5 ">
        <form id="class_of_students">
            <fieldset >
                <legend>Class of Students Controls</legend>
                <div class="control-group">
                    <label class="control-label" >Subject</label>
                    <div class="controls">
                        <select class="form-control class_of_students" name="subject">
                            <option value="null">Select Subject</option>

                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" >Class</label>
                    <div class="controls">
                        <select class="form-control class_of_students" name="class">
                            <option value="null">Select Class</option>

                        </select>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
    <button   class="btn btn-large btn-primary" id="render">Render Graph</button>
</div>
<script>
    var section = null;
    $('.single_student').focus(function(){
        if(section =='multiple'){
            $('#class_of_students')[0].reset();
        }else if(section == null){
            section='single'
        }
        section = section=='multiple'?'single':section;
    });
    $('.class_of_students').focus(function(){
        if(section =='single'){
            $('#single_student')[0].reset();
        }else if(section == null){
            section='multiple'
        }
        section = section=='single'?'multiple':section;
    });
    $('#render').click(function(){
        alert(section+' graph rendered');
    });
</script>
@endsection
