// api/books.js
export default function handler(req, res) {
  const books = [
    [5, 1, '历史, 架空历史', 7.2, 180, '《明》', 1296800, '酒徒', 'https://qidian.qpic.cn/qdbimg/349573/5647/300', '2004-12-23T16:00:00.000Z', 0],
    [21, 1, '历史, 两晋隋唐', 5.6, 33, '逆隋', 1544900, '老茅', 'https://qidian.qpic.cn/qdbimg/349573/183614/300', '2009-04-16T16:00:00.000Z', 0],
    [22, 1, '历史, 两宋元明', 6.6, 166, '顺明', 2659800, '特别白', 'https://qidian.qpic.cn/qdbimg/349573/1084150/300', '2009-12-06T16:00:00.000Z', 0],
  ];

  res.status(200).json(books);
}
