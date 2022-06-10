<?php include_once "system.php"; ?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<title><?php
		if (isset($title) == "") {
			echo "学情チャン 公式ウェブサイト";
		} else {
			echo "" . $title . " - 学情チャン 公式ウェブサイト";
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
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CZP3CFC252"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CZP3CFC252');
</script>
	</head>
	<body>
		
		<div class="navbar">
			<div class="navbar-left">
				<a href="index.php"><img src="img/logo.png"></a>
			</div>
			<div class="navbar-right">
				<ul>
					<a href="index.php?p=reference"><li>壁紙、資料集</li></a>
					<a href="index.php?p=song"><li>うた</li></a>
					<a href="index.php?p=rules"><li>学情チャンとのお約束</li></a>
					<a href="index.php?p=contest"><li>コンテスト</li></a>
				</ul>
			</div>
		</div>
		<div class="header">
			<div class="slider">
				<div><img src="img/slideshow/slide_top.png"></div>
				<a href="index.php?p=rules"><div><img src="img/slideshow/promises.png"></div></a>
				<a href="https://tawataso.com/gakujoaddon/"><div><img src="img/slideshow/GakujoTextCount.png"></div></a>
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
						<a href="https://twitter.com/Gakuzyo18Kin" target="blank"><img src="img/tw.png" class="social">R18のTwitterは…///こっち…///</a><br>
						<a href="https://twitter.com/gakujochan_info" target="blank"><img src="img/tw.png" class="social">学情チャンプロジェクト（運営）</a><br>
						<a href="https://marshmallow-qa.com/gakuzyo_chan?utm_medium=url_text&utm_source=promotion" target="blank"><img src="img/mqa.png" class="social">学情チャンのマシュマロ</a><br>
						<a href="https://www.youtube.com/channel/UCw2JBhwHg-YXycBYx6ZI1bQ" target ="blank">学情チャンのYouTubeチャンネル</a>
					</p><br>
					<a href="https://addons.mozilla.org/ja/firefox/addon/%E5%AD%A6%E6%83%85%E3%83%81%E3%83%A3%E3%83%B3%E3%81%AE%E3%83%86%E3%83%BC%E3%83%9E/" target="blank">
						<img src="img/fx.png">
					</a><br>
					<a href="https://typing.twi1.me/game/153670" target="blank">
						<img src="img/typing.png">
					</a><br>
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
					(c) 2021,2022 学情チャンプロジェクト all rights reserved.<br>
					Website and graphic design : <a href="https://arkw.net/" target="blank">Sora Arakawa</a><br>
					Maintenance and administration : <a href="https://ghevp.com/" target="blank">ぐゑ</a>
				</p>
			</div>
		</div>
	</body>
</html>