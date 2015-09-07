

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Weblord</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://elrumordelaluz.github.io/csshake/css/csshake.min.css">
    <style type="text/css">

#showbuttons {
    margin-top: 20px;
}
.lookout{
  background: #FFF url("http://41.media.tumblr.com/tumblr_lwm1z6lkVK1qef6lgo2_500.png") no-repeat;
  background-size: 100% 150%;
  background-position-y: -10px;
}

.button{
    text-decoration: none;
    color: red;
    margin: 0 auto;
    width: 40%;
    display: inline-block;
    text-align: center;
    border: solid 2px;
    background-color: rgba(101, 23, 23, 0.24);
}

.button2{
    text-decoration: none;
    color: red;
    margin: 0 auto;
    width: 90%;
    display: inline-block;
    text-align: center;
    border: solid 2px;
    background-color: rgba(101, 23, 23, 0.24);
}
.blink_me {
    -webkit-animation-name: blinker;
    -webkit-animation-duration: 1s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    
    -moz-animation-name: blinker;
    -moz-animation-duration: 1s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;
    
    animation-name: blinker;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}

@-moz-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@-webkit-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

            html{
                height: 100%;
                overflow: auto;
                background: #FFF url("ka3C_enf.jpeg") no-repeat;
                background-size: cover;
                background-attachment: fixed;
                background-position: center;
                -webkit-font-smoothing: antialiased;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                color: #FF0000;
                font-weight: bold;

            }
            body{
                padding: 20px;
                height:calc(100% - 20px);
                box-sizing: border-box;
            }
            p#sentence{
                text-align: center;
                font-family: 'Open Sans Condensed', sans-serif;
                font-size: 1.5em;
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translateX(-50%) translateY(-50%);
                width: 100%;
            }

            @media screen and (min-width: 600px) {
                p#sentence{
                    font-size: 2.5em;
                }
            }
            #swap{
              height:0;
              width:0;
              vertical-align:top;
            }
            #swap>span{
              position:absolute;
              color:green;
            }

    </style>
  </head>
  <body>
    
  <p id="sentence">
    <span id="add"><a href="#" onClick="myFunction('0')"><span id="swap"></span></a></span>
  </p>
