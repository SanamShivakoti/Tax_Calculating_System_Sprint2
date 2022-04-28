
var calculate_tax= function (){
    //creating variables to grab elements from DOM 
        var ms = document.getElementById("profit").value;
        var id = document.getElementById("type").value;
        let t = document.getElementById("total-tax");
    
    //converting the string into integer    
        var a=parseInt(ms);
        var d=parseInt(id);
        console.log(d);
    
    //display the total tax to be paid in the webpage
        t.textContent=calculatetax(a);
    
    function calculatetax(amount){
    
        if (d==1){
            //normal business conditions
            var tax = (0.25*amount);
        }
            
         else if (d==2){
            //General Insurance (Non-Life Insurance)
            var tax=(0.30*amount);
         }

         else if (d==3){
             //Telecom and Internet Services
             var tax=(0.30*amount);
         }
         
        else if (d==4){
            //Money transfer
            var tax=(0.30*amount);
        }
        return tax;
        }
        
    
    }
       
        
    