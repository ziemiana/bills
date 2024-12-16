<?php
?>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title> Electric Utilities</title>
</head>
 <body>
    <style>body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        color: #333;
    }
    
    h1 {
        text-align: center;
        color: pink;
        font-size: 24px;
        margin: 20px 0;
    }
    
    input[type="text"] {
        width: calc(100% - 40px);
        padding: 10px;
        margin: 20px auto;
        display: block;
        border: 1px solid #ccc;
        border-radius: 25px;
        font-size: 16px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        padding: 15px;
        transition: transform 0.2s;
    }
    
    .uti li:hover {
        transform: translateY(-5px);
    }
    
    .pic {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 15px;
        object-fit: cover;
        background: #e0e0e0;
    }
    
    h2 {
        font-size: 18px;
        color: pink;
        margin: 0;
    }
    </style>
  <div>
   <div>
    <h1>
    Electric Utilities
    </h1>
   </div>
   <div>
    <div>
     <input placeholder="Search billers" type="text"/>
    </div>
   </div>
   <ul class="uti">
    <li>
     <img alt="" class="pic" src=""/>
     <div>
      <h2>
       Pelco
      </h2>
     </div>
    </li>
    <li>
     <img alt="" class="pic" src=""/>
     <div>
      <h2>
       Panelco
      </h2>
     </div>
    </li>
    <li>
     <img alt="" class="pic"  src="" />
     <div>
      <h2>
       Tarelco
      </h2>
     </div>
    </li>
    <li>
     <img alt="" class="pic"  src="" />
     <div>
      <h2>
      Zameco
      </h2>
     </div>
    </li>
    <li>
     <img alt="" class="pic" src="" />
     <div>
      <h2>
       Meralco
      </h2>
     </div>
    </li>
   </ul>
  </div>
 </body>
</html>
