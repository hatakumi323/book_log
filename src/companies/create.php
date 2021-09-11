<?php

require_once __DIR__ . '/lib/mysqli.php';

function createCompany($link, $company)
{
  $sql = <<<EOT
  INSERT INTO companies(
    name,
    establishment_date,
    founder
  ) VALUES (
    "{$company['name']}",
    "{$company['establishment_date']}",
    "{$company['founder']}"
  )
EOT;
  $result = mysqli_query($link, $sql);
  if (!$result) {
    error_log('Error: fail to create company');
    error_log('Debugging Error: ' . mysqli_error($link));
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $company = [
    'name' => $_POST['name'],
    'establishment_date' => $_POST['establishment_date'],
    'founder' => $_POST['founder'],
  ];
  // バリデーションする
  // エラーがなければ
  $link = dbConnect();
  createCompany($link, $company);
  mysqli_close($link);
  // もしエラーがあれば
}

header("Location: index.php");
