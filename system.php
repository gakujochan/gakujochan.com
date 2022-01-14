<?php
	// Arakawa Gungnir System Ver.2.2
	// (c) 2021-2022 Sora Arakawa all rights reserved.
	if (isset($_GET["p"])) {
		$id = $_GET["p"];
	} else {
		$id = "";
	}
	if ($id == "") {
		$main = file_get_contents("page/top.html");
	} else {
		if (!file_exists("page/" . $id . ".html")) {
			$id = "404";
		}
		$data = file_get_contents("page/" . $id . ".html");
		$dataEx = explode("\n", $data);
		$titleCount = 0;
		for ($i = 0; $i < count($dataEx); $i++) {
			if (strpos($dataEx[$i], "Title:") !== false){
				$titleCount = $i;
			}
		}
		$title_array = explode(":", $dataEx[$titleCount]);
		$title = $title_array[1];
		$dataEx[$titleCount] = "";
		$main = implode($dataEx);
	}
?>