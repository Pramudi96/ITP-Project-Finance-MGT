




<h1 class="h-bold" style ="color:black" align="center"> NWP/WICKRAMASHILA CENTRAL COLLEGE,GIRIULLA<br/>ANNUAL REPORT</h1><br/><br/>
<h4>This is the Annual Report of NWP/WICKRAMASHILA CENTRAL COLLEGE,GIRIULLA</h4>




<table width="100%" border="0">
    <td  width="50%">
        <div class ="col-md-8">
            <h1>Annual Budget</h1>
            <table class="table">
                <thead>
                <tr style="background-color: #36c94e">

                    <th>TypeandYear</th>
                    <th> Year</th>
                    <th>ExpectedAmount</th>

                </tr>
                @foreach ($Budget as $users)
                    <tr style="background-color: #8fcafe">
                        <td>{{$users->TypeandYear}}</td>
                        <td>{{$users->Year}}</td>
                        <td>{{$users->ExpectedAmount}}</td>


                    </tr>

                @endforeach
            </table>
















        </div></td>

    <td  width="50%">
        <div class ="col-md-8">

            <h1>Total Expences</h1>
            <table class="table">
                <thead>

                <tr style="background-color: #36c94e">
                    <th>Month and Year</th>
                    <th>Place</th>

                </tr>
                </thead>

                <tbody>

                <tr style="background-color: #8fcafe">
                    <td><h4>Electricity Bill Payments</h4></td>
                    <td><h5>Rs. {{$E}}</h5></td>

                </tr>


                <tr style="background-color: #8fcafe">

                    <td><h4>Telephone Bill Payments</h4></td>
                    <td><h5>Rs. {{$T}}</h5></td>
                </tr>

                <tr style="background-color: #8fcafe">

                    <td><h4>Water Bill Payments</h4></td>
                    <td><h5>Rs. {{$W}}</h5></td>
                </tr>



                <tr style="background-color: #8fcafe">

                    <td><h3>Total Expences</h3></td>
                    <td><h3>Rs. {{$Tot1}}</h3></td>
                </tr></tbody></table>












        </div>
    </td>
</table>










</html>