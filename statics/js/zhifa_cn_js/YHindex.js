// 原生js方法document.getElementsByClassName在ie8及其以下的兼容性
// 原来方法： document.getElementsByClassName('tabs_div')；
// 这里的调用方法为：getClassNames('tabs_div' , 'div')；
function getClassNames(classStr,tagName){
    if (document.getElementsByClassName) {
        return document.getElementsByClassName(classStr)
    }else {
        var nodes = document.getElementsByTagName(tagName),ret = [];
        for(i = 0; i < nodes.length; i++) {
            if(hasClass(nodes[i],classStr)){
                ret.push(nodes[i])
            }
        }
        return ret;
    }
}
function hasClass(tagStr,classStr){
    var arr=tagStr.className.split(/\s+/ ); //这个正则表达式是因为class可以有多个,判断是否包含
    for (var i=0;i<arr.length;i++){
        if (arr[i]==classStr){
            return true ;
        }
    }
    return false ;
}



function getStyle(obj, name){
    if(obj.currentStyle){
        return obj.currentStyle[name];
    }else{
        return getComputedStyle(obj, false)[name];
    }
}

function startMove(obj, attr, iTarget){
    clearInterval(obj.timer);
    obj.timer=setInterval(function (){
        var cur=0;
        if(attr=='opacity'){
            cur=Math.round(parseFloat(getStyle(obj, attr))*100);
        }else{
            cur=parseInt(getStyle(obj, attr));
        }
        var speed=(iTarget-cur)/6;
        speed=speed>0?Math.ceil(speed):Math.floor(speed);
        if(cur==iTarget){
            clearInterval(obj.timer);
        }else{
            if(attr=='opacity'){
                obj.style.filter='alpha(opacity:'+(cur+speed)+')';
                obj.style.opacity=(cur+speed)/100;
            }else{
                obj.style[attr]=cur+speed+'px';
            }
        }
    }, 30);
}


function content_one(){
    var oDiv = document.getElementById('content_one_ul_main');
    var oUl = document.getElementById('content_one_ul');
    var aLi = oUl.getElementsByTagName('li');

    var oUl2 = document.getElementById('content_one_ul_main_ul');
    var aLi2 = oUl2.getElementsByTagName('li');

    var oContent_one_ul_main_pre = document.getElementById('content_one_ul_main_pre');
    var oContent_one_ul_main_next = document.getElementById('content_one_ul_main_next');
    var now = 0;
    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            now=this.index;
            tab();
        };
    }
    function tab(){
        for(var i=0;i<aLi.length;i++){
            aLi[i].className='';
            aLi2[i].className='';
        }
        aLi[now].className='content_one_ul_activeli';
        aLi2[now].className='content_one_ul_main_ul_activeli';
    }

    oContent_one_ul_main_pre.onclick=function(){
        now--;
        if(now==-1){
            now = aLi.length-1;
        }
        tab();
    };

    oContent_one_ul_main_next.onclick=function(){
        now++;
        if(now==aLi.length){
            now=0;
        }
        tab();
    };

    var timer = setInterval(oContent_one_ul_main_next.onclick,3000); //滚动间隔时间设置
    oDiv.onmouseover = function(){
        clearInterval(timer);
        startMove(oContent_one_ul_main_pre, 'opacity', 100);
        startMove(oContent_one_ul_main_next, 'opacity', 100);
    }
    oDiv.onmouseout = function(){
        timer = setInterval(oContent_one_ul_main_next.onclick,3000); //滚动间隔时间设置
        startMove(oContent_one_ul_main_pre, 'opacity', 0);
        startMove(oContent_one_ul_main_next, 'opacity',0);
    }
}

function content_one2(){
    var oDiv = document.getElementById('content_one_ul_main_list');
    var oUl = document.getElementById('content_one_ul_list');
    var aLi = oUl.getElementsByTagName('li');

    var oUl2 = document.getElementById('content_one_ul_main_ul_list');
    var aLi2 = oUl2.getElementsByTagName('li');

    var oContent_one_ul_main_pre = document.getElementById('content_one_ul_main_pre_list');
    var oContent_one_ul_main_next = document.getElementById('content_one_ul_main_next_list');
    var now = 0;
    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            now=this.index;
            tab();
        };
    }
    function tab(){
        for(var i=0;i<aLi.length;i++){
            aLi[i].className='';
            aLi2[i].className='';
        }
        aLi[now].className='content_one_ul_activeli';
        aLi2[now].className='content_one_ul_main_ul_activeli';
    }

    oContent_one_ul_main_pre.onclick=function(){
        now--;
        if(now==-1){
            now = aLi.length-1;
        }
        tab();
    };

    oContent_one_ul_main_next.onclick=function(){
        now++;
        if(now==aLi.length){
            now=0;
        }
        tab();
    };

    var timer = setInterval(oContent_one_ul_main_next.onclick,3000); //滚动间隔时间设置
    oDiv.onmouseover = function(){
        clearInterval(timer);
        startMove(oContent_one_ul_main_pre, 'opacity', 100);
        startMove(oContent_one_ul_main_next, 'opacity', 100);
    }
    oDiv.onmouseout = function(){
        timer = setInterval(oContent_one_ul_main_next.onclick,3000); //滚动间隔时间设置
        startMove(oContent_one_ul_main_pre, 'opacity', 0);
        startMove(oContent_one_ul_main_next, 'opacity',0);
    }
}
function content_two(){
    var aDiv = getClassNames('content_two_ul_main_div','div');
    var oUl = document.getElementById('content_two_ul');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_two_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}



