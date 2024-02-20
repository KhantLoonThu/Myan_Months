<?php

// function getData()
// {
//     // 1. Firstly get the data from json file
//     $json_data = file_get_contents('MyanmarMonths.json');
//     // 2. after getting the data, I can change that data (json to array (associative))
//     // using json_decode funtion.
//     $data = json_decode($json_data, true);
//     return $data['Tbl_Months'];
// }

## Change to OOP 

class GetData
{
    private $json_data;
    function __construct($json_name)
    {
        $this->json_data = file_get_contents($json_name);
    }
    function getData()
    {
        $json_array = json_decode($this->json_data, true);
        return $json_array['Tbl_Months'];
    }
}

$months = new GetData("MyanmarMonths.json");

// echo "<pre>";
// print_r($months->getData());
// echo "</pre>";

?>
<?php ?>