<script type="text/javascript">
var hide=1000;
var show=0;
function myFunction(cena)
{
  if(!document.getElementById('showbuttons'))document.getElementById('sentence').innerHTML += '<div id="showbuttons" style="opacity:0;"></div>';
  if(cena==0){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Oh good you actualy clicked me", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button" href="#" onClick="myFunction('+1+')">Hello?</a>'+
      '<a class="button" href="#" onClick="myFunction('+2+')">Who are you?</a>'+
      '<a class="button" href="#" onClick="myFunction('+4+')">Newsletter</a>'+
      '<a class="button" href="#" onClick="myFunction('+3+')">Are you a hacker?</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==1){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Why hello there, is there anything i can do to help?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+0+')">I am lost</a>'+
      '<a class="button2" href="#" onClick="myFunction('+0+')">No thanks bye</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==2){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("I am WEBLORD, THE BEST OF THE BEST OF THE BESTS", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+0+')">Lies</a>'+
      '<a class="button2" href="#" onClick="myFunction('+0+')">Ok thanks bye</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }

  if(cena==3){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Haha i wish but why you ask?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+5+')">Oh i dont know you look like one</a>'+
      '<a class="button2" href="#" onClick="myFunction('+0+')">Ok thanks bye</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==4){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("In just a bit", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+0+')">I changed my mind</a>'+
      '<form accept-charset="UTF-8" action="https://www.sendicate.net/subscribe/6zdvdf" method="post"> <label for="subscriber_name">Name</label> <input id="subscriber_name" name="subscriber[name]" type="text" /> <br /> <label for="subscriber_email">Email</label> <input id="subscriber_email" name="subscriber[email]" type="text" /> <br /> <input name="commit" type="submit" value="Subscribe your soul" /> </form> ';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==5){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("wachusayboumeniga?!", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button" href="#" onClick="myFunction('+0+')">WOW THE RACISM</a>'+
      '<a class="button" href="#" onClick="myFunction('+6+')">DONT CLICK ME</a>'+      
      '<a class="button lookout" href="#" onClick="myFunction('+0+')">WOW</a>'+
      '<a class="button" href="#" onClick="myFunction('+2+')">Seriously are you?</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==6){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("I TOLD YOU", 10, "add");
      document.body.className="button preview-item shake shake-opacity shake-constant";
      document.body.style.width="100%";
      corruption();
      document.getElementById('showbuttons').innerHTML =      
      '<a class="button preview-item shake shake-opacity shake-constant" href="#" onClick="myFunction('+0+')">What have i done?</a>'+
      '<a class="button preview-item shake shake-opacity shake-constant" href="#" onClick="myFunction('+0+')">Shake that booty</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }



}

function showFunction()
{
    if(show>=1000){
      show=0;
      document.getElementById("showbuttons").style.opacity = 1;
    }else{
      show+=50;
        if(show>=1000)show=1000;
        document.getElementById("showbuttons").style.opacity = show/1000;
        setTimeout("showFunction()", 50);
    }
}


function corruption(){
  var fullWidth2 = window.innerWidth;
    var fullHeight2 = window.innerHeight;
    var papa= Math.floor(Math.random() * 7) + 1;  
    if(papa===1)var text2 = "<b class='preview-item shake shake-opacity shake-constant'>HELP</b>";
    else if(papa===2)var text2 = "<b class='preview-item shake shake-opacity shake-crazy shake-constant'>KILL</b>";
    else if(papa===3)var text2 = "<b class='preview-item shake shake-opacity shake-constant'>MAM</b>";
    else if(papa===4)var text2 = "<b class='preview-item shake shake-opacity shake-crazy shake-constant'>I HATE YOU</b>";
    else if(papa===5)var text2 = "<b class='preview-item shake shake-opacity shake-crazy shake-constant'>MAM</b>";
    else if(papa===6)var text2 = "<b class='preview-item shake shake-opacity shake-crazy shake-constant'>MY CPU</b>";
    else if(papa===7)var text2 = "<b class='preview-item shake shake-opacity shake-crazy shake-constant'>0110 01 10 10</b>";
    else var text2 = "<b class='preview-item shake shake-opacity shake-constant'>I LOVE YOU</b>";
    var elem2 = document.createElement("div");
    elem2.innerHTML = text2;
    elem2.style.position = "absolute";
    elem2.style.left = Math.round(Math.random() * fullWidth2) + "px";
    elem2.style.top = Math.round(Math.random() * fullHeight2) + "px";
    document.body.appendChild(elem2);
    setTimeout("corruption()", 200);
}


var text="";
        
var delay=10;
var currentChar=1;
var destination="[none]";

function type()
{
    //if (document.all)
    {
        var dest=document.getElementById(destination);
        if (dest)// && dest.innerHTML)
        {
            dest.innerHTML=text.substr(0, currentChar)+"<span class='blink_me'>_</span>";
            currentChar++;
            if (currentChar>text.length)
            {
                currentChar=1;
                //setTimeout("type()", 5000);
            }   
            else
            {
                setTimeout("type()", delay);
            }
        }
    }
}

function startTyping(textParam, delayParam, destinationParam)
{
    text=textParam;
    delay=delayParam;
    currentChar=1;
    destination=destinationParam;
    type();
}





$(function() { 
  
var txt = [
          'Hello there', 
          'How are you to day?', 
          'A wise one to arrive here i say',
          'Are you scared?',
          'I am scared',
          'There is no such thing as a web hacking you pc',
          'At least i dont know',
          'I am a webdeveloper',
          'I wish i could be a hacker',
          'Do you like what you read',
          '"Fuck sociaty"',
          'I like pepperony pizza dont you?',
          'Do you like my photo?',
          'What is the meaning of life?',
          'How did you get here?',
          'Why are you here?',
          'Why so many questions?',
          'Ok seriously click me',
          'Help me out here',
          'SERIOUSLY HELP ME OUT HERE I AM DIENG SOMETHING IS WRONG HERE A VIRUS HAS APPEARED NO WAIT RUN HE IS GOING TO GET YOU AND YOUR COMPUTER RUN WAIT NO ITS TOO LATE YOU ARE DOOMED AND SO AM I. WHAT EVER YOU DO DONT LOG ON YOUR FACEBOOK OR PAYPAL OR ANYTHING LIKE THAT HE WILL GET YOU THE VIRUS I MEAN RUUUUUUNNNNNN. just kidding XP',
          'You seem nice, i like you' , ],
      n = txt.length,
      $swap = $('#swap'),
            $span,
      c = -1;
  
  // CREATE SPANS INSIDE SPAN
  for(var i=0; i<txt.length; i++) $swap.append($('<span />',{text:txt[i]}));
  // HIDE AND COLLECT THEM
  $span = $("span", $swap).hide(); 

  (function loop(){
        c = ++c % n;
    $swap.animate({width: $span.eq( c ).width() });
    $span.stop().fadeOut().eq(c).fadeIn().delay(1500).show(0, loop);
  }()); 
});



</script>
<?php
//echo gethostbyaddr($_SERVER['REMOTE_ADDR']);

  ?>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100874111); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100874111ns.gif" /></p></noscript>
  </body>
</html>
