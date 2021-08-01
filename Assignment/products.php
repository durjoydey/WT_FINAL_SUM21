<?P
include 'controller/productcontroller.php';
$key = $_GET["key"];
$product = searchProduct($key);

if (count($products)>0)
{
    foreach($products as $p)
    {
        echo "<p>".$p["name"]."</p>";
    }
}
?>