<?php 
    session_start();
    include_once 'header.html';
    include_once 'dbh_inc.php';
    
    if(isset($_SESSION['username'])){
        $id = $_SESSION['username'];
        //now display some images of the particular place
        $place = mysqli_escape_string($conn,$_POST['place']);
        //place is now defined
        
        /*$sql = "SELECT * FROM images WHERE username='$id'";
    	$result = mysqli_query($conn,$sql);
    	$result_check = mysqli_num_rows($result);
    	$row = mysqli_fetch_assoc($result);
    	
    	if($result_check > 0){
    	    if($row['status'] == 0){
    	        echo "<div class='parent'>";
				echo "<img src='images/default_image.jpg' class='dp_container'>";
				echo "</div>";
    	    }
    	}else{
    	        echo "user image found";
    	 $format = $row['format'];
				echo "<div class='parent'>";
				echo "<img src='images/profile".$id.".".$format."' class='dp_container'>";
				echo "</div>";   
    	}*/
    	
    }
    else{
        header("Location: login.html?login=please_login");
    }
	
?>
<html>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style>
        div.stars {
          width: 270px;
          display: inline-block;
        }
        
        input.star { display: none; }
        
        label.star {
          float: right;
          padding: 10px;
          font-size: 36px;
          color: #444;
          transition: all .2s;
        }
        
        input.star:checked ~ label.star:before {
          content: '\f005';
          color: #FD4;
          transition: all .25s;
        }
        
        input.star-5:checked ~ label.star:before {
          color: #FE7;
          text-shadow: 0 0 20px #952;
        }
        
        input.star-1:checked ~ label.star:before { color: #F62; }
        
        label.star:hover { transform: rotate(-15deg) scale(1.3); }
        
        label.star:before {
          content: '\f006';
          font-family: FontAwesome;
        }
        .parent{
		width:1810px;
		height: 830px;
		border:solid 2px red;
    	}
    	.dp_container{
    		width:18%;
    		height:35%;
    		margin-left:28%;
    		margin-top: 4%;
    		border-radius: 1000px; 
    	}
    	.text-review{
    	    margin-left:10%;
    	}
    	.dont-show{
    	    display:none;
    	}
</style>

<body>
	<form action="review_inc.php" method="POST">
		<div class="stars">
            <input class="star star-5" id="star-5" type="radio" name="star" value=5>
            <label class="star star-5" for="star-5"></label>
        
            <input class="star star-4" id="star-4" type="radio" name="star" value=4>
            <label class="star star-4" for="star-4"></label>
        
            <input class="star star-3" id="star-3" type="radio" name="star" value=3>
            <label class="star star-3" for="star-3"></label>
        
            <input class="star star-2" id="star-2" type="radio" name="star" value=2>
            <label class="star star-2" for="star-2"></label>
        
            <input class="star star-1" id="star-1" type="radio" name="star" value=1>
            <label class="star star-1" for="star-1"></label>
        </div>
		
        <br><br>
        <div class="text-review">
            <?php
                echo "<input type='text' class='dont-show' value='".$place."' name='place'>";
            ?>
		    <textarea name="review" rows="6" cols="45"> </textarea><br>
		    <button type="submit" name="rev">SUBMIT</button>
		</div>

	</form>
</body>
</html>