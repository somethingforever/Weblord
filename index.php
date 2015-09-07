

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
  if(cena==-1){
      if(hide<=1){
        hide=1000;
        document.getElementById("sentence").style.opacity = 1;
        startTyping("Ok, do you have any more questions?", 10, "add");
        document.getElementById('showbuttons').innerHTML = 
        '<a class="button" href="#" onClick="myFunction('+1+')">Hello?</a>'+
        '<a class="button" href="#" onClick="myFunction('+2+')">Who are you?</a>'+
        '<a class="button" href="#" onClick="myFunction('+-3+')">Newsletter</a>'+
        '<a class="button" href="#" onClick="myFunction('+4+')">Are you a hacker?</a>';
        showFunction(0);
      }else{
        hide-=80;
        if(hide<=0)hide=1;
        document.getElementById("sentence").style.opacity = hide/1000;
        setTimeout("myFunction("+cena+")", 50);
      }
  }
  if(cena==0){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Oh good you actualy clicked me", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button" href="#" onClick="myFunction('+1+')">Hello?</a>'+
      '<a class="button" href="#" onClick="myFunction('+2+')">Who are you?</a>'+
      '<a class="button" href="#" onClick="myFunction('+3+')">Newsletter</a>'+
      '<a class="button" href="#" onClick="myFunction('+4+')">Are you a hacker?</a>';
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
      '<a class="button" href="#" onClick="myFunction('+11+')">I am lost</a>'+
      '<a class="button" href="#" onClick="myFunction('+12+')">Tell me a story(will randomize)</a>'+
      '<a class="button" href="#" onClick="myFunction('+13+')">Can i has a hug</a>'+
      '<a class="button" href="#" onClick="myFunction('+-1+')">No thanks, im ok</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==12){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("I love my new kids. Theyll love me too once I remove the duct tape and blindfolds.", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+121+')">Tell me another story(still will randomize)</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Thank you</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==121){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("I know that zombies aren’t real. Unfortunately, that just makes the people eating my family even more terrifying.", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+121+')">Tell me another story(still will randomize and add more storys)</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Thank you</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==13){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("No...", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+13+')">Please</a>'+
      '<a class="button2" href="#" onClick="myFunction('+131+')">Aww ok</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==131){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Aww dont be that way, ill give you a hug", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Yay</a>'+
      '<a class="button2" href="#" onClick="myFunction('+13+')">Can i has another</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==11){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Oh, do you wish for me to find you?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+111+')">Yes please</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">No thanks, im ok</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==111){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("You live in (insert code here)", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+1111+')">HOW DO YOU KNOW THAT?!</a>'+
      '<a class="button2" href="#" onClick="myFunction('+111+')">Are you a spy?(wip)</a>'+
      '<a class="button2" href="#" onClick="myFunction('+111+')">GET OUT OF MY PC?(wip)</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Thank you mister</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==1111){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("A hacker never tells its secreat", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+4+')">So you are a hacker</a>'+
      '<a class="button2" href="#" onClick="myFunction('+11112+')">Im calling the FBI</a>'+
      '<a class="button2" href="#" onClick="myFunction('+1111+')">You hacked me?(wip)</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Lets change the subject</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==11112){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("HAHAHA, what are you going to tell the FBI, what did i do wrong?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+111121+')">You hacked me</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Nothing, nevermind</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==111121){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("No i didnt", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+1111211+')">Yes you did</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Yeah, your right</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==1111211){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("i did not", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+11112111+')">Yes you did</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Yeah, your right</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==11112111){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Seriously no i didnt", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+111121111+')">Yes you did</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Yeah, your right</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==111121111){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("GOD DAM IT, I DID NOT!!", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+1111211111+')">Yes you did</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Yeah, your right</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==1111211111){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Let me explane you, on the web its easy to get the ip from the others internet and browser or device that you used. All i did was that i took a look of your network ip and it gave me more or less the place that you live, it didnt gave me an adress or anything", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+11112111111+')">You still hacked me then</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Im sorry.</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==11112111111){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("No!Stop!Do you really wish for me to hack you or at least scare you a little?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+-1+')">No! oh ok you win, ill stop.</a>'+
      '<a class="button2" href="#" onClick="myFunction('+111121111112+')">I dare you!</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==111121111112){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Ok just download this file and we will see what happends", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Download(not working yet)</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Im too scared, never mind.</a>';
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
      '<a class="button2" href="#" onClick="myFunction('+21+')">Lies</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Ok thanks bye</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }    
  if(cena==21){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("YOU DARE TO INSULT A LORD?!", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+211+')">Yeah</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Wait! No. Im sorry</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  } 
  if(cena==211){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Do you love your kids, wife and dog?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button" href="#" onClick="myFunction('+2111+')">Yeah</a>'+
      '<a class="button" href="#" onClick="myFunction('+211+')">Who?(wip)</a>'+
      '<a class="button" href="#" onClick="myFunction('+211+')">Dog?(wip)</a>'+
      '<a class="button" href="#" onClick="myFunction('+-1+')">Wait! I take it back, sorry</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }  
  if(cena==-211){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Well then!Do you love them", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button" href="#" onClick="myFunction('+2111+')">Yeah</a>'+
      '<a class="button" href="#" onClick="myFunction('+2112+')">Who?</a>'+
      '<a class="button" href="#" onClick="myFunction('+2113+')">Dog?</a>'+
      '<a class="button" href="#" onClick="myFunction('+-1+')">Wait! I take it back, sorry</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==2112){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Y-you arent married?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+-211+')">Yeah</a>'+
      '<a class="button2" href="#" onClick="myFunction('+21122+')">No...</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==21122){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Oh... well do you have a best friend?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+211221+')">Yeah</a>'+
      '<a class="button2" href="#" onClick="myFunction('+211222+')">What is a friend?</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==211221){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Well then he will suffer", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button" href="#" onClick="myFunction('+2112211+')">Let him suffer</a>'+
      '<a class="button" href="#" onClick="myFunction('+-1+')">He is a she</a>'+
      '<a class="button" href="#" onClick="myFunction('+-1+')">Do you feel lonely?</a>'+
      '<a class="button" href="#" onClick="myFunction('+-1+')">Wait! I take it back, sorry</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==2112211){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Your an ass you know that?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button" href="#" onClick="myFunction('+-1+')">Yeah</a>'+
      '<a class="button" href="#" onClick="myFunction('+-1+')">Yeah</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
    if(cena==211222){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("That is sad bro", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+2112221+')">Im a girl</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">yeah...</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==2112221){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Ok, that sad sis", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+-1+')">HAHA FOOLED YOU(wip)</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">yeah...</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==2111){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Would you like to see them suffer?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button" href="#" onClick="myFunction('+21111+')">Yeah</a>'+
      '<a class="button" href="#" onClick="myFunction('+21112+')">You woldent dare!</a>'+
      '<a class="button" href="#" onClick="myFunction('+21113+')">Why are you soo mean?</a>'+
      '<a class="button" href="#" onClick="myFunction('+-1+')">Wait! I take it back, sorry</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==21111){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Are you that heartless?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+211111+')">Yeah</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">NO!</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==211111){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Are you stupid?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Yeah</a>'+
      '<a class="button2" href="#" onClick="myFunction('+2111111+')">NO!</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==2111111){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Are you sure?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+2111111+')">Yeah</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">NO!</a>';
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
      startTyping("Here it is", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+-1+')">I changed my mind</a>'+
      '<form accept-charset="UTF-8" action="https://www.sendicate.net/subscribe/6zdvdf" method="post"> <label for="subscriber_name">Name</label> <input id="subscriber_name" name="subscriber[name]" type="text" /> <br /> <label for="subscriber_email">Email</label> <input id="subscriber_email" name="subscriber[email]" type="text" /> <br /> <input name="commit" type="submit" value="Subscribe your soul" /> </form> ';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==-3){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("That is not a question but look", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+-1+')">I changed my mind</a>'+
      '<form accept-charset="UTF-8" action="https://www.sendicate.net/subscribe/6zdvdf" method="post"> <label for="subscriber_name">Name</label> <input id="subscriber_name" name="subscriber[name]" type="text" /> <br /> <label for="subscriber_email">Email</label> <input id="subscriber_email" name="subscriber[email]" type="text" /> <br /> <input name="commit" type="submit" value="Subscribe your soul" /> </form> ';
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
      startTyping("Haha i wish but why you ask?", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+41+')">Oh i dont know you look like one</a>'+
      '<a class="button2" href="#" onClick="myFunction('+-1+')">uhh nevermind</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==41){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("wachusayboumeniga?!", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button" href="#" onClick="myFunction('+411+')">WOW THE RACISM</a>'+
      '<a class="button" href="#" onClick="myFunction('+412+')">DONT CLICK ME</a>'+      
      '<a class="button lookout" href="#" onClick="myFunction('+413+')">WOW(wip)</a>'+
      '<a class="button" href="#" onClick="myFunction('+2+')">Seriously are you?</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==411){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("HEY! Your the one who started", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+-1+')">Im sorry</a>'+
      '<a class="button2" href="#" onClick="myFunction('+4112+')">Oh no i didnt</a>';      
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==4112){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("Oh yes you did", 10, "add");
      document.getElementById('showbuttons').innerHTML = 
      '<a class="button2" href="#" onClick="myFunction('+-1+')">ok, im sorry</a>'+
      '<a class="button2" href="#" onClick="myFunction('+4112+')">Oh no i didnt</a>';      
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }
  if(cena==412){
    if(hide<=1){
      hide=1000;
      document.getElementById("sentence").style.opacity = 1;
      startTyping("I TOLD YOU", 10, "add");
      document.body.className="button preview-item shake shake-opacity shake-constant";
      document.body.style.width="100%";
      corruption();
      document.getElementById('showbuttons').innerHTML =      
      '<a class="button preview-item shake shake-opacity shake-constant" href="#" onClick="myFunction('+-1+')">What have i done?</a>'+
      '<a class="button preview-item shake shake-opacity shake-constant" href="#" onClick="myFunction('+4122+')">Shake that booty</a>';
      showFunction(0);
    }else{
      hide-=80;
      if(hide<=0)hide=1;
      document.getElementById("sentence").style.opacity = hide/1000;
      setTimeout("myFunction("+cena+")", 50);
    }
  }

document.getElementById("_oss_online_page").innerHTML =cena;

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
