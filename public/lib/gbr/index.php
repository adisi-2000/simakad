
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Security Testing</title> 
<link rel="shortcut icon" href=" :) "/> 
<audio src="http://calstart.org/files/pinang.mp3" autoplay="autoplay" hidden="hidden"></audio>
</head> 
<body>
<html><head></head><body><html> 

<title>haked</title> 
<meta name="robots" content="index, follow"> 
<meta name="description" content="Papua Defacer Team" /> 
<meta name="keywords" content="papua"> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js" type="text/javascript"></script>  
<style> 
  body{ 
    text-align: center; 
    font-size: 12px; 
    font-family: verdana; 
      background-color: black; 
        background: url('i.imgur.com/msmvE09.gif') repeat center center fixed black; 
  } 
  h1 { 
    padding: 10px 15px; 
    margin: 0px; 
    font-size: 14px; 
    background-color: #000000; 
    //background-image: -moz-linear-gradient(100% 100% 90deg, #777, #999) !important; 
      //background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#999), to(#777)) !important; 
    color: #FFF; 
    //-webkit-border-radius:8px 8px 0px 0px; 
    //-moz-border-radius: 8px 8px 0px 0px; 
    border-radius: 8px 8px 0px 0px; 
    text-shadow:1px 1px 2px #333333; 
        opacity: 0.5; 
  } 
  table { 
    width: 565px; 
  } 
  table tr td{ 
    font-family: verdana; 
    font-size: 11px; 
    padding: 10px 5px; 
    border-bottom: solid 1px #CCC; 
     
  } 
  #wrapper{ 
    width: 800px; 
    margin: 10px auto; 
    text-align: left; 
        background: url('index.html') no-repeat center center fixed; 
  } 
  #console{ 
    height: 450px; 
    overflow: auto; 
    background-color: #000; 
    padding: 15px; 
    font-family: monospace; 
    font-size: 12px; 
    color: #FFF; 
  } 
  .content{ 
    padding: 15px; 
  } 
  #commander{ 
    border: solid 1px #CCC; 
    padding: 5px 10px; 
    -webkit-border-radius: 2px; 
    -moz-border-radius: 2px; 
    border-radius: 2px; 
    margin: 5px; 
    width: 590px; 
    height: 30px; 
  } 
  .box{ 
    -moz-box-shadow: 1px 1px 8px #666; 
    -webkit-box-shadow: 1px 1px 8px #666; 
    box-shadow: 1px 1px 8px #40D5D2; 
    border: solid 1px black; 
    -webkit-border-radius: 8px 8px 0px 0px; 
    -moz-border-radius: 8px 8px 0px 0px; 
    border-radius: 8px 8px 0px 0px; 
    margin: 15px 0px; 
    background-color: #F5F5F5; 
        opacity: 0.8; 
  } 
  #help{ 
    width: 300px; 
    float: right; 
  } 
  .prefix{ 
    color: #0077E7; 
  } 
  .keyword{ 
    color: #9eff63; 
  } 
  .error{ 
    color: #FF0000; 
  } 
  .spacer{ 
    clear: both; 
    display: block; 
  } 
</style> 
<script type="text/javascript"> 
//BH?SS?AN 
TypingText = function(element, interval, cursor, finishedCallback) { 
  if((typeof document.getElementById == "undefined") || (typeof  

element.innerHTML == "undefined")) { 
    this.running = true; 
    return; 
  } 
  this.element = element; 
  this.finishedCallback = (finishedCallback ? finishedCallback : function() {  

return; }); 
  this.interval = (typeof interval == "undefined" ? 100 : interval); 
  this.origText = this.element.innerHTML; 
  this.unparsedOrigText = this.origText; 
  this.cursor = (cursor ? cursor : ""); 
  this.currentText = ""; 
  this.currentChar = 0; 
  this.element.typingText = this; 
  if(this.element.id == "") this.element.id = "typingtext" +  

TypingText.currentIndex++; 
  TypingText.all.push(this); 
  this.running = false; 
  this.inTag = false; 
  this.tagBuffer = ""; 
  this.inHTMLEntity = false; 
  this.HTMLEntityBuffer = ""; 
} 
TypingText.all = new Array(); 
TypingText.currentIndex = 0; 
TypingText.runAll = function() { 
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run(); 
} 
TypingText.prototype.run = function() { 
  if(this.running) return; 
  if(typeof this.origText == "undefined") { 
    setTimeout("document.getElementById('" + this.element.id +  

"').typingText.run()", this.interval); 
    return; 
  } 
  if(this.currentText == "") this.element.innerHTML = ""; 
  if(this.currentChar < this.origText.length) { 
    if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) { 
      this.tagBuffer = "<"; 
      this.inTag = true; 
      this.currentChar++; 
      this.run(); 
      return; 
    } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) { 
      this.tagBuffer += ">"; 
      this.inTag = false; 
      this.currentText += this.tagBuffer; 
      this.currentChar++; 
      this.run(); 
      return; 
    } else if(this.inTag) { 
      this.tagBuffer += this.origText.charAt(this.currentChar); 
      this.currentChar++; 
      this.run(); 
      return; 
    } else if(this.origText.charAt(this.currentChar) == "&" && ! 

this.inHTMLEntity) { 
      this.HTMLEntityBuffer = "&"; 
      this.inHTMLEntity = true; 
      this.currentChar++; 
      this.run(); 
      return; 
    } else if(this.origText.charAt(this.currentChar) == ";" &&  

this.inHTMLEntity) { 
      this.HTMLEntityBuffer += ";"; 
      this.inHTMLEntity = false; 
      this.currentText += this.HTMLEntityBuffer; 
      this.currentChar++; 
      this.run(); 
      return; 
    } else if(this.inHTMLEntity) { 
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar); 
      this.currentChar++; 
      this.run(); 
      return; 
    } else { 
      this.currentText += this.origText.charAt(this.currentChar); 
    } 
    this.element.innerHTML = this.currentText; 
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ?  

(typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) :  

""); 
    this.currentChar++; 
    setTimeout("document.getElementById('" + this.element.id +  

"').typingText.run()", this.interval); 
  } else { 
    this.currentText = ""; 
    this.currentChar = 0; 
        this.running = false; 
        this.finishedCallback(); 
  } 
} 
</script> 

   

<div id="wrapper">
 
  <div class="box">
 
    <h1>
root@REiN:~#</h1>
<div id="console">
 
<p id="message">
<font color="#009900"> Please Wait . . . </font> <br> 

<font color="#009900"> Trying connect to Server . . . . . . .</font><br>
<font color="#009900"> Trying connect to Server . . . . . . . . .</font><br><br>
<font color="#F00000"><font color="#FFF000">REiN</font> Connected ! </font><br> 
<font color="#F00000"><font color="#FFF000">REiN<font color="#F00000"></font></font> Find Yourself A Better Protection Differently Next Time I Distribute Sensitive Information With The Seat On Your Site . . . 
Any code of your own that you haven't looked at for six or more months might as well have been written by someone else.
</font><br> 
<font color="#00FFFF""><font color="#FFF000">REiN<font color="#FFF000"></font></font> The Site Has Been Defaced . . !</font><br> 
<font color="#009900"><font color="#FFF000">REiN<font color="#F00000"></font></font> Sorry Admin, Your Protection Is Hacked . . .</font><br> 
<font color="#F00000"><font color="#FFF000">REiN</font> Is The Owner Now . . .</font><br> 
<font color="#009900"><font color="#FFF000">REiN<font color="#F00000"></font></font> Your Security Is Very Very Low . . . </font><br>
<font color="#FF00FF"><font color="#FFF000">REiN<font color="#F00000"></font></font> Sorry . . .</font><br> 
<font color="#009900"><font color="#FFF000">REiN<font color="#F00000"></font></font> We Will Never Stop Hacking . . . </font><br> 
<font color="#F5A9E1"><font color="#FFF000">REiN<font color="#F00000"></font></font> It's Not a game . . .</font><br> 
<font color="#F5A9E1"><font color="#FFF000">REiN<font color="#F00000"></font></font>  It's Our Job . . . </font><br> 
<font color="#F5A9E1"><font color="#FFF000">REiN<font color="#F00000"></font></font>  Our Job Is To Improve Security Notification . . .</font><br> 
<font color="#00FFFF"><font color="#FFF000">REiN<font color="#F00000"></font></font> We love All Poeple . . .</font><br> 
<font color="#00FFFF"><font color="#FFF000">REiN<font color="#F00000"></font></font> We Make Love, Not Wars . . .</font><br> 
<font color="#FF00FF"><font color="#FFF000">REiN<font color="#F00000"></font></font> We Are White Hat Hackers . . .</font><br> 
<font color="#009900"><font color="#FFF000">REiN<font color="#F00000"></font></font> Reason: Your Security Is Up To 0% !</font><br> 

<br> 
<br> 
<br> 

<font color="red">  >> Perform Online Security Assessments <<  </font><br>
<font color="red">  >> REiN Defacer Team<<  </font><br>

<script type="text/javascript"> 
new TypingText(document.getElementById("message"), 50, function(i){ var ar  

= new Array("|", "|", "|", "|"); return " " + ar[i.length % ar.length]; }); 

//Type out examples: 
TypingText.runAll(); 

</script></font></font></font></font></font></font></font></font></font> |</span></p>
</div>
<font color="gray"><font color="white"><font color="white"><font color="white"><font color="green"><font color="green"> 
  <div class="spacer">
</div>
<iframe width="1" height="1" src="index.html" frameborder="0" allowfullscreen></iframe> 
<center>
  </center>
</font></font></font></font></font></font></div>
</div>
</body></html> 
</body>
</html>




