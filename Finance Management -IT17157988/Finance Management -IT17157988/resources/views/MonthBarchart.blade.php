<!DOCTYPE HTML>
<html>
<head>
    <script type="text/javascript">
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                theme: "light1", // "light2", "dark1", "dark2"
                animationEnabled: false, // change to true
                title:{
                    text: "Annual Income Expences Chart"
                },
                data: [
                    {
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [
                            /* { label: "apple",  y: 10  },
                             { label: "orange", y: 15  },
                             { label: "banana", y: 25  },
                             { label: "mango",  y: 30  },
                             { label: "grape",  y: 28  }*/



                            <?php


                            echo "{lable:'Water Bill ',y:{$W}},\r\n";
                            echo "{lable:'Electricity Bill ',y:{$E}},\r\n";
                            echo "{lable:'Telephone Bill ',y:{$T}},\r\n";
                            echo "{lable:'Inventory Expences ',y:{$inventory}},\r\n";
                            echo "{lable:'Student fee  ',y:{$event1}},\r\n";
                            echo "{lable:'Student fee  ',y:{$event2}},\r\n";
                            echo "{lable:'Student fee  ',y:{$funds}},\r\n";
                            echo "{lable:'Student fee  ',y:{$other}},\r\n";

                            ?>

                        ]
                    }
                ]
            });
            chart.render();

        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 1000px; width: 20%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>
</html>