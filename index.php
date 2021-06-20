<?php
	include_once "list.php";
	$id = $_GET["p"];
	if (isset($id) == "") {
		$id = "top";
	} else {
		if (!file_exists("page/".$id.".html")) {
			$id = "top";
		}
		$title = $list[$id];
	}
	$main = file_get_contents("page/".$id.".html");
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<title><?php
		if (isset($title) == "") {
			echo "学情チャン 公式ウェブサイト";
		} else {
			echo "".$title." - 学情チャン 公式ウェブサイト";
		}
		?></title>
		<meta charset="utf-8">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slick-theme.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1">
		<meta name="description" content="学情チャンは、全国の大学が抱えてる学生さん向けポータルサイトをイメージして生まれたキャラクターだよ!">
		<meta name="twitter:card" content="summary">
		<meta property="og:title" content="<?php
		if (isset($title) == "") {
			echo "学情チャン 公式ウェブサイト";
		} else {
			echo "".$title." - 学情チャン 公式ウェブサイト";
		}
		?>">
		<meta property="og:description" content="学情チャンは、全国の大学が抱えてる学生さん向けポータルサイトをイメージして生まれたキャラクターだよ!">
		<meta property="og:image" content="https://gakujochan.com/img/cards.png">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-left">
				<a href="index.php"><img src="img/logo.png"></a>
			</div>
			<div class="navbar-right">
				<ul>
					<a href="index.php"><li>ホーム</li></a>
					<a href="index.php?p=reference"><li>資料集</li></a>
					<a href="index.php?p=rules"><li>学情チャンとのお約束</li></a>
					<a href="index.php?p=contest"><li>コンテスト</li></a>
				</ul>
			</div>
		</div>
		<div class="header">
			<div class="slider">
				<div><img src="img/slideshow/slide_top.png"></div>
				<a href="index.php?p=rules"><div><img src="img/slideshow/promises.png"></div></a>
				<a href="index.php?p=contest#illustcon_1"><div><img src="img/slideshow/illustcon_1_result.png"></div></a>
				<a href="index.php?p=contest#r18con_1"><div><img src="img/slideshow/r18con_1.png"></div></a>
			</div>
		</div>
		<div class="wrapper">
			<div class="wrapper-columns">
				<div class="wrapper-columns-right">
					<?php echo $main ?>
				</div>
				<div class="wrapper-columns-left">
					<div class="wrapper-columns-twitter">
						<a class="twitter-timeline" data-lang="ja" data-height="500" href="https://twitter.com/Gakuzyo_chan?ref_src=twsrc%5Etfw">Tweets by Gakuzyo_chan</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
					<p>
						<a href="https://twitter.com/Gakuzyo18Kin" target="blank">R18のTwitterは…///こっち…///</a>
					</p><br>
					<p>このページを宣伝してね！</p>
					<p><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="wrapper">
				<p>
					注意：このウェブサイトは学務情報システムに関連する大学・企業・その他機関とは一切関係ありません。<br>
					This website is not affiliated with any university, company, or other institution related to student affairs system (Gakujo system). 
				</p>
				<p>
					(c) 2021 学情チャンプロジェクト all rights reserved.<br>
					Website and graphic design : <a href="https://arkw.net/" target="blank">Sora Arakawa</a><br>
					Maintenance and administration : <a href="https://ghevp.com/" target="blank">ぐゑ</a>
				</p>
			</div>
		</div>
	</body>
</html>