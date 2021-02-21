<?php
    //フォーマットの読み込み
    $title_num = 1;
    require_once '../common/layout.php';
    echo $head;
    require_once '../common/question.php';

    //▼ここから答えのプログラム▼
    date_default_timezone_set('Asia/Tokyo');
    $timestamp = time();

    $today = date('Y年n月d日');

    $week = ['日', '月', '火', '水', '木', '金', '土'];
    $date = date('w');

    $time = date('H時i分')
?>


<body>
    <div id="layout">
    <p><?php echo $title; ?></p>
    <?php echo $question1; ?>

    <!-- ▼ここから答えの記述▼ -->
    <p><?php echo $today; ?>(<?php echo $week[$date]; ?>) <?php echo $time; ?></p>

    </div>

</body>
</html>