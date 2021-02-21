<?php
    //フォーマットの読み込み
    $title_num = 10;
    require_once '../common/layout.php';
    echo $head;
    require_once '../common/question.php';
    //▼ここから答えのプログラム▼


?>


<body>
    <div id="layout">
    <p><?php echo $title; ?></p>
    <?php echo $question10; ?>    
    <!-- ▼ここから答えの記述▼ -->

    <p>未回答</p>

    </div>

</body>
</html>