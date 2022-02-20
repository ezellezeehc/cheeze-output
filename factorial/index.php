
<!DOCTYPE html>
<html>
<head>
    <style>
        .txtNum{
            border-bottom-color: #d6d6d6; 
            display: inline-block;
            height: 43px;
            width: 58%;
            border: none;
            border-radius: 0;
            font-size: 16px;
            font-weight: 400;
            padding: 0;
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 1px solid #ccc;
        }

        .form-bar{
            position: relative;
            display: block;
            width: 100%;
        }
        .btn-success{
            background-color: #11c15b; 
            border-color: #11c15b; 
            color: #fff;
            border-radius: 2px;
            text-transform: capitalize;
            font-size: 15px;
            padding: 10px 19px;
            margin-left: 200px;
        }
        .float-label{
            top: -14px;
            font-size: 11px;
            
        }
        .col-md-4{
            webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-md-4i{
            webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            /* flex: 0 0 33.333333%; */
            max-width: 33.333333%;
        }
        .col-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

h4{
    text-align: left;
    margin-left: 7%;
}

#factorial_result{
    font-size: 30px;
    font-weight: bold;
}
body{
    text-align: center; font-size: 20px;
}
    </style>

</head>
<body >  
    <script>
        function factorial(){
            var i, num, fx;
            fx = 1;
            num = document.getElementById("num").value;
            for(i = 1; i <= num; i++)  
            {
                fx = fx * i;
                }
                i = i - 1;  
            document.getElementById("factorial_result").innerHTML =  fx ;
            }
    </script>

        <div class="row">
            <div class="col-12">
                <h4>Expected Result</h4>
                <div>&nbsp;</div>
            </div>
            <div class="col-md-4">
                
                    <div class="form-group form-default form-static-label">
                       
                        <div>&nbsp;</div>
                        <input class="txtNum" type="text" id="num" name="txt_num" placeholder="Enter Number">
                        <span class="form-bar"></span>
                        
                    </div>


                    <div class="text-right"><div>&nbsp;</div>
                        <button type="submit" onclick = "factorial()" class="btn btn-success">
                            Calculate
                        </button>
                    </div>
                
            </div>
            <div class="col-md-4i">
               <h3>:: Result ::</h3> 
                
                <div id="factorial_result" style="font-size: 30px; font-weight: bold;"> </div>
            </div>
        </div>

</body>
</html>