function content_one_ul2(){
    var oUl = document.getElementById('content_one_ul2');
    var aLi = oUl.getElementsByTagName('li');

    var oDiv = document.getElementById('content_one_ul2_main');
    var aUl = oDiv.getElementsByTagName('ul');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aUl[i].style.display='none';
            }
            aLi[this.index].className='content_one_ul2_activeli';
            aUl[this.index].style.display='block';
        };
    }
}


function content_one_right_ul(){
    var oUl = document.getElementById('content_one_right_ul');
    var aLi = oUl.getElementsByTagName('li');
    var oImg = document.getElementById('content_one_right_ul_next');
    var now = 0;

    oImg.onclick=function(){
        now+=aLi[0].offsetHeight+12;
        for(var i=0;i<aLi.length;i++){
            startMove(aLi[i], 'top', -now);
            if(now>(aLi.length-1)*aLi[0].offsetHeight){
                startMove(aLi[i], 'top', 0);
                now=0;
            }
        }
    };
}

function content_three_main_dl(){
    var oDl = document.getElementById('content_three_main_dl');
    var aDd = oDl.getElementsByTagName('dd');

    var aDiv = getClassNames('content_three_main','div');

    for(var i=0;i<aDd.length;i++){
        aDd[i].index=i;
        aDd[i].onmouseover=function(){
            for(var i=0;i<aDd.length;i++){
                aDiv[i].style.display='none';
            }
            aDiv[this.index].style.display='inline-block';
        };
    }
}

function content_four(){
    var oUl = document.getElementById('content_four_ul');
    var aLi = oUl.getElementsByTagName('li');

    var aDiv = getClassNames('content_four_ul_main','div');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_four_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}

function content_four_ul_main_ul1(){
    var aDiv = getClassNames('content_four_ul_main_left','div');

    var oUl = document.getElementById('content_four_ul_main_ul1');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_four_ul_main_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}

function content_four_ul_main_ul2(){
    var aDiv = getClassNames('content_four_ul_main_left2','div');

    var oUl = document.getElementById('content_four_ul_main_ul2');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_four_ul_main_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}

function content_four_ul_main_ul3(){
    var aDiv = getClassNames('content_four_ul_main_left3','div');

    var oUl = document.getElementById('content_four_ul_main_ul3');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_four_ul_main_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}

function content_four_ul_main_ul4(){
    var aDiv = getClassNames('content_four_ul_main_left4','div');

    var oUl = document.getElementById('content_four_ul_main_ul4');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_four_ul_main_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}

function content_four_ul_main_ul5(){
    var aDiv = getClassNames('content_four_ul_main_left5','div');

    var oUl = document.getElementById('content_four_ul_main_ul5');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_four_ul_main_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}

function content_four_ul_main_ul6(){5
    var aDiv = getClassNames('content_four_ul_main_left6','div');

    var oUl = document.getElementById('content_four_ul_main_ul6');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_four_ul_main_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}

function content_four_ul_main_ul7(){
    var aDiv = getClassNames('content_four_ul_main_left7','div');

    var oUl = document.getElementById('content_four_ul_main_ul7');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_four_ul_main_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}

function content_four_ul_main_ul8(){
    var aDiv = getClassNames('content_four_ul_main_left8','div');

    var oUl = document.getElementById('content_four_ul_main_ul8');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_four_ul_main_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}

function content_seven(){
    var aDiv = getClassNames('content_seven_main_one_ulleft_main','div');
    var oUl = document.getElementById('content_seven_main_one_ulleft');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='content_seven_main_one_ulleft_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}

function centent_eight_div(){
    var oDiv1 = document.getElementById('centent_eight_div');
    var aLi = oDiv1.getElementsByTagName('li');

    var aDiv2 = getClassNames('beijing','div');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv2[i].style.display='none';
            }
            aLi[this.index].className='centent_eight_div_ul_activeli';
            aDiv2[this.index].style.display='block';
        };
    }
}

