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
                font-Size:50px;
                text-shadow: 4px 2px #474747;
            }
            body{
                background-image: url("img/CardDeck.jpg");
            }
            #elias{
                width:45px;
                height:45px;
            }
            .fontChange{
                font-Size: 2em;
                padding-left:20px;
            }
            img{
                border-radius:5px;
                width:50px;
                height:5p0x;
            }
            h3{
                font-Size:25px;
                text-align: center;
            }
            #tableDiv{
                margin: 0 auto;
                width: 50%;
            }
            #titleFont{
                font-Size: 2em;
                color: #c0c0c0;    
            }
            table, tr, td {
                font-Size: 25px;
            }
            a{
                background:#baaa1a;
                padding:10px;
                text-decoration: none;
                color: black;
                border-radius:10px;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
             <h1>Silverjack</h1>

            <div id="tableDiv">
                
               <table>
                   <tr><td style="color: #baaa1a"><strong>Opponents</strong></td><th colspan = "5" style="color: #baaa1a">Hand</th>
                   <th colspan = "5" style="color: #baaa1a">Score</th></tr>
                    <?php
                        $array_one = randomArray();
                        $array_two = randomArray();
                        $array_three = randomArray();
                        $array_four = randomArray();
                        $sum1 = getSum($array_one);
                        $sum2 = getSum($array_two);
                        $sum3 = getSum($array_three);
                        $sum4 = getSum($array_four);
       
        
                
                        echo "<tr><td><img src='img/al.png'/></td><td><img src='img/cards/diamonds/$array_one[0].png'></td>
                     
                        <td><img src='img/cards/".randomSuit()."/$array_one[1].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_one[2].png'></td> 
                        <td><img src='img/cards/".randomSuit()."/$array_one[3].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_one[4].png'>
                        <td><span class=fontChange>  $sum1</span></td></td>";
                        echo "<tr><td><img src='img/ed.png'/></td><td><img src='img/cards/diamonds/$array_one[0].png'></td>
                  
                        <td><img src='img/cards/".randomSuit()."/$array_two[1].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_two[2].png'></td> 
                        <td><img src='img/cards/".randomSuit()."/$array_two[3].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_two[4].png'>
                        <td><span class=fontChange>  $sum2</span></td></td>";
                        
                        echo "<tr><td><img id='elias' src='img/el.png'/></td><td><img src='img/cards/diamonds/$array_one[0].png'></td>
                    
                        <td><img src='img/cards/".randomSuit()."/$array_three[1].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_three[2].png'></td> 
                        <td><img src='img/cards/".randomSuit()."/$array_three[3].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_three[4].png'>
                        <td><span class=fontChange>  $sum3</span></td></td>";
                        echo "<tr><td><img src='img/tha.png'/></td><td><img src='img/cards/diamonds/$array_one[0].png'></td>
                        
                        <td><img src='img/cards/".randomSuit()."/$array_four[1].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_four[2].png'></td> 
                        <td><img src='img/cards/".randomSuit()."/$array_four[3].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_four[4].png'>
                        <td><span class=fontChange>  $sum4</span></td></td>";


                        echo"<tr><td><h3>".printWinner(findGreater($sum1, $sum2, $sum3, $sum4))."</h3><tr><td>";
                        echo"<tr><td><a href='index.php'>Play Again</a><tr><td>";

                    ?>
               </table>
         </div> 
        </div>
    </body>

</HTML>