<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Calculating System</title>
    <link rel="stylesheet" href="corporate.css">
</head>
<!-- for page change to personal page -->
<script>
    function myfunction1(value) {
        window.location.assign(`${value}`);
    }
</script>

<body>
    <div class="wrapper"></div>
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
                <label class="year"> Fiscal Year 
                  <input  type="text"   placeholder="2078/079" id="Fiscal_year">
                </label>
            </div>
            <!-- Annual Income Topic -->
            <div class="Annual">
                <h2>Annual Tax</h2>
            </div>

        </div>
        <div>
            <form action="" method="post">
                @csrf
                {{-- @foreach ($value1 as $values) 
                {{$values->ROLY}}
                {{$values->ROTY}}
                {{$values->NPOTY}}
                {{$values->totaltax}}
                @endforeach --}}

            <!-- corporate tax calculation-->
            <div class="corporate">
                <h3><u>Corporate</u></h3>
                <!-- Business type -->
                <div class="business">
                    <label id="business" > Business Type </label>
                    <select id="type" name="businesstype">
                <option value="1">Normal Business</option>
                <option value="2">General Insurance (Non-Life Insurance)</option>
                <option value="3">Telecom and Internet Services</option>
                <option value="4">Money transfer</option>
            </select>
                </div>

                <!-- Revenue of last year -->
                <div class="last_year">
                    <label id="last_year" name="R.O.L.Y"> Revenue of Last year </label>
                    <input type="text" id="last" value="" >
                </div>

                <!-- Revenue of the year -->
                <div class="the_year">
                    <label id="the_annual" name="R.O.T.Y"> Revenue of the year </label>
                    <input type="text" id="the_year" value="" >
                </div>

                <!-- Net profit of the year -->
                <div class="Net_profit">
                    <label id="Net_profit" name="N.P.O.T.Y"> Net Profit of the year </label>
                    <input type="text" id="profit" value="" s>
                </div>
                <!-- Tax of the year -->
                <div class="Tax_year">
                    <label id="T"> Total tax: <span id="total-tax"></span> </label>
                </div>

            </div>
            
            <!-- Personal tax calculation-->
            <div class="Information">
                <h3><u>General Information</u></h3>
                <p>The corporate income tax is a levy that is imposed on the net profits of corporations, computed as the excess of receipts over allowable costs.</p>
                <p>for more details visit to the given link
                    <a href="Tax_system.html">Taxation system of Nepal</a>
                </p>
            </div>
        </div>
        
        <div class="button">
            <button type="submit" id="Calculate" >Calculate</button>
        </div>

        </div>
    </form>



</body>

<footer class="footer">
    <h2>
        <p>Authorized by Income tax calculating system, Nepal&copy;2022</p>
    </h2>
    <a href="Tax_system.html" class="link">Tax system of Nepal</a>
</footer>


</html>