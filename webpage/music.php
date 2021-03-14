<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music Viewer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="viewer.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="header">

    <h1>190M Music Playlist Viewer</h1>
    <h2>Search Through Your Playlists and Music</h2>
</div>
<div id="listarea">
    <ul id="musiclist">

        <?php
        $files_mp3 = glob("*.mp3");
        foreach ($files_mp3 as $file) {
            $filename = basename($file);
        ?>
        <li class="mp3item">
            <a href="<?= $file ?>"><?= $filename ?></a>
            (5438375 b)
        </li>

        <?php
        }
        ?>
        <li class="playlistitem">
            <a href="music.php?playlist=mypicks.txt">mypicks.txt</a>
        </li>

        <li class="playlistitem">
            <a href="music.php?playlist=playlist.txt">playlist.txt</a>
        </li>
    </ul>
</div>
</body>
</html>

