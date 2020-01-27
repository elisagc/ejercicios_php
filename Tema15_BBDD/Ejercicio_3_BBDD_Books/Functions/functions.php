<?php
spl_autoload_register(function ($className) {
    include __DIR__ . '../../clases/' . $className . '.php';
});

function paintBooks()
{
    $query = "select * from book";
    $con = Conexion::getInstance();
    $rows = $con->selectQuery($query);

    echo "<table>";
    echo <<<HRD
<tr>
<th>id</th>
<th>isbn</th>
<th>title</th>
<th>author</th>
<th>stock</th>
<th>price</th>
</tr>
HRD;
    foreach ($rows as $row) {
        $id = $row['id'];
        $isbn = $row['isbn'];
        $title = $row['title'];
        $author = $row['author'];
        $stock = $row['stock'];
        $price = $row['price'];
        echo <<<SELECTDATA
<tr>
<td>$id</td>
<td>$isbn</td>
<td>$title</td>
<td>$author</td>
<td>$stock</td>
<td>$price</td>
</tr>
SELECTDATA;
    }
    echo "</table>";
}
