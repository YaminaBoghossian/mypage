<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/896f46ebc9.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>index</title>
    
    <style>
        @font-face {
            font-family: 'Roboto-Medium';
            src: url('font/Roboto-Medium.ttf');
        }
        
        @font-face {
            font-family: "Roboto-Light";
            src: url('fonts/Roboto-Light.ttf');
        }
        
        @font-face {
            font-family: "Roboto-Regular";
            src: url('fonts/Roboto-Regular.ttf');
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
            z-index: 800;
           
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
            font-family: 'Roboto-Light';
            font-size: 20px;
            color: #FF5E83;
            text-align: center;
            font-weight: normal;
            margin: 0;
        }
/* PREMIERE SECTION INTRO */

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
            font-family: 'Roboto-Light';
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.3px;
            margin: auto;
            color: white;
            background-color: #102f2d;
            border: 1px solid #102f2d;
            transition: all 0.3s ease 0s;
            cursor: pointer;
            margin-top:20px;
            
        }
        
        .btn:hover {
            background-color: rgba(238, 222, 207, 0);
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
            color: #1E1E24;
            transform: translateY(-7px);
        }
        
        h5 {
            font-family: 'Roboto-Light';
            color: #102f2d;
            font-size: 1.2em;
            font-weight: normal;
            margin-bottom: 10px;
        }
    /*SECTION PORTFOLIO ----- todo -- RESPONSIVE A REVOIR */

 .portfolio {
            width: 100%;
            background: white;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: auto;
            z-index: 0;
        }
     
        figure {
            height: 150px;
            width: 30%;
            display: block;
            overflow: hidden;
            opacity:0.99;
        }

 .screenprojet {
    width: 82%;
    height: 300px;
    margin: auto;
    text-align: center;
   
    
    
    
}

/*.screenprojet :hover{
    opacity: 0;
    
    
}*/

  
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
     z-index: 6;
    
}

.proj {
    height:200px;
}
.proj: hover {
    color:blue;
}

.details {
   background:rgba(182,165,149,0.9);
    opacity: 0.8;
    width: 24.8%;
    margin-top: -362px;*/
   margin:auto;
    height: 200px;
    position: absolute;
    
    display: flex;
    align-items:center;
    justify-content: center;
    flex-direction: column;
}
h8 {
    font-family:"Roboto-Light";
    color:#102f2d;
    font-size:0.9em ;
    margin-left: 5px;
    margin: auto;
    
    
}

hr {
    color: #102f2d;
    background: white;
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
            color:#102f2d ;
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
            font-family: 'Roboto-Medium';
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
            font-family: 'Roboto-Light';
            font-size: 1em;
            color: white;
            margin: auto;
        }

/* FLECHE BACK TO TOP -- todo INSERER LE CODE JQUERY pour que la fleche 
disparaisse en haut */

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
  z-index:800;
}
/* POP UP ABOUT - TODO -- A TERMINER */

.popup {
margin: 50px auto;
  background: rgba(254,253,253,0.9);
    box-shadow: 0px 1px 10px rgba(255,255,255,0.5);
  width: 80%;
  height: 450px;
  position: relative;
  transition: all 5s ease-in-out;
  padding-left: 35px;
  padding-right: 35px;
  padding-top: 35px;
  padding-bottom: 80px;
  text-align: center;
  z-index: 1000;
  
  
}

.popup h2 {
  margin-top: 10px;
  margin-bottom: 0px;
  color: rgba(182,165,149,0.9);
  font-weight: bold;
  font-family: "JuliusSansOne-Regular";
  font-size: 2em;
  
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #102f2d;
}
.popup .close:hover {
  color:rgb(216, 28, 138);
}
.popup .content {
  max-height: 90%;
  overflow: auto;
  color: #102f2d;
  font-family: 'Roboto-Light';
  letter-spacing: 2px;
  word-spacing: 3px;
}

.lang {
    font-family: 'Roboto-Medium';
    font-size: 1.3em;
}
h9{
    text-align: center;
    color: #102f2d ;
    font-family: 'JuliusSansOne-Regular';
    font-size: 1.5em;
margin: auto;
    
}

.contactmail {
    text-align: center;
  color: rgba(182,165,149,1);
    font-family: 'Roboto-Light';
    font-size: 0.8em;
    margin: auto;
}

/* RESPONSIVE TODO -- A APPLIQUER POUR TOUT */

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }

  img {
    width: 100%;
    height: 100px;

}
.screenprojet {
    width: 100%;
    height: 70px;
    margin: auto;
    text-align: center;
    margin-top: 150px;

} 
.figure{
            width: 100%;
            height: 400px;
            background: white;
            margin-bottom: 25px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            
            
        }

.introduction {
            width: 100%;
            
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
            text-align: center;
            margin-left: 15px;
          
        }

        h5 {
            font-family: 'Roboto-Light';
            color: #102f2d;
            font-size: 1.2em;
            font-weight: normal;
            margin-bottom: 10px;
            text-align: center;
        }
        .btn {
            width: 140px;
            height: 45px;
            font-family: 'Roboto-Light';
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.3px;
            
            margin-left: 25%;
            color: white;
            background-color: #102f2d;
            border: 1px solid #102f2d;
            transition: all 0.3s ease 0s;
            cursor: pointer;
            margin-top:20px;
          
            
            
        }

.details {
   background:rgba(182,165,149,0.9);
    opacity: 0.8;
    width: 30%;
    margin-top: 62px;
    margin:auto;
    height: 100px;
    position: absolute;
    display: flex;
    align-items:center;
    justify-content: center;
    flex-direction: column;
}

h4 {
    font-family: "JuliusSansOne-Regular";
    font-size: 0.3em;
    color: white;
    text-align : center;
    
    margin: auto;
    
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
            color:#102f2d ;
            margin-left: 10px;
        }
}

