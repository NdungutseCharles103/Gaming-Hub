<?php

    include "web/Namespace.php";
    include "tools/Table.php";
    
    use funiture\Table as FunTable;
    use Html\Table as HtmlTable;
    
    $table = new HtmlTable("new table", 34);
    $table->message();

    $table1 = new FunTable("fun table", 34, "NTvet");
    $table1->message();

?>