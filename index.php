<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/config.js" type="text/javascript"></script>

  <title>TES TELKOM</title>
</head>

<body>
  <table cellpadding="8">
    <tr>
      <td><b>WITEL</b></td>
      <td><b>DATEL</b></td>
      <td><b>VIEW</b></td>
    </tr>

    <td>
      <select name="provinsi" id="provinsi" style="width: 200px;">
        <option value="">ALL</option>

        <?php
        include "koneksi.php";


        $sql = $pdo->prepare("SELECT provinsi FROM tbl_provinsi ORDER BY provinsi");
        $sql->execute();

        while ($data = $sql->fetch()) {
          echo "<option value='" . $data['provinsi_id'] . "'>" . $data['provinsi'] . "</option>";
        }
        ?>
      </select>
    </td>

    <td>
      <select name="kota" id="kota" style="width: 200px;">
        <option value="">ALL</option>
        <?php


        $sql = $pdo->prepare("SELECT kota FROM tbl_kota ORDER BY kota");
        $sql->execute();

        while ($data = $sql->fetch()) {
          echo "<option value='" . $data['kota_id'] . "'>" . $data['kota'] . "</option>";
        }
        ?>

      </select>
    </td>

    <td>
      <select name="data" id="data" style="width: 200px;">
        <option value="">ALL</option>

        <?php


        $sql = $pdo->prepare("SELECT distinct (STATUS) FROM data ORDER BY STATUS");
        $sql->execute();

        while ($data = $sql->fetch()) {
          echo "<option value='" . $data['wilayah'] . "'>" . $data['STATUS'] . "</option>";
        }
        ?>
      </select>
    </td>

    <td>
      <form name="filter" method="POST" action="overzicht.php"></b>
        <input type="submit" name="submit" value="Filter">
      </form>
    </td>
  </table>
  <table border="1px" cellpadding="5" cellspacing="5">
    <thead>
      <tr>
        <th rowspan="2">LOKASI</th>
        <th bgcolor="#FF0000" colspan="3">HARI INI</th>
        <th bgcolor="#00FF00" colspan="3">BULAN 09</th>
        <th bgcolor="##87CEFA" colspan="3">TAHUN 2019</th>
      </tr>
      <tr>
        <th bgcolor="#FF0000">T</th>
        <th bgcolor="#FF0000">R</th>
        <th bgcolor="#FF0000">A</th>
        <th bgcolor="#00FF00">T</th>
        <th bgcolor="#00FF00">R</th>
        <th bgcolor="#00FF00">A</th>
        <th bgcolor="##87CEFA">T</th>
        <th bgcolor="##87CEFA">R</th>
        <th bgcolor="##87CEFA">A</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>BALIKPAPAN </td>
        <td>103</td>
        <td>2</td>
        <td>2%</td>
        <td>2472</td>
        <td>1760</td>
        <td>71%</td>
        <td>32802</td>
        <td>20658</td>
        <td>63%</td>
      </tr>
      <tr>
        <td>KALBAR </td>
        <td>204</td>
        <td>3</td>
        <td>1%</td>
        <td>4896</td>
        <td>3498</td>
        <td>71%</td>
        <td>50277</td>
        <td>36093</td>
        <td>72%</td>
      </tr>
      <tr>
        <td>KALSEL </td>
        <td>188</td>
        <td>1</td>
        <td>1%</td>
        <td>4512</td>
        <td>3273</td>
        <td>73%</td>
        <td>47955</td>
        <td>33236</td>
        <td>70%</td>
      </tr>
      <tr>
        <td>KALTARA </td>
        <td>204</td>
        <td>3</td>
        <td>1%</td>
        <td>4896</td>
        <td>3498</td>
        <td>71%</td>
        <td>50277</td>
        <td>36093</td>
        <td>72%</td>
      </tr>
      <tr>
        <td>KALBAR </td>
        <td>204</td>
        <td>3</td>
        <td>1%</td>
        <td>4896</td>
        <td>3498</td>
        <td>71%</td>
        <td>50277</td>
        <td>36093</td>
        <td>72%</td>
      </tr>
      <tr>
        <td>KALBAR </td>
        <td>204</td>
        <td>3</td>
        <td>1%</td>
        <td>4896</td>
        <td>3498</td>
        <td>71%</td>
        <td>50277</td>
        <td>36093</td>
        <td>72%</td>
      </tr>
    </tbody>
  </table>

</html>