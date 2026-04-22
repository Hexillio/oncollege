<?php

$groups = file('dump/groups.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$albums = file('dump/albums.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$tracks = file('dump/tracks.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$pages_data = [
    'groups' => $groups,
    'albums' => $albums,
    'tracks' => $tracks
];
$content = $pages_data['groups'];

$head = '<title>album</title>';
$header = '<h1>team</h1>';
$footer = '<p>track</p>';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <?php echo $head; ?>
</head>
<body>
    <header>
        <?php echo $header; ?>
    </header>

    <main>
        <pre>
            <?php print_r($content); ?>
        </pre>
    </main>

    <footer>
        <?php echo $footer; ?>
    </footer>
</body>
</html>