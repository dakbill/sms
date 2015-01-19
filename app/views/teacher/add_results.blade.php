@extends('teacher/dashboard')
@section('dashboard-content')

<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{$user->role}}">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Add Results</a>
        </li>
    </ul>
</div>

<div>
    <form class="form-horizontal" method="get">
        <div class="form-group">
            <div class="controls">
                <label> Select Subject</label>
                <select class="form-control" name="subject">
                    <option value="null">Select Subject</option>
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                    @endforeach
                    
                </select>
                <button type="submit" class="btn btn-default">Filter</button>
            </div>

        </div>


    </form>
</div>
<table class="table" id="students-datatable" >
                <thead>
                <tr>
                    <th tabindex="3" >Student ID</th>
                    <th tabindex="1">Class Score</th>
                    <th tabindex="0" >Exam Score</th>
                    <th tabindex="4" >Grade</th>
                    <th tabindex="2" >Action</td>
                    
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th >Student ID</th>
                    <th >Class Score</th>
                    <th  >Exam Score</th>
                    <th  >Grade</th>
                    <th >Action</td>
                </tr>
                </tfoot>
                <tbody>
                @foreach($students as $student) 
                <tr >
                    <td>{{$student->student_id}}</td>
                    <td><input onchange="generate_grade(this)" class="span3" value="{{$student->class_score}}" type="number" min="0" max="30" autocomplete="off"></td>
                    <td><input onchange="generate_grade(this)" class="span3" value="{{$student->exam_score}}" type="number" min="0" max="70" autocomplete="off"></td>
                    <td><input class="span3"  readonly value="{{$student->grade}}" type="text" autocomplete="off"></td>
                    <td><button class="btn btn-primary" onclick="record(this)">Record</button></td>

                </tr>
                @endforeach
                
                


                </tbody>
            </table>
<script>
    function record(obj){
        var inputs = $(obj).closest('tr').find('td input');
        var member_id = $(obj).closest('tr').find('td')[0].innerHTML;
        var params = {student_id:member_id,class_score:Number(inputs[0].value),exam_score:Number(inputs[1].value)};
        console.log(params);
        $.post(location.pathname,params,function(data){
            console.log(data);
            $('#alert').html('<div class="alert alert-success" role="alert">'+data.message+'</div>');
            setTimeout(function(){$('#alert').html('')},3000)

        });
    }
    function generate_grade(obj){

        var inputs = $(obj).closest('tr').find('td input');
        var total = Math.round(Number(inputs[0].value) + Number(inputs[1].value));
        if(total>=80 && total<=100){
            inputs[2].value= 'A';
        }
        else if(total>=75 && total<=79){
            inputs[2].value= 'B+';
        }
        else if(total>=70 && total<=74){
            inputs[2].value= 'B';
        }
        else if(total>=65 && total<=69){
            inputs[2].value= 'C+';
        }
        else if(total>=60 && total<=64){
            inputs[2].value= 'C';
        }
        else if(total>=55 && total<=59){
            inputs[2].value= 'D+';
        }
        else if(total>=50 && total<=54){
            inputs[2].value= 'D';
        }
        else if(total>=45 && total<=49){
            inputs[2].value= 'E';
        }
        else if( total<=44){
            inputs[2].value= 'F';
        }
    }

</script>
@section('datatable')
<script type="text/javascript">
    $('#students-datatable').DataTable({
         "pagingType": "simple"
    });
    $('#students-datatable_previous').addClass('btn btn-primary');
    $('#students-datatable_next').addClass('btn btn-primary');
    $('#students-datatable_next').css('margin-left','10px');
</script>
@endsection
      



@endsection