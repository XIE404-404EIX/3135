<?php 

include_once('Model/dbh.php');

?>

<html>
<style>
    body, html {
  height: 100%;
  margin: 0;
}

.backgroundImage {
  background-image: url('Image/List.png');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.searchBar{
    position:  absolute;
    top:       70px;
    left:      762px; 
    height:    20px;
}

.searchButton{
    position: absolute;
    top:      70px;
    left:     950px; 
    height:   20px;
}

.PN{
    position: absolute;
    top: 10%;
    left: 40%;
    color: white;
}

.BG{
    position: absolute;
    top: 15%;
    left: 39%;
    color: white;
}

.GTD{
    position: absolute;
    top: 75%;
    left: 10%;
    color: white;
    font-size: 100%;
}

.GTS{
    position: absolute;
    top: 80%;
    left: 10%;
    color: white;
    font-size: 100%;
}

a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
</style>
    <div class = "backgroundImage">
    <head>
        <h1 style="text-align:center">Baked Goods</h1>
    </head>
    
    <form>
        <input type="text" class = "searchBar"></input>
        <button class = "searchButton">Search</button>
        <br>
        </form>
    <body>
        <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>Products</h2></th>
        </tr>
        
        <t>
        <th>
            <th> Product Name </th>
            <th> Price </th>
        </th>
        </t>
        
        <?php 
        $sql = "SELECT * FROM products WHERE categoryID=3;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    ?>
        
        <tr>   
            <td><?php echo $row['productName']?></td> 
            <td><?php echo $row['listPrice']?> <button class = "ATC">Add to cart</button>  <button class = "ATWL">Add to wishlist</button></td> 
        </tr>
        
        
        <?php
            }}
            ?>
        </table>    
        <label class = "GTD"><a href="DrinkList.php">Drink List</a></label>
        <label class = "GTS"><a href="Snack.php">Snacks List</a></label>
    </body>
    </div>
</html>