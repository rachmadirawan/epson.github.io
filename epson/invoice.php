<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Print Invoice</title>

    <!-- icon title-->
    <link rel="icon" href="icon-epson.ico" type="image/ico" sizes="16x16">
    <style>
        p{
            line-height: 0.5em;
        }

        .bord{
            border-top: solid 1px black;
            border-bottom: solid 1px black;
            font-weight: bold;
        }

        .bottom{
            text-align: center;
        }
    </style>
  </head>
  <body>
    
        <div class="container">
            <div class="row mt-5 mb-3">
                <div class="col">
                    <img src="logo.png" alt=""  width="200" height="75">
                </div>
                <div class="col">
                    <h4>Epson Service Center</h4>
                    <p>Jl. Kusuma Bangsa No. 116-118 Surabaya</p>
                    <p>(031) 5355335</p>
                </div>
            </div>

            <div class="row text-center">
            <div class="col ">
            No INVOICE : 2021/XI/10 - SV211110025
            </div>
            <div class="col">
            Date : November 10 2021
            </div>
            <div class="col">
            <p>Customer : Irawan. Mr</p>
            <p>HP : 081259062987</p>
            </div>
        </div>
<?php

 /* $nota = [
    [
    "invoice" => "2021/XI/10 - SV211110025",
    "tgl" => "10 November 2021",
    "nama" => "Irawan",
    "hp" => "081259062987",
    "brg1" => "Main Board Printer Epson L360",
    "brg2" => "Head Printer Epson L350",
    "bot" => 250000,
    "head" => 500000,
    ]

]; 



foreach($nota as $nt):
    */
?>    
        <div class="row  bord">
            <div class="col text-center">
            #
            </div>
            <div class="col">
            Item Service
            </div>
            <div class="col-auto">
            Qty
            </div>
            <div class="col text-center">
            Amount
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col text-center">
            1
            </div>
            <div class="col">
            Main Board Printer Epson L360"
            </div>
            <div class="col-auto">
            1
            </div>
            <div class="col text-center">
            Rp. 250.000
            </div>
        </div>

        <div class="row mt-5">
            <div class="col text-center">
            2
            </div>
            <div class="col">
            Head Printer Epson L350
            </div>
            <div class="col-auto">
            1
            </div>
            <div class="col text-center">
            Rp. 500.000
            </div>
        </div>

        <div class="row mt-5 bord text-center">
            <div class="col col-8 ">
            Total
            </div>
            <div class="col">
            Rp. 750.000
            </div>
        </div>

        <p class="bottom mt-5">Thank you for using our service.</p>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </div>
  </body>
</html>

