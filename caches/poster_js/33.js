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
	new_element.src="http://bjshenniao.zhifa.cc/index.php?m=poster&c=index&a=show&siteid="+this.SiteID+"&spaceid="+this.ADID+"&id="+this.PosID; 
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
 
var cmsAD_33 = new PCMSAD('cmsAD_33'); 
cmsAD_33.PosID = 33; 
cmsAD_33.ADID = 36; 
cmsAD_33.ADType = "images"; 
cmsAD_33.ADName = "专题广州院部banner"; 
cmsAD_33.ADContent = "{'Images':[{'imgADLinkUrl':'','imgADAlt':'','ImgPath':'http://bjshenniao.zhifa.cc/uploadfile/2015/0320/20150320052029484.jpg'}],'imgADLinkTarget':'New','Count':'1','showAlt':'Y'}"; 
cmsAD_33.URL = "http://bjshenniao.zhifa.cc/index.php?m=poster&c=index"; 
cmsAD_33.SiteID = 1; 
cmsAD_33.Width = 1660; 
cmsAD_33.Height = 504; 
cmsAD_33.UploadFilePath = ''; 
cmsAD_33.ShowAD();

var isIE=!!window.ActiveXObject; 
if (isIE){

	if (document.readyState=="complete"){
		cmsAD_33.Stat();
	} else {
		document.onreadystatechange=function(){
			if(document.readyState=="complete") cmsAD_33.Stat();
		}
	}
} else {
	cmsAD_33.Stat();
}