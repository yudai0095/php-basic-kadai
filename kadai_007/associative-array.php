<!DOCTYPE html>
 <html lang="ja">

 <head>
     <meta charset="UTF-8">
     <title>PHP連想配列を使ってキーと値を出力しよう</title>
 </head>

 <body>
     <p>
         <?php
         // 連想配列に値を代入する
         $product = ['name' => 'onion', 'price' => 200, 'weight' => 160];

         // 改行する
         echo '<br>';

         // 連想配列の値を出力する
         print_r($product);
         ?>
     </p>
 </body>

 </html>
