@extends('layout')
@section('content')


        <!Doctype html>
<head>
    <title>View Records</title>
    <style>
        table,tr,td{
            border-collapse: collapse;

            padding-left: 2.5em;
        }

        div.water{
            background-color: lightblue;
            width: 400px;
            padding: 105px;
            border: 15px solid navy;
        }







    </style>
</head>


<h1 class="h-bold" style ="color:black" align="center"> ANNUAL REPORT GENERATION</h1>


<table width="100%" border="0">
    <td bgcolor="#90ee90"width="50%">




        <div class="col-md-12 animate-box fadeInUp animated-fast" width="50%">
            <h3 > </h3>

            <div class="container" style="background-color: white">




                <form action="YearR/pdf" method="get">
                    <label for="Place" class="col-md-4 control-label"></label>
                    <input id="Year" type="Year" class="form-control" name="Year"PLACEHOLDER="Enter Year" value="{{ old('Year') }}" required>
                    <button type="submit" class="btn btn-primary">
                        <h2 style="text:bold">Generate Annual Report</h2>
                    </button>
                </form>
                <form action="Barchart" method="get">
                    <label for="Place" class="col-md-4 control-label"></label>
                    <input id="Year" type="Year" class="form-control" name="Year"PLACEHOLDER="Enter Year" value="{{ old('Year') }}" required>
                    <button type="submit" class="btn btn-primary">
                        <h2 style="text:bold">Generate Barchart</h2>
                    </button>
                </form>
            </div>


            </form>

        </div></div>


    </td>
    <td bgcolor="#90ee90"width="50%">




        <img src="{{asset('images/AnnualReport.jpg')}}"width="1100" height="750"></td>





</table>




</body>
</html>


@endsection