<?php
if (isset($_POST['pas'])){
  $n=$_POST['username'];
  $e=$_POST['email'];
  $p=$_POST['phno'];
  $a=$_POST['add'];
  $pw=$_POST['pas'];
  $conn=new mysqli('localhost','root','','nik ecommerce');
  if($conn){
    $sql="INSERT INTO userdetails (Name, eMail, Phonenumber, Address, Password) VALUES ('$n','$e','$p','$a','$pw')";
    $conn->query($sql);
  }
  else{
    echo "connecting to db....";
  }
  $conn->close();
}
?>
<!DOCTYPE html>
<html>
  <title>NIK-The king of furniture</title>
  <head>
    <link rel="stylesheet" href="styling.css">
  <script src="https://kit.fontawesome.com/2a10ca8733.js" crossorigin="anonymous"></script>
  <style>
      .container {
        width: 80%;
        max-width: 1200px;
      }
    .mydiv1 {
      width: 100%;
      height: 55x;
      background-color: rgb(230, 131, 148);
      color: black;
      text-align: left;
      border-radius: 20px;
      text-decoration: double;
      font-size: 25px;
    }
    
    .but {
      width: 150px;
      height: 75px;
      background-color: black;
      color: bisque;
      cursor: pointer;
      border-radius: 20px;
      margin-left: 20px;
    }
    .mydiv2 {
      width: 100%;
      height: 60px;
      padding-left: 35px;
      padding-right: 20px;
    }
    .img {
      padding-top: 100px;
    }
    .img1 {
      padding-top: 0px;
      padding-left: 0px;
      width: 100%;
      height: 400px;
      margin-left: 0px;
      opacity: 0.8;
    }
    .img1:hover {
      opacity: 1;
      cursor: pointer;
    }
    .selection {
      padding-top: -200px;
      margin-left: 100px;
      display: inline-block;
      padding-left: 30px;
    }
    .seperate {
      display: inline-block;
      position: relative;
    }
   
    .flag {
      height: 100px;
      width: 200px;
      padding-left: 40px;
      opacity: 0.8;
    }
    .flag:hover{
      opacity:1;
    }
    footer {
      background-color: black;
      color: white;
      bottom: 0;
      width: 100vw;
      font-size: 16px;
    }
    footer * {
      box-sizing: border-box;
      border: none;
      outline: none;
    }
    .row {
      padding: 1em 1em;
    }
    .row.primary {
      display: grid;
      grid-template-columns: 3fr 2fr 4fr;
      align-items: stretch;
    }
    .column {
      width: 100%;
      display: flex;
      flex-direction: column;
      padding: 0 2em;
      min-height: 15em;
    }
    h3 {
      width: 100%;
      text-align: left;
      color: white;
      font-size: 1.4em;
      white-space: nowrap;
    }
    ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      padding: 0;
      margin: 0;
    }
    li:not(:first-child) {
      margin-top: 0.8em;
    }
    ul li a {
      color: #a7a7a7;
      text-decoration: none;
    }
    ul li a:hover {
      color: black;
    }
    .about p {
      text-align: justify;
      line-height: 2;
      margin: 0;
    }
    input,
    button {
      font-size: 1em;
      padding: 1em;
      width: 100%;
      border-radius: 5px;
      margin-bottom: 5px;
    }
    button {
      background-color:black;
      color: #ffffff;
    }
    div.social {
      display: flex;
      justify-content: space-around;
      font-size: 2.4em;
      flex-direction: row;
      margin-top: 0.5em;
    }
    .social i {
      color: #bac6d9;
    }
    .copyright {
      padding: 0.3em 1em;
      background-color: #25262e;
    }
    .footer-menu{
      float: left;
        margin-top: 10px;
    }
    .footer-menu a{
      color: #cfd2d6;
      padding: 6px;
      text-decoration: none;
    }
    .footer-menu a:hover, .social i:hover{
      color:black;
    }
    .copyright p {
      font-size: 0.9em;
      text-align: right;
    }
    

    </style>
  </head>
  <body>
    <div class="user">
    <span><?php
        echo $_POST['username']
      ?></span>
      <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" class="imgus" >
        
    </div> 
    
    <img src="crown.png" style="position: absolute;
    left: 60px;
    height: 50px;
    margin-top: -10px; 
    margin-left: 45px; ">
    <h3><header style=" position: static;
      padding-top: -30px;
      padding-right: 20px;
      padding-left: 50px;
      display: flex;
      justify-content: space-between; 
      align-items: center;
      font-family: 'Times New Roman', Times, serif;
      color:black;">
        <a href="home.php" class="logo">NIK</a>
        <a href="bed.html" class="menusbut">Bed</a>
        <a href="dining.html" class="menusbut">Dining</a>
        <a href="sofa.html" class="menusbut">Sofa</a>
        <a href="homedecor.html" class="menusbut">HomeDecor</a>
        <a href="office.html" class="menusbut">Office</a>
        <a href="studyroom.html" class="menusbut">StudyRoom</a>
        <a href="newarraival.html" class="menusbut">NewArrival</a>
    </header></h3>
    
      <a href="newarraival.html">
        <img
        style="padding-top: 0px;
        padding-left: 50px;
        width: 100%;
        height: 400px;
        margin-left: -40px;
        opacity: 0.8;"
        src="https://images.milledcdn.com/2022-09-23/9y8jDud-_kUI6U0K/Dm1YV8XdX6Tt.gif"/>

      </a>
      
    
    <div class="country">
      <marquee direction="left" scrolldelay="1" style="font-size: 30px;"><h2>TRAVEL WITH NIK ACROSS THE GLOBE</h2></marquee>
      <h6></h6>
    </div>
    <div class="selection">
      <div class="seperate">
        <a href="bed.html" target="_blank"><img
            class="flag"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAw1BMVEUAM6D///////75//cEMqKnuNkAM54AEY8DMaQALJ5gdq0ENaIAIZmzw+X//vsAMKD6//wAPpuUpcYAJZoBNJwAHoz0/P/p6ek6UqBKYagAK5Hz/fwAKZPj7/v//P////moutrl6ubq5+fw8O1FXakANJiattuXrdEAL6cAKYQvTZZGV64AJKYAI4hecK5ddqpziKqBjrlfeqSQn8SXoczj9/8AG4b+//ARN40AP5wAKHoxVJ9GY505VJNNYJ4AJ7AAD4/2q5c4AAAET0lEQVR4nO3de1ebSBzG8QHHkTQsxILGGgLmwkpca3p3t91e3v+rKrGeusmD5bcn7YRpno//UI9Dz/lC4gkzoOqLGHU2m0yHG2bzINVatgeHqL4Sic883wPPenUT2Q7c8X+aDNhkHZsgNkFsgtgEsQliE8QmiE0QmyA2QWyC2ASxCdqqiVGBQ+WsNKl/QqcmjvX9V9zlzfofVs4TrU1qZP9PB1g5T8ogODkJEzeEYWKlSZX+eeiOSyuvnWoxKiJ/xfO/6+zmzEaTuMxGEQ7uqqGNJkHdpOGif1exCWITxCaITRCbIDZBbILYBLEJYhPEJohNEJsgaROz7bUCp5qYB+rxzdV5UsBof27SIG3bgwr0+ag4iAbdF0VR4U9U3BNJrrwCj/VfYXUtGf38NLdxhH+Oobp5IrJ84RXw4vFfLl8tXwkG37x+89QZr9VMms/HQ30rHfv2XW/X1+OlwiRRE9HrvCgKD5v4ee5FeesOvGKclasJpeDu6043N/UdNRUe6oHX8IvH96JC8E5RjBOjUmeoobDJNqJxJvqN3w19NgFsgtgEsQliE8QmiE0QmyA2QWyC2ASxCWITxCbIVpMkdoeWX3u8xaWLeCX/EW//Lo9d8c+xOj/PzgWOrrw8ggv388VJ1j48zN6PpPU6YKh0UGs/n6oPg4Ym/5ZBWgpOxoVbcxmyecA0++j5+FL5lFzHQevgoHo/OigiV0zvLx2bFsHnM69h0utTT5eqbWx6rBenkTsnyvDbkdRtUvOxYS7De1apMmgdbKrnbr2fWJhD/03XFXCtBZuwyTo2QWyC2ASxCWITxCbIShNlshF+pu4sK03KKht5/q4/7kr41pqoukk92O8+e+eJChYjv9h+Ra8lExtNTLpw6VqBlXvz659YPlnK1ibv3vLGzrODdCZbwd4NfJ4S4DOmEJsgNkFsgtgEsQliE8QmiE0QmyA2QWyC2ARJm2y11sIxfRWIPPI3ieaVrrRsDw4R3vZrrj80NPHnaRof/7obfXdE+AyHOLlqWg477/Uq4UMg3BELn+GwXL5oWh/78hdfG92JG/k66iIfbDa5FS+kdslstd5eMBkU5YMix7WgUR7dP0D4xzNJ289GWeN5U/E9CKunEzd+f6tj0kVDK/dluIVNEJsgNkFsgtgEsQliE8QmiE0QmyA2QWyC2ASxCWITNFTjU1o3VuERffeldhS234K+b2Ld+rSBPcTzZM23R5MI1xXsEfFaiz3CJohNEJsgNkFsgtgEsQliE8Qi6D/niVaamyt9fi7epIz67ZZB/wR8R9nUV9kJrcvU4R+07lC+ZnhvzDi/AzjnhdgEsQliE8QmiE0QmyA2QWyC2ASxCWITxCaITRCboKGaHNC6iZru+rB0zlRdXlwc0oOLi0uVhLQuUX3DqcANnPMCXGuB2ASxCWITxCaITRCbIDZBbILYBLEJYhPEJohNEJsgNgGmbsIoD/o10/8KR9MHcoVKD1IAAAAASUVORK5CYII="></a>
      </div>
      <div class="seperate">
        <a href="bed.html" target="_blank"><img
            class="flag"
            src="data:image/jpeg;base64,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"></a>
      
      </div>
      <div class="seperate">
        <a href="bed.html" target="_blank"><img
            class="flag"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASIAAACuCAMAAAClZfCTAAAAElBMVEUAAAD/zgDdAADnAADaAAD/2AAtsSEoAAAA+ElEQVR4nO3QMQGAMAAEsYeCf8tIuI0pkZANAAAAAAAAAAAAAAAAAAAAgB8dwm6CoqQoKUqKkqKkKClKipKipCgpSoqSoqQoKUqKkqKkKClKipKipCgpSoqSoqQoKUqKkqKkKClKipKipCgpSoqSoqQoKUqKkqKkKClKipKipCgpSoqSoqQoKUqKkqKkKClKewh7CbsIipKipCgpSoqSoqQoKUqKkqKkKClKipKipCgpSoqSoqQoKUqKkqKkKClKipKipCgpSoqSoqQoKUqKkqKkKClKipKipCgpSoqSoqQoKUqKkqKkKClKipKipCgpSoqSoqQoKUofMGTNC8HkSxoAAAAASUVORK5CYII="></a>
      
      </div>
      <div class="seperate">
        <a href="bed.html" target="_blank"><img
            class="flag"
            src="https://cdn.britannica.com/78/6078-004-77AF7322/Flag-Australia.jpg">
      </div>
      <div class="seperate">
        <a href="bed.html" target="_blank"><img
            class="flag"
            src="data:image/png;base64,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"></a>
       
      </div>
      <div class="imagesarrange">
        
        <div class="imageselection">
          <a href="bed.html"><img class="imgslct" src="https://hips.hearstapps.com/hmg-prod/images/dark-bedroom-ideas-1661610843.jpg"></a>
        </div>
        <div class="imageselection">
          <a href="homedecor.html"><img class="imgslct" src="https://www.europeanbusinessreview.com/wp-content/uploads/2021/12/Home-Improvement.jpg"></a>
        </div>
        <div class="imageselection">
          <a href="sofa.html"><img class="imgslct" src="https://img.freepik.com/premium-photo/classic-sofas-vintage-splendor-legendary-seating_893610-6341.jpg"></a>
        </div>
        <div class="imageselection">
          <a href="dining.html"><img class="imgslct" src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/home-improvement/wp-content/uploads/2023/03/pink-dining-room-with-green-chairs.jpeg-e1680261992551.jpg"></a>
        </div>
        <div class="imageselection">
          <a href="office.html"><img class="imgslct" src="https://images.adsttc.com/media/images/54bd/bf6e/e58e/ceef/7000/002d/large_jpg/portada_VIEW_OF_UPPER_WORKSPACE_FROM_ENTRANCE.jpg?1421721386"></a>
        </div>
        <div class="imageselection">
          <a href="newarraival.html"><img class="imgslct" src="https://image.architonic.com/pfm3-3/20209358/brazil-stool-1-ar9a5977-fam-g-arcit18.jpg"></a>
        </div>
      </div>
      <div>
        <img class="img1" style="width: 100%;
        height: 300px;
        width: 1500px;
        margin-left: -120px;" src="https://www.ulcdn.net/media/Collection/listings/Expert_callback_LP_Mob.gif?1701321866">
      </div>
      <div class="container">
      <div class="row primary">
        <div class="column about">
          <h3 style="color: black;">Connect</h3>
          <p>
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            Indiranagar,Bengaluru
          </p>
          <div class="social">
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-twitter-square"></i>
            <i class="fa fa-linkedin-square"></i>
            <i class="fa fa-instagram"></i>
          </div>
        </div>
      
        <div class="column link">
          <h3 style="color: black;">Links</h3>
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#blogs">Blogs</a></li>
            <li><a href="#support">Support</a></li>
          </ul>
        </div>
      
        <div class="column subscribe">
          <h3 style="color: black;">Newsletter</h3>
          <div>
            <input type="email" placeholder="E-mail">
            <button>Subscribe</button>
          </div>
        </div>
      </div>
      <div class="row copyright">
        <div class="footer-menu">
      
        <a href="home.html">Home</a>
        <a href="">F.A.Q</a>
        <a href="">Cookies Policy</a>
        <a href="">Terms Of Service</a>
        <a href="">Support</a>
      </div>
        <p>Copyright &copy; 2022</p>
      </div>
    </div>
  </body>
</html> 
