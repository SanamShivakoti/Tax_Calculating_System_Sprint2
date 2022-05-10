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
                        <label id="type">Category 
                        <select id="Category" onchange="myfunction(this.value)">
                            <option value="personal.php">Personal</option>
                            <option value="corporate.php">Corporate</option>
                        </select>
                        </label>
                        <!-- Fiscal year option -->
                        <label id="year"> Fiscal Year 
                            <input type="text" placeholder="2078/079" id="Fiscal_year">
                        </label>
                    </div>
                    <!-- Annual Income Topic -->
                    <div class="Annual">
                        <h2 style="text-align: center">Annual Tax</h2>
                    </div>
        </div>
            <form action="" method="post">
                @csrf
                
                    <!-- Personal tax calculation-->
                    <div class="personal">
                                <h2 style="text-align: center"><u>Personal</u></h2>
                                    <div class="content">
                                            <!-- Employee option -->
                                            <label class="Employee">Employee Status &ensp;  
                                                <select id="Employee" name="moum">
                                                    <option value="1">Unmarried</option>
                                                    <option value="2">Married</option>
                                                </select> 
                                            
                                            </label>
                                            
                                            
                                            <!-- Monthly Salary -->
                                            <div class="monthly">
                                                <label id="salary">&emsp; &emsp; &emsp; &emsp; &nbsp;Monthly Salary</label> &emsp;
                                                <input type="text" name= "msalary" value=""  id="monthly" maxlength="15">
                                                <div style="color:red">
                                                    @if ($errors -> any())
                                                    <ul>
                                                        @foreach ($errors->get('msalary') as $message)
                                                            {{$message}} 
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                    <br>
                                                </div>
                                            </div>
                                            
                                            
                                            <!-- No. of months -->
                                            <div class="month">
                                                <label id="no_of_months">&emsp; &emsp; &emsp; &emsp; No. of Months </label> &emsp; &nbsp;
                                                <input type="text" name = "nom" value="" id="month" maxlength="2">
                                                <div style="color:red">
                                                        @if ($errors -> any())
                                                        <ul>
                                                            @foreach ($errors->get('nom') as $message)
                                                                {{$message}} 
                                                            @endforeach
                                                        </ul>
                                                        @endif
                                                        <br>
                                                </div>
                                            </div>
                                            
                                            <!-- Bonus -->
                                            <div class="bonus">
                                                <label id="B"> &emsp; &emsp;  &emsp; &ensp; &nbsp;  Bonus &emsp; &emsp; &emsp; &ensp; &nbsp; </label>   
                                                <input type="text" name="bonus" value=""  id="bonus" maxlength="5">
                                                <div style="color:red">
                                                            @if ($errors -> any())
                                                        <ul>
                                                            @foreach ($errors->get('bonus') as $message)
                                                                {{$message}}
                                                            @endforeach
                                                        </ul>
                                                        @endif
                                                        <br>
                                                </div>
                                            </div>
                                            
                                            <!-- Total tax of the year -->
                                            <div class="total">
                                                <label id="T"> Total tax: <span id="total-tax"></span> </label>

                                            </div>
                                            <br>
            
                                            <!-- for calculate button -->
                                            <div class=" button ">
                                                <button type="submit" id="Calculate" onclick="">Calculate</button>
                                            </div>
                                     </div>
                    </div>            
            </form>  
                                         
                                        <div class="news">
                                            <h2 style="text-align:center"><u>News</u></h2>
                                                    <div id="news">
                                                        <h4 style="text-align:center">Today's News</h4>
                                                        <hr>
                                                        @foreach ($values as $values)
                                                        {{$values->news}}
                                                        @endforeach

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