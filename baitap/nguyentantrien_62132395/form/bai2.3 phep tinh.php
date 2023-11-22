<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> </title>
    <style type="text/css">
        body {
            background-color: #0D59FF;
            font-family: Arial, sans-serif;
        }
        table {
            background: #BDD2FFFF;
            border: 0 solid black;
            margin: 0 auto;
        }
        thead {
            background: #fff14d;
        }
        td {
            color: blue;
            padding: 5px;
        }
        h4 {
            font-family: verdana, sans-serif;6666
            text-align: center;
            color: #ff8100;
            font-size: medium;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
        }
        .radio-label {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <form align='center' action="bai2.3_xuly.php" method="GET" onsubmit="saveSelection()">
        <center>
            <table>
                <thead>
                    <th colspan="6" align="center"><h4>PHÉP TÍNH TRÊN HAI SỐ</h4></th>
                </thead>
                <tr>
                    <td>Chọn phép tính:</td>
                    <td class="radio-label"><label><input type="radio" name="operator" value="Cộng"> Cộng</label></td>
                    <td class="radio-label"><label><input type="radio" name="operator" value="Trừ"> Trừ</label></td>
                    <td class="radio-label"><label><input type="radio" name="operator" value="Nhân"> Nhân</label></td>
                    <td class="radio-label"><label><input type="radio" name="operator" value="Chia"> Chia</label></td>
                </tr>
                <tr>
                    <td>Số thứ nhất:</td>
                    <td colspan="2"><input type="text" name="num1"></td>
                </tr>
                <tr>
                    <td>Số thứ nhì:</td>
                    <td colspan="2"><input type="text" name="num2"></td>
                </tr>
                <tr>
                    <td colspan="6" align="center"><input type="submit" value="Tính" name="tinh" /></td>
                </tr>
            </table>
        </center>
    </form>

    <script type="text/javascript">
        function saveSelection() {
            const radios = document.getElementsByName('operator');
            let selectedOperator = '';

            for (const radio of radios) {
                if (radio.checked) {
                    selectedOperator = radio.value;
                    break;
                }
            }

            localStorage.setItem('selectedOperator', selectedOperator);
        }
    </script>
</body>
</html>
