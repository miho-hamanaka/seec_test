<?php
    //フォーマットの読み込み
    $title_num = 2;
    require_once '../common/layout.php';
    echo $head;
    require_once '../common/question.php';

    //▼ここから答えのプログラム▼
    function calculation($num1,$num2) {
        $applePrice = 150;
        $orangePrice = 80;
        return $applePrice * $num1 + $orangePrice * $num2.'円';
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && 
    isset($_POST['apple'])&& 
    isset($_POST['orange'])) {//入力値セットされた時

        $appleNum = mb_convert_kana($_REQUEST['apple'], 'n','UTF-8');//全角は半角に
        //$appleNum = $_POST['apple'];
        $orangeNum = mb_convert_kana($_REQUEST['orange'], 'n','UTF-8');
        //$orangeNum = $_POST['orange'];
        
        if(is_numeric($appleNum) && is_numeric($orangeNum)) {//半角数字の時だけ
            //$total = $applePrice * $appleNum + $orangePrice * $orangeNum.'円';
            $total = calculation($appleNum,$orangeNum);
        }
        else {
            $total = '数値が未入力です';//半角数字ではない時
        }

    } else {
        $total = '0円';//初期値
    }
?>


<body>
    <div id="layout">
        <p><?php echo $title; ?></p>
        <?php echo $question2; ?>

        <!-- ▼ここから答えの記述▼ -->
        <p>りんごは1つ150円、みかんは1つ80円です。個数を入力してください<br>
        ※半角数字で入力してください。</p>
        <form action="" method="post">
            りんご<input type="text" name="apple" style="width:40px;">個
            みかん<input type="text" name="orange" style="width:40px;">個　
            <input type="submit" value="計算">        
        </form>
        <div style="text-decoration:underline;">
        <br>
        <p>合計: <?php echo $total; ?></p>
        </div>
    </div>
</body>
</html>