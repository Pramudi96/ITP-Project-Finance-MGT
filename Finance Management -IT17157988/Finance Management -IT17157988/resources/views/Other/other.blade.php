



@extends('layout')

@section('content')



<style>
    div.vg{

        width: 100px;
        height: 100px;

    }
    .search{
        width:45% ;
        padding:10px ;
        font-size:20px ;

    }
    .submit{
        width:15% ;
        padding:10px ;
        font-size:20px ;
        background-color:#333333;
        color: white;
    }



</style>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">




<table width="100%" border="0">
    <td bgcolor="#90ee90"width="50%">






        <h1 font-color="White" align="center" >Other Bill Payments</h1>



        <div class="col-md-12 animate-box fadeInUp animated-fast" width="50%">
            <h3 > </h3>

            <div class="container" style="background-color: white">

                <form class="form-horizontal" action='{{action('OtherController@Ostore')}}'>

                    <div class="form-group{{ $errors->has('MonthYear') ? ' has-error' : '' }}">
                        <label for="MonthYear" class="col-md-4 control-label">MonthYear</label>

                        <div class="col-md-8">
                            <input id="MonthYear" type="text" class="form-control" name="MonthYear" placeholder=" Month Year" value="{{ old('MonthYear') }}" required >

                            @if ($errors->has('MonthYear'))
                                <span class="help-block">
										<strong>{{ $errors->first('MonthYear') }}</strong>
									</span>
                            @endif



                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('Year') ? ' has-error' : '' }}">



                    <div class="form-group{{ $errors->has('Purpose') ? ' has-error' : '' }}">
                        <label for="MonthYear" class="col-md-4 control-label">Billing Purpose</label>

                        <div class="col-md-8">
                            <input id="Purpose" type="text" class="form-control" name="Purpose" placeholder="Purpose" value="{{ old('Purpose') }}" required>
                            @if ($errors->has('Purpose'))
                                <span class="help-block">
										<strong>{{ $errors->first('Purpose') }}</strong>
									</span>
                            @endif

                        </div>
                    </div>




                    <div class="form-group{{ $errors->has('Company') ? ' has-error' : '' }}">
                        <label for="Place" class="col-md-4 control-label">Company/Person</label>

                        <div class="col-md-8">
                            <div >
                                <input id="Company" type="text" class="form-control" name="Company" value="{{ old('Company') }}" required>
                                @if ($errors->has('Company'))
                                    <span class="help-block">
										<strong>{{ $errors->first('Company') }}</strong>
									</span>
                                @endif

                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="text" class="col-md-4 control-label">Payment Method</label>

                        <div class="col-md-8">

                            <input id="radio" type="radio" name="PaymentMethod" value="cash" checked>cash
                            <input id="radio" type="radio" name="PaymentMethod" value="cheque" checked>cheque

                        </div>


                    </div>


                    <div class="form-group{{ $errors->has('Amount') ? ' has-error' : '' }}">
                        <label for="text" class="col-md-4 control-label">Amount</label>

                        <div class="col-md-8">
                            <input id="Amount" type="text" class="form-control" name="Amount" value="{{ old('Amount') }}" required>
                            @if ($errors->has('Year'))
                                <span class="help-block">
										<strong>{{ $errors->first('Amount') }}</strong>
									</span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('Amount') ? ' has-error' : '' }}">
                        <label for="Place" class="col-md-4 control-label">Paid Date</label>

                        <div class="col-md-8">
                            <div >
                                <input id="text" type="date" class="form-control" name="PaidDate" value="{{ old('PaidDate') }}" required>

                                @if ($errors->has('PaidDate'))
                                    <span class="help-block">
										<strong>{{ $errors->first('PaidDate') }}</strong>
									</span>
                                @endif
                            </div>
                        </div>
                    </div>





                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>


                            </a>
                        </div>
                    </div>
                    </div></form>
            </div>
        </div>


        <form action="{{action('OtherController@Oindex')}}" method="get">
            <label for="Place" class="col-md-4 control-label"></label>

            <button type="submit" class="btn btn-primary">
                <h2 style="text:bold">System Detail</h2>
            </button>

        </form>


    </td>




    <td bgcolor="#90ee90"width="50%">


        <form action="{{action('OtherController@Oindex')}}" method="post">
            {{ csrf_field() }}
            <input type="text" name="monthYear" class="search" placeholder="Search" value="{{old('monthYear')}} ">
            <input type="submit" name="submit" class="submit" value="Search">
            @if ($errors->has('monthYear'))
                <span class="help-block">
										<strong>{{ $errors->first('monthYear') }}</strong>
									</span>
            @endif
        </form>


        <img src="{{asset('images/Other_Payment.png')}}"width="1120" height="750"></td>


</table>







</body>
@endsection