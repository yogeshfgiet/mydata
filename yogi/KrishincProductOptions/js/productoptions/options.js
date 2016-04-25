function setnewcookie(optionid,currentpro,imgpath){
    var cookievalue = optionid;
    var CurrentProduct = currentpro;
    var ImgPath = imgpath;
    createCookie("ProductColorOptionId",escape(cookievalue),1);
    createCookie("ProductColorMainProductId",escape(CurrentProduct),1);
    document.getElementById(CurrentProduct).src=imgpath;
}
function createCookie(name, value, hours) {
    if (hours) {
        var date = new Date();
        date.setTime(date.getTime() + (hours * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    } else var expires = "";
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}
function readCookie(name) {
    var nameEQ = escape(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return unescape(c.substring(nameEQ.length, c.length));
    }
    return null;
}
function deleteCookie(name) {
    createCookie(name, "", -1);
}