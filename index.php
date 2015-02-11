<?php
    include "includes/functions.php";
?>
<!DOCTYPE html>
<HTML>
    <head>
            <title>Lab 2: Silver Jack </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/styles.css"/>
        
        <style type="text/css">

            h1{
                color: #c0c0c0;
                text-align:center;
                font-Size:45px;
                padding-bottom: 5px;
                text-shadow: 4px 2px #474747;
            }
            body{
                background-image: url("img/CardDeck.jpg");
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
             <h1>Silverjack</h1>
               <table>
                   <tr><td>Opponents</td><th colspan = "5">Hand</th><td>Score</td></tr>
                    <?php
                        $array_one = randomArray();
                        $array_two = randomArray();
                        $array_three = randomArray();
                        $array_four = randomArray();
                
                        echo "<tr><td><img src='img/cards/diamonds/$array_one[0].png'></td>
                     
                        <td><img src='img/cards/".randomSuit()."/$array_one[1].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_one[2].png'></td> 
                        <td><img src='img/cards/".randomSuit()."/$array_one[3].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_one[4].png'></td>";

                        echo "<tr><td><img src='img/cards/diamonds/$array_one[0].png'></td>
                  
                        <td><img src='img/cards/".randomSuit()."/$array_two[1].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_two[2].png'></td> 
                        <td><img src='img/cards/".randomSuit()."/$array_two[3].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_two[4].png'></td>";
                        
                        echo "<tr><td><img src='img/cards/diamonds/$array_three[0].png'></td>
                    
                        <td><img src='img/cards/".randomSuit()."/$array_three[1].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_three[2].png'></td> 
                        <td><img src='img/cards/".randomSuit()."/$array_three[3].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_three[4].png'></td>";

                        echo "<tr><td><img src='img/cards/diamonds/$array_four[0].png'></td>
                        
                        <td><img src='img/cards/".randomSuit()."/$array_four[1].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_four[2].png'></td> 
                        <td><img src='img/cards/".randomSuit()."/$array_four[3].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_four[4].png'></td>";

                         

                    ?>
               </table>
        </div>
    </body>

</HTML>