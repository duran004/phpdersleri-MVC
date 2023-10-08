<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepetim</title>
</head>
<body>
    <h1>Sepetim</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Fiyat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
            <tr>
                <td><?php echo $product->id; ?></td>
                <td><?php echo $product->name; ?></td>
                <td><?php echo $product->price; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>