<html>

<head>
    <title>PHP Starter</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php 
        include_once 'partials/nav.php';
    ?>
    <h1>PHP Starter in CodeSandbox</h1>
    <div>
        <a href="learnphp.php" class="btn btn-primary">Go to LearnPHP</a>
    </div>
    <hr>
    <div id="javascripttext"></div>
    <hr>
    <div>
        <?php $food = 'baked beans';?>
        <?php if ($food == 'apples'):?>
            <p>Food is <?php echo($food)?>.</p>
        <?php elseif ($food == 'pancakes'):?>
            <p>Food is <?php echo($food)?>.</p>
        <?php elseif ($food == 'coconuts'):?>
            <p>Food is <?php echo($food)?>.</p>
        <?php else:?>
            <p>Food is not any of those. Food is <?php echo($food)?>.</p>
        <?php endif?>
    </div>
    <?php 
    include_once 'learnphp.php';
    ?>
</body>
<script src="learnphp.js"></script>
</html>