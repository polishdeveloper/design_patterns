<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        //without facade
        $adder = new Facade\Adder();
        echo '54 + 13 = ', $adder->add(54, 13), "\n<br/>";
        $divider = new Facade\Divider();
        echo '36 / 6 = ', $divider->divide(36, 6), "\n<br/>";

        //with facade
        $calculatorFactory = new Facade\CalculatorFactory;
        $calculator = $calculatorFactory->getCalculator();
        echo '54 + 13 = ', $calculator->calculate('54 + 13'), "\n<br/>";
        echo '36 / 6 = ', $calculator->calculate('36 / 6'), "\n";
        ?>
    </body>
</html>