function zhizirongyu(){
    var oUl = document.getElementById('zhizirongyu_ul');
    var aLi = oUl.getElementsByTagName('li');

    var aUl = getClassNames('zhizirongyu_content_ul','ul');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aUl[i].style.display='none';
            }
            aLi[this.index].className='zhizirongyu_ul_liactive';
            aUl[this.index].style.display='block';
        };
    }
}
/*
function kehuanli(){
    var oPrev = document.getElementById('kehuanli_yhanli_prew');
    var oNext = document.getElementById('kehuanli_yhanli_next');
    var oUldiv = document.getElementById('kehuanli_yhanli_div');
    var oUl = oUldiv.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var cur = 0;
    var prev = 0;
    var next = cur+1;
    var i = 0;

    oUl.style.width=aLi[0].offsetWidth*aLi.length + 'px';
    oPrev.onclick=function(){
        i=3;
        prev--;
        if(prev==-1){
            oUl.style.left=0;
            for(var i=0;i<aLi.length;i++){
                aLi[i].style.left=0;
            }
            prev=aLi.length-1;
            cur=0;
        }
        tab();
    };
    oNext.onclick=function(){
        i=4;
        prev++;
        if(prev==aLi.length){
            oUl.style.left=0;
            for(var i=0;i<aLi.length;i++){
                aLi[i].style.left=0;
            }
            prev=0;
            cur=0;
        }
        tab();
    };
    function tab(){
        next=cur+1;
        cur++;
        if(i==3){
            startMove(oUl, 'left', (next)*aLi[0].offsetWidth);
            aLi[prev].style.left=-(aLi[0].offsetWidth*aLi.length)+'px';
        }else{
            startMove(oUl, 'left', -(next)*aLi[0].offsetWidth);
            if(oUl.offsetLeft<0){
                aLi[cur-2].style.left=(aLi[0].offsetWidth*aLi.length)+'px';
            }
        }
    }
}

function list_right_ul2(){
    var oUl = document.getElementById('list_right_ul2');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
            }
            aLi[this.index].className='list_right_ul2_activeli';
        };
    }
}
 */
function hottujian_dl(){
    var oDl = document.getElementById('hottujian_dl');
    var aDd = oDl.getElementsByTagName('dd');

    for(var i=0;i<aDd.length;i++){
        aDd[i].index=i;
        aDd[i].onmouseover=function(){
            for(var i=0;i<aDd.length;i++){
                aDd[i].className='';
            }
            aDd[this.index].className='hottujian_dl_activedd';
        };
    }
}

function laiyuanluxian(){
    var oUl = document.getElementById('laiyuanluxian');
    var aLi = oUl.getElementsByTagName('li');

    var aUl = getClassNames('laiyuanluxian_main_ul','ul');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aUl[i].style.display='none';
            }
            aLi[this.index].className='laiyuanluxian_activeli';
            aUl[this.index].style.display='block';
        };
    }
}

function xiangguanwenzhang_ul2(){
    var oUl = document.getElementById('xiangguanwenzhang_ul2');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
            }
            aLi[this.index].className='xiangguanwenzhang_ul2_activeli';
        }
    }
}

function gotoTop(min_height){
    //预定义返回顶部的html代码，它的css样式默认为不显示
    var gotoTop_html = '<div id="gotoTop">返回顶部</div>';
    //将返回顶部的html代码插入页面上id为page的元素的末尾
    $("#page").append(gotoTop_html);
    $("#gotoTop").click(//定义返回顶部点击向上滚动的动画
        function(){$('html,body').animate({scrollTop:0},700);
        }).hover(//为返回顶部增加鼠标进入的反馈效果，用添加删除css类实现
        function(){$(this).addClass("hover");},
        function(){$(this).removeClass("hover");
        });
    //获取页面的最小高度，无传入值则默认为600像素
    min_height ? min_height = min_height : min_height = 600;
    //为窗口的scroll事件绑定处理函数
    $(window).scroll(function(){
        //获取窗口的滚动条的垂直位置
        var s = $(window).scrollTop();
        //当窗口的滚动条的垂直位置大于页面的最小高度时，让返回顶部元素渐现，否则渐隐
        if( s > min_height){
            $("#gotoTop").fadeIn(100);
        }else{
            $("#gotoTop").fadeOut(200);
        };
    });
}

function content_two_ul_main_5_left(){
    var oDiv = document.getElementById('content_two_ul_main_5_left');
    var aLi = oDiv.getElementsByTagName('li');
    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
            }
            aLi[this.index].className='content_two_ul_main_5_left_ul_activeli';
        };
    }
}

function content_two_ul_main_5_right_ul(){
    var oUl = document.getElementById('content_two_ul_main_5_right_ul');
    var aLi = oUl.getElementsByTagName('li');
    var aP = getClassNames('marin_5_right_divp','p');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aP[i].style.display='none';
            }
            aP[this.index].style.display='block';
        }
    }
}






