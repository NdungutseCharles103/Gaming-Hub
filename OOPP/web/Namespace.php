<?php
    namespace Html;
    class Table{
        public $title="";
        public $numRows=0;

        public function message(){
            echo "<p>Table {$this->title} has {$this->numRows} rows.</p>";
        }
        function __construct($title, $numRows)
        {
            $this->title = $title;
            $this->numRows = $numRows;
        }
    }
    $table = new Table("My Table",5);
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $table->message();
    ?>
</body>
</html>