
<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo "tic_tac\n";
  } elseif ($i % 4 === 0) {
    echo "tic\n";
  } elseif ($i % 5 === 0) {
    echo "tac\n";
  }else{
    echo $i . "\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel' => '09011112222'
      ],
    [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel' => '08033334444'
    ],
    [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
    ],
];
var_dump($personalInfos);

//　問題１
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

// 問題２
foreach ($personalInfos as $index => $personalInfo) {
  echo $index + 1 . '番目の' . $personalInfo['name'] . 'のメールアドレスは' . $personalInfo['mail'] . 'で、電話番号は' . $personalInfo['tel'] . "です。\n";
}

//問題３
$ageList = [25, 30, 18];
foreach ($personalInfos as $index => $personalInfo) {
  $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
      $this->studentId = $id;
      $this->studentName = $name;
    }

    public function attend($subject)
    {
      echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号:{$this->studentId}";
    }
}

$student = new Student(10, '臼澤');
echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";

// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');



// Q5 定義済みクラス
// 問題１
$date = new DateTime();
$date->modify('-1month');
echo $date->format('Y-m-d');

// 問題２
$today = new DateTime();
$birthday = new DateTime('1992-04-25');
$diff = $today ->diff($birthday);
echo "あの日から{$diff->days}日経過しました。";

?>