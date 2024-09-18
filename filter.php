<?php
$data = array(
    array("cat" => 'nature', "title" => "The beauty of nature"),
    array("cat" => 'edu', "title" => "Knowledge is power"),
    array("cat" => 'tech', "title" => "AI is changing the world"),
    array("cat" => 'edu', "title" => "Learning never stops"),
    array("cat" => 'nature', "title" => "Into the green"),
    array("cat" => 'tech', "title" => "Innovation at its finest"),
    array("cat" => 'sports', "title" => "Sport is energy"),
    array("cat" => 'nature', "title" => "Nature loves us"),
    array("cat" => 'tech', "title" => "Tech is the future"),
    array("cat" => 'edu', "title" => "Education is key"),
    array("cat" => 'nature', "title" => "Explore the wild"),
    array("cat" => 'tech', "title" => "The rise of technology"),
    array("cat" => 'nature', "title" => "Nature is healing"),
    array("cat" => 'edu', "title" => "Let edu come here"),
    array("cat" => 'tech', "title" => "Welcome to the digital age"),
    array("cat" => 'nature', "title" => "Into the wild forest"),
    array("cat" => 'edu', "title" => "The path to knowledge"),
    array("cat" => 'tech', "title" => "Digital transformation"),
    array("cat" => 'edu', "title" => "The future of education"),
    array("cat" => 'tech', "title" => "Tech innovations changing lives")
);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rowData = json_decode(file_get_contents('php://input'), true);
    $filter = $rowData['filter'];
    $filteredData = array_filter($data, function ($arr) use ($filter) {
        return $arr['cat'] == $filter;
    });
    $res = array_values($filteredData);
    echo json_encode(count($res) > 0 ? $res : "No data found");
}
