
// remap jQuery to $
(function($){

 





 



    })(this.jQuery);



// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
    log.history = log.history || [];   // store logs to an array for reference
    log.history.push(arguments);
    if(this.console){
        console.log( Array.prototype.slice.call(arguments) );
    }
};
function onBefore(curr, next, opts, fwd) {
	

	
	//get the height of the current slide
	var $ht = $(this).height();
	//set the container's height to that of the current slide
	$(this).parent().animate({height: $ht});
	 
	}

$(document).ready(function() {
    $('.slideshow').cycle({
        speedIn:  2000,
        speedOut: 2000,
        timeout:   5000,
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
    $('.slideshow').css("display", "block");
    
    $('.slideshow2').cycle({
        speedIn:  500,
        speedOut: 500,
        timeout:   5000,
        fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        before: onBefore,
       
    });
    $('.slideshow3').cycle({
        speedIn:  500,
        speedOut: 500,
        timeout:   5000,
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
       
       
    });
   
});
       
//$.backstretch("https://s3-eu-west-1.amazonaws.com/webbackgrounds/greenbluelighter.jpg");

// catch all document.write() calls
(function(doc){
    var write = doc.write;
    doc.write = function(q){ 
        log('document.write(): ',arguments); 
        if (/docwriteregexwhitelist/.test(q)) write.apply(doc,arguments);  
    };
})(document);

//animate color of main big menus
var title1 = $('#bigtitle1');
var title2 = $('#bigtitle2');
var title3 = $('#bigtitle3');
var title4 = $('#bigtitle4');
function pulsate1(){ 
    title1.animate({
        color:'#b4fef3'
    },6000,function(){
        title1.animate({
            color:'#2ca4ba'
        },6000,pulsate1);
    });
}
function pulsate2(){ 
    title2.animate({
        color:'#b4fef3'
    },6000,function(){
        title2.animate({
            color:'#2ca4ba'
        },6000,pulsate2);
    });
}
function pulsate3(){ 
    title3.animate({
        color:'#b4fef3'
    },6000,function(){
        title3.animate({
            color:'#2ca4ba'
        },6000,pulsate3);
    });
}
function pulsate4(){ 
    title4.animate({
        color:'#b4fef3'
    },6000,function(){
        title4.animate({
            color:'#2ca4ba'
        },6000,pulsate4);
    });
}

setTimeout(function() {
  pulsate1();
},0);
setTimeout(function() {
  pulsate2();
}, 3000);
setTimeout(function() {
  pulsate3();
}, 6000);
setTimeout(function() {
  pulsate4();
}, 9000);


//wymeditor
jQuery(function() {
    jQuery('.wymeditor').wymeditor();
});

$(document).ready(function() {
    $(".services").hover(
        function () {
            $(this).stop().animate({
                opacity:0.8
            },
            500
            );
            $(this).find("h2").stop().animate({
                color:"#000000"
            },
            500
            );
        },
        function () {
            $(this).stop().animate({
                opacity:1.0
            }, 
            500
            );
            $(this).find("h2").stop().animate({
                color:"#319825"
            },
            500
            );
        }
        );
});



/**
 * --------------------------------------------------------------------
 * jQuery-Plugin "pngFix"
 * Version: 1.2, 09.03.2009
 * by Andreas Eberhard, andreas.eberhard@gmail.com
 *                      http://jquery.andreaseberhard.de/
 *
 * Copyright (c) 2007 Andreas Eberhard
 * Licensed under GPL (http://www.opensource.org/licenses/gpl-license.php)
 *
 * Changelog:
 *    09.03.2009 Version 1.2
 *    - Update for jQuery 1.3.x, removed @ from selectors
 *    11.09.2007 Version 1.1
 *    - removed noConflict
 *    - added png-support for input type=image
 *    - 01.08.2007 CSS background-image support extension added by Scott Jehl, scott@filamentgroup.com, http://www.filamentgroup.com
 *    31.05.2007 initial Version 1.0
 * --------------------------------------------------------------------
 * @example $(function(){$(document).pngFix();});
 * @desc Fixes all PNG's in the document on document.ready
 *
 * jQuery(function(){jQuery(document).pngFix();});
 * @desc Fixes all PNG's in the document on document.ready when using noConflict
 *
 * @example $(function(){$('div.examples').pngFix();});
 * @desc Fixes all PNG's within div with class examples
 *
 * @example $(function(){$('div.examples').pngFix( { blankgif:'ext.gif' } );});
 * @desc Fixes all PNG's within div with class examples, provides blank gif for input with png
 * --------------------------------------------------------------------
 */

(function($) {

    jQuery.fn.pngFix = function(settings) {

        // Settings
        settings = jQuery.extend({
            blankgif: 'blank.gif'
        }, settings);

        var ie55 = (navigator.appName == "Microsoft Internet Explorer" && parseInt(navigator.appVersion) == 4 && navigator.appVersion.indexOf("MSIE 5.5") != -1);
        var ie6 = (navigator.appName == "Microsoft Internet Explorer" && parseInt(navigator.appVersion) == 4 && navigator.appVersion.indexOf("MSIE 6.0") != -1);

        if (jQuery.browser.msie && (ie55 || ie6)) {

            //fix images with png-source
            jQuery(this).find("img[src$=.png]").each(function() {

                jQuery(this).attr('width',jQuery(this).width());
                jQuery(this).attr('height',jQuery(this).height());

                var prevStyle = '';
                var strNewHTML = '';
                var imgId = (jQuery(this).attr('id')) ? 'id="' + jQuery(this).attr('id') + '" ' : '';
                var imgClass = (jQuery(this).attr('class')) ? 'class="' + jQuery(this).attr('class') + '" ' : '';
                var imgTitle = (jQuery(this).attr('title')) ? 'title="' + jQuery(this).attr('title') + '" ' : '';
                var imgAlt = (jQuery(this).attr('alt')) ? 'alt="' + jQuery(this).attr('alt') + '" ' : '';
                var imgAlign = (jQuery(this).attr('align')) ? 'float:' + jQuery(this).attr('align') + ';' : '';
                var imgHand = (jQuery(this).parent().attr('href')) ? 'cursor:hand;' : '';
                if (this.style.border) {
                    prevStyle += 'border:'+this.style.border+';';
                    this.style.border = '';
                }
                if (this.style.padding) {
                    prevStyle += 'padding:'+this.style.padding+';';
                    this.style.padding = '';
                }
                if (this.style.margin) {
                    prevStyle += 'margin:'+this.style.margin+';';
                    this.style.margin = '';
                }
                var imgStyle = (this.style.cssText);

                strNewHTML += '<span '+imgId+imgClass+imgTitle+imgAlt;
                strNewHTML += 'style="position:relative;white-space:pre-line;display:inline-block;background:transparent;'+imgAlign+imgHand;
                strNewHTML += 'width:' + jQuery(this).width() + 'px;' + 'height:' + jQuery(this).height() + 'px;';
                strNewHTML += 'filter:progid:DXImageTransform.Microsoft.AlphaImageLoader' + '(src=\'' + jQuery(this).attr('src') + '\', sizingMethod=\'scale\');';
                strNewHTML += imgStyle+'"></span>';
                if (prevStyle != ''){
                    strNewHTML = '<span style="position:relative;display:inline-block;'+prevStyle+imgHand+'width:' + jQuery(this).width() + 'px;' + 'height:' + jQuery(this).height() + 'px;'+'">' + strNewHTML + '</span>';
                }

                jQuery(this).hide();
                jQuery(this).after(strNewHTML);

            });

            // fix css background pngs
            jQuery(this).find("*").each(function(){
                var bgIMG = jQuery(this).css('background-image');
                if(bgIMG.indexOf(".png")!=-1){
                    var iebg = bgIMG.split('url("')[1].split('")')[0];
                    jQuery(this).css('background-image', 'none');
                    jQuery(this).get(0).runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + iebg + "',sizingMethod='scale')";
                }
            });
		
            //fix input with png-source
            jQuery(this).find("input[src$=.png]").each(function() {
                var bgIMG = jQuery(this).attr('src');
                jQuery(this).get(0).runtimeStyle.filter = 'progid:DXImageTransform.Microsoft.AlphaImageLoader' + '(src=\'' + bgIMG + '\', sizingMethod=\'scale\');';
                jQuery(this).attr('src', settings.blankgif)
            });
	
        }
	
        return jQuery;

    };




})(jQuery);

//jquery ui buttons
$(function() {
    $("button, input:submit").button();
		
});


//date picker on menu page

$(document).ready(function() {
    $( "#datepicker" ).datepicker({
        dateFormat : 'DD, d MM, yy',
        onSelect : function(dateText, inst)
        {
            var epoch = $.datepicker.formatDate('@', $(this).datepicker('getDate')) / 1000;

            $('#alternate').val(epoch);
        }
    });


    $( "#datepicker2" ).datepicker({
        dateFormat : 'DD, d MM, yy',
        onSelect : function(dateText, inst)
        {
            var epoch = $.datepicker.formatDate('@', $(this).datepicker('getDate')) / 1000;

            $('#alternate2').val(epoch);
        }
    });


});

$(document).ready(function(){
	$('#wordcloud a').tagcloud();

       $('#bigtitle1').mouseenter(function() {
           $('#advice_mega').slideUp('fast');
           $('#compensation_mega').slideUp('fast');
           $('#claim_mega').slideUp('fast');
            var submenu = $('#accident_mega');
         
                submenu.slideDown('fast');
                
               
               var submenu_active = true;
           
        });
        var submenu_active = false;
         
        $('#accident_mega').mouseenter(function() {
            submenu_active = true;
        });
         
          $('#bigtitle1').mouseenter(function() {
            submenu_active = true;
        });
        
          $('#bigtitle1').mouseleave(function() {
          
            submenu_active = false;
            
             setTimeout(function() { if (submenu_active === false) $('#accident_mega').slideUp('fast'); }, 4000);
        });
         
        $('#accident_mega').mouseleave(function() {
          submenu_active = false;
         
             setTimeout(function() { if (submenu_active === false) $('#accident_mega').slideUp('fast'); }, 4000);       
             
        });
     
});

$(document).ready(function(){
	 
	
	
       $('#bigtitle2').mouseenter(function() {
             $('#accident_mega').slideUp('fast');
            
             $('#compensation_mega').slideUp('fast');
             $('#claim_mega').slideUp('fast');
            var submenu = $('#advice_mega');
         
                submenu.slideDown('fast');
             
               
               var submenu_active = true;
           
        });
        var submenu_active = false;
         
        $('#advice_mega').mouseenter(function() {
            submenu_active = true;
        });
         
          $('#bigtitle2').mouseenter(function() {
            submenu_active = true;
        });
        
          $('#bigtitle2').mouseleave(function() {
          
            submenu_active = false;
            
             setTimeout(function() { if (submenu_active === false) $('#advice_mega').slideUp('fast'); }, 4000);
        });
         
        $('#advice_mega').mouseleave(function() {
          submenu_active = false;
         
             setTimeout(function() { if (submenu_active === false) $('#advice_mega').slideUp('fast'); }, 4000);       
             
        });
     
});

$(document).ready(function(){
 
       $('#bigtitle3').mouseenter(function() {
             $('#accident_mega').slideUp('fast');
            $('#advice_mega').slideUp('fast');
             $('#claim_mega').slideUp('fast');
            var submenu = $('#compensation_mega');
         
                submenu.slideDown('fast');
               var submenu_active = true;
           
        });
        var submenu_active = false;
         
        $('#compensation_mega').mouseenter(function() {
            submenu_active = true;
        });
         
          $('#bigtitle3').mouseenter(function() {
            submenu_active = true;
        });
        
          $('#bigtitle3').mouseleave(function() {
          
            submenu_active = false;
            
             setTimeout(function() { if (submenu_active === false) $('#compensation_mega').slideUp('fast'); }, 4000);
        });
         
        $('#compensation_mega').mouseleave(function() {
          submenu_active = false;
         
             setTimeout(function() { if (submenu_active === false) $('#compensation_mega').slideUp('fast'); }, 4000);       
             
        });
     
});

$(document).ready(function(){
 
       $('#bigtitle4').mouseenter(function() {
           $('#accident_mega').slideUp('fast');
            $('#advice_mega').slideUp('fast');
             $('#compensation_mega').slideUp('fast');
            var submenu = $('#claim_mega');
         
                submenu.slideDown('fast');
               var submenu_active = true;
           
        });
        var submenu_active = false;
         
        $('#claim_mega').mouseenter(function() {
            submenu_active = true;
        });
         
          $('#bigtitle4').mouseenter(function() {
            submenu_active = true;
        });
        
          $('#bigtitle4').mouseleave(function() {
          
            submenu_active = false;
            
             setTimeout(function() { if (submenu_active === false) $('#claim_mega').slideUp('fast'); }, 4000);
        });
         
        $('#claim_mega').mouseleave(function() {
          submenu_active = false;
         
             setTimeout(function() { if (submenu_active === false) $('#claim_mega').slideUp('fast'); }, 4000);       
             
        });
     
});


