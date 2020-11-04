<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::welcome Helious Energy::</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<link rel="stylesheet" href="menu/menu_styles.css" type="text/css" />
<script type="text/javascript" src="menu/script.js"></script>
<style type="text/css">
<!--
.style11 {color: #0B3E91;
	font-size: 13px;
	font-weight: bold;
}
.style12 {font-weight: bold}
-->
</style>
</head>

<body>
<table width="1020" align="center" cellpadding="0" cellspacing="0">
 <!-- <tr>
    <td align="center">&nbsp;</td>
  </tr>-->
  <tr>
    <td height="100" align="center"><span class="logo_bg">
      <?php include('top.php');?>
    </span></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF"><iframe src="banner.htm" width="1020px" height="339px" scrolling="No" frameborder="0" allowtransparency="true"></iframe></td>
  </tr>
  
  <tr>
    <td align="center" bgcolor="#FFFFFF" height="13"></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF"><table width="1000" border="0" cellpadding="1" cellspacing="1">
      <tr>
        <td><table width="1000" border="0">
          <tr>
            <td width="704" valign="top"><div align="justify">
              <table width="700" border="0">
                <tr>
                  <td height="30"><span class="heading">Welcome to Helious Eternal Energy</span></td>
                </tr>
                <tr>
                  <td  valign="top"><div align="justify"><span class="style12"><img src="images/home.jpg" width="250" height="188" align="right" />Helious Eternal Energy</span> a unit of (HEESCPL) is working dedicatedly in the field of Green Energy sources/Renewable Energy Sources since from the date of inception at Odisha. India. Helious Energy is a vertically integrated end to end alternative energy services provider & actively operational throughout India having highly qualified Technologists, Technicians, well experienced professional in all areas of operation which the company is focus on not only in Green energy systems but also in other sectors like : alternative source of energy, Electrical energy, Construction in heavy volume( Electrical & Civil), software developments, out sourcing projects & Manufacturing units etc .Helious Eternal Energy Solution & Construction Pvt Ltd having associated with many companies like: Hindustan Green Power Solutions Pvt Ltd, Onenergy, </div>
                    <div align="justify"></div></td>
                </tr>
                <tr>
                  <td  valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td  valign="top"><table width="690" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><script type="text/javascript">

