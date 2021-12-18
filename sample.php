<!DOCTYPE html>
<html>
    <head>
        <title>Registration form</title>
        <link rel="stylesheet"a href="style/style.css"/>
        <script type="text/javascript">
            function validate()
            {
                var fname = document.getElementById("fname");
                var firstregName = /^([a-zA-Z])+$/;
                var lname = document.getElementById("lname");
                var lastregName = /^([a-zA-Z])+$/;
                var email = document.getElementById("txtEmail");
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var number = document.getElementById("number");
                var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                var cnumber = document.getElementById("cnumber");
                if(number.value.trim()==""||fname.value.trim()==""||lname.value.trim()==""||txtEmail.value.trim()==""||cnumber.value.trim()=="")
                    {
                        alert("No Blank Fields are allowed");
                        return false;
                    }
                if(!firstregName.test(fname.value))
                    {
                        alert("Provide valid  First Name");
                        return false;
                    }
                if(!lastregName.test(lname.value))
                    {
                        alert("Provide valid Last Name");
                        return false;
                    }
                
                if(!filter.test(email.value))
                    {
                        alert("Provide valid EmailID");
                        return false;
                        
                    }
                if(!phoneno.test(number.value))
                    {
                        alert("Provide Valid Mobile number");
                        return false;
                    }
                if(number.value!=cnumber.value)
                    {
                        alert("Check the confirm mobile number is matching with mobile number ");
                        return false;
                    }
                else{
                    
                    alert("Check once that All fields are selected");
                    alert('Valid - Proceed Further');
                    true;
                    
                }
                
            }
            //function validateemail(inputtext)
            //{
                //var form= document.getElementById("form");
                //var email= document.getElementById("email").value;
                //var span=document.getElementById("span");
                //var pattern = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/
                //if (inputtext.value.match(pattern))
                    //{
                        //alert("valid");
                        //form.classList.remove("Invalid");
                        //span.innerHTML="Valid Email";
                        //span.style.color ="green";
                        //document.form.text1.focus();
                        //return true;
                    //}
                //else{
                    //form.classList.remove("valid");
                    //form.classList.add("Invalid");
                    //alert("Invalid");
                    //document.form.text1.focus();
                    //return false;
               // }

            //}
            
        </script>
    </head>
        <body onload='document.form1.text1.focus()'>
            <div class="classname">
                <form onsubmit="return validate()" action="message.html"  name="form1" action="#">
                    <p class="paragraph"> PATIENT REGISTRATION FORM </p>
                    <input id="fname"type="text" name="fname" placeholder="FIRST NAME" class="inputname"/> 
                    <input id="lname" type="text" name="lname" placeholder="LAST NAME"class="inputname"/>
                    <br>
                    <input id="txtEmail" type="text" name="text1"placeholder="EMAIL"class="inputname"/>
                    <br>  
                    <input id="number" type="text" name="mobilenumber" placeholder="MOBILE NUMBER"class="inputname" size="10"/>
                    <input id="cnumber" type="text" name="confirmmobilenumber" placeholder="CONFIRM MOBILE NUMBER"class="inputname" size="10"/>
                    <br>
                    <label>Gender</label>
                    <label>Male<input type="radio" name="gender"/></label>
                    <label>Female<input type="radio" name="gender"/></label><br>
                    <h3> <center>TIME SCHEDULES TO MAKE APPOINTMENT</center> </h3>
                    <ul class="list">
                    <li>7.00AM-3.00PM  GeneralCheckups</li>
                    <li>9.00AM-1.00PM  Diagnosis Treatment</li>
                    <li>4.00PM-8.00PM  Physiotherapy</li>
                    </ul> 
                    <br>
                    <select class="selection"><option>Select the time</option>
                        <option>7.00AM-3.00PM</option>
                        <option>9.00AM-1.00PM</option>
                        <option>4.00PM-8.00PM</option>
                    </select><br>
                    <center><button type="submit">Submit</button></center>
                    
                </form>
            </div>
        </body>
</html>