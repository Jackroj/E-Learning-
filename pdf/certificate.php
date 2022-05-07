<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
</head>
<style>
    .container{
        border-color: #375378;
        border-style:  double;
        border-width: 5px;
        padding: 2em;
    }
    .container .header{
        text-align: center;
        color: #A7957B;
        letter-spacing: 2px;
    }
    .container .name{
        font-size: 3em;
        font-weight: bold;
        text-align: center;
        color: #375378;
        letter-spacing: 2px;
    }
    .container .content{
        text-align: center;
        font-weight: bold;
        font-style: italic;
    }
    .container .sign{
        margin-left: 80%;
        margin-top: -60px;
    }
    .container .sign em{
        font-size: small;
        color: #DFD8CF;
        font-weight: bold;
    }
    .container .sign .signature{
        color: green;
        margin-left: 8px;
        font-style: oblique;
    }
    .container .content .tutorial{
        color: #858585;
        font-size: 18px;
        font-style: normal;
    }
    .container .date_month{
        color: #687D99;
    }
    .wrapper .circle{
        border-radius: 100%;
    width: 150px;
    height: 150px;
    border: 1px solid #375378;
    display: block;
    box-shadow: 0px 10px 5px #375378;
    cursor: pointer;
    }
    .wrapper .circle #text{
        font: Arial;
    font-size: 110px;
    font-weight: solid;
    color: #375378;    
    margin-left: 40px;
    }
    
</style>
<body>
    <div class="container">
    <div class="wrapper">
    <div class="circle">
        <span id="text">E</span>
    </div>
</div>
        <div class="header">
            <h2><em>Certificate Of Completion</em></h2>
            <h3>THIS CERTIFICATE IS PRESENTED TO</h3>
        </div>
        <div class="name">
            <p><?php echo strtoupper($name) ?></p>
        </div>
        <div class="content">
            <p>PARTICIPATION OF THE QUIZ SUCCESSFULLY</p>
            <p class="tutorial">COMPETITION ON E-TUTORIAL</p>
        </div>
  
            <div class="date_month">
                <p>Presented on May 2022</p>
            </div>
            <div class="sign">
                <div class="signature">PADMAPRIYA</div>
                <p>TEAM E-TUTORIAL</p>
                <em>Team Instructor</em>
            </div>
        
    </div>
</body>
</html>