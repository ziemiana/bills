<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Bills</title>
</head>
<body>
    <style>body {
        font-family: Arial, sans-serif;
        background-color: #ffe6f2; 
        margin: 0;
        padding: 0;
        color: #333;
    }
    
    div {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 20px auto;
        max-width: 600px;
    }
    
    h1 {
        color: #ff1493; 
        font-size: 28px;
        margin: 10px 0;
        text-align: center;
    }
    
    h2 {
        color: #ff66b2; 
        font-size: 22px;
        text-align: center;
        margin: 10px 0;
    }
    
    p {
        font-size: 16px;
        margin: 5px 0;
        color: #555;
    }
    
    .amo {
        font-size: 20px;
        color: #ff1493;
        font-weight: bold;
        text-align: center;
    }
    
    .mid {
        width: 100%;
        margin-top: 20px;
        border-top: 2px solid #ffb6c1;
        border-bottom: 2px solid #ffb6c1;
        padding: 10px 0;
    }
    
    .flex {
        display: flex;
        justify-content: space-between;
        margin: 10px 0;
        font-size: 16px;
    }
    
    .light {
        color: #777;
    }
    
    .dark {
        color: #ff66b2; 
        font-weight: bold;
    }
    
    .btn {
        margin-top: 20px;
    }
    
    .btn1 {
        background-color: #ff66b2;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        font-size: 16px;
        box-shadow: 0px 4px 6px rgba(255, 102, 178, 0.4);
        transition: background-color 0.3s ease;
    }
    
    .btn1:hover {
        background-color: #ff1493;
    }
    </style>
    <div>
        <div>
            <h1 >Pay Bills</h1>
        </div>
        <div class="head">
            <h2>Converge ICT</h2>
            <p>Confirmation</p>
        </div>
        <div class="you">
            <p>You are about to pay</p>
            <p class="amo">PHP 20.00</p>
            <p>using your GCash</p>
        </div>
        <div class="mid">
            <div class="flex">
                <span class="light">Total Bill Amount</span>
                <span class="dark">PHP 10.00</span>
            </div>
            <div class="flex">
                <span class="light">Account Number (13-Digit)</span>
                <span class="dark">1234567891234</span>
            </div>
            <div class="flex">
                <span class="light">Account Name</span>
                <span class="dark">name mo malamang</span>
            </div>
        </div>
        <div class="btn">
            <button class="btn1">CONFIRM</button>
        </div>
    </div>
</body>
</html>