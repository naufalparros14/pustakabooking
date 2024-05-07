<html>
<head>
<title>Tampil Data Beli</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
 Data Pembeliam
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>

 <tr>
 <td>Nama pembeli: </td>
 <td>:</td>
 <td>
 <?= $nama; ?>
 </td>
 </tr>

 <tr>
 <td>Merek Sepatu: </td>
 <td>:</td>
 <td>
 <?= $merek; ?>
 </td>
 </tr>

 <tr>
 <td>Ukuran Sepatu: </td>
 <td>:</td>
 <td>
 <?= $ukuran; ?>
 </td>
 </tr>

 <tr>
 <td>Harga: 
<?php 


?>
 </td>
 <td>:</td>
 <td>
 <?= $harga; ?>
 </td>
 </tr>
 
 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('Sepatu');?>">Kembali</a>
 </td>
 </tr>
 </table>
 </center>
</body>
</html>