/***********************************************
* Conveyor belt slideshow script- &copy; Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/


//Specify the slider's width (in pixels)
var sliderwidth="690px"
//Specify the slider's height
var sliderheight="98px"
//Specify the slider's slide speed (larger is faster 1-10)
var slidespeed=2
//configure background color:
slidebgcolor="#"

//Specify the slider's images
var leftrightslide=new Array()
var finalslide=''
leftrightslide[10]='<img src="images/scroll1.jpg" border=0 width="115" height="98"></a>'
leftrightslide[11]='<img src="images/scroll2.jpg" border=0 width="115" height="98"></a>'
leftrightslide[12]='<img src="images/scroll3.jpg" border=0 width="115" height="98"></a>'
leftrightslide[13]='<img src="images/scroll4.jpg" border=0 width="115" height="98"></a>'
leftrightslide[14]='<img src="images/scroll5.jpg" border=0 width="115" height="98"></a>'
leftrightslide[15]='<img src="images/scroll6.jpg" border=0 width="115" height="98"></a>'
leftrightslide[16]='<img src="images/scroll7.jpg" border=0 width="115" height="98"></a>'
leftrightslide[17]='<img src="images/scroll8.jpg" border=0 width="115" height="98"></a>'
leftrightslide[0]='<img src="images/scroll9.jpg" border=0 width="115" height="98"></a>'
leftrightslide[1]='<img src="images/scroll12.jpg" border=0 width="115" height="98"></a>'
leftrightslide[2]='<img src="images/scroll13.jpg" border=0 width="115" height="98"></a>'





//Specify gap between each image (use HTML):
var imagegap=" "

//Specify pixels gap between each slideshow rotation (use integer):
var slideshowgap=5


////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=slidespeed
leftrightslide='<nobr>'+leftrightslide.join(imagegap)+'</nobr>'
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-115px;left:-9000px">'+leftrightslide+'</span>')
var actualwidth=''
var cross_slide, ns_slide

function fillup(){
if (iedom){
cross_slide=document.getElementById? document.getElementById("test2") : document.all.test2
cross_slide2=document.getElementById? document.getElementById("test3") : document.all.test3
cross_slide.innerHTML=cross_slide2.innerHTML=leftrightslide
actualwidth=document.all? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth
cross_slide2.style.left=actualwidth+slideshowgap+"px"
}
else if (document.layers){
ns_slide=document.ns_slidemenu.document.ns_slidemenu2
ns_slide2=document.ns_slidemenu.document.ns_slidemenu3
ns_slide.document.write(leftrightslide)
ns_slide.document.close()
actualwidth=ns_slide.document.width
ns_slide2.left=actualwidth+slideshowgap
ns_slide2.document.write(leftrightslide)
ns_slide2.document.close()
}
lefttime=setInterval("slideleft()",30)
}
window.onload=fillup

function slideleft(){
if (iedom){
if (parseInt(cross_slide.style.left)>(actualwidth*(-1)+8))
cross_slide.style.left=parseInt(cross_slide.style.left)-copyspeed+"px"
else
cross_slide.style.left=parseInt(cross_slide2.style.left)+actualwidth+slideshowgap+"px"

if (parseInt(cross_slide2.style.left)>(actualwidth*(-1)+8))
cross_slide2.style.left=parseInt(cross_slide2.style.left)-copyspeed+"px"
else
cross_slide2.style.left=parseInt(cross_slide.style.left)+actualwidth+slideshowgap+"px"

}
else if (document.layers){
if (ns_slide.left>(actualwidth*(-1)+8))
ns_slide.left-=copyspeed
else
ns_slide.left=ns_slide2.left+actualwidth+slideshowgap

if (ns_slide2.left>(actualwidth*(-1)+8))
ns_slide2.left-=copyspeed
else
ns_slide2.left=ns_slide.left+actualwidth+slideshowgap
}
}


if (iedom||document.layers){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
if (iedom){
write('<div style="position:relative;width:'+sliderwidth+';height:'+sliderheight+';overflow:hidden">')
write('<div style="position:absolute;width:'+sliderwidth+';height:'+sliderheight+';background-color:'+slidebgcolor+'" onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed">')
write('<div id="test2" style="position:absolute;left:0px;top:0px"></div>')
write('<div id="test3" style="position:absolute;left:-1150px;top:0px"></div>')
write('</div></div>')
}
else if (document.layers){
write('<ilayer width='+sliderwidth+' height='+sliderheight+' name="ns_slidemenu" bgColor='+slidebgcolor+'>')
write('<layer name="ns_slidemenu2" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
write('<layer name="ns_slidemenu3" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
write('</ilayer>')
}
document.write('</td></table>')
}
}
                      </script></td>
  </tr>
</table></td>
                </tr>
              </table>
              <br />
            </div></td>
            <td width="286" align="right" valign="top"><table width="245" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="109" valign="top" background="images/rightpannel/top.jpg"><table width="245" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="45" align="center" valign="middle" class="style11"><div align="center">Follow Us </div></td>
                    </tr>
                    <tr>
                      <td height="60"><table width="134" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td><a href="#"><img src="images/rightpannel/faceb.png" width="28" height="21" border="0" /></a></td>
                            <td><a href="#"><img src="images/rightpannel/linkedin.png" width="28" height="21" border="0" /></a></td>
                            <td>&nbsp;</td>
                            <td><a href="#"><img src="images/rightpannel/twt.png" width="29" height="22" border="0" /></a></td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="30"></td>
              </tr>
              <tr>
                <td height="260" valign="top" background="images/rightpannel/midbg.jpg"><?php include('address.php');?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="13"></td>
      </tr>
     
    </table></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#B7B3B3" height="1"></td>
  </tr>
  <tr>
    <td height="35" align="center" bgcolor="#E5E5E5"><?php include('footer.php');?></td>
  </tr>
</table>
</body>
</html>
