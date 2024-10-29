<?php
$buah = array("apel","pisang","durian","semangka","pepaya","manggis");
foreach($buah as $buahan){
    echo $buahan. '<br>';
}
echo "<hr />";
?>
<table border="1">
    <tr>
        <th>Nama Siswa</th>
        <th>Umur Siswa</th>
        <th>Kota Siswa</th>
        <th>Jurusan Siswa</th>
    </tr>
    <tr>
        <td><?= $siswa['nama'];?></td>
        <td><?= $siswa['umur'];?></td>
        <td><?= $siswa['kota'];?></td>
        <td><?= $siswa['jurusan'];?></td>
    </tr>
</table>

