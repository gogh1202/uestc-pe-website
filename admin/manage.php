<html>
<head>
	<title>提交成功</title>
</head>
<?
	header("Content-Type:text/html;charset=UTF-8");
	include("./../lib/connect.php");

	function write_database($title, $content, $author, $classid) {
		$query = "INSERT INTO `article`
					(title, content, author, classid, dateandtime)
				  VALUES
					('{$title}', '{$content}','{$author}','{$classid}', now()) ";
		return mysql_query($query);
	}
	$id = write_database($_GET['title'], $_GET['content'], $_GET['author'], $_GET['class']);
?>
<body>
	<h3>提交成功! 标题: <?=$_GET['title']?> 作者: <?=$_GET['author']?></h3>
	<hr>
	<?= $_GET['content'] ?>
	<hr>
	<?= $id ?>
</body>
</html>