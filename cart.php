<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
        h1{
            text-align: center;
            border:1px solid springgreen;
            color:teal;
            
        }

        .table{
            text-align: center;
            font-size: small;
            margin: 60px 0px 0px 0px;
            

        }

        .tr th{
             padding-bottom: 20px;
             font-size: large;
        }
       
       .tablebtn{
        font-size: small;
        background-color:steelblue;
        border: 1px solid steelblue;
        border-radius: 2px;
        color:white;
        
       } 
       .total{
        margin-top: 60px;
       }
    
       .fields input{
        padding: 8px;
        text-align: center;
        margin-bottom: 5px;
       }

       #image{
        margin-left: 20px;
        height: 45px;
       }
    </style>
</head>
<body>
   <a href="watch.php"><img src="img/leftarrow.png" id="image"></a>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-8">
                <table class="table table-dark table-striped">
                    <thead class="thead">
                        <tr class="tr">
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php
                    if(isset($_SESSION['cart']))
                    {
                     foreach($_SESSION['cart'] as $key=>$value)
                     {
                        $sr=$key+1;
                        echo"
                        <tr>
                        <td>$sr</td>
                        <td>$value[item_name]</td>
                        <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                        <td><input type='number' class='text-center iquantity' onchange='subTotal()' value='$value[quantity]' min='1' max='10'</td>
                        <td class='itotal'></td>
                        <td>
                        <form action='manage_cart.php' method='POST'>
                        <button name='remove_item' class='tablebtn'>REMOVE</button>
                        <input type='hidden' name='item_name' value='$value[item_name]'>
                        </form>
                        </td>
                        </tr>
                        ";
                     }
                    } 
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="total border rounded bg-light p-4">
                <h4>Grand Total:</h4>
                <h5 class="text-right" id="gtotal"></h5><br>
                <form action="">
                    <div class="fields">
                    <input type="text" class="name" placeholder="Full name" required>
                    <input type="text" class="number" placeholder="Mobile no" required>
                    <input type="text" sclass="address" placeholder="Address" required>
                    </div>
                    <br>
                <div class="form-check">
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label" for="flexRadioDefault1">
                  Credit Card
                 </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                 Cash on Delivery
                </label>
                </div>
                <br>
                <button class="btn btn-primary btn-block">Make Purchase </button>
                </form>
               </div>
            </div>   
        </div>
    </div>
    
    <script>
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal= document.getElementById('gtotal');
        function subTotal()
        {
            gt=0;
          for(i=0;i<iprice.length;i++)
          {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
          }
          gtotal.innerText=gt;
        }

        subTotal();
    </script>
</body>
</html>

