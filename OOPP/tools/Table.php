<?php

    namespace funiture;

    class Table{
        protected $type;
        protected $cost;
        protected $supplier;

        public function message(){
            echo "<p> Table {$this->type} cost {$this->cost} and supplier is {$this->supplier}</p>";
        }

        function __construct($type, $cost, $supplier)
        {
            $this->type = $type;
            $this->cost = $cost;
            $this->supplier = $supplier;
        }
    }

    $table = new Table("wood", "100", "RCA");
    $table->message();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $table->message();
    ?>
</body>
</html>