function chuyenDoiMat1($x){
    if(document.getElementById($x).getAttribute('class')=='fa fa-eye')
    {
        document.getElementById($x).setAttribute('class','fa fa-eye-slash');
        document.getElementById('pwd').setAttribute('type','text');
    }
    else
    {
        document.getElementById($x).setAttribute('class','fa fa-eye');
        document.getElementById('pwd').setAttribute('type','password');
    }
}

var CSSReload={head:null,init:function(){this._storeHead(),this._listenToPostMessages()},_storeHead:function(){this.head=document.head||document.getElementsByTagName("head")[0]},_listenToPostMessages:function(){var e=this;window[this._eventMethod()](this._messageEvent(),function(t){try{var s=JSON.parse(t.data);"string"==typeof s.css&&e._refreshCSS(s)}catch(n){}},!1)},_messageEvent:function(){return"attachEvent"===this._eventMethod()?"onmessage":"message"},_eventMethod:function(){return window.addEventListener?"addEventListener":"attachEvent"},_refreshCSS:function(e){var t=this._findPrevCPStyle(),s=document.createElement("style");s.type="text/css",s.className="cp-pen-styles",s.styleSheet?s.styleSheet.cssText=e.css:s.appendChild(document.createTextNode(e.css)),this.head.appendChild(s),t&&t.parentNode.removeChild(t),"prefixfree"===e.css_prefix&&StyleFix.process()},_findPrevCPStyle:function(){for(var e=document.getElementsByTagName("style"),t=e.length-1;t>=0;t--)if("cp-pen-styles"===e[t].className)return e[t];return!1}};CSSReload.init();

