<?php
?>
<html lang="en">
 <head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pay Bills</title>
</head>
<body>
    <style>body {
        font-family: Arial, sans-serif;
        background-color: #ffe6f2; 
        margin: 0;
        padding: 0;
        color: #ff66b2; 
    }
    
    h1 {
        text-align: center;
        color: #ff66b2; 
        font-size: 24px;
        margin: 20px 0;
    }
    
    .search {
        width: calc(100% - 40px);
        padding: 10px;
        margin: 20px auto;
        display: block;
        border: 1px solid #ff99cc; 
        border-radius: 25px;
        font-size: 16px;
        box-shadow: 0 2px 5px rgba(255, 102, 178, 0.2); 
    }
    
    .el, .wat, .cab, .lo {
        display: flex;
        align-items: center;
        background: #ffffff;
        border: 2px solid #ff99cc;
        border-radius: 10px;
        padding: 15px;
        margin: 10px auto;
        width: calc(100% - 40px);
        max-width: 400px;
        box-shadow: 0 2px 5px rgba(255, 102, 178, 0.2);
        transition: transform 0.2s;
    }
    
    .el:hover, .wat:hover, .cab:hover, .lo:hover {
        transform: translateY(-5px);
    }
    
    img.electric, img.water, img.internet, img.load {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 15px;
        object-fit: cover;
        background: #ffe6f2; 
    }
    
    span {
        font-size: 18px;
        color: #ff66b2; 
    }
    </style>
<div class="pb1">
<h1>
Pay Bills
</h1>
</div>
<div class="pb">
<div class=""><input class="search" placeholder="Search billers" type="text"/></div>
</div>
<div class="">
<div class="el">
<img alt="" class="electric"  src=""/>
<span >Electric Utilities</span>
</div>
<div class="wat">
<img alt="" class="water" src="" />
<span >Water Utilities</span>
</div>
<div class="cab">
<img alt="" class="internet" src=""/>
<span >Cable/Internet</span>
</div>
<div class="lo">
<img alt="" class="load"  src="" />
<span>Load</span>
</div>
</div>
</body>
</html>