var hm = {}; //命名空间
hm.tools = {};
hm.app ={};
hm.ui = {};

hm.tools.getByClass = function(oParent,sClass){
    var aEle = oParent.getElementsByTagName('*');
    var arr = [];
    for(var i=0;i<aEle.length;i++){
        if(aEle[i].className == sClass){
            arr.push(aEle[i]);
        }
    }
    return arr;
};

hm.ui.moveLeft = function(obj,old,now){
    clearInterval(obj.timer);
    obj.timer = setInterval(function(){
        var iSpeed = (now - old)/10;
        iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);
        if(now == old){
            clearInterval(obj.timer);
        }
        else{
            old += iSpeed;
            obj.style.left = old + 'px';
        }
    },30);
};

hm.app.toRun = function(){
    var oRun = document.getElementById('content_two_ul_main_4_right');
    var oUl = oRun.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var oPrev = hm.tools.getByClass(oRun,'content_two_ul_main_4_right_prev')[0];
    var oNext = hm.tools.getByClass(oRun,'content_two_ul_main_4_right_next')[0];
    var iNow = 0;
    oUl.innerHTML += oUl.innerHTML;
    oUl.style.width = aLi.length * aLi[0].offsetWidth + 'px';

    oPrev.onclick = function(){
        if(iNow == 0){
            iNow = aLi.length/2;
            oUl.style.left = -oUl.offsetWidth/2 + 'px';
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow-1)*aLi[0].offsetWidth);
        iNow--;
    };

    oNext.onclick = function(){
        if(iNow == aLi.length/2){
            iNow = 0;
            oUl.style.left = 0;
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow+1)*aLi[0].offsetWidth);
        iNow++;
    };
};

hm.app.toRun2 = function(){
    var oRun = document.getElementById('content_two_ul_main_7_right');
    var oUl = oRun.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var oPrev = hm.tools.getByClass(oRun,'content_two_ul_main_7_right_prev')[0];
    var oNext = hm.tools.getByClass(oRun,'content_two_ul_main_7_right_next')[0];
    var iNow = 0;
    oUl.innerHTML += oUl.innerHTML;
    oUl.style.width = aLi.length * aLi[0].offsetWidth + 'px';

    oPrev.onclick = function(){
        if(iNow == 0){
            iNow = aLi.length/2;
            oUl.style.left = -oUl.offsetWidth/2 + 'px';
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow-1)*aLi[0].offsetWidth);
        iNow--;
    };

    oNext.onclick = function(){
        if(iNow == aLi.length/2){
            iNow = 0;
            oUl.style.left = 0;
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow+1)*aLi[0].offsetWidth);
        iNow++;
    };
};

hm.app.toRun3 = function(){
    var oRun = document.getElementById('content_five_div');
    var oUl = oRun.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var oPrev = hm.tools.getByClass(oRun,'content_five_preivew')[0];
    var oNext = hm.tools.getByClass(oRun,'content_five_next')[0];
    var iNow = 0;
    oUl.innerHTML += oUl.innerHTML;
    oUl.style.width = aLi.length * aLi[0].offsetWidth + 'px';

    oPrev.onclick = function(){
        if(iNow == 0){
            iNow = aLi.length/2;
            oUl.style.left = -oUl.offsetWidth/2 + 'px';
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow-1)*aLi[0].offsetWidth);
        iNow--;
    };

    oNext.onclick = function(){
        if(iNow == aLi.length/2){
            iNow = 0;
            oUl.style.left = 0;
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow+1)*aLi[0].offsetWidth);
        iNow++;
    };
};

hm.app.toRun4 = function(){
    var oRun = document.getElementById('kehuanli');
    var oUl = oRun.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var oPrev = hm.tools.getByClass(oRun,'kehuanli_yhanli_prew')[0];
    var oNext = hm.tools.getByClass(oRun,'kehuanli_yhanli_next')[0];
    var iNow = 0;
    oUl.innerHTML += oUl.innerHTML;
    oUl.style.width = aLi.length * aLi[0].offsetWidth + 'px';

    oPrev.onclick = function(){
        if(iNow == 0){
            iNow = aLi.length/2;
            oUl.style.left = -oUl.offsetWidth/2 + 'px';
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow-1)*aLi[0].offsetWidth);
        iNow--;
    };

    oNext.onclick = function(){
        if(iNow == aLi.length/2){
            iNow = 0;
            oUl.style.left = 0;
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow+1)*aLi[0].offsetWidth);
        iNow++;
    };
};

