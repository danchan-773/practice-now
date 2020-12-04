<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>フォーム入力の値でステータスを設定する</title>
    <link rel="stylesheet" href="practice.css">
  </head>
  <body>
      <?php
        $name=$_POST['name'];
        $sex=$_POST['sex'];
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        $detail=array($name,$sex,$height,$weight);
        $exp1=array("名前:","性別:","身長:","体重:");
        $exp2=array("強さ:","賢さ","素早さ","体力");
        $pow=mt_rand(1,100);
        $int=mt_rand(1,100);
        $agi=mt_rand(1,100);
        $sta=mt_rand(1,100);
        $height=(integer)$height;
        $weight=(integer)$weight;

        if($sex==="男性"){
          $pow+=10;
          $int-=10;
        }else{
          $pow-=10;
          $int+=10;
        }

        if($height>=200){
          $sta+=20;
        }else if((170<=$height)&&($height<200)){
          $sta+=10;
        }else if($height<150){
          $sta-=10;
        }

        if($weight>=100){
          $agi-=10;
        }else if((60<=$weight)&&($weight<80)){
          $agi+=10;
        }else if($agi<60){
          $agi+=20;
        }

        $status=array($pow,$int,$agi,$sta);

        $result1=preg_match("/竹川/u",$name);
        if($result1){
          $detail[0]=str_replace("竹川","ヴォルデモート卿",$name);
          $exp1[1]="職業:";
          $detail[1]="闇の帝王";
          $comment="アバダケダブラ!!!<br>";
          }

        $result2=preg_match("/龍宏/u",$name);
        if($result2){
          $detail[0]=str_replace($name,"すごいさん",$name);
          $exp1[1]="職業:";
          $detail[1]="ニート";
          $comment="それ、言うと思った<br>";
        }

        for($i=0;$i<count($detail);$i++){
          echo $exp1[$i],$detail[$i]."<br>";
        }
        if($comment != NULL){
          echo "<br>---コメント---<br>".$comment,"<br>";
        }
        for($i=0;$i<count($status);$i++){
          echo $exp2[$i],$status[$i]."<br>";
        }
      ?>
  </body>
</html>
