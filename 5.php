<html>
<head>
<title>Multi Array</title>
</head>
<body>
<?php

        //Deklarasi array
        $array_beli = array("10","2","11");
        $array_jual = array("3","20","5");

        $array_kedua = array("33","29","11","3");
        );

        //cara menampilkan array
        //deklarasikan dahulu array yang ada
        for($var = 0; $var < count($array_Application); $var++)
        {



            //hitung data atau index setiap array
            for($var1 = 0; $var1 < count($array_Application[$var]); $var1++)
            {
                echo $array_Application[$var][$var1]." ";

                /*
                 * [$var] digunakan untuk index row
                 * [$var1] digunakan untuk index column
                 */
            }

            echo "<br/>";
        }

        echo "<br/><br/>";
        echo "Profit ". $array_beli[0][1][2]."<br/>";
        echo "row ketiga column pertaman ". $array_Jual[0][1][2];

        ?>
</body>
</html>
