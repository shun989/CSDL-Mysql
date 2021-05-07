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
<form action="../function/add-category.php" method="post">
    <fieldset>
        <h2>Add New Category</h2>
        <a href="../index.php">Back home</a>
        <table>
            <tr>
                <td>Category Code</td>
                <td>
                    <input type="text" name="code" placeholder="Mã loại sách.">
                </td>
            </tr>
            <tr>
                <td>Category Name</td>
                <td>
                    <input type="text" name="name" placeholder="Tên loại sách.">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="add">Thêm</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
