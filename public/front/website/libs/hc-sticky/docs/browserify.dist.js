function _typeof2(t){return(_typeof2="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}!function r(i,s,a){function f(n,t){if(!s[n]){if(!i[n]){var e="function"==typeof require&&require;if(!t&&e)return e(n,!0);if(l)return l(n,!0);throw new Error("Cannot find module '"+n+"'")}var o=s[n]={exports:{}};i[n][0].call(o.exports,function(t){var e=i[n][1][t];return f(e||t)},o,o.exports,r,i,s,a)}return s[n].exports}for(var l="function"==typeof require&&require,t=0;t<a.length;t++)f(a[t]);return f}({1:[function(t,l,e){(function(t,e,n,o,r,i,s,a,f){function J(t){return(J="function"==typeof Symbol&&"symbol"==_typeof2(Symbol.iterator)?function(t){return _typeof2(t)}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":_typeof2(t)})(t)}!function(t,e){"use strict";if("object"===(void 0===l?"undefined":J(l))&&"object"===J(l.exports)){if(!t.document)throw new Error("HC-Sticky requires a browser to run.");l.exports=e(t)}else"function"==typeof define&&define.amd?define("hcSticky",[],e(t)):e(t)}("undefined"!=typeof window?window:this,function(W){"use strict";var P={top:0,bottom:0,bottomEnd:0,innerTop:0,innerSticker:null,stickyClass:"sticky",stickTo:null,followScroll:!0,responsive:null,mobileFirst:!1,onStart:null,onStop:null,onBeforeResize:null,onResize:null,resizeDebounce:100,disable:!1,queries:null,queryFlow:"down"},V=function(t,e,n){console.warn("%cHC Sticky:%c "+n+"%c '"+t+"'%c is now deprecated and will be removed. Use%c '"+e+"'%c instead.","color: #fa253b","color: default","color: #5595c6","color: default","color: #5595c6","color: default")},Y=W.document,o=function t(r){var n=this,u=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};if("string"==typeof r&&(r=Y.querySelector(r)),!r)return!1;u.queries&&V("queries","responsive","option"),u.queryFlow&&V("queryFlow","mobileFirst","option");var c={},d=t.Helpers,i=r.parentNode;"static"===d.getStyle(i,"position")&&(i.style.position="relative");var s,a,f,l,p,h,g,y,b,m,w,v,E,S,B,I,L,A,k,T=function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};d.isEmptyObject(t)&&!d.isEmptyObject(c)||(c=Object.assign({},P,c,t))},e=function(){return c.disable},o=function(){var t,e=c.responsive||c.queries;if(e){var n=W.innerWidth;if(t=u,(c=Object.assign({},P,t||{})).mobileFirst)for(var o in e)o<=n&&!d.isEmptyObject(e[o])&&T(e[o]);else{var r=[];for(var i in e){var s={};s[i]=e[i],r.push(s)}for(var a=r.length-1;0<=a;a--){var f=r[a],l=Object.keys(f)[0];n<=l&&!d.isEmptyObject(f[l])&&T(f[l])}}}},x={css:{},position:null,stick:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};d.hasClass(r,c.stickyClass)||(!1===C.isAttached&&C.attach(),x.position="fixed",r.style.position="fixed",r.style.left=C.offsetLeft+"px",r.style.width=C.width,void 0===t.bottom?r.style.bottom="auto":r.style.bottom=t.bottom+"px",void 0===t.top?r.style.top="auto":r.style.top=t.top+"px",r.classList?r.classList.add(c.stickyClass):r.className+=" "+c.stickyClass,c.onStart&&c.onStart.call(r,Object.assign({},c)))},release:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};if(t.stop=t.stop||!1,!0===t.stop||"fixed"===x.position||null===x.position||!(void 0===t.top&&void 0===t.bottom||void 0!==t.top&&(parseInt(d.getStyle(r,"top"))||0)===t.top||void 0!==t.bottom&&(parseInt(d.getStyle(r,"bottom"))||0)===t.bottom)){!0===t.stop?!0===C.isAttached&&C.detach():!1===C.isAttached&&C.attach();var e=t.position||x.css.position;x.position=e,r.style.position=e,r.style.left=!0===t.stop?x.css.left:C.positionLeft+"px",r.style.width="absolute"!==e?x.css.width:C.width,void 0===t.bottom?r.style.bottom=!0===t.stop?"":"auto":r.style.bottom=t.bottom+"px",void 0===t.top?r.style.top=!0===t.stop?"":"auto":r.style.top=t.top+"px",r.classList?r.classList.remove(c.stickyClass):r.className=r.className.replace(new RegExp("(^|\\b)"+c.stickyClass.split(" ").join("|")+"(\\b|$)","gi")," "),c.onStop&&c.onStop.call(r,Object.assign({},c))}}},C={el:Y.createElement("div"),offsetLeft:null,positionLeft:null,width:null,isAttached:!1,init:function(){for(var t in C.el.className="sticky-spacer",x.css)C.el.style[t]=x.css[t];C.el.style["z-index"]="-1";var e=d.getStyle(r);C.offsetLeft=d.offset(r).left-(parseInt(e.marginLeft)||0),C.positionLeft=d.position(r).left,C.width=d.getStyle(r,"width")},attach:function(){i.insertBefore(C.el,r),C.isAttached=!0},detach:function(){C.el=i.removeChild(C.el),C.isAttached=!1}},U=W.pageYOffset||Y.documentElement.scrollTop,j=0,N=function(){B=A(),l=L(),E=p+l-y-w,S=g<B;var t,e=W.pageYOffset||Y.documentElement.scrollTop,n=d.offset(r).top,o=n-e;k=e<U?"up":"down",j=e-U,v<(U=e)?E+y+(S?b:0)-(c.followScroll&&S?0:y)<=e+B-m-(g-(v-m)<B-m&&c.followScroll&&0<(t=B-g-m)?t:0)?x.release({position:"absolute",bottom:h+i.offsetHeight-E-y}):S&&c.followScroll?"down"===k?o+B+b<=g+.9?x.stick({bottom:b}):"fixed"===x.position&&x.release({position:"absolute",top:n-y-v-j+m}):Math.ceil(o+m)<0&&"fixed"===x.position?x.release({position:"absolute",top:n-y-v+m-j}):e+y-m<=n&&x.stick({top:y-m}):x.stick({top:y-m}):x.release({stop:!0})},_=!1,M=!1,O=function(){_&&(d.event.unbind(W,"scroll",N),_=!1)},F=function(){var t,e,n,o;null!==r.offsetParent&&"none"!==d.getStyle(r,"display")?(x.css=(t=r,e=d.getCascadedStyle(t),n=d.getStyle(t),o={height:t.offsetHeight+"px",left:e.left,right:e.right,top:e.top,bottom:e.bottom,position:n.position,display:n.display,verticalAlign:n.verticalAlign,boxSizing:n.boxSizing,marginLeft:e.marginLeft,marginRight:e.marginRight,marginTop:e.marginTop,marginBottom:e.marginBottom,paddingLeft:e.paddingLeft,paddingRight:e.paddingRight},e.float&&(o.float=e.float||"none"),e.cssFloat&&(o.cssFloat=e.cssFloat||"none"),n.MozBoxSizing&&(o.MozBoxSizing=n.MozBoxSizing),o.width="auto"!==e.width?e.width:"border-box"===o.boxSizing||"border-box"===o.MozBoxSizing?t.offsetWidth+"px":n.width,o),C.init(),s=!(!c.stickTo||!("document"===c.stickTo||c.stickTo.nodeType&&9===c.stickTo.nodeType||"object"===J(c.stickTo)&&c.stickTo instanceof("undefined"!=typeof HTMLDocument?HTMLDocument:Document))),a=c.stickTo?s?Y:"string"==typeof c.stickTo?Y.querySelector(c.stickTo):c.stickTo:i,B=(A=function(){var t=r.offsetHeight+(parseInt(x.css.marginTop)||0)+(parseInt(x.css.marginBottom)||0),e=(B||0)-t;return-1<=e&&e<=1?B:t})(),l=(L=function(){return s?Math.max(Y.documentElement.clientHeight,Y.body.scrollHeight,Y.documentElement.scrollHeight,Y.body.offsetHeight,Y.documentElement.offsetHeight):a.offsetHeight})(),p=s?0:d.offset(a).top,h=c.stickTo?s?0:d.offset(i).top:p,g=W.innerHeight,I=r.offsetTop-(parseInt(x.css.marginTop)||0),f=c.innerSticker?"string"==typeof c.innerSticker?Y.querySelector(c.innerSticker):c.innerSticker:null,y=isNaN(c.top)&&-1<c.top.indexOf("%")?parseFloat(c.top)/100*g:c.top,b=isNaN(c.bottom)&&-1<c.bottom.indexOf("%")?parseFloat(c.bottom)/100*g:c.bottom,m=f?f.offsetTop:c.innerTop?c.innerTop:0,w=isNaN(c.bottomEnd)&&-1<c.bottomEnd.indexOf("%")?parseFloat(c.bottomEnd)/100*g:c.bottomEnd,v=p-y+m+I,l<=B?O():(N(),_||(d.event.bind(W,"scroll",N),_=!0))):O()},z=function(){r.style.position="",r.style.left="",r.style.top="",r.style.bottom="",r.style.width="",r.classList?r.classList.remove(c.stickyClass):r.className=r.className.replace(new RegExp("(^|\\b)"+c.stickyClass.split(" ").join("|")+"(\\b|$)","gi")," "),x.css={},!(x.position=null)===C.isAttached&&C.detach()},D=function(){z(),o(),e()?O():F()},R=function(){c.onBeforeResize&&c.onBeforeResize.call(r,Object.assign({},c)),D(),c.onResize&&c.onResize.call(r,Object.assign({},c))},q=c.resizeDebounce?d.debounce(R,c.resizeDebounce):R,H=function(){M&&(d.event.unbind(W,"resize",q),M=!1),O()},G=function(){M||(d.event.bind(W,"resize",q),M=!0),o(),e()?O():F()};this.options=function(t){return t?c[t]:Object.assign({},c)},this.refresh=D,this.update=function(t){T(t),u=Object.assign({},u,t||{}),D()},this.attach=G,this.detach=H,this.destroy=function(){H(),z()},this.triggerMethod=function(t,e){"function"==typeof n[t]&&n[t](e)},this.reinit=function(){V("reinit","refresh","method"),D()},T(u),G(),d.event.bind(W,"load",D)};if(void 0!==W.jQuery){var r=W.jQuery,i="hcSticky";r.fn.extend({hcSticky:function(e,n){return this.length?"options"===e?r.data(this.get(0),i).options():this.each(function(){var t=r.data(this,i);t?t.triggerMethod(e,n):(t=new o(this,e),r.data(this,i,t))}):this}})}return W.hcSticky=W.hcSticky||o,o}),function(l){"use strict";var t=l.hcSticky,u=l.document;"function"!=typeof Object.assign&&Object.defineProperty(Object,"assign",{value:function(t,e){if(null==t)throw new TypeError("Cannot convert undefined or null to object");for(var n=Object(t),o=1;o<arguments.length;o++){var r=arguments[o];if(null!=r)for(var i in r)Object.prototype.hasOwnProperty.call(r,i)&&(n[i]=r[i])}return n},writable:!0,configurable:!0}),Array.prototype.forEach||(Array.prototype.forEach=function(t){var e,n;if(null==this)throw new TypeError("this is null or not defined");var o=Object(this),r=o.length>>>0;if("function"!=typeof t)throw new TypeError(t+" is not a function");for(1<arguments.length&&(e=arguments[1]),n=0;n<r;){var i;n in o&&(i=o[n],t.call(e,i,n,o)),n++}});var e=function(){var t=u.documentElement,e=function(){};function o(t){var e=l.event;return e.target=e.target||e.srcElement||t,e}t.addEventListener?e=function(t,e,n){t.addEventListener(e,n,!1)}:t.attachEvent&&(e=function(e,t,n){e[t+n]=n.handleEvent?function(){var t=o(e);n.handleEvent.call(n,t)}:function(){var t=o(e);n.call(e,t)},e.attachEvent("on"+t,e[t+n])});var n=function(){};return t.removeEventListener?n=function(t,e,n){t.removeEventListener(e,n,!1)}:t.detachEvent&&(n=function(e,n,o){e.detachEvent("on"+n,e[n+o]);try{delete e[n+o]}catch(t){e[n+o]=void 0}}),{bind:e,unbind:n}}(),s=function(t,e){return l.getComputedStyle?e?u.defaultView.getComputedStyle(t,null).getPropertyValue(e):u.defaultView.getComputedStyle(t,null):t.currentStyle?e?t.currentStyle[e.replace(/-\w/g,function(t){return t.toUpperCase().replace("-","")})]:t.currentStyle:void 0},a=function(t){var e=t.getBoundingClientRect(),n=l.pageYOffset||u.documentElement.scrollTop,o=l.pageXOffset||u.documentElement.scrollLeft;return{top:e.top+n,left:e.left+o}};t.Helpers={isEmptyObject:function(t){for(var e in t)return!1;return!0},debounce:function(o,r,i){var s;return function(){var t=this,e=arguments,n=i&&!s;clearTimeout(s),s=setTimeout(function(){s=null,i||o.apply(t,e)},r),n&&o.apply(t,e)}},hasClass:function(t,e){return t.classList?t.classList.contains(e):new RegExp("(^| )"+e+"( |$)","gi").test(t.className)},offset:a,position:function(t){var e=t.offsetParent,n=a(e),o=a(t),r=s(e),i=s(t);return n.top+=parseInt(r.borderTopWidth)||0,n.left+=parseInt(r.borderLeftWidth)||0,{top:o.top-n.top-(parseInt(i.marginTop)||0),left:o.left-n.left-(parseInt(i.marginLeft)||0)}},getStyle:s,getCascadedStyle:function(t){var e,n=t.cloneNode(!0);n.style.display="none",Array.prototype.slice.call(n.querySelectorAll('input[type="radio"]')).forEach(function(t){t.removeAttribute("name")}),t.parentNode.insertBefore(n,t.nextSibling),n.currentStyle?e=n.currentStyle:l.getComputedStyle&&(e=u.defaultView.getComputedStyle(n,null));var o={};for(var r in e)!isNaN(r)||"string"!=typeof e[r]&&"number"!=typeof e[r]||(o[r]=e[r]);if(Object.keys(o).length<3)for(var i in o={},e)isNaN(i)||(o[e[i].replace(/-\w/g,function(t){return t.toUpperCase().replace("-","")})]=e.getPropertyValue(e[i]));if(o.margin||"auto"!==o.marginLeft?o.margin||o.marginLeft!==o.marginRight||o.marginLeft!==o.marginTop||o.marginLeft!==o.marginBottom||(o.margin=o.marginLeft):o.margin="auto",!o.margin&&"0px"===o.marginLeft&&"0px"===o.marginRight){var s=t.offsetLeft-t.parentNode.offsetLeft,a=s-(parseInt(o.left)||0)-(parseInt(o.right)||0),f=t.parentNode.offsetWidth-t.offsetWidth-s-(parseInt(o.right)||0)+(parseInt(o.left)||0)-a;0!==f&&1!==f||(o.margin="auto")}return n.parentNode.removeChild(n),n=null,o},event:e}}(window)}).call(this,t("pBGvAp"),"undefined"!=typeof self?self:"undefined"!=typeof window?window:{},t("buffer").Buffer,arguments[3],arguments[4],arguments[5],arguments[6],"/../dist/hc-sticky.js","/../dist")},{buffer:4,pBGvAp:6}],2:[function(l,t,e){(function(t,e,n,o,r,i,s,a,f){"use strict";new(l("../dist/hc-sticky.js"))("aside",{stickTo:"main",responsive:{980:{disable:!0}}})}).call(this,l("pBGvAp"),"undefined"!=typeof self?self:"undefined"!=typeof window?window:{},l("buffer").Buffer,arguments[3],arguments[4],arguments[5],arguments[6],"/fake_802ebdcc.js","/")},{"../dist/hc-sticky.js":1,buffer:4,pBGvAp:6}],3:[function(t,e,l){(function(t,e,n,o,r,i,s,a,f){!function(t){"use strict";var u="undefined"!=typeof Uint8Array?Uint8Array:Array,n="+".charCodeAt(0),o="/".charCodeAt(0),r="0".charCodeAt(0),i="a".charCodeAt(0),s="A".charCodeAt(0),a="-".charCodeAt(0),f="_".charCodeAt(0);function c(t){var e=t.charCodeAt(0);return e===n||e===a?62:e===o||e===f?63:e<r?-1:e<r+10?e-r+26+26:e<s+26?e-s:e<i+26?e-i+26:void 0}t.toByteArray=function(t){var e,n,o,r,i,s;if(0<t.length%4)throw new Error("Invalid string. Length must be a multiple of 4");var a=t.length;i="="===t.charAt(a-2)?2:"="===t.charAt(a-1)?1:0,s=new u(3*t.length/4-i),o=0<i?t.length-4:t.length;var f=0;function l(t){s[f++]=t}for(n=e=0;e<o;e+=4,n+=3)l((16711680&(r=c(t.charAt(e))<<18|c(t.charAt(e+1))<<12|c(t.charAt(e+2))<<6|c(t.charAt(e+3))))>>16),l((65280&r)>>8),l(255&r);return 2===i?l(255&(r=c(t.charAt(e))<<2|c(t.charAt(e+1))>>4)):1===i&&(l((r=c(t.charAt(e))<<10|c(t.charAt(e+1))<<4|c(t.charAt(e+2))>>2)>>8&255),l(255&r)),s},t.fromByteArray=function(t){var e,n,o,r,i=t.length%3,s="";function a(t){return"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(t)}for(e=0,o=t.length-i;e<o;e+=3)n=(t[e]<<16)+(t[e+1]<<8)+t[e+2],s+=a((r=n)>>18&63)+a(r>>12&63)+a(r>>6&63)+a(63&r);switch(i){case 1:s+=a((n=t[t.length-1])>>2),s+=a(n<<4&63),s+="==";break;case 2:s+=a((n=(t[t.length-2]<<8)+t[t.length-1])>>10),s+=a(n>>4&63),s+=a(n<<2&63),s+="="}return s}}(void 0===l?this.base64js={}:l)}).call(this,t("pBGvAp"),"undefined"!=typeof self?self:"undefined"!=typeof window?window:{},t("buffer").Buffer,arguments[3],arguments[4],arguments[5],arguments[6],"/../node_modules/base64-js/lib/b64.js","/../node_modules/base64-js/lib")},{buffer:4,pBGvAp:6}],4:[function(z,t,D){(function(t,e,y,n,o,r,i,s,a){var f=z("base64-js"),l=z("ieee754");function y(t,e,n){if(!(this instanceof y))return new y(t,e,n);var o,r,i,s,a,f=_typeof2(t);if("base64"===e&&"string"===f)for(t=(o=t).trim?o.trim():o.replace(/^\s+|\s+$/g,"");t.length%4!=0;)t+="=";if("number"===f)r=k(t);else if("string"===f)r=y.byteLength(t,e);else{if("object"!==f)throw new Error("First argument needs to be a number, array or string.");r=k(t.length)}if(y._useTypedArrays?i=y._augment(new Uint8Array(r)):((i=this).length=r,i._isBuffer=!0),y._useTypedArrays&&"number"==typeof t.byteLength)i._set(t);else if(T(a=t)||y.isBuffer(a)||a&&"object"===_typeof2(a)&&"number"==typeof a.length)for(s=0;s<r;s++)y.isBuffer(t)?i[s]=t.readUInt8(s):i[s]=t[s];else if("string"===f)i.write(t,0,e);else if("number"===f&&!y._useTypedArrays&&!n)for(s=0;s<r;s++)i[s]=0;return i}function b(t,e,n,o){return y._charsWritten=j(function(t){for(var e=[],n=0;n<t.length;n++)e.push(255&t.charCodeAt(n));return e}(e),t,n,o)}function u(t,e,n){var o="";n=Math.min(t.length,n);for(var r=e;r<n;r++)o+=String.fromCharCode(t[r]);return o}function c(t,e,n,o){o||(F("boolean"==typeof n,"missing or invalid endian"),F(null!=e,"missing offset"),F(e+1<t.length,"Trying to read beyond buffer length"));var r,i=t.length;if(!(i<=e))return n?(r=t[e],e+1<i&&(r|=t[e+1]<<8)):(r=t[e]<<8,e+1<i&&(r|=t[e+1])),r}function d(t,e,n,o){o||(F("boolean"==typeof n,"missing or invalid endian"),F(null!=e,"missing offset"),F(e+3<t.length,"Trying to read beyond buffer length"));var r,i=t.length;if(!(i<=e))return n?(e+2<i&&(r=t[e+2]<<16),e+1<i&&(r|=t[e+1]<<8),r|=t[e],e+3<i&&(r+=t[e+3]<<24>>>0)):(e+1<i&&(r=t[e+1]<<16),e+2<i&&(r|=t[e+2]<<8),e+3<i&&(r|=t[e+3]),r+=t[e]<<24>>>0),r}function p(t,e,n,o){if(o||(F("boolean"==typeof n,"missing or invalid endian"),F(null!=e,"missing offset"),F(e+1<t.length,"Trying to read beyond buffer length")),!(t.length<=e)){var r=c(t,e,n,!0);return 32768&r?-1*(65535-r+1):r}}function h(t,e,n,o){if(o||(F("boolean"==typeof n,"missing or invalid endian"),F(null!=e,"missing offset"),F(e+3<t.length,"Trying to read beyond buffer length")),!(t.length<=e)){var r=d(t,e,n,!0);return 2147483648&r?-1*(4294967295-r+1):r}}function g(t,e,n,o){return o||(F("boolean"==typeof n,"missing or invalid endian"),F(e+3<t.length,"Trying to read beyond buffer length")),l.read(t,e,n,23,4)}function m(t,e,n,o){return o||(F("boolean"==typeof n,"missing or invalid endian"),F(e+7<t.length,"Trying to read beyond buffer length")),l.read(t,e,n,52,8)}function w(t,e,n,o,r){r||(F(null!=e,"missing value"),F("boolean"==typeof o,"missing or invalid endian"),F(null!=n,"missing offset"),F(n+1<t.length,"trying to write beyond buffer length"),_(e,65535));var i=t.length;if(!(i<=n))for(var s=0,a=Math.min(i-n,2);s<a;s++)t[n+s]=(e&255<<8*(o?s:1-s))>>>8*(o?s:1-s)}function v(t,e,n,o,r){r||(F(null!=e,"missing value"),F("boolean"==typeof o,"missing or invalid endian"),F(null!=n,"missing offset"),F(n+3<t.length,"trying to write beyond buffer length"),_(e,4294967295));var i=t.length;if(!(i<=n))for(var s=0,a=Math.min(i-n,4);s<a;s++)t[n+s]=e>>>8*(o?s:3-s)&255}function E(t,e,n,o,r){r||(F(null!=e,"missing value"),F("boolean"==typeof o,"missing or invalid endian"),F(null!=n,"missing offset"),F(n+1<t.length,"Trying to write beyond buffer length"),M(e,32767,-32768)),t.length<=n||w(t,0<=e?e:65535+e+1,n,o,r)}function S(t,e,n,o,r){r||(F(null!=e,"missing value"),F("boolean"==typeof o,"missing or invalid endian"),F(null!=n,"missing offset"),F(n+3<t.length,"Trying to write beyond buffer length"),M(e,2147483647,-2147483648)),t.length<=n||v(t,0<=e?e:4294967295+e+1,n,o,r)}function B(t,e,n,o,r){r||(F(null!=e,"missing value"),F("boolean"==typeof o,"missing or invalid endian"),F(null!=n,"missing offset"),F(n+3<t.length,"Trying to write beyond buffer length"),O(e,34028234663852886e22,-34028234663852886e22)),t.length<=n||l.write(t,e,n,o,23,4)}function I(t,e,n,o,r){r||(F(null!=e,"missing value"),F("boolean"==typeof o,"missing or invalid endian"),F(null!=n,"missing offset"),F(n+7<t.length,"Trying to write beyond buffer length"),O(e,17976931348623157e292,-17976931348623157e292)),t.length<=n||l.write(t,e,n,o,52,8)}D.Buffer=y,D.SlowBuffer=y,D.INSPECT_MAX_BYTES=50,y.poolSize=8192,y._useTypedArrays=function(){try{var t=new ArrayBuffer(0),e=new Uint8Array(t);return e.foo=function(){return 42},42===e.foo()&&"function"==typeof e.subarray}catch(t){return!1}}(),y.isEncoding=function(t){switch(String(t).toLowerCase()){case"hex":case"utf8":case"utf-8":case"ascii":case"binary":case"base64":case"raw":case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":return!0;default:return!1}},y.isBuffer=function(t){return!(null==t||!t._isBuffer)},y.byteLength=function(t,e){var n;switch(t+="",e||"utf8"){case"hex":n=t.length/2;break;case"utf8":case"utf-8":n=C(t).length;break;case"ascii":case"binary":case"raw":n=t.length;break;case"base64":n=U(t).length;break;case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":n=2*t.length;break;default:throw new Error("Unknown encoding")}return n},y.concat=function(t,e){if(F(T(t),"Usage: Buffer.concat(list, [totalLength])\nlist should be an Array."),0===t.length)return new y(0);if(1===t.length)return t[0];var n;if("number"!=typeof e)for(n=e=0;n<t.length;n++)e+=t[n].length;var o=new y(e),r=0;for(n=0;n<t.length;n++){var i=t[n];i.copy(o,r),r+=i.length}return o},y.prototype.write=function(t,e,n,o){if(isFinite(e))isFinite(n)||(o=n,n=void 0);else{var r=o;o=e,e=n,n=r}e=Number(e)||0;var i,s,a,f,l,u,c,d,p,h,g=this.length-e;switch(n?g<(n=Number(n))&&(n=g):n=g,o=String(o||"utf8").toLowerCase()){case"hex":i=function(t,e,n,o){n=Number(n)||0;var r=t.length-n;o?r<(o=Number(o))&&(o=r):o=r;var i=e.length;F(i%2==0,"Invalid hex string"),i/2<o&&(o=i/2);for(var s=0;s<o;s++){var a=parseInt(e.substr(2*s,2),16);F(!isNaN(a),"Invalid hex string"),t[n+s]=a}return y._charsWritten=2*s,s}(this,t,e,n);break;case"utf8":case"utf-8":d=this,p=e,h=n,i=y._charsWritten=j(C(t),d,p,h);break;case"ascii":i=b(this,t,e,n);break;case"binary":i=b(this,t,e,n);break;case"base64":l=this,u=e,c=n,i=y._charsWritten=j(U(t),l,u,c);break;case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":s=this,a=e,f=n,i=y._charsWritten=j(function(t){for(var e,n,o,r=[],i=0;i<t.length;i++)e=t.charCodeAt(i),n=e>>8,o=e%256,r.push(o),r.push(n);return r}(t),s,a,f);break;default:throw new Error("Unknown encoding")}return i},y.prototype.toString=function(t,e,n){var o,r,i,s,a=this;if(t=String(t||"utf8").toLowerCase(),e=Number(e)||0,(n=void 0!==n?Number(n):n=a.length)===e)return"";switch(t){case"hex":o=function(t,e,n){var o=t.length;(!e||e<0)&&(e=0);(!n||n<0||o<n)&&(n=o);for(var r="",i=e;i<n;i++)r+=x(t[i]);return r}(a,e,n);break;case"utf8":case"utf-8":o=function(t,e,n){var o="",r="";n=Math.min(t.length,n);for(var i=e;i<n;i++)t[i]<=127?(o+=N(r)+String.fromCharCode(t[i]),r=""):r+="%"+t[i].toString(16);return o+N(r)}(a,e,n);break;case"ascii":o=u(a,e,n);break;case"binary":o=u(a,e,n);break;case"base64":r=a,s=n,o=0===(i=e)&&s===r.length?f.fromByteArray(r):f.fromByteArray(r.slice(i,s));break;case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":o=function(t,e,n){for(var o=t.slice(e,n),r="",i=0;i<o.length;i+=2)r+=String.fromCharCode(o[i]+256*o[i+1]);return r}(a,e,n);break;default:throw new Error("Unknown encoding")}return o},y.prototype.toJSON=function(){return{type:"Buffer",data:Array.prototype.slice.call(this._arr||this,0)}},y.prototype.copy=function(t,e,n,o){if(n||(n=0),o||0===o||(o=this.length),e||(e=0),o!==n&&0!==t.length&&0!==this.length){F(n<=o,"sourceEnd < sourceStart"),F(0<=e&&e<t.length,"targetStart out of bounds"),F(0<=n&&n<this.length,"sourceStart out of bounds"),F(0<=o&&o<=this.length,"sourceEnd out of bounds"),o>this.length&&(o=this.length),t.length-e<o-n&&(o=t.length-e+n);var r=o-n;if(r<100||!y._useTypedArrays)for(var i=0;i<r;i++)t[i+e]=this[i+n];else t._set(this.subarray(n,n+r),e)}},y.prototype.slice=function(t,e){var n=this.length;if(t=A(t,n,0),e=A(e,n,n),y._useTypedArrays)return y._augment(this.subarray(t,e));for(var o=e-t,r=new y(o,void 0,!0),i=0;i<o;i++)r[i]=this[i+t];return r},y.prototype.get=function(t){return console.log(".get() is deprecated. Access using array indexes instead."),this.readUInt8(t)},y.prototype.set=function(t,e){return console.log(".set() is deprecated. Access using array indexes instead."),this.writeUInt8(t,e)},y.prototype.readUInt8=function(t,e){if(e||(F(null!=t,"missing offset"),F(t<this.length,"Trying to read beyond buffer length")),!(t>=this.length))return this[t]},y.prototype.readUInt16LE=function(t,e){return c(this,t,!0,e)},y.prototype.readUInt16BE=function(t,e){return c(this,t,!1,e)},y.prototype.readUInt32LE=function(t,e){return d(this,t,!0,e)},y.prototype.readUInt32BE=function(t,e){return d(this,t,!1,e)},y.prototype.readInt8=function(t,e){if(e||(F(null!=t,"missing offset"),F(t<this.length,"Trying to read beyond buffer length")),!(t>=this.length))return 128&this[t]?-1*(255-this[t]+1):this[t]},y.prototype.readInt16LE=function(t,e){return p(this,t,!0,e)},y.prototype.readInt16BE=function(t,e){return p(this,t,!1,e)},y.prototype.readInt32LE=function(t,e){return h(this,t,!0,e)},y.prototype.readInt32BE=function(t,e){return h(this,t,!1,e)},y.prototype.readFloatLE=function(t,e){return g(this,t,!0,e)},y.prototype.readFloatBE=function(t,e){return g(this,t,!1,e)},y.prototype.readDoubleLE=function(t,e){return m(this,t,!0,e)},y.prototype.readDoubleBE=function(t,e){return m(this,t,!1,e)},y.prototype.writeUInt8=function(t,e,n){n||(F(null!=t,"missing value"),F(null!=e,"missing offset"),F(e<this.length,"trying to write beyond buffer length"),_(t,255)),e>=this.length||(this[e]=t)},y.prototype.writeUInt16LE=function(t,e,n){w(this,t,e,!0,n)},y.prototype.writeUInt16BE=function(t,e,n){w(this,t,e,!1,n)},y.prototype.writeUInt32LE=function(t,e,n){v(this,t,e,!0,n)},y.prototype.writeUInt32BE=function(t,e,n){v(this,t,e,!1,n)},y.prototype.writeInt8=function(t,e,n){n||(F(null!=t,"missing value"),F(null!=e,"missing offset"),F(e<this.length,"Trying to write beyond buffer length"),M(t,127,-128)),e>=this.length||(0<=t?this.writeUInt8(t,e,n):this.writeUInt8(255+t+1,e,n))},y.prototype.writeInt16LE=function(t,e,n){E(this,t,e,!0,n)},y.prototype.writeInt16BE=function(t,e,n){E(this,t,e,!1,n)},y.prototype.writeInt32LE=function(t,e,n){S(this,t,e,!0,n)},y.prototype.writeInt32BE=function(t,e,n){S(this,t,e,!1,n)},y.prototype.writeFloatLE=function(t,e,n){B(this,t,e,!0,n)},y.prototype.writeFloatBE=function(t,e,n){B(this,t,e,!1,n)},y.prototype.writeDoubleLE=function(t,e,n){I(this,t,e,!0,n)},y.prototype.writeDoubleBE=function(t,e,n){I(this,t,e,!1,n)},y.prototype.fill=function(t,e,n){if(t||(t=0),e||(e=0),n||(n=this.length),"string"==typeof t&&(t=t.charCodeAt(0)),F("number"==typeof t&&!isNaN(t),"value is not a number"),F(e<=n,"end < start"),n!==e&&0!==this.length){F(0<=e&&e<this.length,"start out of bounds"),F(0<=n&&n<=this.length,"end out of bounds");for(var o=e;o<n;o++)this[o]=t}},y.prototype.inspect=function(){for(var t=[],e=this.length,n=0;n<e;n++)if(t[n]=x(this[n]),n===D.INSPECT_MAX_BYTES){t[n+1]="...";break}return"<Buffer "+t.join(" ")+">"},y.prototype.toArrayBuffer=function(){if("undefined"==typeof Uint8Array)throw new Error("Buffer.toArrayBuffer not supported in this browser");if(y._useTypedArrays)return new y(this).buffer;for(var t=new Uint8Array(this.length),e=0,n=t.length;e<n;e+=1)t[e]=this[e];return t.buffer};var L=y.prototype;function A(t,e,n){return"number"!=typeof t?n:e<=(t=~~t)?e:0<=t?t:0<=(t+=e)?t:0}function k(t){return(t=~~Math.ceil(+t))<0?0:t}function T(t){return(Array.isArray||function(t){return"[object Array]"===Object.prototype.toString.call(t)})(t)}function x(t){return t<16?"0"+t.toString(16):t.toString(16)}function C(t){for(var e=[],n=0;n<t.length;n++){var o=t.charCodeAt(n);if(o<=127)e.push(t.charCodeAt(n));else{var r=n;55296<=o&&o<=57343&&n++;for(var i=encodeURIComponent(t.slice(r,n+1)).substr(1).split("%"),s=0;s<i.length;s++)e.push(parseInt(i[s],16))}}return e}function U(t){return f.toByteArray(t)}function j(t,e,n,o){for(var r=0;r<o&&!(r+n>=e.length||r>=t.length);r++)e[r+n]=t[r];return r}function N(t){try{return decodeURIComponent(t)}catch(t){return String.fromCharCode(65533)}}function _(t,e){F("number"==typeof t,"cannot write a non-number as a number"),F(0<=t,"specified a negative value for writing an unsigned value"),F(t<=e,"value is larger than maximum value for type"),F(Math.floor(t)===t,"value has a fractional component")}function M(t,e,n){F("number"==typeof t,"cannot write a non-number as a number"),F(t<=e,"value larger than maximum allowed value"),F(n<=t,"value smaller than minimum allowed value"),F(Math.floor(t)===t,"value has a fractional component")}function O(t,e,n){F("number"==typeof t,"cannot write a non-number as a number"),F(t<=e,"value larger than maximum allowed value"),F(n<=t,"value smaller than minimum allowed value")}function F(t,e){if(!t)throw new Error(e||"Failed assertion")}y._augment=function(t){return t._isBuffer=!0,t._get=t.get,t._set=t.set,t.get=L.get,t.set=L.set,t.write=L.write,t.toString=L.toString,t.toLocaleString=L.toString,t.toJSON=L.toJSON,t.copy=L.copy,t.slice=L.slice,t.readUInt8=L.readUInt8,t.readUInt16LE=L.readUInt16LE,t.readUInt16BE=L.readUInt16BE,t.readUInt32LE=L.readUInt32LE,t.readUInt32BE=L.readUInt32BE,t.readInt8=L.readInt8,t.readInt16LE=L.readInt16LE,t.readInt16BE=L.readInt16BE,t.readInt32LE=L.readInt32LE,t.readInt32BE=L.readInt32BE,t.readFloatLE=L.readFloatLE,t.readFloatBE=L.readFloatBE,t.readDoubleLE=L.readDoubleLE,t.readDoubleBE=L.readDoubleBE,t.writeUInt8=L.writeUInt8,t.writeUInt16LE=L.writeUInt16LE,t.writeUInt16BE=L.writeUInt16BE,t.writeUInt32LE=L.writeUInt32LE,t.writeUInt32BE=L.writeUInt32BE,t.writeInt8=L.writeInt8,t.writeInt16LE=L.writeInt16LE,t.writeInt16BE=L.writeInt16BE,t.writeInt32LE=L.writeInt32LE,t.writeInt32BE=L.writeInt32BE,t.writeFloatLE=L.writeFloatLE,t.writeFloatBE=L.writeFloatBE,t.writeDoubleLE=L.writeDoubleLE,t.writeDoubleBE=L.writeDoubleBE,t.fill=L.fill,t.inspect=L.inspect,t.toArrayBuffer=L.toArrayBuffer,t}}).call(this,z("pBGvAp"),"undefined"!=typeof self?self:"undefined"!=typeof window?window:{},z("buffer").Buffer,arguments[3],arguments[4],arguments[5],arguments[6],"/../node_modules/buffer/index.js","/../node_modules/buffer")},{"base64-js":3,buffer:4,ieee754:5,pBGvAp:6}],5:[function(t,e,l){(function(t,e,n,o,r,i,s,a,f){l.read=function(t,e,n,o,r){var i,s,a=8*r-o-1,f=(1<<a)-1,l=f>>1,u=-7,c=n?r-1:0,d=n?-1:1,p=t[e+c];for(c+=d,i=p&(1<<-u)-1,p>>=-u,u+=a;0<u;i=256*i+t[e+c],c+=d,u-=8);for(s=i&(1<<-u)-1,i>>=-u,u+=o;0<u;s=256*s+t[e+c],c+=d,u-=8);if(0===i)i=1-l;else{if(i===f)return s?NaN:1/0*(p?-1:1);s+=Math.pow(2,o),i-=l}return(p?-1:1)*s*Math.pow(2,i-o)},l.write=function(t,e,n,o,r,i){var s,a,f,l=8*i-r-1,u=(1<<l)-1,c=u>>1,d=23===r?Math.pow(2,-24)-Math.pow(2,-77):0,p=o?0:i-1,h=o?1:-1,g=e<0||0===e&&1/e<0?1:0;for(e=Math.abs(e),isNaN(e)||e===1/0?(a=isNaN(e)?1:0,s=u):(s=Math.floor(Math.log(e)/Math.LN2),e*(f=Math.pow(2,-s))<1&&(s--,f*=2),2<=(e+=1<=s+c?d/f:d*Math.pow(2,1-c))*f&&(s++,f/=2),u<=s+c?(a=0,s=u):1<=s+c?(a=(e*f-1)*Math.pow(2,r),s+=c):(a=e*Math.pow(2,c-1)*Math.pow(2,r),s=0));8<=r;t[n+p]=255&a,p+=h,a/=256,r-=8);for(s=s<<r|a,l+=r;0<l;t[n+p]=255&s,p+=h,s/=256,l-=8);t[n+p-h]|=128*g}}).call(this,t("pBGvAp"),"undefined"!=typeof self?self:"undefined"!=typeof window?window:{},t("buffer").Buffer,arguments[3],arguments[4],arguments[5],arguments[6],"/../node_modules/ieee754/index.js","/../node_modules/ieee754")},{buffer:4,pBGvAp:6}],6:[function(t,u,e){(function(t,e,n,o,r,i,s,a,f){function l(){}(t=u.exports={}).nextTick=function(){var t="undefined"!=typeof window&&window.setImmediate,e="undefined"!=typeof window&&window.postMessage&&window.addEventListener;if(t)return function(t){return window.setImmediate(t)};if(e){var n=[];return window.addEventListener("message",function(t){var e=t.source;e!==window&&null!==e||"process-tick"!==t.data||(t.stopPropagation(),0<n.length&&n.shift()())},!0),function(t){n.push(t),window.postMessage("process-tick","*")}}return function(t){setTimeout(t,0)}}(),t.title="browser",t.browser=!0,t.env={},t.argv=[],t.on=l,t.addListener=l,t.once=l,t.off=l,t.removeListener=l,t.removeAllListeners=l,t.emit=l,t.binding=function(t){throw new Error("process.binding is not supported")},t.cwd=function(){return"/"},t.chdir=function(t){throw new Error("process.chdir is not supported")}}).call(this,t("pBGvAp"),"undefined"!=typeof self?self:"undefined"!=typeof window?window:{},t("buffer").Buffer,arguments[3],arguments[4],arguments[5],arguments[6],"/../node_modules/process/browser.js","/../node_modules/process")},{buffer:4,pBGvAp:6}]},{},[2]);