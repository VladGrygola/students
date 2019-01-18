<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Students Database</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
    <div id = "back">
        <div id = "content">
            <h1>База даних студентів</h1>
            <div style="text-align: center; margin-bottom: 20px">
                <button id="add">Додати</button>
                <button id="edit">Редагувати</button>
                <button id="del">Видалити</button>
            </div>

            <!-- This block will be hidden and will be shown only after  pressing the button-->
            <div class="addFormDiv">
                <form name="addForm" action="" method = "get">
                    <div style="float: left; text-align:right; margin-right: 25px;">
                        <p>Ім'я</p>
                        <p>Фамілія</p>
                        <p>Стать</p>
                        <p>Дата народження</p>
                        <p>Факультет</p>
                    </div>    
                    <div>
                        <p><input type="text" name="name"/></p>
                        <p><input type="text" name="surname"/></p>
                        <p><input type="radio" name="sex" value="1"/><label>Чоловік</label>
                           <input type="radio" name="sex" valud="0"/><label>Жінка</label>
                        </p>
                        <p><input type="date" name="age"/></p>
                        <p>
                            <select name = "faculty">
                                <!-- This place will be replaced by PHP script-->
                                <option>Software Engineering</option>
                                <option>Biology</option>
                                <!-- This place will be replaced by PHP script-->
                            </select>
                        </p>
                    </div>       
                    <div style="text-align: center;">
                        <input id="btn" style = "width: 150px" type="submit" value="Додати запис"/>  
                    </div>     
                </form>
            </div>
            <!-- This block will be hidden and will be shown only after  pressing the button-->
            <?php 
                require_once "libSql.php";
                $table = Table::getTable("students");
                Table::showTable($table);
            ?>
        </div>
    </div>
    <footer>
        Made by Vlad Grygola
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>