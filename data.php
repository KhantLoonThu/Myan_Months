<?php

function getData()
{
    // 1. Firstly get the data from json file
    $json_data = file_get_contents('MyanmarMonths.json');
    // 2. after getting the data, I can change that data (json to array (associative))
    // using json_decode funtion.
    $data = json_decode($json_data, true);
    return $data['Tbl_Months'];
}

// echo "<pre>";
// print_r(getData());
// echo "</pre>";

?>
<?php ?>