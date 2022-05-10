<html>

<body>
    <center>
        <h2>Read Excel By PHPExcel</h2>
        <?php
        require_once "Classes/PHPExcel.php";
        $path = "books.xlsx";
        $reader = PHPExcel_IOFactory::createReaderForFile($path);
        $excel_Obj = $reader->load($path);

        //Get the last sheet in excel
        //$worksheet=$excel_Obj->getActiveSheet();

        //Get the first sheet in excel
        $worksheet = $excel_Obj->getSheet('0');
        echo $worksheet->getCell('E33')->getValue();
        $lastRow = $worksheet->getHighestRow();
        $colomncount = $worksheet->getHighestDataColumn();
        $colomncount_number = PHPExcel_Cell::columnIndexFromString($colomncount);
        echo $lastRow . '     ';
        echo $colomncount;
        echo "<table border='1'>";
        for ($row = 0; $row <= $lastRow; $row++) {
            echo "<tr>";
            for ($col = 0; $col <= $colomncount_number; $col++) {
                echo "<td>";
                echo $worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col) . $row)->getValue();
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </center>
</body>

</html>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
<html>

<body>
    <center>
        <h2>Read Excel By PHPExcel</h2>
        <?php
        require_once "Classes/PHPExcel.php";
        $path = "test1.xlsx";
        $reader = PHPExcel_IOFactory::createReaderForFile($path);
        $excel_Obj = $reader->load($path);

        //Get the last sheet in excel
        //$worksheet=$excel_Obj->getActiveSheet();

        //Get the first sheet in excel
        $worksheet = $excel_Obj->getSheet('0');
        echo $worksheet->getCell('E33')->getValue();
        $lastRow = $worksheet->getHighestRow();
        $colomncount = $worksheet->getHighestDataColumn();
        $colomncount_number = PHPExcel_Cell::columnIndexFromString($colomncount);
        echo $lastRow . '     ';
        echo $colomncount;
        echo "<table border='1'>";
        for ($row = 0; $row <= $lastRow; $row++) {
            echo "<tr>";
            for ($col = 0; $col <= $colomncount_number; $col++) {
                echo "<td>";
                echo $worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col) . $row)->getValue();
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </center>
</body>

</html>