@import url(https://fonts.googleapis.com/css?family=Exo+2:300);
        @import url(https://fonts.googleapis.com/css?family=Zeyada);
        .col-xs-1,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12 {
            position: relative;
            padding: 0;
        }
        
        html,
        body {
            height: 100%;
        }
        
        #accueil {
            background: url(http://images.forwallpaper.com/files/thumbs/preview/20/205186__photo-close-up-snow-leaves-blur-bokeh-background-wallpaper_p.jpg) no-repeat center;
            background-size: cover;
            margin-top: 50px;
            height: 500px;
            height: 100%;
        }
        
        #accueil h1 {
            position: relative;
            top: 120px;
            font-size: 10em;
            font-family: "Zeyada";
            text-align: center;
            color: #fff;
            text-transform: uppercase;
        }
        
        #accueil h2 {
            position: relative;
            top: 150px;
            text-align: center;
            font-size: 3em;
            font-family: "Zeyada";
            text-transform: uppercase;
            color: #fff;
        }
        
        #gallery {
            height: 100%;
            width: 100%;
        }
        
        figure {
            height: 450px;
            width: 30%;
            display: block;
            overflow: hidden;
            z-index: 100;
        }
        
        figcaption {
            height: 150px;
            width: 100%;
            background: no-repeat center 50px black;
            text-align: center;
            position: relative;
            bottom: 0;
            left: -500px;
            opacity: 0;
            padding: 5px;
            
        }
        
        a {
            color: #fff;
        }
        
        a:hover figcaption {
            opacity: 0.8;
            left: 0;
            color: #fff;
            transition: all 0.7s;
            
        }
        
        #contact {
            height: 100%;
            padding: 20px;
            margin-top: -50px;
            background: url(http://images.forwallpaper.com/files/thumbs/preview/20/205186__photo-close-up-snow-leaves-blur-bokeh-background-wallpaper_p.jpg) no-repeat center;
            background-size: cover;
            overflow: hidden;
        }
        
        #contact h1 {
            font-family: "Zeyada";
            font-size: 10em;
            text-align: center;
            color: #fff;
        }
        
        input {
            height: 50px;
            color: #fff;
        }
        
        .form-control {
            color: #fff;
            max-width: 600px;
            margin: 0 auto;
            display: block;
            border: none;
            border-radius: 0;
            background: rgba(255, 255, 255, 0.4);
            resize: none;
        }
        
        .submit {
            display: block;
            margin: 0 auto;
            background: #34495e;
            border-radius: 0;
            border: none;
            color: #fff;
        }
        
        .btn-default:hover {
            background: #2c3e50;
            color: #fff;
        }
        
        @media (max-width: 750px) {
            #accueil h1,
            #contact h1 {
                font-size: 4.6em;
            }

            figure {
            height: 450px;
            width: 50%;
            display: block;
            overflow: hidden;
            z-index: 100;
            margin: auto;
        }
        
        figcaption {
            height: 250px;
            width: 100%;
            background: no-repeat center 50px black;
            text-align: center;
            position: absolute;
            bottom: 0;
            left: -500px;
            top: -300px;
            opacity: 0;
            padding: 5px;
        
        }

        
        }
    </style>
    <script> // ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('.back-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('.back-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('.back-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>
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
	 <a href="#popup1"><button class="btn">ABOUT</button></a>
</div>

<div id="popup1" class="overlay">
           
	<div class="popup">
       
		<h9>I would Love to hear from you, please get in touch for a chat!</br><span class='contactmail'>
        (0033) 6 62 51 46 48 ---- Yamina.boghossian@gmail.com</span>
        </h9>
        </br></br>
        

		<a class="close" href="#">&times;</a>
        
		<div class="content">
            <h2> Skills </h2>
            <hr size=2 align=center width="90%">
            </br></br>
           <span class='lang'> Front-end <br/></span>
            
            HTML - CSS - SASS - JAVASCRIPT - JQUERY - UX DESIGN - BOOTSTRAP<br/><br/>
            <span class= 'lang'> Back-end <br/> </span>
            PHP - SQL
            <br/></br>
            <span class='lang'> Fluent </span> English and French </br></br></br>
        <h2> Experience </h2>
        <hr size=2 align=center width="90%">
        <br/></br>
        <div class='content'>
        Currently studying web development at Simplon, Lyon.</br></br>
            High school diploma in <span class ='lang'>Literature</span> and <span class='lang'>English </span><br/>
            <br/>Studied 2 years of Marketing / Advertising / Management<br/></br>
            <span class ='lang'>Commercial background </span> +6 years  <br/>
            <span class ='lang'>Food and beverages </span> +5 years 
            
            </div>
            </br></br></br>
        <h2> Hobbies </h2>
        <hr size=2 align=center width="90%">
        <br/></br>
        <div class='content'>
        Drawing - Painting - Photography - Webdesign - Music - Travel 
        </br></br>
         </br>
        </div>
        
         
    
			
		</div>
	</div>
</div>
        

    </div>
    <br/>
    <br/>
    <br/>
    <br/><br/></br>
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
    
       <figure class="col-md-3 col-sm-3 col-xs-12 proj">
            <a href="'.$file.'">
                <img class="img" src="'.$screen.'" alt="" />
                <figcaption>
                    <h2>'.$title.'</h2>
                    <p>'.$comment.'</p>
                </figcaption>
            </a>
        </figure>';
        

          };
       }}
       ?>
    </div>
    <footer>

        <div class='social'>
            <a href='https://github.com/YaminaBoghossian'><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
            <a href='https://www.linkedin.com/in/yamina-boghossian-201365147/'><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
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
