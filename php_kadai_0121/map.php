<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic template</title>
    <style>body{padding:0;margin:0;background:#333;}h1{padding:0;margin:0;font-size:50%;color:white;}.mouse{font-size:50%;background: white;}</style>
</head>
<body>


<!-- MAP[START] -->
<h1>Basic template</h1>
<div id="myMap" style='width:100%;height:450px;'></div>
<!-- MAP[END] -->

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- /jQuery&GoogleMapsAPI -->
<!-- [ MapTypeId ] https://msdn.microsoft.com/en-us/library/mt712700.aspx -->
<script src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AuW4rTR0qPzGoHxh8c0PXSoXmRZciQbtOnJ0e3rl6PhY8yL0cDSEExaq_kTCRy3P' async defer></script>
<script>
    //Initialization processing
 
   
    
</script>

<script>
//1．位置情報の取得に成功した時の処理
function mapsInit(position) {
    //lat=緯度、lon=経度 を取得
    const lat = position.coords.latitude;
    const lon = position.coords.longitude;
    const map = new Microsoft.Maps.Map('#myMap', {
            center: new Microsoft.Maps.Location(lat, lon), //Location center position
            mapTypeId: Microsoft.Maps.MapTypeId.load, //Type: [load, aerial,canvasDark,canvasLight,birdseye,grayscale,streetside]
            zoom: 16  //Zoom:1=zoomOut, 20=zoomUp[ 1~20 ]
        });




};

//2． 位置情報の取得に失敗した場合の処理
function mapsError(error) {
  let e = "";
  if (error.code == 1) { //1＝位置情報取得が許可されてない（ブラウザの設定）
    e = "位置情報が許可されてません";
  }
  if (error.code == 2) { //2＝現在地を特定できない
    e = "現在位置を特定できません";
  }
  if (error.code == 3) { //3＝位置情報を取得する前にタイムアウトになった場合
    e = "位置情報を取得する前にタイムアウトになりました";
  }
  alert("エラー：" + e);
};

//3.位置情報取得オプション
const set ={
  enableHighAccuracy: true, //より高精度な位置を求める
  maximumAge: 20000,        //最後の現在地情報取得が20秒以内であればその情報を再利用する設定
  timeout: 10000            //10秒以内に現在地情報を取得できなければ、処理を終了
};

//Main:位置情報を取得する処理 //getCurrentPosition :or: watchPosition

function GetMap() {
navigator.geolocation.getCurrentPosition(mapsInit, mapsError, set);
}
</script>

</body>
</html>