hm.app.toRun5 = function(){
    var oRun = document.getElementById('slideBox');
    var oUl = oRun.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var oPrev = hm.tools.getByClass(oRun,'slideBox_prev')[0];
    var oNext = hm.tools.getByClass(oRun,'slideBox_next')[0];

    var oDivhd = document.getElementById('hd');
    var oUlhd = oDivhd.getElementsByTagName('ul')[0];
    var aLihd = oUlhd.getElementsByTagName('li');

    var iNow = 0;
    var timer = '';
    oUl.innerHTML += oUl.innerHTML;
    oUl.style.width = aLi.length * aLi[0].offsetWidth + 'px';

    oRun.onmouseout=function(){
        clearInterval(timer);
        timer=setInterval(oNext.onclick,5000);
    };

    oRun.onmouseover=function(){
        clearInterval(timer);
    };

    oPrev.onclick = function(){
        if(iNow == 0){
            iNow = aLi.length/2;
            oUl.style.left = -oUl.offsetWidth/2 + 'px';
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow-1)*aLi[0].offsetWidth);
        iNow--;
        uLlion();
    };

    oNext.onclick = function(){
        if(iNow == aLi.length/2){
            iNow = 0;
            oUl.style.left = 0;
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow+1)*aLi[0].offsetWidth);
        iNow++;
        uLlion();
    };

    function uLlion(){
        for(var i=0;i<aLihd.length;i++){
            aLihd[i].className='';
        }
        if(iNow==aLihd.length){
            aLihd[0].className='on';
        }else{
            aLihd[iNow].className='on';
        }
    }

    for(var i=0;i<aLihd.length;i++){
        aLihd[i].index=i;
        aLihd[i].onmouseover=function(){
            for(var i=0;i<aLihd.length;i++){
                aLihd[i].className='';
            }
            hm.ui.moveLeft(oUl,-(iNow)*aLi[0].offsetWidth,-(this.index)*aLi[0].offsetWidth);
            aLihd[this.index].className='on';
        };
    }
};


hm.app.toRun7 = function(){
    var oRun = document.getElementById('yhsp_conttwo');
    var oUl = oRun.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var oPrev = hm.tools.getByClass(oRun,'yhsp_conttwo_preivew')[0];
    var oNext = hm.tools.getByClass(oRun,'yhsp_conttwo_next')[0];
    var iNow = 0;
    oUl.innerHTML += oUl.innerHTML;
    oUl.style.width = aLi.length * aLi[0].offsetWidth + 'px';

    oPrev.onclick = function(){
        if(iNow == 0){
            iNow = aLi.length/2;
            oUl.style.left = -oUl.offsetWidth/2 + 'px';
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow-1)*aLi[0].offsetWidth);
        iNow--;
    };

    oNext.onclick = function(){
        if(iNow == aLi.length/2){
            iNow = 0;
            oUl.style.left = 0;
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow+1)*aLi[0].offsetWidth);
        iNow++;
    };
};

hm.app.toRun8 = function(){
    var oRun = document.getElementById('ztalleftul');
    var oUl = oRun.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var oPrev = hm.tools.getByClass(oRun,'ztalleftulprive')[0];
    var oNext = hm.tools.getByClass(oRun,'ztalleftulnext')[0];
    var iNow = 0;
    oUl.innerHTML += oUl.innerHTML;
    oUl.style.width = aLi.length * aLi[0].offsetWidth + 'px';

    oPrev.onclick = function(){
        if(iNow == 0){
            iNow = aLi.length/2;
            oUl.style.left = -oUl.offsetWidth/2 + 'px';
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow-1)*aLi[0].offsetWidth);
        iNow--;
    };

    oNext.onclick = function(){
        if(iNow == aLi.length/2){
            iNow = 0;
            oUl.style.left = 0;
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow+1)*aLi[0].offsetWidth);
        iNow++;
    };
};

hm.app.toRun9 = function(){
    var oRun = document.getElementById('ztyhtd_Onediv');
    var oUl = oRun.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var oPrev = hm.tools.getByClass(oRun,'Onedivprev')[0];
    var oNext = hm.tools.getByClass(oRun,'Onedivnext')[0];
    var iNow = 0;
    oUl.innerHTML += oUl.innerHTML;
    oUl.style.width = aLi.length * aLi[0].offsetWidth + 'px';

    oPrev.onclick = function(){
        if(iNow == 0){
            iNow = aLi.length/2;
            oUl.style.left = -oUl.offsetWidth/2 + 'px';
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow-1)*aLi[0].offsetWidth);
        iNow--;
    };

    oNext.onclick = function(){
        if(iNow == aLi.length/2){
            iNow = 0;
            oUl.style.left = 0;
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow+1)*aLi[0].offsetWidth);
        iNow++;
    };
};


