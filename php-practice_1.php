<?php
// Q1 変数と文字列
$name = '臼澤';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num;

$num /=2;
echo $num;

// Q3 日付操作
echo '現在時刻は、' . date('Y-m-d H:i:s') . 'です。';

// Q4 条件分岐-1 if文
$device = 'abcde';

if ($device === 'windows' || $device === 'mac') {
  echo "使用OSは、{$device}です。";
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 24;
$message = ($age < 18) ? '未成年です。' : '成人です。';
echo $message;

// Q6 配列
$kanto = ['東京都', '茨城県', '栃木県', '千葉県', '群馬県', '埼玉県', '神奈川県'];
echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$kanto = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' =>'水戸市'];

foreach ($kanto as $capital) {
  echo $capital . "\n";
}

// Q8 連想配列-2
foreach ($kanto as $prefecture => $capital) {
  if ($prefecture === '埼玉県'){
    echo $prefecture . 'の県庁所在地は、' . $capital . 'です。';
  }
}

// Q9 連想配列-3
$kanto[] = ['大阪府' => '大阪市', '愛知県' => '名古屋市'];
$kanto_area = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];

foreach ($kanto as $prefecture => $capital) {
  if (in_array($prefecture, $kanto_area)) {
    echo $prefecture . "の県庁所在地は、" . $capital . "です。\n";
  } else {
    echo $prefecture . "は関東地方ではありません。\n";
  }
}

// Q10 関数-1
function hello($name)
{
  return $name . 'さん、こんにちは。';
}
echo hello('金谷');
echo hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
  return $price * 1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . 'の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($num)
{
  if ($num % 2 === 0) {
    return $num . 'は偶数です。';
  } else {
    return $num . 'は奇数です。';
  }
}
echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($level)
{
  switch($level) {
    case 'A':
    case 'B':
      return '合格です。';
      break;

    case 'C':
      return '合格ですが追加課題があります。';
      break;

    case 'D':
      return '不合格です。';
      break;

    default:
      return '判定不明です。講師に問い合わせください。';
      break;

  }
}

echo evaluateGrade('A');
echo evaluateGrade('E');

?>