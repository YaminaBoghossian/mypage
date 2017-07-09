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
            font-family: "OldStandard-Regular";
            src: url('fonts/OldStandard-Regular.ttf');
        }
        
        @font-face {
            font-family: "OldStandard-Italic";
            src: url('fonts/OldStandard-Italic.ttf');
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
            background: rgba(254, 253, 253, 0.2);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 100px;
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
            font-family: 'OldStandard-Bold';
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
            font-family: 'OldStandard-Regular';
            font-size: 1em;
            color: white;
            margin: auto;
        }


    .screenprojet {
    width: 75%;
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
    margin-bottom: 15px;
    
}


img {
    width: 100%;
    height: 200px;
    position:relative;
     z-index: 6;
    
}


.details {
    background: 
#faab48;
/*background:rgb(240, 149, 51);*/
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
    font-family:"OldStandard-Regular";
    color:#102f2d;
    font-size:0.9em ;
    margin-left: 5px;
    
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
        <h3> Welcome on my page </h3>
        <h5>Here's an outlook of my work as a developper student in Lyon, France.</h5>

        <button class="btn">About</button>

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

    </footer>
    <div class='lilfooter'>
        <p class='plilfooter'> ©Yamina Boghossian | 2017 </p>
    </div>

</body>

</html>