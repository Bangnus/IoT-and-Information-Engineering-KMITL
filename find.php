<?php
$data = json_decode(file_get_contents('iot_dataset_gemini-2.5-flash_5000_real.json'), true);
$keywords = ['เทอม', 'รับสมัคร', 'สอน', 'จบ', 'ทำงาน', 'งาน', 'ยาก', 'พอร์ต', 'สัมภาษณ์', 'สองปริญญา', '2 ปริญญา', 'อุปกรณ์', 'คอมพิวเตอร์', 'หลักสูตร', 'IoT'];

$results = [];
foreach ($data as $item) {
    if (!isset($item['input']))
        continue;
    $q = $item['input'];
    foreach ($keywords as $k) {
        if (mb_strpos($q, $k) !== false) {
            $results[$k][] = $q;
        }
    }
}

$final = [];
foreach ($keywords as $k) {
    $count = 0;
    foreach (array_unique($results[$k] ?? []) as $q) {
        if (mb_strlen($q) < 80) { // get reasonably short questions
            $final[$k][] = $q;
            $count++;
        }
        if ($count >= 5)
            break;
    }
}
file_put_contents('found.txt', print_r($final, true));
echo "OK";
