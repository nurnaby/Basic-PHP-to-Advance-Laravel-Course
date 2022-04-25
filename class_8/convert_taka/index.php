<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form align="center" action="currencyconvertor.php" method="post">

        <div id="box">
            <h2>
                <center>Currency Converter</center>
            </h2>
            <table>
                <tr>
                    <td>
                        Enter Amount:<input type="text" name="amount"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <center>From:<select name='cur1'>
                                <option value="AUD">Australian Dollor(AUD)</option>
                                <option value="USD" selected>US Dollar(USD)</option>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <center>To:<select name='cur2'>
                                <option value="INR" selected>Indian Rupee(INR)</option>
                                <option value="JPY">Japanese Yen(JPY)</option>
                                <option value="PHP">PHilippine Peso(PHP)</option>

                            </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><br>
                            <input type='submit' name='submit' value="CovertNow">
                        </center>
                    </td>
                </tr>
            </table>
    </form>

</body>

</html>
</body>

</html>