hm.app.toRun13 = function(){
    var oRun = document.getElementById('ztzfjs_sixdiv_div');
    var oUl = oRun.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var oPrev = hm.tools.getByClass(oRun,'ztzfjs_preivew')[0];
    var oNext = hm.tools.getByClass(oRun,'ztzfjs_next')[0];
    var iNow = 0;
    oUl.innerHTML += oUl.innerHTML;
    oUl.style.width = aLi.length * aLi[0].offsetWidth + 'px';

    oPrev.onclick = function(){
        if(iNow == 0){
            iNow = aLi.length/2;
            oUl.style.left = -oUl.offsetWidth/2 + 'px';
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow-1)*aLi[0].offsetWidth);
        iNow--;
    };

    oNext.onclick = function(){
        if(iNow == aLi.length/2){
            iNow = 0;
            oUl.style.left = 0;
        }
        hm.ui.moveLeft(oUl,-iNow*aLi[0].offsetWidth,-(iNow+1)*aLi[0].offsetWidth);
        iNow++;
    };
};






function content_two_ul_main_7_right(){
    var oDiv = document.getElementById('content_two_ul_main_7_right');
    var oUl = oDiv.getElementsByTagName('ul')[0];
    var aLi = oUl.getElementsByTagName('li');
    var oDiv2 = document.getElementById('content_two_ul_main_7_right_divmain_div');
    oDiv2.innerHTML += oDiv2.innerHTML;
    var aDiv = getClassNames('content_two_ul_main_7_right_divmain','div');


    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
               aDiv[i].style.display = 'none';
            }
            aDiv[this.index].style.display = 'block';
        };
    }
}



/* 专题案例页面 */
function ztalcont_left(){
    var oUl = document.getElementById('ztalcont_left');
    var aLi = oUl.getElementsByTagName('li');

    var aDiv = getClassNames('ztalcont_right','div');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aDiv[i].style.display='none';
            }
            aDiv[this.index].style.display='block';
        };
    }
}

function ztalrightul(){
    var oUl = document.getElementById('ztalrightul');
    var aLi = oUl.getElementsByTagName('li');

    var aDiv = getClassNames('ztalrightuldiv','div');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='activeztalli';
            aDiv[this.index].style.display='block';
        };
    }
}

function ztalleftul(){
    var oUl = document.getElementById('ztalleftul');
    var aLi = oUl.getElementsByTagName('li');

    var aDiv = getClassNames('ztalleftuldiv','div');

    for(var i=0;i<aLi.length/2;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length/2;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='activeztalli';
            aDiv[this.index].style.display='block';
        };
    }
}


function divmiddleul(){
    var oUl = document.getElementById('divmiddleul');
    var aLi = oUl.getElementsByTagName('li');

    var aDiv = getClassNames('divmiddlediv','div');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='activemiddleulli';
            aDiv[this.index].style.display='block';
        };
    }
}



/* 专题植发团队页面 */
function ztyhtd_Onediv3(){
    var oUl = document.getElementById('ztyhtd_Onediv2');
    var aLi = oUl.getElementsByTagName('li');

    var aDiv = getClassNames('Onediv3_left','div');

    for(var i=0;i<aLi.length/2;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length/2;i++){
                aDiv[i].style.display='none';
            }
            aDiv[this.index].style.display='block';
        };
    }
}



/* 专题植发技术页面  */
function ztzfjs_Threediv_ul(){
    var aDiv = getClassNames('content_two_ul_main_div','div');
    var oUl = document.getElementById('ztzfjs_Threediv_ul');
    var aLi = oUl.getElementsByTagName('li');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className='';
                aDiv[i].style.display='none';
            }
            aLi[this.index].className='ztzfjs_Threediv_ul_activeli';
            aDiv[this.index].style.display='block';
        };
    }
}












var sina = {
    $ : function (objName) {
        if (document.getElementById) {
            return eval('document.getElementById("' + objName + '")')
        } else {
            return eval('document.all.' + objName)
        }
    },
    isIE : navigator.appVersion.indexOf("MSIE") != -1 ? true : false,
    addEvent : function (l, i, I) {
        if (l.attachEvent) {
            l.attachEvent("on" + i, I)
        } else {
            l.addEventListener(i, I, false)
        }
    },
    delEvent : function (l, i, I) {
        if (l.detachEvent) {
            l.detachEvent("on" + i, I)
        } else {
            l.removeEventListener(i, I, false)
        }
    },
    readCookie : function (O) {
        var o = "",
            l = O + "=";
        if (document.cookie.length > 0) {
            var i = document.cookie.indexOf(l);
            if (i != -1) {
                i += l.length;
                var I = document.cookie.indexOf(";", i);
                if (I == -1)
                    I = document.cookie.length;
                o = unescape(document.cookie.substring(i, I))
            }
        };
        return o
    },
    writeCookie : function (i, l, o, c) {
        var O = "",
            I = "";
        if (o != null) {
            O = new Date((new Date).getTime() + o * 3600000);
            O = "; expires=" + O.toGMTString()
        };
        if (c != null) {
            I = ";domain=" + c
        };
        document.cookie = i + "=" + escape(l) + O + I
    },
    readStyle : function (I, l) {
        if (I.style[l]) {
            return I.style[l]
        } else if (I.currentStyle) {
            return I.currentStyle[l]
        } else if (document.defaultView && document.defaultView.getComputedStyle) {
            var i = document.defaultView.getComputedStyle(I, null);
            return i.getPropertyValue(l)
        } else {
            return null
        }
    }
};

