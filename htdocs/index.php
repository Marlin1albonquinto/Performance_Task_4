<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Squares and Cubes</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #e3f2fd;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input {
            width: calc(100% - 20px);
            padding: 12px;
            margin-top: 12px;
            font-size: 16px;
            border: 1px solid #90caf9;
            border-radius: 5px;
            outline: none;
        }
        input:focus {
            border-color: #42a5f5;
        }
        button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background: #1e88e5;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #1565c0;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #0d47a1;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sum of Squares and Cubes</h2>
        <form method="post" onsubmit="return validateInput()">
            <input type="number" id="number" name="number" placeholder="Enter Upper Limit" required>
            <button type="submit">Calculate</button>
            <p class="error" id="error-msg"></p>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST["number"]);
            if ($n <= 0) {
                echo "<p class='error'>Please enter a positive integer.</p>";
            } else {
                $sum_squares = 0;
                $sum_cubes = 0;
                $i = 1;
                
                do {
                    $sum_squares += $i * $i;
                    $sum_cubes += $i * $i * $i;
                    $i++;
                } while ($i <= $n);
                
                echo "<div class='result'>";
                echo "<p>The sum of Squares from 1 to $n is $sum_squares.</p>";
                echo "<p>The sum of Cubes from 1 to $n is $sum_cubes.</p>";
                echo "</div>";
            }
        }
        ?>
    </div>

    <script>
        function validateInput() {
            let number = document.getElementById('number').value;
            let errorMsg = document.getElementById('error-msg');
            if (number <= 0 || isNaN(number)) {
                errorMsg.textContent = "Please enter a positive integer.";
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
