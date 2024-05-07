<html>
<head>
 <title>Form Pembelian Sepatu</title>
</head>
<body>
 <center>
 <form action="<?= base_url('Sepatu/cetak'); ?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Pembelian Sepatu
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>


 <tr>
 <th>Nama Pembeli: </th>
 <td>:</td>
 <td>
 <input type="text" name="nama" id="nama" placeholder="Required">
 <div class="col-sm-6 col-danger">
    <?= form_error("nama"); ?>
 </div>
 </td>
 </tr>

 <tr>
 <th>Merek</th>
 <td>:</td>
 <td>
 <select name="merek" id="merek">
 <option value="">Pilih Merek</option>
 <option value="Nike">Nike = 375000</option>
 <option value="Adidas">Adidas = 300000</option>
 <option value="Kickers">Kickers = 250000</option>
 <option value="Eiger">Eiger = 275000</option>
 <option value="Bucherri">bucherri = 400000</option>
 </select>
 </td>
 </tr>

 <tr>
 <th>Ukuran</th>
 <td>:</td>
 <td>
 <select name="ukuran" id="ukuran">
 <option value="">Pilih Ukuran</option>
 <option value="32">32</option>
 <option value="33">33</option>
 <option value="34">34</option>
 <option value="35">35</option>
 <option value="36">36</option>
 <option value="37">37</option>
 <option value="38">38</option>
 <option value="39">39</option>
 <option value="40">40</option>
 <option value="41">41</option>
 <option value="42">42</option>
 <option value="43">43</option>
 <option value="44">44</option>
 </select>
 </td>
 </tr>

 <tr>
 <td colspan="3" align="center">
 <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html>