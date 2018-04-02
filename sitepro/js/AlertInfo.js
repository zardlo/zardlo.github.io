// JavaScript Document
$(function() {
    $('.Alert_close').live('click', function() {
        closeAlert();
        $('.alert_out').hide();
    });
    //禁用鼠标滚轮
    var initEvent = function() {
        var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel"; //FF doesn't recognize mousewheel as of FF3.x  
        if (document.attachEvent) //if IE (and Opera depending on user setting)  
            document.attachEvent("on" + mousewheelevt, scrollFunc);
        else if (document.addEventListener) //WC3 browsers  
            document.addEventListener(mousewheelevt, scrollFunc, false);
    };
    var removeEvent = function() {
        var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel"; //FF doesn't recognize mousewheel as of FF3.x  
        if (document.detachEvent) //if IE (and Opera depending on user setting)  
            document.detachEvent("on" + mousewheelevt, scrollFunc);
        else if (document.removeEventListener) //WC3 browsers  
            document.removeEventListener(mousewheelevt, scrollFunc);
    };

    function scrollFunc(evt) {
        evt = evt || window.event;
        if (evt.preventDefault) {
            evt.preventDefault();
            evt.stopPropagation();
        } else {
            evt.cancelBubble = true;
            evt.returnValue = false;
        }
        return false;
    }
    //禁用鼠标滚轮结束

    //返回导航

})

function AlertDiv() {
    $('body').append($('<div class=\"alert_out\"></div>'));
    $('body').append($('<div class=\"alert_in\"></div>'));
    //alert($(window).outerHeight(true))
}

function _positionTop() {
    var WH = $(window).outerHeight(true);
    var _top = (WH - $('.alert_in').outerHeight(true)) / 2;
    $('.alert_in').css({ 'top': _top + 'px' });
}

function showdetail(url) {
    AlertDiv();
    $('.alert_out').show().height($(window).outerHeight(true));
    $('.alert_in').show().empty().load('mould/xxsz/xxsz_info/' + url);
    $('.alert_in').css({ marginTop: '-300px' });

}

function showGjpz() {
    $('.alert_in').empty();
    $('.alert_in').load('mould/xxsz/xxsz_info/gaojishezhi.html');
    $('.alert_in').css({ marginTop: '-260px' });
}

function showCxsz() {
    $('.alert_in').empty();
    $('.alert_in').load('mould/xxsz/xxsz_info/chaxunshezhi.html');
    $('.alert_in').css({ marginTop: '-260px' });
}

function closeAlert() {
    $('.alert_out').hide().remove();
    $('.alert_in').hide().remove();
    removeEvent();
}