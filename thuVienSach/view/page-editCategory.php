<?php
include_once "../database/Database.php";
$database = new Database();
$conn = $database->connect();

$id = $_REQUEST['id'];

$sql = "SELECT code,name FROM categories WHERE id = $id";

$stmt = $conn->query($sql);
$categories = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="../function/edit-category.php?id=<?php echo $id ?>" method="post">
    <fieldset>
        <h2>Edit Category</h2>
        <a href="../index.php"></a>
        <table>
            <tr>
                <td>Category Code</td>
                <td><input type="text" name="code" value="<?php echo $categories[0]['code']?>"></td>
            </tr>
            <tr>
                <td>Category Name</td>
                <td><input type="text" name="name" value="<?php echo $categories[0]['name']?>"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
