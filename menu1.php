<nav class="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Presentation</a></li>
        <li><a href="store.php?category=1">Store</a>
          <ul>
                <li><a href="store.php?category=1">Red Wine</a></li>
                <li><a href="store.php?category=2">White Wine</a></li>
                <li><a href="store.php?category=3">Rose Wine</a></li>
            </ul>
        </li>
        <li><a href="#">Contact</a></li>
        <li><a href="cart.php">Cart
            <?php
                $quantity = 0;
				$item_total = 0;
				if(isset($_SESSION["cart_item"])){		
					foreach ($_SESSION["cart_item"] as $item){
						$item_total += ($item["price"] * $item["quantity"]);
						$quantity += $item["quantity"];
					}
				}
                
                if($quantity > 0){
                    echo "(".$quantity.")"; }
            ?>
            </a></li>
    </ul>
</nav>