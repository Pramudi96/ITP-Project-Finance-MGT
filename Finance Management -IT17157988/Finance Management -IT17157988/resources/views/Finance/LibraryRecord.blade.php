<!Doctype html>
<head>
    <title>View Student Records</title>
    <style>
        table,tr,td{
            border-collapse: collapse;

            padding-left: 1.5em;
        }
    </style>
</head>

@extends('layout')

@section('content')
<h1 class="h-bold" style ="color:black" align="center"> Library Payment Records </h1>
<table width="100%" border="0">
    <td bgcolor="#90ee90"width="100%">
        <body>
        <div class="col-md-12">
            <table width="100%" border="0">
                <td bgcolor="#90ee90"width="100%">

                <td>

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr style="background-color: #36c94e">

                                <th>MonthYear</th>
                                <th> Year</th>
                                <th>Type</th>
                                <th>TotalAmount</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($waters as $users)
                                <tr style="background-color: #8fcafe">

                                    <td>{{$users->MonthYear}}</td>
                                    <td>{{$users->Year}}</td>
                                    <td>{{$users->Type}}</td>
                                    <td>{{$users->TotAmount}}</td>





                                </tr>

                            @endforeach
                        </table></div>
                </td>

                <td bgcolor="#90ee90"width="50%">
                    <img src="{{asset('images/Library.jpg')}}"width="1120" height="750"></td>


                </tbody>
            </table>

        </div>
        </body></td>
    </td>

</table>
@endsection
</html>