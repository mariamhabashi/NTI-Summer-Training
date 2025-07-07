<?php
$grades=[85,90,76,88,92,67,74,81,95,79];
        $total=0;
        $count=0;
        $i=0;
        while($i<count($grades)){
            $total+=$grades[$i];
            $count++;
            $i++;
        }
        $average=$total/$count;
        echo "Total number of students is $count and the total of grades is $total";
        echo "<br>";
        echo "Average of gradesis $average";

?>