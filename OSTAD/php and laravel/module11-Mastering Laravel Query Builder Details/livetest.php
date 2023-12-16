<?php
/*
Write a query to retrieve all rows from a database table
 named 'users'  using the query builder
 */
use Illuminate\Support\Facades\DB;


$users = DB::table('users')->get();


foreach ($users as $user) {
    echo $user->name; 
}


/*
Write a query to retrieve all rows from a database table named 'products' , 
group the results by the 'category' column, 
and only return the groups having more than 5 products using the query builder.
*/




use Illuminate\Support\Facades\DB;

// Assuming 'products' is the name of your table and 'category' is the column to group by
$products = DB::table('products')
    ->select('category', DB::raw('COUNT(*) as product_count'))
    ->groupBy('category')
    ->having('product_count', '>', 5)
    ->get();


foreach ($products as $product) {
    echo "Category: " . $product->category . ", Product Count: " . $product->product_count . PHP_EOL;
}
