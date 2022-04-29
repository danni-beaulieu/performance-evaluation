<!DOCTYPE html>
<html lang="en">
	
<head>
    <!--[if lt IE 9]>
        <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<title>Basic Test</title>
</head>

<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET">
    <p>Hello World!</p>
</form>

<?php
    $mynum = 3;
    for ($i = 0; $i < 100; $i = $i+1) {
        $mynum = $mynum * 3;
        echo $mynum;
    }
?>
</body>
</html>