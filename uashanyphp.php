<html>
<body bgcolor="#00FFFF">
<?php
echo"<b>PENDAFTARAN PELANGGAN BARU</b><br>";
?>
<form action="link.php"method="post">
<pre>
<?php
echo"<b>Data Pribadi</b><br>";
?>
Name           :<input type="text"name="name"/>
Jenis Kelamin  :<input type="radio"name="LP" Value="Pria">Pria<input type="radio"name="LP" value="Wanita">Wanita
Email          :<input type="text"name="mail"/>

<?php
echo"<b>Data Alamat Pengiriman</b><br>";
?>
Nama Negara    :<input type="text"name="negara"/>
Kota           :<input type="text"name="kota"/>
Alamat         :<input type="text"name="address"/>
Kode Post      :<input type="text"name="kode"/>

<?php
echo"<b>Data No Kontak</b><br>";
?>
No.Telepon     :<input type="text"name="telf"/>
No.Handphone   :<input type="text"name="no"/>
No.Faksimili   :<input type="text"name="fax"/>

     <input type="submit"/name="send"value="Send"/><input type="submit"/name="Reset"value="Reset"/>
</form>
<form action="uashanyphp.php">
</pre>
</form>
</body>
</html>