<html>
<style>
td {
    padding:5px;
    border:1px solid #ccc;
}
</style>
<body>
    <h2>TAMBAH REKOD PELAJAR</h2>
    <?php
    include('config.php');
    $query = mysqli_query($conn,"select id_pelajar, nama_pelajar, no_kp from senarai_pelajar");
    $num_result = mysqli_num_rows($query);

    echo "<table>
    <tr>
        <td>ID PELAJAR</td>
        <td>NAMA PELAJAR</td>
        <td>NO KP</td>
        <td></td>
    </tr>";

    for ($i = 0; $i < $num_result; $i++) {
        $query2 = mysql_fetch_array($query);
        echo "<tr>";
        echo "<td>" . $query2['id_pelajar'] . "</td>";
        echo "<td>" . $query2['nama_pelajar'] . "</td>";
        echo "<td>" . $query2['no_kp'] . "</td>";
        echo "<td><a href='delete.php?id=" . $query2['id_pelajar'] . "'>delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <br>
    <a href='add.php'>Tambah Rekod</a>
</body>
</html>