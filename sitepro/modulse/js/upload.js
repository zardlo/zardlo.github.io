// JavaScript Document
var imgwidth =1000;
var imgheight =1000;/*图片宽高*/
 
function clp(){ 
   return document.getElementById("upload_img").click();
}
function onUploadImgChange(sender){        
    if( !sender.value.match( /.jpg|.gif|.png|.bmp/i ) ){        
        alert('图片格式无效！');        
        return false;        
    }        
	var name=sender.value;
    document.getElementById("filename").value= name.substring(name.lastIndexOf("\\")+1,name.lastIndexOf("."));
    var objPreview = document.getElementById( 'preview' );        
    var objPreviewFake = document.getElementById( 'preview_fake' );        
    var objPreviewSizeFake = document.getElementById( 'preview_size_fake' );           
    if( sender.files &&  sender.files[0] ){        
        objPreview.style.display = 'block';        
        objPreview.style.width = 'auto';        
        objPreview.style.height = 'auto';           
         if(window.FileReader){
                    var reader = new FileReader(); 
                    reader.onload = function(e){
                      objPreview.src=e.target.result;
					fsize=Math.round(sender.files[0].size/1024)+"K";
						//console.log("========================="+sender.files[0].size);
                    }  
                    reader.readAsDataURL(sender.files[0]);
                };
       // if (window.URL.createObjectURL) objPreview.src = window.URL.createObjectURL(sender.files[0]);
      //  if (window.webkitURL.createObjectURL) objPreview.src = window.webkitURL.createObjectURL(sender.files[0]);
      //  if (window.createObjectURL) objPreview.src = window.createObjectURL(sender.files[0]);
		objPreview.style.display='block';
    }else if( objPreviewFake.filters ){         
        // IE7,IE8 在设置本地图片地址为 img.src 时出现莫名其妙的后果        
        //（相同环境有时能显示，有时不显示），因此只能用滤镜来解决        
        sender.select();        
        var imgSrc = document.selection.createRange().text;        
                
        objPreviewFake.filters.item(        
            'DXImageTransform.Microsoft.AlphaImageLoader').src = imgSrc;        
        objPreviewSizeFake.filters.item(        
            'DXImageTransform.Microsoft.AlphaImageLoader').src = imgSrc;        
                
        autoSizePreview( objPreviewFake,         
            objPreviewSizeFake.offsetWidth, objPreviewSizeFake.offsetHeight );        
        objPreview.style.display = 'none';
    }
    //sender.blur();    
	
}              
function onPreviewLoad(sender){        
    autoSizePreview( sender, sender.offsetWidth, sender.offsetHeight );        
}               
function autoSizePreview( objPre, originalWidth, originalHeight ){        
    var zoomParam = clacImgZoomParam( imgwidth, imgheight, originalWidth, originalHeight );        
    objPre.style.width = zoomParam.width + 'px';        
    objPre.style.height = zoomParam.height + 'px';              
}             
function clacImgZoomParam( maxWidth, maxHeight, width, height ){        
    var param = { width:width, height:height };        
            
    if( width>maxWidth || height>maxHeight ){        
        rateWidth = width / maxWidth;        
        rateHeight = height / maxHeight;        
                
        if( rateWidth > rateHeight ){        
            param.width =  maxWidth;        
            param.height = height / rateWidth;        
        }else{        
            param.width = width / rateHeight;        
            param.height = maxHeight;        
        }        
    }                                   
    return param;        
}        