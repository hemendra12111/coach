
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Train-Coach</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Train-Coach">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css" media="all">

    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //fonts -->
</head>

<body onload="onLoaderFunc()">
    <h1>Coach Seat Selection</h1>
    <div class="container">

        <div class="w3ls-reg">
            <!-- input fields -->
            <div class="inputForm" style="padding-left: 10%;">
                <h2>fill the required details below and select your seats</h2>
                <div class="mr_agilemain">
                    <div class="agileits-left">
                        <label> Name
                            <span>*</span>
                        </label>
                        <input type="text" id="Username" required>
                    </div>
                    <div class="agileits-right">
                        <label> Number of Seats
                            <span>*</span>
                        </label>
                        <input type="number" id="Numseats" required min="1">
                    </div>
                </div>
                <button onclick="takeData()" style="margin-left: 30%;">Start Selecting</button>
            </div>
            <!-- //input fields -->
            <!-- seat availabilty list -->
            <ul class="seat_w3ls">
                <li class="smallBox greenBox">Selected Seat</li>

                <li class="smallBox redBox">Reserved Seat</li>

                <li class="smallBox emptyBox">Empty Seat</li>
            </ul>
            <!-- seat availabilty list -->
            <!-- seat layout -->
            <div class="seatStructure txt-center" style="overflow-x:auto;padding-left: 15%;">
                <table id="seatsBlock">
                    <p id="notification"></p>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>
                            <input type="checkbox" class="seats A1" value="A1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats A2" value="A2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats A3" value="A3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats A4" value="A4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats A5" value="A5">
                        </td>
                        <td>
                            <input type="checkbox" class="seats A6" value="A6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats A7" value="A7">
                        </td>
                    </tr>

                    <tr>
                        <td>B</td>
                        <td>
                            <input type="checkbox" class="seats B1" value="B1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats B2" value="B2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats B3" value="B3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats B4" value="B4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats B5" value="B5">
                        </td>
                        <td>
                            <input type="checkbox" class="seats B6" value="B6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats B7" value="B7">
                        </td>
                    </tr>

                    <tr>
                        <td>C</td>
                        <td>
                            <input type="checkbox" class="seats C1" value="C1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats C2" value="C2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats C3" value="C3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats C4" value="C4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats C5" value="C5">
                        </td>
                        <td>
                            <input type="checkbox" class="seats C6" value="C6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats C7" value="C7">
                        </td>
                    </tr>

                    <tr>
                        <td>D</td>
                        <td>
                            <input type="checkbox" class="seats D1" value="D1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats D2" value="D2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats D3" value="D3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats D4" value="D4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats D5" value="D5">
                        </td>
                        <td>
                            <input type="checkbox" class="seats D6" value="D6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats D7" value="D7">
                        </td>
                    </tr>

                    <tr>
                        <td>E</td>
                        <td>
                            <input type="checkbox" class="seats E1" value="E1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats E2" value="E2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats E3" value="E3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats E4" value="E4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats E5" value="E5">
                        </td>
                        <td>
                            <input type="checkbox" class="seats E6" value="E6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats E7" value="E7">
                        </td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>
                            <input type="checkbox" class="seats F1" value="F1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats F2" value="F2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats F3" value="F3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats F4" value="F4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats F5" value="F5">
                        </td>
                        <td>
                            <input type="checkbox" class="seats F6" value="F6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats F7" value="F7">
                        </td>
                    </tr>

                    <tr>
                        <td>G</td>
                        <td>
                            <input type="checkbox" class="seats G1" value="G1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats G2" value="G2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats G3" value="G3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats G4" value="G4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats G5" value="G5">
                        </td>
                        <td>
                            <input type="checkbox" class="seats G6" value="G6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats G7" value="G7">
                        </td>
                    </tr>

                    <tr>
                        <td>H</td>
                        <td>
                            <input type="checkbox" class="seats H1" value="H1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats H2" value="H2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats H3" value="H3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats H4" value="H4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats H5" value="H5">
                        </td>
                        <td>
                            <input type="checkbox" class="seats H6" value="H6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats H7" value="H7">
                        </td>
                    </tr>

                    <tr>
                        <td>I</td>
                        <td>
                            <input type="checkbox" class="seats I1" value="I1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats I2" value="I2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats I3" value="I3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats I4" value="I4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats I5" value="I5">
                        </td>
                        <td>
                            <input type="checkbox" class="seats I6" value="I6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats I7" value="I7">
                        </td>
                    </tr>

                    <tr>
                        <td>J</td>
                        <td>
                            <input type="checkbox" class="seats J1" value="J1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats J2" value="J2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats J3" value="J3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats J4" value="J4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats J5" value="J5">
                        </td>                       
                        <td>
                            <input type="checkbox" class="seats J6" value="J6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats J7" value="J7">
                        </td>
                    </tr>
                    <tr>
                        <td>K</td>
                        <td>
                            <input type="checkbox" class="seats K1" value="K1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats K2" value="K2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats K3" value="K3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats K4" value="K4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats K5" value="K5">
                        </td>
                        <td>
                            <input type="checkbox" class="seats K6" value="K6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats K7" value="K7">
                        </td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="checkbox" class="seats L1" value="L1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats L2" value="L2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats L3" value="L3">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <div class="screen">
                    
                </div>
                <button onclick="updateTextArea()">Confirm Selection</button>
            </div>
            <!-- //seat layout -->
            <!-- details after booking displayed here -->
            <div class="displayerBoxes txt-center" style="overflow-x:auto;">
                <table class="Displaytable w3ls-table" width="100%" style="padding-left: 5%;">
                    <tr>
                        <th>Name</th>
                        <th>Number of Seats</th>
                        <th>Seats</th>
                    </tr>
                    <tr>
                        <td>
                            <textarea id="nameDisplay"></textarea>
                        </td>
                        <td>
                            <textarea id="NumberDisplay"></textarea>
                        </td>
                        <td>
                            <textarea id="seatsDisplay"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- //details after booking displayed here -->
        </div>
    </div>
    <div class="copy-wthree">
        <p>© 2019 Coach Seat Selection . All Rights Reserved
        </p>
    </div>

    <!-- js -->
    <script type="text/javascript" src="{{asset('asset/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //js -->
    <!-- script for seat selection -->
    <script>
        function onLoaderFunc() {
            $(".seatStructure *").prop("disabled", true);
            $(".displayerBoxes *").prop("disabled", true);
            var seat = '{{$booking_seat}}';
            var numbersArray = seat.split(',');
              $(numbersArray).each(function( i,val) {
                $('.'+val).addClass("blocked_seat");
              });
        }

        function takeData() {
            var rmseat = 80 - $('.blocked_seat').length;
            console.log(rmseat);
            if (($("#Username").val().length == 0) || ($("#Numseats").val().length == 0)) {
                alert("Please Enter your Name and Number of Seats");
            } else if($("#Numseats").val() >7){
                alert("Please select less then or equal 7 Seats");
            } else if(rmseat < $("#Numseats").val()){
                alert('Not fit in your critarea');
            }else {
                $(".inputForm *").prop("disabled", true);
                $(".seatStructure *").prop("disabled", false);
                $(".blocked_seat").prop('disabled',true);
                document.getElementById("notification").innerHTML =
                    "<b style='margin-bottom:0px;background:#ff9800;letter-spacing:1px;'>Please Select your Seats NOW!</b>";
            }
        }


        function updateTextArea() {

            if ($("input:checked").length == ($("#Numseats").val())) {
                $(".seatStructure *").prop("disabled", true);
                var allNameVals = [];
                var allNumberVals = [];
                var allSeatsVals = [];

                //Storing in Array
                allNameVals.push($("#Username").val());
                allNumberVals.push($("#Numseats").val());
                $('#seatsBlock :checked').each(function () {
                    allSeatsVals.push($(this).val());
                });

                //Displaying 
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type:'POST',
                    url:'/seatbooking',
                    data:{name:$("#Username").val(), number_of_seat:$("#Numseats").val(), booking_seat:allSeatsVals},
                    success:function(data){
                        console.log(data.success);
                        if(data.success){
                            alert('seat reserved');
                            $('#nameDisplay').val(allNameVals);
                            $('#NumberDisplay').val(allNumberVals);
                            $('#seatsDisplay').val(allSeatsVals);
                             function timedRefresh(timeoutPeriod=5000) {
                                setTimeout("location.reload(true);",timeoutPeriod);
                            }  
                        }else{
                            alert('somthing went wrong!!!');
                        }
                        
                    }
                });

            } else {
                alert("Please select " + ($("#Numseats").val()) + " seats")
            }
        }


        function myFunction() {
            alert($("input:checked").length);
        }


        $(":checkbox").click(function () {
            $(".blocked_seat").prop('disabled',true);
            if ($("input:checked").length == ($("#Numseats").val())) {
                $(":checkbox").prop('disabled', true);
                $(':checked').prop('disabled', false);
            } else {
                $(":checkbox").prop('disabled', false);
            }
        });
    </script>
    <script type="text/javascript">
        /*var seat = '{{$booking_seat}}';
        var numbersArray = seat.split(',');
          $(numbersArray).each(function( i,val) {
            $('.'+val).prop('disabled', false);
            $('.'+val).css({'background-color':'green','font-size':'15'});
          });*/
    </script>

    <style type="text/css">
        .blocked_seat:before{
            background-color: red !important;
            disabled :"disabled";

        }
    </style>
    <!-- //script for seat selection -->

</body>

</html>