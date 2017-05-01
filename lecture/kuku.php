<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    td{
      text-align: right;
    }
  </style>
</head>
<body>
  <table>
    <?php for ($i = 1; $i < 10; $i++){ ?>
    <tr>
      <?php for ($j = 1; $j < 10; $j++){ ?>
      <td><?php print $i*$j; ?></td>
      <?php } ?>
    </tr>
    <?php } ?>
  </table>
  <?php
  print "<table>";

  for ($i = 1; $i < 10; $i++){
    print "<tr>";
    for($j = 1; $j < 10; $j++){
      print "<td>";
      print $i*$j;
      print "</td>";
    }
    print "</tr>";
  }

  print "</table>";
  ?>
</body>
</html>
