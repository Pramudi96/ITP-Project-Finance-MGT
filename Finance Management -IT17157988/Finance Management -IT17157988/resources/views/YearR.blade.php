
<h1 class="h-bold" style ="color:black" align="center"> NWP/WICKRAMASHILA CENTRAL COLLEGE,GIRIULLA<br/>ANNUAL REPORT</h1><br/>
<h4>This is the Annual Report of  NWP/WICKRAMASHILA CENTRAL COLLEGE,GIRIULLA</h4>






<table width="100%" border="0">
    <div class ="col-md-8">
        <h1>Annual Budget</h1>
        <table class="table">
            <thead>
            <tr>

                <th>TypeandYear</th>
                <th> Year</th>
                <th>ExpectedAmount</th>


            </tr>
            @foreach ($Budget as $users)
                <tr>
                    <td>{{$users->TypeandYear}}</td>
                    <td>{{$users->Year}}</td>
                    <td>{{$users->ExpectedAmount}}</td>

                </tr>

            @endforeach
            <td><h3> Total BudgetAmount   :{{$Btot}}</h3></td>

        </table>

    </div></table>
<div class ="col-md-8">
    <h1>Total Expences</h1>
</div>

    <table width="100%" border="0">




                    <thead>
                    <tr>
                        <th><h4>Management Systems and Bill Payments</h4></th>
                        <th><h4 style="color:black">Expences</h4></th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr >
                        <td><h4>Electricity Bill Payments</h4></td>
                        <td><h5>Rs. {{$E}}</h5></td>

                    </tr>


                    <tr >

                        <td><h4>Telephone Bill Payments</h4></td>
                        <td><h5>Rs. {{$T}}</h5></td>
                    </tr>

                    <tr >

                        <td><h4>Water Bill Payments</h4></td>
                        <td><h5>Rs. {{$W}}</h5></td>
                    </tr>
                    <tr>

                        <td><h4>Other Bill Payments</h4></td>
                        <td><h5>Rs. {{$other}}</h5></td>
                    </tr>
                    <tr >

                        <td><h4>Events</h4></td>
                        <td><h5>Rs. {{$event1}}</h5></td>
                    </tr>
                    <tr >

                        <td><h3>Inventory</h3></td>
                        <td><h3>Rs. {{$inventory}}</h3></td>
                    </tr>


                    <tr>

                        <td><h3>Total Expences</h3></td>
                        <td><h3>Rs. {{$Tot1}}</h3></td>
                    </tr></tbody></table>


<div class ="col-md-8">
    <h1>Total Income</h1></div>
<table width="100%" border="0">


    <thead>
    <tr>
        <th><h4>Management Systems and Bill Payments</h4></th>
        <th><h4 style="color:black">Income</h4></th>
    </tr>
    </thead>


    <tr>
        <td><h4>Funds and Donations</h4></td>
        <td><h5>Rs. {{$funds}}</h5></td>
    </tr>
    <tbody>

    <tr>

        <td><h4>Library Penalty charges</h4></td>
        <td><h5>Rs. {{$library}}</h5></td>
    </tr>
    <tr>

        <td><h4>Student Fee</h4></td>
        <td><h5>Rs. {{$Student}}</h5></td>
    </tr>
    <tr>

        <td><h4>Events Income</h4></td>
        <td><h5>Rs. {{$event2}}</h5></td>
    </tr>

    <tr>

        <td><h3>Total Income</h3></td>
        <td><h3>Rs. {{$Tot2}}</h3></td>
    </tr></tbody></table>

<div class="row">

<h3>Total Expences    :{{$Tot1}}</h3>
<h3>Total Income    :{{$Tot2}}</h3>
    <h3>Total :{{$Total}}</h3>
<h3>Total Annual Budget   :{{$Btot}}</h3>
    <h3>Total Variance   :{{$variance}}</h3>
</div>



</html>