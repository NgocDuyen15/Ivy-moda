<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=iedge">
        <meta name="viewport" content="whidth=device-whidth, initial scale=1.0 ">
        <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <title>Danh mục sản phẩm</title>
</head>
<body>
    <style>
        *{
            margin: 0px;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        li{
            list-style: none;
        }
        a{
            text-decoration: none;
            color: #000;
        }
        header{
            display: flex;
            justify-content: space-between;
            padding: 12px 50px;
            height: 50px;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
            background: rgba(238, 129, 129, 0.3);
        }
        header.sticky{
            background: rgba(255, 255, 255, 1);
        }
        header:hover{
            background: rgba(255, 255, 255, 1);
        }
        .logo{
            width: 50%;
            padding-right: 600px;
            display: flex;
        }

        .logo p{
            font-size: 45px;
            font-weight: bold;
            padding: 5px;
        
        }
        .logo i{
            font-size: 45px;
            padding: 5px;
        }
        .others{
            flex: 1;
            display: flex;
            padding-left: 450px;
            width: 50%;
        }
        .others li{
            padding-left: 15px;
            text-align: center;
        }
        .others > li img{
            height: 30px;
            border-radius: 50%;
        }
        .others > li::after{
            content: "";
            display: block;
            width: 1px;
            height: 80%;
            background: #cccccc;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }
        .others > li:last-child::after{
            display: none;
        }
        .others > li:first-child {
            position: relative;
        }
        .others >li:first-child input {
            width: 100%;
            height: 100%;
            border: none;
            border-bottom: 1px solid #333;
            background: transparent;
            outline: none;
        }
        .others > li:first-child i {
            position: absolute;
            right: 10px;
        }
    </style>
    <!-- /////////////////////////////////////// -->
    <style>
        .amin-contenr{
            margin-top: 50px;
            display: flex;
        }
        .amin-contenr-left{
            background-color: #2a413a;
            font-size: 20px;
            width: 20%;
            height: 100vh;
            padding: 10px 0 0 12px;
        }
        .amin-contenr-left ul li{
            padding: 10px 0 0 12px;
        }
        .amin-contenr-left> ul> li> a{
            font-weight: bold;
            color: #dddddd;
        }
        .list ul{
            display: none;
        }
        .list.block ul{
            display: block;
        }
        .amin-contenr-left ul li{
            margin: 6px 0;
        }
        .amin-contenr-left ul ul{
            margin-left: 20px;
        }
        .amin-contenr-left ul ul a{
            color: white;
        }
        .amin-contenr-right{
            width: 80%;
            padding-right: 50px;
            padding-left: 20px;
           
            background-color: rgb(209, 243, 237);
        }
        .amin-contenr-right-cartegory-add input{
            height: 30px;
            width: 200px;
            padding-left: 12px;
            margin-top: 20px;
        }
        .amin-contenr-right-cartegory-add button{
            display: block;
            margin-top: 10px;
            height: 30px;
            width: 100px;
            cursor: pointer;
            background-color: brown;
            border: none;
            color: white;
            transition: all 0.3 ease;
        }
        .amin-contenr-right-cartegory-add button:hover{
            background-color: transparent;
            border: 1px solid brown;
            color: brown;
        }
        /* ------------amin-contenr-right-cartegory-list---------------- */
        .amin-contenr-right-cartegory-list table{
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }
        .amin-contenr-right-cartegory-list table tr th,td{
            border: 1px solid #dddddd;
        }
        table{
            border-collapse: collapse;
        }
        /* --------------amin-contenr-right-product-add----------------- */
        .amin-contenr-right-product-add input,select{
            display: block;
            width: 200px;
            height: 30px;
            margin: 10px 0 5px 0;
        }
        .amin-contenr-right-product-add label{
            display: block;
            font-weight: bold;
        }
        .amin-contenr-right-product-add label:first-child{
            margin-top: 12px;
        }
        .amin-contenr-right-product-add textarea{
            width: 500px;
            height: 200px;
        }
        .amin-contenr-right-product-add button{
            width: 100px;
            height: 30px;
            background-color: brown;
            color: #fff;
        }
        .amin-contenr-right-product-add button:hover{
            background-color:aqua;
            color: black;
        }
        /* ----------------PRODUCT LIST---------------------- */
        .amin-contenr-right-product-list table{
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }
        .amin-contenr-right-product-list table tr th,td{
            border: 1px solid #dddddd;
        }
    </style>
    <header>
        <div class="logo">
            <i class="fa fa-user"></i>
            <p>AMIN</p>
        </div>
       
        <div class="others">
            <li><img src="../image/amin1.jpg" alt=""></li>
            <li> <a href="">Huỳnh Thị Ngọc Duyên</a></li>
        </div>
    </header>