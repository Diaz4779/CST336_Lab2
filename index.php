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
                color: #ff5454;
                text-align:center;
                font-Size:50px;
                text-shadow: 4px 2px #474747;
            }
            body{
                background-image: url("img/CardDeck.jpg");
                background-size: cover;
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
                color: #8c8fcc;    
            }
            table, tr, td {
                font-Size: 25px;
            }
            a{
                background:#8c8fcc;
                color: black;
                border-radius:10px;
                text-decoration:none;
                font-Size:25px;
                padding:10px;
            }
            a:hover{
                background:#cecece;
                color: #0e0e11;
            }
            #footer{
                text-align:center;
                background:#8c8fcc;
                border-radius:10px;
                height:15px;
                width:1000px;
                padding:20px;
                margin: 0 auto;
                margin-bottom:25px;
            }
            #playAgain{
                margin: 0 auto;
                width: 50%;
                padding-bottom:15px;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
             <h1>Silverjack</h1>

            <div id="tableDiv">
                
               <table>
                   <tr><td style="color: #ff5454"><strong>Opponents</strong></td><th colspan = "5" style="color: #ff5454">Hand</th>
                   <th colspan = "5" style="color: #ff5454">Score</th></tr>
                    <?php
                        $array_one = randomArray();
                        $array_two = randomArray();
                        $array_three = randomArray();
                        $array_four = randomArray();
                        $sum1 = getSum($array_one);
                        $sum2 = getSum($array_two);
                        $sum3 = getSum($array_three);
                        $sum4 = getSum($array_four);
       
        
                
                        echo "<tr><td><img src='img/bec.png'/></td><td><img src='img/cards/diamonds/$array_one[0].png'></td>
                     
                        <td><img src='img/cards/".randomSuit()."/$array_one[1].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_one[2].png'></td> 
                        <td><img src='img/cards/".randomSuit()."/$array_one[3].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_one[4].png'>
                        <td><span class=fontChange>  $sum1</span></td></td>";
                        echo "<tr><td><img src='img/dan.png'/></td><td><img src='img/cards/diamonds/$array_one[0].png'></td>
                  
                        <td><img src='img/cards/".randomSuit()."/$array_two[1].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_two[2].png'></td> 
                        <td><img src='img/cards/".randomSuit()."/$array_two[3].png'></td>
                        <td><img src='img/cards/".randomSuit()."/$array_two[4].png'>
                        <td><span class=fontChange>  $sum2</span></td></td>";
                        
                        echo "<tr><td><img src='img/lui.png'/></td><td><img src='img/cards/diamonds/$array_one[0].png'></td>
                    
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
                    ?>
               </table>
                <div id="playAgain">
                    <a href="index.php">Play Again</a>
                </div>
         </div> 
     </div>
        <div id="footer">
            <footer>© All Rights reserved. Created by Luis Garcia, Daniel Diaz, David Garcia, and Rivka Garcia</footer>
        </div>
    </body>

</HTML>                   
