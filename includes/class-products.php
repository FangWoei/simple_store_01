<?php

class Products
{

    public $database;

    public function __construct()
    {
        // Only change code below this line 

            // instruction: create a new PDO connection to the database
            $this->database = connectToDB();

        // Only change code above this line

    }
    
    public function getProducts()
    {
        $products = [];
        // Only change code below this line 

            // instruction: get all products from the database and return them as an array of associative arrays
            $statement = $this->database->prepare('SELECT * FROM products');
            $statement->execute();
            $products = $statement->fetchAll();

        // Only change code above this line

        return $products;
    }

    public function toggleWishlist($product_id)
    {
        // Only change code below this line 

            /* 
                instruction: add the product to the wishlist or remove it from the wishlist 
                (if it's already in the wishlist)
            */
            if($_POST['is_wishlist']==0){
                $statement = $this->database->prepare('UPDATE products set `is_wishlist` = 1 where id=:id');
            } else{
                $statement = $this->database->prepare('UPDATE products set `is_wishlist` = 0 where id=:id');
            }
            $statement->execute([
                'id' => $product_id
            ]);
            // check if the current product is already in wishlist


            // if is in wishlist, update to 0 (remove from wishlist)


            // if is not, update to 1 (add to wishlist)


            // redirect back to home page
            header("Location: /");
            exit;

        // Only change code above this line
    }
}