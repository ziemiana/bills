<?php
?>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title> Water Utilities</title>
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
        color: #ff1493; 
        font-size: 28px;
        margin: 20px 0;
    }
    input[type="text"] {
        width: calc(100% - 40px);
        padding: 10px;
        margin: 20px auto;
        display: block;
        border: 2px solid #ff66b2; 
        border-radius: 25px;
        font-size: 16px;
        box-shadow: 0 2px 5px rgba(255, 102, 178, 0.4); 
    }
    .uti {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        padding: 20px;
    }
    
    .uti li {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(255, 102, 178, 0.3);
        display: flex;
        align-items: center;
        padding: 15px;
        transition: transform 0.2s;
        border: 1px solid #ff66b2; 
    }
    
    .uti li:hover {
        transform: translateY(-5px);
        background-color: #ffe6f2;
    }
    
    .pic {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 15px;
        object-fit: cover;
        background: #ffb6c1;
    }
    
    h2 {
        font-size: 18px;
        color: #ff1493;
        margin: 0;
    }
    </style>
  <div>
   <div>
    <h1>
     Water Utilities
    </h1>
   </div>
    <div>
     <input placeholder="Search billers" type="text"/>
    </div>
   </div>
   <ul class="uti">
    <li>
     <img alt="" class="pic" src=""/>
     <div>
      <h2>
       CCST Water District
      </h2>
     </div>
    </li>
    <li>
     <img alt="" class="pic" src=""/>
     <div>
      <h2>
       Kathy Water District
      </h2>
     </div>
    </li>
    <li>
     <img alt="" class="pic"  src="" />
     <div>
      <h2>
       Mackenzie WATER DISTRICT
      </h2>
     </div>
    </li>
    <li>
     <img alt="" class="pic"  src=""/>
     <div>
      <h2>
      Gelo Waterworks
      </h2>
     </div>
    </li>
    <li>
     <img alt="" class="pic" src="" />
     <div>
      <h2>
       Tiger WATER DISTRICT
      </h2>
     </div>
    </li>
    <li>
     <img alt="" class="pic" src="" />
     <div>
      <h2 >
       Kay WATER DISTRICT
      </h2>
     </div>
     
    </li>
    <li>
     <img alt="" class="pic"  src=""/>
     <div>
      <h2>
       Bogart Water Enterprises Inc
      </h2>
     </div>
    </li>
    <li >
     <img alt="" class="pic" src="" />
     <div>
      <h2>
       Sam WATER DISTRICT
      </h2>
     </div>
    </li>
   </ul>
  </div>
 </body>
</html>
