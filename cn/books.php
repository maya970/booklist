<?php
// 读取书籍数据并将其输出为 JSON 格式
$books = [
    [5, 1, '历史, 架空历史', 7.2, 180, '《明》', 1296800, '酒徒', 'https://qidian.qpic.cn/qdbimg/349573/5647/300', '2004-12-23T16:00:00.000Z', 0],
    [21, 1, '历史, 两晋隋唐', 5.6, 33, '逆隋', 1544900, '老茅', 'https://qidian.qpic.cn/qdbimg/349573/183614/300', '2009-04-16T16:00:00.000Z', 0],
    [22, 1, '历史, 两宋元明', 6.6, 166, '顺明', 2659800, '特别白', 'https://qidian.qpic.cn/qdbimg/349573/1084150/300', '2009-12-06T16:00:00.000Z', 0],
];

// 只返回前端需要的数据结构
$response = [];
foreach ($books as $book) {
    $response[] = [
        'id' => $book[0],
        'category' => $book[2],
        'rating' => $book[3],
        'wordCount' => $book[4],
        'title' => $book[5],
        'author' => $book[7],
        'image' => $book[8],
        'publishDate' => $book[9],
    ];
}

// 将书籍信息输出为 JSON 格式
header('Content-Type: application/json');
echo json_encode($response);
?>
