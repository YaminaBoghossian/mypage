<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/896f46ebc9.js"></script>
    <title>index</title>
    <style>
        @font-face {
            font-family: 'SourceSansPro-ExtraLight';
            src: url('font/SourceSansPro-ExtraLight.ttf');
        }
        
        @font-face {
            font-family: "OldStandard-Regular";
            src: url('fonts/OldStandard-Regular.ttf');
        }
        
        @font-face {
            font-family: "OldStandard-Bold";
            src: url('fonts/OldStandard-Bold.ttf');
        }
        
        @font-face {
            font-family: "JuliusSansOne-Regular";
            src: url('fonts/JuliusSansOne-Regular.ttf');
        }
        
        body {
            margin: 0;
        }
        /* Header FIXE qui ne bouge pas au scroll */
        
        header {
            width: 100%;
            background: rgba(254, 253, 253, 1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 120px;
            padding: 5px;
            padding-left: 5px;
            padding-top: 0;
            opacity: .8;
            filter: alpha(opacity=80);
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
            filter: progid: DXImageTransform.Microsoft.Shadow(color='#000000', Direction=200, Strength=12);
            zoom: 1;
        }
        
        h1 {
            font-family: 'JuliusSansOne-Regular';
            font-size: 2.5em;
            color: #1E1E24;
            text-align: center;
            position: relative;
            margin-bottom: 0;
            margin-top: 40px;
        }
        
        h6 {
            font-family: 'SourceSansPro-ExtraLight';
            font-size: 20px;
            color: #FF5E83;
            text-align: center;
            font-weight: normal;
            margin: 0;
        }
        
        .introduction {
            width: 100%;
            height: 400px;
            background: #eedecf;
            margin-top: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        h3 {
            color: #102f2d;
            font-family: 'JuliusSansOne-Regular';
            font-size: 1.5em;
            font-weight: bold;
        }
        
        .btn {
            width: 140px;
            height: 45px;
            font-family: 'OldStandard-Bold', sans-serif;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: white;
            background-color: #102f2d;
            border: 1px solid #102f2d;
            transition: all 0.3s ease 0s;
            cursor: pointer;
            margin-left: 0px;
            margin-top: 40px
        }
        
        .btn:hover {
            background-color: rgba(238, 222, 207, 0);
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
            color: #1E1E24;
            transform: translateY(-7px);
        }
        
        h5 {
            font-family: 'OldStandard-Regular', sans-serif;
            color: #102f2d;
            font-size: 1.2em;
            font-weight: normal;
            margin-bottom: 10px;
        }
        
        .portfolio {
            width: 100%;
            height: 400px;
            background: white;
            margin-bottom: 220px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin: auto;

           
        }



        /* FOOTER #1 CONTACT */
        
        footer {
            width: 100%;
            height: 200px;
            background: linear-gradient(white, #eedecf);
            margin: auto;
            display: flex;
            flex-direction: column;
        }
        
        .social {
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
            margin: auto;
            width: 20%;
            margin-bottom: 5px;
        }
        
        i {
            font-size: 2em;
            text-align: center;
            color: #102f2d;
        }
        
        a :hover {
            color: rgb(216, 28, 138);
        }
        
        .contact {
            display: flex;
            justify-content: space-around;
            margin: auto;
            height: 30px;
            align-items: center;
        }
        
        .pcontact {
            font-family: 'JuliusSansOne-Regular';
            font-size: 1em;
            text-align: center;
        }
        
        span {
            font-family: 'OldStandard-Regular';
        }
        
        a {
            text-decoration: none;
        }
        
        a:focus {
            outline: 0;
        }
        /* FOOTER #2 */
        
        .lilfooter {
            width: 100%;
            height: 60px;
            background: #102f2d;
            display: flex;
            align-items: center;
        }
        
        .plilfooter {
            font-family: 'SourceSansPro-Light';
            font-size: 1em;
            color: white;
            margin: auto;
        }


    .screenprojet {
    width: 82%;
    height: 300px;
    margin: auto;
    text-align: center;
    margin-top: 150px;
    
    
}

.screenprojet :hover{
    opacity: 0;
    
    
}

  
h4 {
    font-family: "JuliusSansOne-Regular";
    font-size: 1.5em;
    color: white;
    text-align : center;
    
    margin: auto;
    
}


img {
    width: 100%;
    height: 200px;
    position:relative;
     z-index: 6;
    
}



.details {
   /* background:

#62dd1d;*/
/*#bcf871;*/
background:#7DDF64;
    /*background:#ff8a65;*/
    opacity: 0.8;
    width: 24.8%;
    margin-top: 62px;
    margin:auto;
    height: 200px;
    position: absolute;
    display: flex;
    align-items:center;
    justify-content: center;
    flex-direction: column;
}
h8 {
    font-family:"SourceSansPro-Light";
    color:#102f2d;
    font-size:0.9em ;
    margin-left: 5px;
    margin: auto;
    
    
}

hr {
    color: #102f2d;
    background: white;
}

.back-to-top{
  font-weight: bold;
  text-decoration: none;
  color: #fff;
  background:
grey;
  height: 50px;
  width: 50px;
  display: inline-block;
  text-align: center;
  line-height: 60px;
  font-size: 30px;
  
  position: fixed;;
  bottom: 65px;
  right: 10px;
}

/*
.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}*/


.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
margin: 80px auto;
  
  background: grey ;
  
  
  width: 80%;
  height: 400px;
  position: relative;
  transition: all 5s ease-in-out;
  padding-left: 35px;
  padding-right: 35px;
  padding-top: 35px;
  padding-bottom: 50px;
  
  
}

.popup h2 {
  margin-top: 20px;
  color: white;
  font-family: "JuliusSansOne-Regular";
  
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 90%;
  overflow: auto;
  color: white;
  font-family: 'SourceSansPro-Light';
  letter-spacing: 2px;
  word-spacing: 3px;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

/* divs background appearing with hover */ 


    </style>
</head>

<body>
    <header>
        <h1> Yamina Boghossian </h1>
<br/>
        <hr size=2 align=center width="20%">
    </header>

    <div class='introduction'>
        <h3> Welcome to my page </h3>
        <h5>Here's an outlook of my work as a developper student in Lyon, France.</h5>
<div class="box">
	 <a href="#popup1"><button class="btn">About</button></a>
</div>

<div id="popup1" class="overlay">
           
	<div class="popup">
		<h2>Skills </h2>

		<a class="close" href="#">&times;</a>
        
		<div class="content">
            Front-End <br/>
            HTML - CSS - SASS - JAVASCRIPT - JQUERY - UX DESIGN - BOOTSTRAP<br/><br/>
            Back-End <br/>
            PHP - SQL
            <br/><br/><br/>
        <h2> Experience </h2>
        <div class='content'>
            High school diploma in literature and English <br/>
            <br/>Studied 2 years in Marketing / Advertising / Management<br/>
            Commercial background +6 years (sales assistance, mershandising ) <br/>
            Food and beverage +5 years 
            Lorem ipsum dolor sit amet, consectetur 
            adipisicing elit. Magni fuga nam dolores numquam delectus dignissimos 
            voluptas iste molestias amet tempore cupiditate sint, deserunt iusto provident, animi itaque natus harum. Similique.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sit possimus nulla laboriosam sapiente, dolorem, rem voluptatibus esse neque sed atque ipsam quam architecto perferendis veritatis et, ab minima exercitationem.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet soluta, tempore rerum nulla. Laudantium quidem, voluptate consectetur eaque quia, hic in atque facere, voluptas quo tenetur accusantium dolor dolore iste.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ipsam omnis soluta veniam, provident praesentium reiciendis velit, vero amet consequatur repudiandae tempore laudantium quasi. Necessitatibus quam inventore dignissimos, corrupti hic.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci nesciunt dolores animi autem assumenda optio sit unde officiis et dolor, impedit maxime nisi aperiam explicabo eveniet asperiores, expedita sapiente sed.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem provident fuga adipisci odio porro eaque excepturi voluptates sed molestiae reprehenderit. Cum aliquid exercitationem aliquam obcaecati veniam animi earum, laudantium inventore?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero a alias deleniti dolorem. Explicabo rem exercitationem temporibus, ex sed placeat natus molestias adipisci. Temporibus eum sapiente sunt nobis impedit modi!
            </div>
         
    
			
		</div>
	</div>
</div>
        

    </div>
    <div class='portfolio'>
<?php
$dossier ="./";

   $files = scandir($dossier);
   $files = array_diff($files, ['.', '..']);
   foreach($files as $file){
      if(is_dir($file)){
          $commentfich = $file.'/comment.txt';
          if(is_file($commentfich)){
          $comment = file_get_contents($commentfich);
          }
          $titlefich = $file.'/titre.txt';
          if(is_file($titlefich)){
              $title = file_get_contents($titlefich);
          }
          $screen = $file.'/screen.png';
          
          if(is_file($screen)){
   echo '<a href="'.$file.'">
    
       <div class="screenprojet"> 
       <div class="details"><h4>'.$title.' </h4>
<hr size=1 align=center width="10%">
        <h8>'.$comment.'</h8> </div>
       <img src="'.$screen.'"> </div>
   </a>';

          };
       }}
       ?>
    </div>
    <footer>

        <div class='social'>
            <a href='https://github.com/YaminaBoghossian'><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
            <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
            <a href='https://plus.google.com/u/0/112488329816032298961'><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
        </div>
        <div class='contact'>
            <p class='pcontact'>(00 33) 6 62 51 46 48 <br/> <br/> Yamina.boghossian<span>@</span>gmail.com </p>

        </div>
<div class="filler">

</div>
<a href="#" class="back-to-top">^</a>
    </footer>
    
    <div class='lilfooter'>
        <p class='plilfooter'> ©Yamina Boghossian | 2017 </p>
    </div>

</body>

</html>