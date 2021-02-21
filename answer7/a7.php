<?php
    //フォーマットの読み込み
    $title_num = 7;
    require_once '../common/layout.php';
    echo $head;
    require_once '../common/question.php';
    
    //▼ここから答えのプログラム▼

    date_default_timezone_set("Asia/Tokyo");
    $timestamp = time();

    $dataFile = 'test.txt';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && 
    isset($_POST['message'])) {

        $message = trim($_POST['message']);

        if ($message !== ''){
            $message = str_replace("\t", '', $message); //タブが入力されたら空白にする
            $postedAt = date('Y-m-d');
            $newData = $message . "\t" . $postedAt . "\n";

            $fp = fopen($dataFile, 'a');
            fwrite($fp, $newData);
            fclose($fp);
        }
    }

    // 投稿の表示
    $posts = file($dataFile, FILE_IGNORE_NEW_LINES);
    $posts = array_reverse($posts);

?>


<body>
    <div id="layout">
    <p><?php echo $title; ?></p>
    <?php echo $question7; ?>    
    <!-- ▼ここから答えの記述▼ -->

    <h1>簡易掲示板</h1>
    <form action="" method="post">
        投稿文: <input type="text" name="message">
        <input type="submit" value="投稿">
    </form>

    <!-- 入力文字を表示できるようにしています -->
    <h2>投稿一覧(<?php echo count($posts) ?>件)</h2>
        <ul>
            <?php if (count($posts)) :?>
                <?php foreach ($posts as $post) :?>
                <?php list($message, $postedAt) = explode("\t", $post); ?>
                    <li><?php echo htmlspecialchars($message)?> - <?php echo htmlspecialchars($postedAt); ?></li>
                <?php endforeach; ?>
            <?php else :?>
                <li>まだ投稿はありません</li>
            <?php endif; ?>
        </ul>

    </div>
</body>
</html>