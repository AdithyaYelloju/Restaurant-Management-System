<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, intial-scale=1, user-scalable=no"/>
  <title>FOOD CORNER</title>
 <link rel="stylesheet" type="text/css" href="CSS/style.css">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="slider.css"> 
</head>
<body background="images/image.jpeg">
	<div id = "contain" style = "margin-top:30px;">
	 <img class = "slides" src="images/Slider1.jpg" style="border-radius: 10px; width: 60%;height:450px;margin-left: 17%;"/>
	 <img class = "slides" src="images/Slider2.jpg" style="border-radius: 10px;width: 60%;height:450px;margin-left: 17%";/>
    <img class = "slides" src="images/Slider3.jpg" style="border-radius: 10px;width: 60%;height:450px;margin-left: 17%;"/>
    <img class = "slides" src="images/Slider4.jpg" style="border-radius: 10px; width: 60%;height:450px;margin-left: 17%;"/>
   <img class = "slides" src="images/Slider5.jpg" style="border-radius: 10px;width: 60%;height:450px;margin-left: 17%";/>
    <img class = "slides" src="images/Slider6.jpg" style="border-radius: 10px;width: 60%;height:450px;margin-left: 17%;"/>
   
    
    <button style="margin-left: 17%;" class = "btn" onclick = "plusIndex(-1)" id = "btn1">&#10094</button>
    <button style="margin-left: 53%;" class = "btn" onclick = "plusIndex(1)" id = "btn2">&#10095</button>
  </div>

<script>
    var index = 1;

    function plusIndex(n){
      index = index + n;
      showImage(index);
    }


    showImage(1);
    function showImage (n) {
      var x = document.getElementsByClassName("slides");
      if (n>x.length) {index = 1};
      if (n<1) {index = x.length};
      for (var i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      } 
      x[index - 1].style.display = "block";

    }
    autoSlide();
    function autoSlide () {
       var x = document.getElementsByClassName("slides");
       for (var i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      } 
      if (index > x.length) {index = 1};
      x[index - 1].style.display = "block";
      index++;
      setTimeout(autoSlide,3000);
    }
  </script>
</body>