//滚动图片构造函数
//UI&UE Dept. mengjia
//080623
function ScrollPic(scrollContId, arrLeftId, arrRightId, dotListId) {
    this.scrollContId = scrollContId;
    this.arrLeftId = arrLeftId;
    this.arrRightId = arrRightId;
    this.dotListId = dotListId;
    this.dotClassName = "dotItem";
    this.dotOnClassName = "dotItemOn";
    this.dotObjArr = [];
    this.pageWidth = 0;
    this.frameWidth = 0;
    this.speed = 10;
    this.space = 10;
    this.pageIndex = 0;
    this.autoPlay = true;
    this.autoPlayTime = 5;
    var _autoTimeObj,
        _scrollTimeObj,
        _state = "ready";
    this.stripDiv = document.createElement("DIV");
    this.listDiv01 = document.createElement("DIV");
    this.listDiv02 = document.createElement("DIV");
    if (!ScrollPic.childs) {
        ScrollPic.childs = []
    };
    this.ID = ScrollPic.childs.length;
    ScrollPic.childs.push(this);
    this.initialize = function () {
        if (!this.scrollContId) {
            throw new Error("必须指定scrollContId.");
            return
        };
        this.scrollContDiv = sina.$(this.scrollContId);
        if (!this.scrollContDiv) {
            throw new Error("scrollContId不是正确的对象.(scrollContId = \"" + this.scrollContId + "\")");
            return
        };
        this.scrollContDiv.style.width = this.frameWidth + "px";
        this.scrollContDiv.style.overflow = "hidden";
        this.listDiv01.innerHTML = this.listDiv02.innerHTML = this.scrollContDiv.innerHTML;
        this.scrollContDiv.innerHTML = "";
        this.scrollContDiv.appendChild(this.stripDiv);
        this.stripDiv.appendChild(this.listDiv01);
        this.stripDiv.appendChild(this.listDiv02);
        this.stripDiv.style.overflow = "hidden";
        this.stripDiv.style.zoom = "1";
        this.stripDiv.style.width = "32766px";
        if(!+[1,]){
            this.listDiv01.style.styleFloat="left";
            this.listDiv02.style.styleFloat="left";}
        else{
            this.listDiv01.style.cssFloat = "left";
            this.listDiv02.style.cssFloat = "left";
        }
        sina.addEvent(this.scrollContDiv, "mouseover", Function("ScrollPic.childs[" + this.ID + "].stop()"));
        sina.addEvent(this.scrollContDiv, "mouseout", Function("ScrollPic.childs[" + this.ID + "].play()"));
        if (this.arrLeftId) {
            this.arrLeftObj = sina.$(this.arrLeftId);
            if (this.arrLeftObj) {
                sina.addEvent(this.arrLeftObj, "mousedown", Function("ScrollPic.childs[" + this.ID + "].rightMouseDown()"));
                sina.addEvent(this.arrLeftObj, "mouseup", Function("ScrollPic.childs[" + this.ID + "].rightEnd()"));
                sina.addEvent(this.arrLeftObj, "mouseout", Function("ScrollPic.childs[" + this.ID + "].rightEnd()"))
            }
        };
        if (this.arrRightId) {
            this.arrRightObj = sina.$(this.arrRightId);
            if (this.arrRightObj) {
                sina.addEvent(this.arrRightObj, "mousedown", Function("ScrollPic.childs[" + this.ID + "].leftMouseDown()"));
                sina.addEvent(this.arrRightObj, "mouseup", Function("ScrollPic.childs[" + this.ID + "].leftEnd()"));
                sina.addEvent(this.arrRightObj, "mouseout", Function("ScrollPic.childs[" + this.ID + "].leftEnd()"))
            }
        };
        if (this.dotListId) {
            this.dotListObj = sina.$(this.dotListId);
            if (this.dotListObj) {
                var pages = Math.round(this.listDiv01.offsetWidth / this.frameWidth + 0.4),
                    i,
                    tempObj;
                for (i = 0; i < pages; i++) {
                    tempObj = document.createElement("span");
                    this.dotListObj.appendChild(tempObj);
                    this.dotObjArr.push(tempObj);
                    if (i == this.pageIndex) {
                        tempObj.className = this.dotClassName
                    } else {
                        tempObj.className = this.dotOnClassName
                    };
                    tempObj.title = "第" + (i + 1) + "页";
                    sina.addEvent(tempObj, "click", Function("ScrollPic.childs[" + this.ID + "].pageTo(" + i + ")"))
                }
            }
        };
        if (this.autoPlay) {
            this.play()
        }
    };
    this.leftMouseDown = function () {
        if (_state != "ready") {
            return
        };
        _state = "floating";
        _scrollTimeObj = setInterval("ScrollPic.childs[" + this.ID + "].moveLeft()", this.speed)
    };
    this.rightMouseDown = function () {
        if (_state != "ready") {
            return
        };
        _state = "floating";
        _scrollTimeObj = setInterval("ScrollPic.childs[" + this.ID + "].moveRight()", this.speed)
    };
    this.moveLeft = function () {
        if (this.scrollContDiv.scrollLeft + this.space >= this.listDiv01.scrollWidth) {
            this.scrollContDiv.scrollLeft = this.scrollContDiv.scrollLeft + this.space - this.listDiv01.scrollWidth
        } else {
            this.scrollContDiv.scrollLeft += this.space
        };
        this.accountPageIndex()
    };
    this.moveRight = function () {
        if (this.scrollContDiv.scrollLeft - this.space <= 0) {
            this.scrollContDiv.scrollLeft = this.listDiv01.scrollWidth + this.scrollContDiv.scrollLeft - this.space
        } else {
            this.scrollContDiv.scrollLeft -= this.space
        };
        this.accountPageIndex()
    };
    this.leftEnd = function () {
        if (_state != "floating") {
            return
        };
        _state = "stoping";
        clearInterval(_scrollTimeObj);
        var fill = this.pageWidth - this.scrollContDiv.scrollLeft % this.pageWidth;
        this.move(fill)
    };
    this.rightEnd = function () {
        if (_state != "floating") {
            return
        };
        _state = "stoping";
        clearInterval(_scrollTimeObj);
        var fill = -this.scrollContDiv.scrollLeft % this.pageWidth;
        this.move(fill)
    };
    this.move = function (num, quick) {
        var thisMove = num / 5;
        if (!quick) {
            if (thisMove > this.space) {
                thisMove = this.space
            };
            if (thisMove < -this.space) {
                thisMove = -this.space
            }
        };
        if (Math.abs(thisMove) < 1 && thisMove != 0) {
            thisMove = thisMove >= 0 ? 1 : -1
        } else {
            thisMove = Math.round(thisMove)
        };
        var temp = this.scrollContDiv.scrollLeft + thisMove;
        if (thisMove > 0) {
            if (this.scrollContDiv.scrollLeft + thisMove >= this.listDiv01.scrollWidth) {
                this.scrollContDiv.scrollLeft = this.scrollContDiv.scrollLeft + thisMove - this.listDiv01.scrollWidth
            } else {
                this.scrollContDiv.scrollLeft += thisMove
            }
        } else {
            if (this.scrollContDiv.scrollLeft - thisMove <= 0) {
                this.scrollContDiv.scrollLeft = this.listDiv01.scrollWidth + this.scrollContDiv.scrollLeft - thisMove
            } else {
                this.scrollContDiv.scrollLeft += thisMove
            }
        };
        num -= thisMove;
        if (Math.abs(num) == 0) {
            _state = "ready";
            if (this.autoPlay) {
                this.play()
            };
            this.accountPageIndex();
            return
        } else {
            this.accountPageIndex();
            setTimeout("ScrollPic.childs[" + this.ID + "].move(" + num + "," + quick + ")", this.speed)
        }
    };
    this.next = function () {
        if (_state != "ready") {
            return
        };
        _state = "stoping";
        this.move(this.pageWidth, true)
    };
    this.play = function () {
        if (!this.autoPlay) {
            return
        };
        clearInterval(_autoTimeObj);
        _autoTimeObj = setInterval("ScrollPic.childs[" + this.ID + "].next()", this.autoPlayTime * 1000)
    };
    this.stop = function () {
        clearInterval(_autoTimeObj)
    };
    this.pageTo = function (num) {
        if (_state != "ready") {
            return
        };
        _state = "stoping";
        var fill = num * this.frameWidth - this.scrollContDiv.scrollLeft;
        this.move(fill, true)
    };
    this.accountPageIndex = function () {
        this.pageIndex = Math.round(this.scrollContDiv.scrollLeft / this.frameWidth);
        if (this.pageIndex > Math.round(this.listDiv01.offsetWidth / this.frameWidth + 0.4) - 1) {
            this.pageIndex = 0
        };
        var i;
        for (i = 0; i < this.dotObjArr.length; i++) {
            if (i == this.pageIndex) {
                this.dotObjArr[i].className = this.dotClassName
            } else {
                this.dotObjArr[i].className = this.dotOnClassName
            }
        }
    }
};















window.onload=function (){
    // 靠近尾部 的荣誉资质合作机构等部分
    zhizirongyu();

    // 返回顶部 top
    gotoTop();

}