<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Calculating System</title>
    <link rel="stylesheet" href="personal.css">
</head>
<!-- for page change to corporate page -->
<script>
    function myfunction(value) {
        window.location.assign(`${value}`);
    }
</script>

<script src="calculationp.js"></script>



<body>
    <div class="wrapper">
        <div class="Heading">
            <h1> <b>Income tax calculator, Nepal</b></h1>
        </div>
        <!-- For calculation part -->
        <div class="Calculating">
            <!-- Category -->
            <div class="Category">
                <label id="type">Category </label>
                <select id="Category" onchange="myfunction(this.value)">
                <option value="personal.php">Personal</option>
                <option value="corporate.php">Corporate</option>
            </select>
                <!-- Fiscal year option -->
                <label id="year"> Fiscal Year </label>
                <input type="text" placeholder="2078/079" id="Fiscal_year">
                </label>
            </div>
            <!-- Annual Income Topic -->
            <div class="Annual">
                <h2>Annual Tax</h2>
            </div>
        </div>
        <form action="" method="post">
            @csrf
        <div>
            <!-- Personal tax calculation-->
            <div class="personal">
                <h3><u>Personal</u></h3>
                <!-- Employee option -->
                <label class="Employee">Employee Status  
            <select id="Employee" name="moum">
                <option value="1">Unmarried</option>
                <option value="2">Married</option>
            </select> 
            </label>

            {{-- @foreach ($value as $values) 
            {{$values->nom}}
            {{$values->msalary}}
            {{$values->bonus}}
            {{$values->totaltax}}
            @endforeach --}}
        
                <!-- Monthly Salary -->
                <div class="monthly">
                    <label id="salary">Monthly Salary</label>
                    <input type="text" name= "msalary" value=""  id="monthly" maxlength="15">

                    @if ($errors -> any())
                    <ul>
                        @foreach ($errors->get('msalary') as $message)
                            {{$message}} 
                        @endforeach
                    </ul>
                    @endif

                </div>


                <!-- No. of months -->
                <div class="month">
                    <label id="no_of_months"> No. of Months </label>
                    <input type="text" name = "nom" value="" id="month" maxlength="2">

                    @if ($errors -> any())
                    <ul>
                        @foreach ($errors->get('nom') as $message)
                            {{$message}} 
                        @endforeach
                    </ul>
                    @endif

                </div>


                <!-- Bonus -->
                <div class="bonus">
                    <label id="B"> Bonus </label>
                    <input type="text" name="bonus" value=""  id="bonus" maxlength="5">

                    @if ($errors -> any())
                <ul>
                    @foreach ($errors->get('bonus') as $message)
                        {{$message}}
                    @endforeach
                </ul>
                @endif

                </div>

                
                <!-- Total tax of the year -->
                <div class="total">
                    <label id="T"> Total tax: <span id="total-tax"></span> </label>

                </div>
                
            </div>
        </div>
         <!-- for calculate button -->
         <div class=" button ">
            <button type="submit" id="Calculate" onclick="">Calculate</button>
        </div>
    </form>


        <!-- corporate tax calculation-->
        {{-- <div class="Information">
            <h3 id="General"><u>General Information</u></h3>
            <p>The individual income tax (or personal income tax) is a tax levied on the wages, salaries, dividends, interest, and other income a person earns throughout the year. The tax is generally imposed by the state in which the income is earned.</p>
            <p>for more details visit to the given link
                <a href="Tax_system.html">Taxation system of Nepal</a>
            </p>
        </div> --}}




       
    </div>

</body>
    <footer class="footer ">
        <div id="footer ">
            <h2>
                <p>Authorized by Income tax calculating system, Nepal&copy;2022</p>
            </h2>
            <a href="Tax_system.html " class="link ">Tax system of Nepal</a>
        </div>
    </footer>
    </div>

   

</html>