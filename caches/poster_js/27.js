function PCMSAD(PID) {
  this.ID        = PID;
  this.PosID  = 0; 
  this.ADID		  = 0;
  this.ADType	  = "";
  this.ADName	  = "";
  this.ADContent = "";
  this.PaddingLeft = 0;
  this.PaddingTop  = 0;
  this.Wspaceidth = 0;
  this.Height = 0;
  this.IsHitCount = "N";
  this.UploadFilePath = "";
  this.URL = "";
  this.SiteID = 0;
  this.ShowAD  = showADContent;
  this.Stat = statAD;
}

function statAD() {
	var new_element = document.createElement("script"); 
	new_element.type = "text/javascript";
	new_element.src="http://www.bjshenniao.cn/index.php?m=poster&c=index&a=show&siteid="+this.SiteID+"&spaceid="+this.ADID+"&id="+this.PosID; 
	document.body.appendChild(new_element);
}

function showADContent() {
  var content = this.ADContent;
  var str = "";
  var AD = eval('('+content+')');
  if (this.ADType == "images") {
	  if (AD.Images[0].imgADLinkUrl) str += "<a href='"+this.URL+'&a=poster_click&sitespaceid='+this.SiteID+"&id="+this.ADID+"&url="+AD.Images[0].imgADLinkUrl+"' target='_blank'>";
	  str += "<img title='"+AD.Images[0].imgADAlt+"' src='"+this.UploadFilePath+AD.Images[0].ImgPath+"' width='"+this.Width+"' height='"+this.Height+"' style='border:0px;'>";
	  if (AD.Images[0].imgADLinkUrl) str += "</a>";
  }else if(this.ADType == "flash"){
	  str += "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='"+this.Width+"' height='"+this.Height+"' id='FlashAD_"+this.ADID+"' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0'>";
	  str += "<param name='movie' value='"+this.UploadFilePath+AD.Images[0].ImgPath+"' />"; 
      str += "<param name='quality' value='autohigh' />";
      str += "<param name='wmode' value='opaque'/>";
	  str += "<embed src='"+this.UploadFilePath+AD.Images[0].ImgPath+"' quality='autohigh' wmode='opaque' name='flashad' swliveconnect='TRUE' pluginspage='http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash' type='application/x-shockwave-flash' width='"+this.Width+"' height='"+this.Height+"'></embed>";
      str += "</object>";	  
  }
  str += "";
  document.write(str);
}
 
var cmsAD_27 = new PCMSAD('cmsAD_27'); 
cmsAD_27.PosID = 27; 
cmsAD_27.ADID = 30; 
cmsAD_27.ADType = "images"; 
<<<<<<< HEAD
cmsAD_27.ADName = "雍禾视频新闻banner"; 
cmsAD_27.ADContent = "{'Images':[{'imgADLinkUrl':'','imgADAlt':'','ImgPath':'http://www.bjshenniao.cn/uploadfile/2015/0207/20150207044746638.jpg'}],'imgADLinkTarget':'New','Count':'1','showAlt':'Y'}"; 
=======
cmsAD_27.ADName = "雍禾视频新闻banner "; 
cmsAD_27.ADContent = "{'Images':[{'imgADLinkUrl':'','imgADAlt':'','ImgPath':'http://www.bjshenniao.cn/uploadfile/2015/0207/20150207043713556.jpg'}],'imgADLinkTarget':'New','Count':'1','showAlt':'Y'}"; 
>>>>>>> 23766b7eb7c7b145711b31b202e6802509a035fc
cmsAD_27.URL = "http://www.bjshenniao.cn/index.php?m=poster&c=index"; 
cmsAD_27.SiteID = 1; 
cmsAD_27.Width = 1660; 
cmsAD_27.Height = 530; 
cmsAD_27.UploadFilePath = ''; 
cmsAD_27.ShowAD();

var isIE=!!window.ActiveXObject; 
if (isIE){

	if (document.readyState=="complete"){
		cmsAD_27.Stat();
	} else {
		document.onreadystatechange=function(){
			if(document.readyState=="complete") cmsAD_27.Stat();
		}
	}
} else {
	cmsAD_27.Stat();
}