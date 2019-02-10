<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/count.js"></script> <!--файл подсчета введенных символов-->
<script src="js/script.js"></script> <!--файл jquery и ajax-->
</head>
<body>
    <table style="padding: 25px">
        <tr>
            <td>Введите:</td>
            <td><input type="text" name="name" id="number" maxlength="15">
                <td><label id="count" style="font-size: 12px">0</label>    <!-- Подсчет символов строки -->          
                    <input type="button" name="submit" id="submit" value="Проверить" onClick = "getdetails()" />
                <td>
        </tr>
        <!-- вывод ответа сервера с помощю Ajax -->
        <div id="msg" style="color: red; font-size: 20px;"></div>    
    </table>

 
    
</body>
</html>