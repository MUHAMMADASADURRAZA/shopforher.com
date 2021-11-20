<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
                <form  method="post" action="">
                  <input type="text" name="search" id="" placeholder="Search here ">
                  <button type="submit" name="searchbox">search</span></button>
                </form>
              </div>
             <?php
         
             if(isset($_POST['searchbox']))
             {
                 
               $str = mysqli_real_escape_string($conn,$_POST['search']);
              $sql ="SELECT * FROM `product01` WHERE category='$str'";
              $res=mysqli_query($conn,$sql);
              if(mysqli_num_rows($res)>0)
              {
                while($row = mysqli_fetch_assoc($res)){
                    echo "<div class='tab-pane fade in active'>
                                <ul class='aa-product-catg'>
                        <form method='post' action=''>
                              <li>
                              <figure>
                        
                        <div class='aa-product-img'><img src='".$row['image']."' /></div>
                        <div class='aa-product-title'>".$row['title']."</div>
                      
                
                           <div class='aa-product-price'>$".$row['price']."</div>
                        <button type='submit' class='aa-add-card-btn'> <span class='fa fa-shopping-cart' style='width:200px;'></span>Buy Now</button>
                              </figure>
                              </li>
                        </form>
                              </ul>
                           </div>";
                        }
              }
              else
              {
                  echo "No data found";
              }
             }
             ?>
    
</body>
</html>