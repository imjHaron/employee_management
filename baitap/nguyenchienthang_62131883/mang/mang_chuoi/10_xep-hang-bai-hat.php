<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style_bai-hat.css">
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2>DANH SÁCH CÁC BÀI HÁT YOUTUBE</h2>
        <form method="post">
            <div class="form-group">
                <label for="songName">Tên bài hát:</label>
                <input type="text" id="songName" name="songName" class="form-control" placeholder="Nhập tên bài hát">
            </div>
            <div class="form-group">
                <label for="songAuthor">Tác giả:</label>
                <input type="text" id="songAuthor" name="songAuthor" class="form-control" placeholder="Nhập tên tác giả">
            </div>
            <div class="form-group">
                <label for="songRank">Thứ hạng:</label>
                <input type="number" id="songRank" name="songRank" class="form-control" placeholder="Nhập thứ hạng">
            </div>
            <button type="submit" name="addSongBtn" class="btn btn-primary">Thêm bài hát</button>
            <button type="submit" name="showRankingBtn" class="btn btn-success">Hiển thị bảng xếp hạng</button>
            <button type="submit" name="clearListBtn" class="btn btn-danger">Xoá danh sách</button>

        </form>
    </div>
    <div class="songs-list">
        <h2>DANH SÁCH BÀI HÁT:</h2>
        <ul class="list-group">
            <?php
            session_start();

            if (isset($_POST['addSongBtn'])) {
                $songName = $_POST['songName'];
                $songAuthor = $_POST['songAuthor'];
                $songRank = $_POST['songRank'];

                $_SESSION['songs'][] = array('name' => $songName, 'author' => $songAuthor, 'rank' => $songRank);
            }

            if (isset($_POST['showRankingBtn'])) {
                if (isset($_SESSION['songs'])) {
                    usort($_SESSION['songs'], function($a, $b) {
                        return $a['rank'] - $b['rank'];
                    });

                    foreach ($_SESSION['songs'] as $song) {
                        echo "<li class='list-group-item'>{$song['name']} | Thứ hạng: {$song['rank']}</li>";
                    }
                } else {
                    echo "<li class='list-group-item'>Danh sách bài hát trống.</li>";
                }
            }

            if (isset($_POST['clearListBtn'])) {
                unset($_SESSION['songs']);
                echo "<li class='list-group-item'>Đã xoá danh sách bài hát.</li>";
            }
            ?>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
