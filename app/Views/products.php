<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>form {
  width: 100%;
  max-width: 500px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input,
select {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #000;
  color: #fff;
  border: none;
  padding: 10px;
  cursor: pointer;
}
</style>

</head>
<body>
    
    <form action ="/save" method ="post">  
    <div class="form-group">
    <label for="ProductName">Product Name</label>
      <input type="hidden" name="ProdId" value="<?= isset($pro) ? $pro['ProdId'] : '' ?>">
      <input type ="text" name ="ProductName" placeholder="Enter the product name" value="<?= isset($pro) ? $pro['ProductName'] : '' ?>">
      </div>
      <div class="form-group">
      <label for="ProductDescription">Product Description</label>
      <input type ="text" name ="ProductDescription" placeholder="Enter a brief description of the product" value="<?= isset($pro) ? $pro['ProductDescription'] : '' ?>">
      </div>
      <div class="form-group">
     <label for="ProductCategory">Product Category</label>
     <select class="form-control" id="ProductCategory" name="ProductCategory">
      <option value="Snacks and desserts">Snacks and desserts</option>
      <option value="Bakery products">Bakery products</option>
      <option value="Dairy products">Dairy products</option>
      <option value="Beverages">Beverages</option>
      <option value="Grains and cereals">Grains and cereals</option>
    </select>
  </div>
  <div class="form-group">
    <label for="ProductQuantity">Product Quantity</label>
      <input type ="number" name ="ProductQuantity" placeholder="Enter the quantity of the product" value="<?= isset($pro) ? $pro['ProductQuantity'] : '' ?>">
      </div>
      <div class="form-group">
    <label for="ProductPrice">Product Price</label>
    <input type="number" class="form-control" name ="ProductPrice" placeholder="Enter the price of the product" value="<?= isset($pro) ? $pro['ProductPrice'] : '' ?>">
      <br>
      <input type ="submit" value="save">
    </form>

    <h2>Product Listing</h2>
    <table border="1">
        <tr>
            <th>ProductName</th>
            <th>ProductDescription:</th>
            <th>ProductCategory</th>
            <th>ProductQuantity</th>
            <th>ProductPrice</th>
            <th>Action</th>
       </tr>
       <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['ProductName'] ?></td>
                <td><?= $pr['ProductDescription'] ?></td>
                <td> <?= $pr['ProductCategory'] ?></td>
                <td> <?= $pr['ProductQuantity'] ?></td>
                <td> <?= $pr['ProductPrice'] ?></td>
                <td> <a href="/delete/<?= $pr['ProdId'] ?>">delete</a>|| <a href="/edit/<?= $pr['ProdId'] ?>">edit</a> </td>
                
            </tr>
        <?php endforeach; ?>
    </table>   
</body>
</html>
