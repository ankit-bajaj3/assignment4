
<?php
    include 'Vending.php';
    if(isset($_POST['reset']))
    {
        header('Location: index.php');
    }

    if(isset($_POST['submit']))
    {
        if(!isset($_POST['snack']))  
        echo '<div class="alert alert-danger container" role="alert">
        Please choose a item
        </div>';
         
        else
        {
            $money = $_POST['money'];
            $products = $_POST['snack'];
            
            switch ($products) {
                case "Chocolate":
                    if($money < 1.25)                 /*if amount of money is less than 1.25 dollars*/
                        echo '<div class="alert alert-danger container" role="alert">
                             Please provide enough amount to buy the item
                        </div>'; 
                    else
                    {
                        $chocolate = new Vending('Chocolate', $money, 1.25);                    
                        $chocolate->purchase();    
                    }
                    break;
                case "Pop":
                    if($money < 1.50)              /*if amount of money is less than 1.50 dollars*/                  
                        echo '<div class="alert alert-danger container" role="alert">
                             Please provide enough amount to buy the item
                        </div>';
                       
                    else
                    {
                        $chocolate = new Vending('Pop', $money, 1.50);
                        $chocolate->purchase();
                    }
                    break;
                case "Chips":
                    if($money < 1.75)                                      /*if amount of money is less than 1.25 dollars*/
                    echo '<div class="alert alert-danger container" role="alert">
                            Please provide enough amount to buy the item
                    </div>';
                    else
                    {
                        $chocolate = new Vending('Chips', $money, 1.75);
                        $chocolate->purchase();
                    }
                    break;
            }            
        }
    }
    
    $money = 0;
    $remaining = 0;
    $products = '';

    if(isset($_POST['one']))
    {
        $money = $_REQUEST['money'] + 1.00;        
    }
    if(isset($_POST['five']))
    {
        $money = $_POST['money'] + 0.5;
    }
    if(isset($_POST['ten']))
    {
        $money = $_POST['money'] + 0.10;
    }
    if(isset($_POST['twentyfive']))
    {
        $money = $_POST['money'] + 0.25;
    }    
?>
<html>

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
    <div class="row">
        <h4>Calculations Vending Machine</h4>
    </div>
    <div class="row">
    <form class="form-horizontal" method='post' role="form">
    <div class="form-group">
    <label class="col-sm-2 control-label">Add your money:</label>
            <button class="btn btn-md btn-secondary" name='one' id='one'>1 dollar </button>
            <button class="btn btn-md btn-secondary" name='five' id='five'>5 Cents</button>
            <button class="btn btn-md btn-secondary" name='ten' id='ten'>10 Cents</button>
            <button class="btn btn-md btn-secondary" name='twentyfive' id='twentyfive'>25 Cents</button>
      </div>

      <div class="form-group">
        <label for="money" class="col-sm-2 control-label">Money:</label>
        <div class="col-sm-5">
          <input type="text" class="form-control inputstl" readonly name="money" id="money" value="<?php echo $money;?>">
        </div>
      </div>
      
     
      <div class="form-group">
        <label class="col-sm-2 control-label">Select Item</label> 
        <div class="col-sm-5">
        <select name="snack" class="form-control">
            <option selected>Select your choice</option>
            <option <?php if(isset($products)){ if($products=='Chocolate' ) echo 'selected = "selected"' ; else echo '' ;} ?> value="Chocolate">Chocolate Bar $1.25</option>
            <option <?php if(isset($products)){ if($products=='Pop' ) echo 'selected = "selected"' ; else echo '' ;} ?> value="Pop">Pop $1.50</option>
            <option <?php if(isset($products)){ if($products=='Chips' ) echo 'selected = "selected"' ; else echo '' ;} ?> value="Chips">Chips $1.75</option>
        </select> 
        </div>

      </div>   
       
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit" name="submit" value="submit">Submit</button>
          <button name="reset">Cancel</button>
        </div>
      </div>
    </form>
    </div>
</div> 
   
</body>

</html>
 