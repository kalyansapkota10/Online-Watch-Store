<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['addtocart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'item_name');
            if(in_array($_POST['item_name'],$myitems))
            {
                echo"<script>
                alert('Item already added');
                window.location.href='watch.php';
                </script>";
            }
            else
            {
              $count=count($_SESSION['cart']);
              $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
              echo"<script>
                alert('Item added');
                window.location.href='watch.php';
                </script>";
            }
        }   
        else
        {
          $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
          echo"<script>
                alert('Item added');
                window.location.href='watch.php';
                </script>";
        }
    }
    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
            if($value['item_name']==$_POST['item_name'])
            {
             $_SESSION['cart']=array_values($_SESSION['cart']);
             unset($_SESSION['cart'][$key]);
             echo"<script>
             alert('Item removed');
             window.location.href='cart.php';
             </script>";
            }
        }
    }
}

?>