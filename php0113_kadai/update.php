<?php
//1. POSTデータ取得
$name   = $_POST['name'];
$email  = $_POST['email'];
$naiyou = $_POST['naiyou'];
$age    = $_POST['age'];
$id     = $_POST['id'];

// https://www.youtube.com/watch?v=JaRq73y5MJk&t=404s

if (isset($_POST['submit'])){
    // ファイルを呼び出すための変数↓　
    // detail.phpのinput typeのnameがfileのため、'file'と指定
$file=$_FILES['file'];
print_r($file);
// 写真の名前・ファイル・サイズなど抽出するための変数↓
$fileName=$file['file']['name'];
$fileTmpName=$file['file']['tmp_name'];
// tmp_name→一時的に保存する場所
$fileSize=$file['file']['size'];
$fileError=$file['file']['error'];
$fileType=$file['file']['type'];


// 日本人youtube↓　https://www.youtube.com/watch?v=NFHzcnBXUwg&t=411s
// キャプションを取得
// $caption = filter_input(INPUT_POST, 'caption', FILTER_SANITIZE_SPECIAL_CHARS);
// FILTER_SANITIZE_SPECIAL_CHARS→サニタイズ（セキュリティ上あったほうがいい）


if($fileSize < 1000000|| $fileError == 2){
// ファイルサイズが大きすぎると2と返ってくる↑
echo'ファイルサイズは1MB未満にしてください';
}

// 許容したい拡張子
$allow_ext = array('jpg', 'jpeg', 'png', 'pdf');
$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
// pathinfoで拡張子が取得できる↑

// 拡張子が上の配列の中にあったらOK,なかったらNG
// $allow_ext(第二引数)の中に　$file_ext(第一引数)のものがあったらtrue
if(!in_array(strtolower($file_ext),$allow_ext)){
// strtolower→大文字JPEGとかを小文字jpegに直してくれる
echo '画像ファイルを添付してください'
}



$fileExt=explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

// JPEGのみを許可する。　ext拡張子を呼び出す変数を作成↓
// $allowed = array('jpg', 'jpeg', 'png', 'pdf');
// if(in_array($fileActualExt, $allowed)){
//     if($fileError === 0){
//         if($fileSize < 1000000){
//             $fileNameNew = uniqid('', true).".".$fileActualExt;
//             $fileDestination = 'uploads/'.$fileNameNew;
//             // アップロードしたい実際の場所（$fileDestination）を指定↓
//             move_uploaded_file($fileTmpName, $fileDestination);
//             header("Location: select.php?uploadsuccess");

//         }else{
//             "ファイルが大きすぎます";
//         }
//     }

// }else{
//     echo "アップロードにエラーが発生しました";
// }

// }
//2. DB接続します
session_start();
require_once('funcs.php');
loginCheck();
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE gs_an_table SET name=:name,email=:email,age=:age,naiyou=:naiyou WHERE id=:id;');
$stmt->bindValue(':name',   $name,   PDO::PARAM_STR);
$stmt->bindValue(':email',  $email,  PDO::PARAM_STR);
$stmt->bindValue(':age',    $age,    PDO::PARAM_INT);
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    // redirect('select.php');
}
