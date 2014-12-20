@extends('guardian/dashboard')
@section('dashboard-content')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{$user->role}}">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a>Time Table</a>
        </li>
    </ul>
</div>

<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered ">
    <colgroup>
        <col width="128">
        <col width="128">
        <col width="128">
        <col width="128">
        <col width="128">
        <col width="123">
    </colgroup>
    <thead>
    <tr>
        <td colspan="3" style="text-align:left;width:1.1542in; " class="TimeTable_A1"><p class="P4"><b>Smart School</b></p>
        </td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A1"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A1"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1042in; " class="TimeTable_F1"><p class="Table_20_Contents"><button class="btn btn-default">DOWNLOAD PDF</button></p></td>
    </tr>
    <tr>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1042in; " class="TimeTable_F2"><p class="Table_20_Contents">&nbsp;</p></td>
    </tr>
    <tr>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td style="text-align:left;width:1.1042in; " class="TimeTable_F2"><p class="Table_20_Contents">&nbsp;</p></td>
    </tr>
    <tr>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P4"><b>GRADE 00</b></p></td>
        <td style="text-align:left;width:1.1542in; " class="TimeTable_A2"><p class="Table_20_Contents">&nbsp;</p></td>
        <td colspan="2" style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P5"><b>TIMETABLE
                    2011-2012</b></p></td>
        <td colspan="2" style="text-align:right;width:1.1542in; " class="TimeTable_F2"><p class="P6"><b>Teacher(Room
                    000)</b></p></td>
    </tr>
    </thead>
    <tbody>

    <tr class="TimeTable5" id="dow">
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P5">Time/Day</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P5">Monday</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P5">Tuesday</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P5">Wednesday</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P6">Thursday</p></td>
        <td style="text-align:center;width:1.1042in; " class="TimeTable_F2"><p class="P5">Friday</p></td>
    </tr>
    <tr class="TimeTable5">
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P3">Period 1</p>

            <p class="P3">08:00-08:40</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P1">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">French</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P2">&nbsp;</p></td>
        <td style="text-align:center;width:1.1042in; " class="TimeTable_F2"><p class="P2">&nbsp;</p></td>
    </tr>
    <tr class="TimeTable5">
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P3">Period 2</p>

            <p class="P3">08:40-09:20</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P1">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P2">&nbsp;</p></td>
        <td style="text-align:center;width:1.1042in; " class="TimeTable_F2"><p class="P2">&nbsp;</p></td>
    </tr>
    <tr class="TimeTable5">
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P3">Period 3</p>

            <p class="P3">08:40-09:20</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P3">French</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P2">&nbsp;</p></td>
        <td style="text-align:center;width:1.1042in; " class="TimeTable_F2"><p class="P2">&nbsp;</p></td>
    </tr>
    <tr class="TimeTable5">
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P3">Period 4</p>

            <p class="P3">08:40-09:20</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P1">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">Math</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P2">&nbsp;</p></td>
        <td style="text-align:center;width:1.1042in; " class="TimeTable_F2"><p class="P2">&nbsp;</p></td>
    </tr>
    <tr class="TimeTable5">
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P3">Period 5</p>

            <p class="P3">08:40-09:20</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P1">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P2">&nbsp;</p></td>
        <td style="text-align:center;width:1.1042in; " class="TimeTable_F2"><p class="P2">&nbsp;</p></td>
    </tr>
    <tr class="TimeTable5">
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P3">Period 6</p>

            <p class="P3">08:40-09:20</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P1">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P2">&nbsp;</p></td>
        <td style="text-align:center;width:1.1042in; " class="TimeTable_F2"><p class="P2">&nbsp;</p></td>
    </tr>
    <tr class="TimeTable5">
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P3">Period 7</p>

            <p class="P3">08:40-09:20</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P1">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P2">&nbsp;</p></td>
        <td style="text-align:center;width:1.1042in; " class="TimeTable_F2"><p class="P2">&nbsp;</p></td>
    </tr>
    <tr class="TimeTable5">
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P3">Period 8</p>

            <p class="P3">08:40-09:20</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P1">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_C5"><p class="P3">&nbsp;</p></td>
        <td style="text-align:center;width:1.1542in; " class="TimeTable_A2"><p class="P2">&nbsp;</p></td>
        <td style="text-align:center;width:1.1042in; " class="TimeTable_F2"><p class="P2">&nbsp;</p></td>
    </tr>
    </tbody>
</table>
@endsection