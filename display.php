<?php

  $start = date_create($_POST['start']);
  $due = date_create($_POST['due']);
  $rate = $_POST['rate'];
  $principle = $_POST['principle'];

  $diff = date_diff($start,$due);
  $years = (int)$diff->format("%R%a days")/365;
  $amount = (float)$principle+((int)$years*((float)($rate)/100)*(float)$principle);
  $simpint = (float)$amount-(float)$principle;
  
?>

<!DOCTYPE html>

<html>

<head>
    <title>Loan Calculator</title>
</head>

<body>
    Start date is <?php echo date_format($start,"F d,Y"); ?> <br>
    Due date is <?php echo date_format($due,"F d,Y"); ?> <br><br>
    The annual rate as a percent is <?php echo $rate."%"; ?> <br>
    The principle amount of the loan in currency format is <?php echo "$".number_format($principle, 2,'.',','); ?> <br>
    The simple interest due in currency format is <?php echo "$".number_format($simpint, 2,'.',','); ?> <br><br>
    The total amount to be returned on the due date is <?php echo "$".number_format($amount, 2,'.',','); ?> <br>
</body>

</html>