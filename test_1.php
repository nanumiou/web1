<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/description.css" />    
    <title>SMIC Audio Guide</title>
	
</head>
<body>  
    <div class="header">
    	<div class="header_item">SMIC Demo Factory Tour</div>
	</div>
    <div class="article">
        <?php readfile("data.txt"); ?>    	
    	
    </div>
    <div class="footer">
    	<div class="footer_item">
    		<div class="header_1">자동차 POC 라인</div>
    		<div class="header_2">
            	<audio autoplay controls>
            	<source src="1_demo.mp3" type="audio/mpeg">
                    Your user agent does not support the HTML5 Audio element.
            	</audio>
        	</div>
        	<br />
        	<div class="cont_1">
            	<a href="box.html" class="tab-bar__tab"><img src="img/previous.png" height="40px" align="left"></a>
            	<a href="description_2.html" class="tab-bar__tab"><img src="img/next.png" height="40px" align="right"></a>
        	</div>
    	</div>
    </div>
</body>
</html>



