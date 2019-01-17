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
                <button>Додати запис</button>
            </div>
            <!-- This table will be replaced by PHP script -->
            <table>
                <tr>
                    <th>id</th>
                    <th colspan="2">name</th>
                    <th>sex</th>
                    <th>age</th>
                    <th>faculty</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Vlad</td>
                    <td>Grygola</td>
                    <td>male</td>
                    <td>17</td>
                    <td>Software Engineering</td>
                </tr>
            </table>
            <!-- This table will be replaced by PHP script -->
        </div>
    </div>
    <footer>
        Made by Vlad Grygola
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>