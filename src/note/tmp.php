<?php

function createReview()
{
  echo '今日のタスクを教えてください。' . PHP_EOL;
  echo 'タイトル：';
  $title = trim(fgets(STDIN));
  echo '内容：';
  $contents = trim(fgets(STDIN));

  echo '登録が完了しました。' . PHP_EOL . PHP_EOL;

  return [
    'title' => $title,
    'contents' => $contents,
  ];
}

function listReview($reviews)
{
  echo 'タスクを表示します' . PHP_EOL;
  foreach ($reviews as $review) {
    echo 'タイトル：' . $review['title'] . PHP_EOL;
    echo '内容：' . $review['contents'] . PHP_EOL;
    echo '-------------' . PHP_EOL;
  }
}

$reviews = [];

while (true) {
  echo '1 . タスクを入力' . PHP_EOL;
  echo '2 . タスクを表示' . PHP_EOL;
  echo '9 . アプリケーションを終了' . PHP_EOL;
  echo '番号を選択してください（1,2,9）';
  $num = trim(fgets(STDIN));

  if ($num === '1') {
    $reviews[] = CreateReview();
  } else if ($num === '2') {
    listReview($reviews);
  } else if ($num === '9') {
    break;
  }
}


// echo 'タスクを表示します。' . PHP_EOL;
// echo 'タイトル：' . trim($title) . PHP_EOL;
// echo '内容：' . trim($contents) . PHP_EOL;
// echo $today;

// echo 'タイトル：今日のタスク' . PHP_EOL;
// echo '日付：0000/00/00' . PHP_EOL;
// echo '内容：テストです。' . PHP_EOL;
