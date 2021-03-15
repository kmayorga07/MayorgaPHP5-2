<!DOCTYPE html>

<head>
    <title>Loan Calculator</title>
</head>
The current date and time is <?php echo date("Y/m/d h:i:sa"); ?> <br> 
    
        <form action="display.php" method="POST">
            <table>  
            <tr>
                <td>Start Date</td><td> <input type="date" name="start"></td>
            </tr>
            <tr>
                <td>Due Date</td><td> <input type="date" name="due"></td>
            </tr>
            <tr>
                <td>Annual Interest Rate: </td><td> <input type="text" name="rate"></td>
            </tr>
            <tr>
                <td>Principle Amount Borrowed: </td><td> <input type="text" name="principle"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Calculate" name="Calculate"></td>
            </tr>
            </table>
        </form>
    

</html>