<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Calculating System</title>
    <link rel="stylesheet" href="corporate(result).css">
</head>
<!-- for page change to personal page -->
<script>
    function myfunction1(value) {
        window.location.assign(`${value}`);
    }
</script>

<body>
    <div class="wrapper">
            <div class="Heading">
                <h1> <b>Income tax calculator, Nepal</b></h1>
            </div>
        <!-- For calculation part -->
        <div class="Calculating">

                                                <!-- Category -->
                                            <div class="Category">
                                                <label>Category </label>
                                                <select id="Category" onchange="myfunction1(this.value)">
                                                    <option value="corporate.php">Corporate</option>
                                                    <option value="personal.php">Personal</option>
                                                </select>

                                                <!-- Fiscal year option -->
                                                <label id="year"> Fiscal Year 
                                                    <input  type="text"   placeholder="2078/079" id="Fiscal_year">
                                                </label>
                                            </div>
                                            <!-- Annual Income Topic -->
                                            <div class="Annual">
                                                <h2 style="text-align: center">Annual Tax</h2>
                                            </div>
        </div>                                    
        
        
                        <form action="" method="post">
                                @csrf
                                @foreach ($value1 as $values) 

                                <!-- corporate tax calculation-->
                                <div class="corporate">
                                        <h3 style="text-align:center"><u>Corporate</u></h3>
                                    <div class="content">

                                                        <!-- Business type -->
                                                        <div class="business">
                                                            <label id="business" > &ensp; &ensp; &nbsp; &nbsp;  Business Type </label>&emsp; &emsp; &emsp; &emsp;

                                                            <select id="business_type" name="businesstype">

                                                                <option value="1">Normal Business</option>
                                                                <option value="2">General Insurance (Non-Life Insurance)</option>
                                                                <option value="3">Telecom and Internet Services</option>
                                                                <option value="4">Money transfer</option>

                                                            </select>

                                                        </div>

                                                        <!-- Revenue of last year -->
                                                        <div class="last_year">
                                                            <label id="last_year" >  Revenue of Last year &emsp; &emsp; &emsp; &emsp;</label>
                                                            <input type="text" name="ROLY" id="last" value="{{$values->ROLY}}" >
                                                            
                                                        </div>
                                                        <br>

                                                        <!-- Revenue of the year -->
                                                        <div class="the_year">
                                                            <label id="the_annual" > Revenue of the year &emsp;&ensp; &nbsp; &nbsp; &emsp; &emsp; </label>
                                                            <input type="text" name="ROTY" id="the_year" value="{{$values->ROTY}}" >
                                                        </div>
                                                        <br>

                                                        <!-- Net profit of the year -->
                                                        <div class="Net_profit">
                                                            <label id="Net_profit" > Net Profit of the year &ensp; &ensp;  &nbsp;&nbsp; &emsp; &emsp; </label>
                                                            <input type="text" name="NPOTY" id="profit" value="{{$values->NPOTY}}">
                                                            
                                                        </div>
                                                        <br>

                                                        <!-- Tax of the year -->
                                                        <div class="Tax_year">
                                                            <label id="T"> Total tax: &emsp; &emsp;<span id="total-tax">{{$values->totaltax}}</span> </label>
                                                            
                                                        </div>
                                                        @endforeach
                                                        <br>

                                                        <div class="button">
                                                            <button type="submit" id="Calculate" >Calculate</button>

                                                            <script>
                                                                function changeonpage(){
                                                                    window.open("corporate.php");
                                                                }
                                                            </script>
                                                            <button onclick="changeonpage()">Clear</button>
                                                        </div>
                                    </div>
                                </div>
                        </form>
                                                    <div class="news">
                                                        <div id="news">
                                                            <h4 style="text-align:center">Today's News</h4>
                                                            <hr>
                                                            @foreach ($values2 as $values2)
                                                            {{$values2->news}}
                                                            @endforeach
                                                        </div>


                                                        <div class="link" style="text-align:center">
                                                        <script>
                                                            function changepage(){
                                                                window.open("admin(control)");
                                                            }
                                                        </script>
                                                            <button class="btn" onclick="changepage()">News</button>
                                                          
                                                        </div>
                                                    </div>
            
    </div>           

</body>

<footer class="footer">
        <div id="footer">
            <h2>
                <p>Authorized by Income tax calculating system, Nepal&copy;2022</p>
            </h2>
            <a href="Tax_system.html " id="last">Tax system of Nepal</a>
        </div>
</footer>


</html>