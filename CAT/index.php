<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
    <title>Cell Details</title>
</head>

<body>
    <div class="page" align="center">
        <h2> <b>Cell Details</b> </h2>
        <table id="data" align="center">
            <?php

            define('HOST', 'localhost');
            define('USER', 'root');
            define('PASSWORD', '');
            define('DATABASE', 'rwanda');

            $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

            if (!$connection) {
                echo "unable to connect to database";
            } else {
                $query = mysqli_query($connection, "SELECT p.provinceName, d.districtName, s.sectorName, c.cellId, c.cellName, 
            count(v.villageId) from ((districts d inner join provinces p on p.provinceId=d.provinceId) inner join
            sectors s on s.districtId=d.districtId inner join cells c on c.sectorId=s.sectorId inner join villages v on
             v.cellId = c.cellId) GROUP BY c.cellName ORDER BY c.cellName;");

                echo "
                    <tr>
                    <th>Province</th>
                      <th>District</th>
                      <th>Sector</th>
                      <th>CellId</th>
                      <th>Cell</th>
                      <th>NumberOfVillages</th>
                    </tr>";

                while ($row = mysqli_fetch_array($query)) {

                    echo "<tr>";
                    echo "<td>" . $row['provinceName'] . "</td>";
                    echo "<td>" . $row['districtName'] . "</td>";
                    echo "<td>" . $row['sectorName'] . "</td>";
                    echo "<td>" . $row['cellId'] . "</td>";
                    echo "<td>" . $row['cellName'] . "</td>";
                    echo "<td>" . $row['count(v.villageId)'] . "</td>";
                    echo "</tr>";
                }
            }

            ?>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#data').after('<div id="nav"></div>');
            var rowsShown = 25;
            var rowsTotal = $('#data tbody tr').length;
            var numPages = rowsTotal / rowsShown;
            for (i = 0; i < numPages; i++) {
                var pageNum = i + 1;
                $('#nav').append('<a href="#" rel="' + i + '">' + pageNum + '</a> ');
            }
            $('#data tbody tr').hide();
            $('#data tbody tr').slice(0, rowsShown).show();
            $('#nav a:first').addClass('active');
            $('#nav a').bind('click', function() {
                $('#nav a').removeClass('active');
                $(this).addClass('active');
                var currPage = $(this).attr('rel');
                var startItem = currPage * rowsShown;
                var endItem = startItem + rowsShown;
                $('#data tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
                css('display', 'table-row').animate({
                    opacity: 1
                }, 300);
            });
        });
    </script>
</body>

</html>