<?php
    //フォーマットの読み込み
    $title_num = 3;
    require_once '../common/layout.php';
    echo $head;
    require_once '../common/question.php';
    //▼ここから答えのプログラム▼
    $animals = ['ねこ', 'いぬ', 'さる', 'うま'];
    $fishes = ['さんま', 'まぐろ', 'たい'];

    $animalCount = count($animals);
    $fishCount = count($fishes);
    
?>


<body>
    <div id="layout">
    <p><?php echo $title; ?></p>
    <?php echo $question3; ?>    
    <!-- ▼ここから答えの記述▼ -->

    <p>動物カテゴリの要素数:<?php echo $animalCount; ?></p>
    <p>
        <span>動物カテゴリには、</span>
        <?php for ($i=0; $i < count($animals); $i++) : ?>
            <span><?php echo $animals[$i]. '、'; ?></span>
        <?php endfor; ?>
        <span>が入っています。</span>
    </p>

    <p>魚カテゴリの要素数:<?php echo $fishCount; ?></p>
    <p>
        <span>魚カテゴリには、</span>
        <?php foreach ($fishes as $fish) : ?>
            <span><?php echo $fish. '、'; ?></span>
        <?php endforeach; ?>
        <span>が入っています。</span>
    </p>

    </div>

</body>
</html>