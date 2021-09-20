<?php
    $productId = $_SESSION['productId'];
    $page = $_SESSION['page'] ;

    // echo $productId;
    // echo $page;

    //session_destroy();

    $openspec = "../../DataBaseLayer/readDataBase/".basename($page);
    require_once($openspec);
    
    $singleProduct = singleProduct($productId);

    $brand = $singleProduct->brand;
    $model = $singleProduct->model;
    $type = $singleProduct->type;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dextop</title>
    <!-- <link rel="stylesheet" href="laptopStyle.css"> -->
    <style>
        .table{
            width: 100%;
        }
    </style>
</head>
<body>

    <table class="table" cellpadding="7" cellspacing="0" >
        <th style = "padding-right:222px">Basic Information</th>
        <th></th>

        <tr style="background-color:rgba(192, 192, 192, 0.568);">
            <td class="name">Brand</td>
            <td><?php echo $brand ?></td>
        </tr>
        <tr>
            <td class="name">Model</td>
            <td><?php echo $model ?></td>
        </tr>
        
        <tr style="background-color:rgba(192, 192, 192, 0.568);">
            <td class="name">Type</td>
            <td><?php echo $type ?></td>
        </tr>
        <!-- <tr>
            <td class="name">Ram</td>
            <td><?php echo $ram ?></td>
        </tr>
        <tr style="background-color:rgba(192, 192, 192, 0.568);">
            <td class="name">Graphics Card</td>
            <td><?php echo $graphicsCard ?></td>
        </tr>
        <tr>
            <td class="name">Storage</td>
            <td><?php echo $storage ?></td>
        </tr>
        <tr style="background-color:rgba(192, 192, 192, 0.568);"">
            <td class="name">Casing</td>
            <td><?php echo $casing ?></td>
        </tr>
        <tr>
            <td class="name">Power Supply</td>
            <td><?php echo $powerSupply ?></td>
        </tr> 
        <tr style="background-color:rgba(192, 192, 192, 0.568);">
            <td class="name" width= "30%">CPU Cooler</td>
            <td><?php echo $cpuCooler ?></td>
        </tr>   -->

    
        <!-- <th>Input Devices</th>
        <th></th>
        <tr style="background-color:rgba(192, 192, 192, 0.568)";>
            <td class="name" width="25%">keyboard</td>
            <td>HP Premium Quiet Keyboard – spill-resistant, full-size, backlit keyboard with programmable key</td>
        </tr>
        <tr>
            <td class="name">WebCam</td>
            <td>720p HD IR camera</td>
        </tr>
        <tr style="background-color:rgba(192, 192, 192, 0.568)">
            <td class="name">Mouse</td>
            <td>Gigabyte KM6300 USB Multimedia Keyboard </td>
        </tr> -->
    

        <!-- <th>Waranty</th>
        <th></th>
        <tr style="background-color:rgba(192, 192, 192, 0.568)">
            <td class="name">Manufacturing Warranty</td>
            <td>3 Year ;The latest HP ZBook Create G7 Core i7 10th Gen RTX 2070 8GB Graphics 15.6" UHD Laptop has a 03 Year International Limited Warranty (Battery, Adapter 1 Year)</td>
        </tr> -->
    </table>
</body>
</html>