<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tạo ma trận</title>
    <style type="text/css">
        body {
            background-color: #0D59FF;
        }
        table{
            background: #BDD2FFFF;
            border: 0 solid black;
        }
        thead{
            background: #fff14d;
        }
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            color: #ff8100;
            font-size: medium;
        }
    </style>
    <script>
        function createMatrix() {
            var m = parseInt(document.getElementById("m-input").value);
            var n = parseInt(document.getElementById("n-input").value);

            if (isNaN(m) || isNaN(n) || m < 2 || m > 5 || n < 2 || n > 5) {
                alert("Vui lòng nhập giá trị hợp lệ cho m và n (từ 2 đến 5).");
                return;
            }

            var matrix = [];
            for (var i = 0; i < m; i++) {
                var row = [];
                for (var j = 0; j < n; j++) {
                    row.push(Math.floor(Math.random() * 201) - 100);
                }
                matrix.push(row);
            }

            var matrixJSON = JSON.stringify(matrix);

            var url = "inbtvn2.php?matrix=" + encodeURIComponent(matrixJSON);
            window.location.href = url;
        }
    </script>
</head>
<body>
    <div align='center'>
        <table>
            <thead>
                <th colspan="2" align="center"><h4>MA TRẬN</h4></th>
            </thead>
            <tr>
                <td>Số hàng (m):</td>
                <td><input type="number" id="m-input" min="2" max="5" /></td>
            </tr>
            <tr>
                <td>Số cột (n):</td>
                <td><input type="number" id="n-input" min="2" max="5" /></td>
            </tr>
            <tr> 
                <td colspan="2" align="center"><button onclick="createMatrix()">Tạo</button></td>
            </tr>
        </table>
    </div>
</body>
</html>