function ordi(n){
	var s='th';
	if(n===1 || n==21 || n==31)
		s='st';
	if(n===2 || n==22)
		s='nd';
	if(n===3 || n==23)
		s='rd';
	return n+s;
}

function padlength(what){
	var output=(what.toString().length==1)? "0"+what : what;
	return output;
}

function convToSecs(str) {
	var time = str.split(':');
    return parseInt(time[0]*60*60)+parseInt(time[1]*60)+parseInt(time[2]);
}

function secondsToHms(d) {
	d = Number(d);
	var h = Math.floor(d / 3600);
	var m = Math.floor(d % 3600 / 60);
	var s = Math.floor(d % 3600 % 60);
	
	if (h==0 && m==0 && s>=0) {
		return s + "s";
	} else if (h==0 && m>0) {
		return m + "m&nbsp;" + s + "s";
	} else {
		return h + "h&nbsp;" + m + "m";
	}
}

function openClose(openTime, closeTime, currentTime, openYesterday, closeYesterday, openTomorrow, closeTomorrow, site) {
	var openStatus=siteStatus[site]['open'];
	var site_progress=site + '_progressbar';
	
	if (openTime=='00:00:00' && closeTime=='23:59:59') { // If Open 24 Hours
		var openText='24 hours';
		
		if (openStatus==2) {
			var notifTitle=siteStatus[site]['name'] + ' Open';
			var notifMessage=siteStatus[site]['name'] + ' has now opened for 24 hours.';
			sendNotification(notifTitle, notifMessage);
		}
		
		siteStatus[site]['open']=1;
		
		var site_status_info=new Array(3);
			site_status_info['state']='Open';
			site_status_info['image']='images/open.png';
			site_status_info['text']=openText;
		
		return site_status_info;
	} else if (openTime=='00:00:00' && closeTime=='00:00:00') { // If Closed
		if (convToSecs(openYesterday)>convToSecs(closeYesterday) && convToSecs(currentTime)<convToSecs(closeYesterday)) { // If still open from yesterday
			var remainingTime=secondsToHms(convToSecs(closeYesterday)-convToSecs(currentTime));
			var openText='Closes in ' + remainingTime;
			
			siteStatus[site]['open']=1;
			
			var site_status_info=new Array(3);
				site_status_info['state']='Open';
				site_status_info['image']='images/open.png';
				site_status_info['text']=openText;
		
			return site_status_info;
		} else {
			if (openTomorrow!=closeTomorrow) {
				var closeText='Open tomorrow at ' + openTomorrow.substring(0, 5);
				var closeNotif=' has now closed and will open again tomorrow at ' + openTomorrow.substring(0, 5) + '.';
			} else {
				var closeText='Closed all day';
				var closeNotif=' has now closed for the day.';
			}
		
			if (openStatus==1) {
				var notifTitle=siteStatus[site]['name'] + ' Closed';
				var notifMessage=siteStatus[site]['name'] + closeNotif;
				sendNotification(notifTitle, notifMessage);
			}
		
			siteStatus[site]['open']=2;
			
			var site_status_info=new Array(3);
				site_status_info['state']='Closed';
				site_status_info['image']='images/closed.png';
				site_status_info['text']=closeText;
		
			return site_status_info;
		}
	} else if (convToSecs(openTime)>convToSecs(closeTime)) { // If close time tomorrow
		if ((openYesterday=='00:00:00' && closeYesterday=='00:00:00') || (openYesterday=='00:00:00' && closeYesterday=='23:59:59')) { // If closed or open 24 hours yesterday
			if (convToSecs(currentTime)<convToSecs(openTime)) { // If before open time
				var remainingTime=secondsToHms(convToSecs(openTime)-convToSecs(currentTime));
				var closeText='Open in ' + remainingTime;
				var closeNotif=' has now closed and will open again today at ' + openTime.substring(0, 5) + '.';
				
				if (openStatus==1) {
					var notifTitle=siteStatus[site]['name'] + ' Closed';
					var notifMessage=siteStatus[site]['name'] + closeNotif;
					sendNotification(notifTitle, notifMessage);
				}	
			
				siteStatus[site]['open']=2;
				
				var site_status_info=new Array(3);
					site_status_info['state']='Closed';
					site_status_info['image']='images/closed.png';
					site_status_info['text']=closeText;
		
				return site_status_info;
			} else if (convToSecs(currentTime)>convToSecs(openTime)) { // If after open time
				var remainingTime=secondsToHms(86400-convToSecs(currentTime)+convToSecs(closeTime));
				var openText='Closes in ' + remainingTime;
				
				if (openStatus==2) {
					var notifTitle=siteStatus[site]['name'] + ' Open';
					var notifMessage=siteStatus[site]['name'] + ' has now opened for the day.';
					sendNotification(notifTitle, notifMessage);
				}
				
				siteStatus[site]['open']=1;
				
				var site_status_info=new Array(3);
					site_status_info['state']='Open';
					site_status_info['image']='images/open.png';
					site_status_info['text']=openText;
		
				return site_status_info;
			}
		} else { // If open yesterday
			if (convToSecs(currentTime)>convToSecs(openTime)) { // If after open time
				var remainingTime=secondsToHms(86400-convToSecs(currentTime)+convToSecs(closeTime));
				var openText='Closes in ' + remainingTime;
				
				if (openStatus==2) {
					var notifTitle=siteStatus[site]['name'] + ' Open';
					var notifMessage=siteStatus[site]['name'] + ' has now opened for the day.';
					sendNotification(notifTitle, notifMessage);
				}
				
				siteStatus[site]['open']=1;
				
				var site_status_info=new Array(3);
					site_status_info['state']='Open';
					site_status_info['image']='images/open.png';
					site_status_info['text']=openText;
		
				return site_status_info;	
			} else if (convToSecs(currentTime)<convToSecs(closeYesterday)) { // If still open from yesterday
				var remainingTime=secondsToHms(convToSecs(closeYesterday)-convToSecs(currentTime));
				var openText='Closes in ' + remainingTime;
				
				siteStatus[site]['open']=1;
				
				var site_status_info=new Array(3);
					site_status_info['state']='Open';
					site_status_info['image']='images/open.png';
					site_status_info['text']=openText;
		
				return site_status_info;
			} else if (convToSecs(currentTime)<convToSecs(openTime) && convToSecs(currentTime)>convToSecs(closeYesterday)) { // If between close yesterday and open today
				var remainingTime=secondsToHms(convToSecs(openTime)-convToSecs(currentTime));
				var closeText='Open in ' + remainingTime;
				var closeNotif=' has now closed and will open again today at ' + openTime.substring(0, 5) + '.';
				
				if (openStatus==1) {
					var notifTitle=siteStatus[site]['name'] + ' Closed';
					var notifMessage=siteStatus[site]['name'] + closeNotif;
					sendNotification(notifTitle, notifMessage);
				}
				
				siteStatus[site]['open']=2;
				
				var site_status_info=new Array(3);
					site_status_info['state']='Closed';
					site_status_info['image']='images/closed.png';
					site_status_info['text']=closeText;
		
				return site_status_info;
			}
		}
	} else {
		if (convToSecs(currentTime)> convToSecs(openTime) && convToSecs(currentTime)<=convToSecs(closeTime)) { // If open now
			var remainingTime=secondsToHms(convToSecs(closeTime)-convToSecs(currentTime));
			var openText='Closes in ' + remainingTime;
			
			if (openStatus==2) {
				var notifTitle=siteStatus[site]['name'] + ' Open';
				var notifMessage=siteStatus[site]['name'] + ' has now opened for the day.';
				sendNotification(notifTitle, notifMessage);
			}
			
			siteStatus[site]['open']=1;
			
			var site_status_info=new Array(3);
				site_status_info['state']='Open';
				site_status_info['image']='images/open.png';
				site_status_info['text']=openText;
		
			return site_status_info;
		} else { // If closed now
			if (convToSecs(currentTime)<convToSecs(openTime)) { // If before opening time
				var remainingTime=secondsToHms(convToSecs(openTime)-convToSecs(currentTime));
				var closeText='Open in ' + remainingTime;
			} else if (convToSecs(currentTime)>convToSecs(closeTime)) { // If after opening time
				if (openTomorrow!=closeTomorrow) {
					var closeText='Open tomorrow at ' + openTomorrow.substring(0, 5);
				} else {
					var closeText='Open again on Monday';
				}
			}
			
			if (openStatus==1) {
				var notifTitle=siteStatus[site]['name'] + ' Closed';
				var notifMessage=siteStatus[site]['name'] + ' has now closed for the day.';
				sendNotification(notifTitle, notifMessage);
			}
			
			siteStatus[site]['open']=2;
			
			var site_status_info=new Array(3);
				site_status_info['state']='Closed';
				site_status_info['image']='images/closed.png';
				site_status_info['text']=closeText;
		
			return site_status_info;
		}
	}
}

function hoverFav(element) {
    element.setAttribute('src', 'images/star_on.png');
}
function unhoverFav(element) {
    element.setAttribute('src', 'images/star_off.png');
}

function hoverFavDel(element) {
    element.setAttribute('src', 'images/star_off.png');
}
function unhoverFavDel(element) {
    element.setAttribute('src', 'images/star_on.png');
}

function hoverHome(element) {
    element.setAttribute('src', 'images/location_ibm.png');
}
function unhoverHome(element) {
    element.setAttribute('src', 'images/location_ibm_gs.png');
}

function hoverHomeDel(element) {
    element.setAttribute('src', 'images/location_ibm_gs.png');
}
function unhoverHomeDel(element) {
    element.setAttribute('src', 'images/location_ibm.png');
}

function sendNotification(title, message) {
	if (!("Notification" in window)) {
		console.log("This browser does not support desktop notification");
	} else if (Notification.permission === "granted") {
		var notification = new Notification(title, { body: message, icon: '../images/location_bp.png' });
	} else if (Notification.permission !== 'denied' || Notification.permission === "default") {
		Notification.requestPermission(function (permission) {
			if (permission === "granted") {
				var notification = new Notification(title, { body: message, icon: '../images/location_bp.png' });
			}
		});
	}
}

function varToArray(id, type, day) {
	return this[id][type][day];
}

function formatHours(id) {
	if (varToArray(id, 'open', 1)==varToArray(id, 'close', 1)){
		var day1Output='Closed';
	} else if (varToArray(id, 'open', 1)=='00:00:00' && varToArray(id, 'close', 1)=='23:59:59') {
		var day1Output='Open 24 hours';
	} else {
		var day1Output=varToArray(id, 'open', 1).substring(0,5) + ' - ' + varToArray(id, 'close', 1).substring(0,5);
	}
	
	if (varToArray(id, 'open', 2)==varToArray(id, 'close', 2)){
		var day2Output='Closed';
	} else if (varToArray(id, 'open', 2)=='00:00:00' && varToArray(id, 'close', 2)=='23:59:59') {
		var day2Output='Open 24 hours';
	} else {
		var day2Output=varToArray(id, 'open', 2).substring(0,5) + ' - ' + varToArray(id, 'close', 2).substring(0,5);
	}
	
	if (varToArray(id, 'open', 3)==varToArray(id, 'close', 3)){
		var day3Output='Closed';
	} else if (varToArray(id, 'open', 3)=='00:00:00' && varToArray(id, 'close', 3)=='23:59:59') {
		var day3Output='Open 24 hours';
	} else {
		var day3Output=varToArray(id, 'open', 3).substring(0,5) + ' - ' + varToArray(id, 'close', 3).substring(0,5);
	}
	
	if (varToArray(id, 'open', 4)==varToArray(id, 'close', 4)){
		var day4Output='Closed';
	} else if (varToArray(id, 'open', 4)=='00:00:00' && varToArray(id, 'close', 4)=='23:59:59') {
		var day4Output='Open 24 hours';
	} else {
		var day4Output=varToArray(id, 'open', 4).substring(0,5) + ' - ' + varToArray(id, 'close', 4).substring(0,5);
	}
	
	if (varToArray(id, 'open', 5)==varToArray(id, 'close', 5)){
		var day5Output='Closed';
	} else if (varToArray(id, 'open', 5)=='00:00:00' && varToArray(id, 'close', 5)=='23:59:59') {
		var day5Output='Open 24 hours';
	} else {
		var day5Output=varToArray(id, 'open', 5).substring(0,5) + ' - ' + varToArray(id, 'close', 5).substring(0,5);
	}
	
	if (varToArray(id, 'open', 6)==varToArray(id, 'close', 6)){
		var day6Output='Closed';
	} else if (varToArray(id, 'open', 6)=='00:00:00' && varToArray(id, 'close', 6)=='23:59:59') {
		var day6Output='Open 24 hours';
	} else {
		var day6Output=varToArray(id, 'open', 6).substring(0,5) + ' - ' + varToArray(id, 'close', 6).substring(0,5);
	}
	
	if (varToArray(id, 'open', 0)==varToArray(id, 'close', 0)){
		var day7Output='Closed';
	} else if (varToArray(id, 'open', 0)=='00:00:00' && varToArray(id, 'close', 01)=='23:59:59') {
		var day7Output='Open 24 hours';
	} else {
		var day7Output=varToArray(id, 'open', 0).substring(0,5) + ' - ' + varToArray(id, 'close', 0).substring(0,5);
	}
	
	return day1Output + '<br />' + day2Output + '<br />' + day3Output + '<br />' + day4Output + '<br />' + day5Output + '<br />' + day6Output + '<br />' + day7Output;
}

function formatSupport(sd, id) {
	var openTime=nel_support[sd][id]['open'].substring(0,5);
	var closeTime=nel_support[sd][id]['close'].substring(0,5);
	
	return openTime + ' - ' + closeTime;
}

function SupportBoulder() {
	return formatSupport('boulder', 'canada') + '<br />' + formatSupport('boulder', 'usa') + '<br />' + formatSupport('boulder', 'trinidad');
}

function SupportBrno() {
	return formatSupport('brno', 'angola') + '<br />' + formatSupport('brno', 'austria') + '<br />' + formatSupport('brno', 'france') + '<br />' + formatSupport('brno', 'germany') + '<br />' + formatSupport('brno', 'poland') + '<br />' + formatSupport('brno', 'spain') + '<br />' + formatSupport('brno', 'switzerland') + '<br />' + formatSupport('brno', 'portugal') + '<br />' + formatSupport('brno', 'argentina') + '<br />' + formatSupport('brno', 'brazil') + '<br />' + formatSupport('brno', 'venezuela') + '<br />' + formatSupport('brno', 'peru') + '<br />' + formatSupport('brno', 'columbia') + '<br />' + formatSupport('brno', 'mexico');
}

function SupportDublin() {
	return formatSupport('dublin', 'belgium') + '<br />' + formatSupport('dublin', 'netherlands');
}

function toggle_visibility(id) {
	if(document.getElementById(id).style.display == 'block') {
		document.getElementById(id).style.display = 'none';
		var value = 'none';
	} else {
		document.getElementById(id).style.display = 'block';
		var value = 'block';
	}
	
	var d = new Date();
    var exdays = 365;
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
	document.cookie = id+"=" + value + "; " + expires + "; path=/";
}

function toggle_site(id) {
	var id_lrg = id + '_lrg';
	var id_sml = id + '_sml';
	
	if (document.getElementById(id_lrg).style.display == 'block') {
		document.getElementById(id_lrg).style.display = 'none';
		document.getElementById(id_sml).style.display = 'block';
		var value = 'none';
	} else {
		document.getElementById(id_lrg).style.display = 'block';
		document.getElementById(id_sml).style.display = 'none';
		var value = 'block';
	}
	
	var d = new Date();
    var exdays = 365;
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
	document.cookie = id+"=" + value + "; " + expires + "; path=/";
}

function toggle_sd(id) {
	var id_hours = id + '_open_hours';
	var id_state = id + '_state';
	
	if (document.getElementById(id_state).style.display == 'block') {
		document.getElementById(id_hours).style.display = 'block';
		document.getElementById(id_state).style.display = 'none';
	} else {
		document.getElementById(id_hours).style.display = 'none';
		document.getElementById(id_state).style.display = 'block';
	}
}

function toggle_sd_3(id) {
	var id_hours = id + '_open_hours';
	var id_support = id + '_support';
	var id_state = id + '_state';
	
	if (document.getElementById(id_state).style.display == 'block') {
		document.getElementById(id_hours).style.display = 'block';
		document.getElementById(id_support).style.display = 'none';
		document.getElementById(id_state).style.display = 'none';
	} else if (document.getElementById(id_hours).style.display == 'block') {
		document.getElementById(id_hours).style.display = 'none';
		document.getElementById(id_support).style.display = 'block';
		document.getElementById(id_state).style.display = 'none';
	} else {
		document.getElementById(id_hours).style.display = 'none';
		document.getElementById(id_support).style.display = 'none';
		document.getElementById(id_state).style.display = 'block';
	}
}

function getCookie(id){ 
	var re=new RegExp(id+"=[^;]+", "i");
	if (document.cookie.match(re)) {
		return document.cookie.match(re)[0].split("=")[1];
	} else {
		return 'block';
	}
}

function getFavCookie(id){ 
	var id_fav=id + '_fav';
	var re=new RegExp(id_fav+"=[^;]+", "i");
	if (document.cookie.match(re)) {
		return document.cookie.match(re)[0].split("=")[1];
	} else {
		return '0';
	}
}

function getHomeCookie(){ 
	var re=new RegExp("home_sd=[^;]+", "i");
	if (document.cookie.match(re)) {
		return document.cookie.match(re)[0].split("=")[1];
	} else {
		return '0';
	}
}

function setSiteDisplay(id, value, favValue, favLocation) {
	var id_lrg = id + '_lrg';
	var id_sml = id + '_sml';
	var addFav = id + '_add_fav';
	var delFav = id + '_del_fav';
	document.getElementById(id_lrg).style.display = 'block';
	document.getElementById(id_sml).style.display = 'none';
	
	if (value=='none') {
		toggle_site(id);
	}
	
	if (favValue=='1') {
		setAsFavRefresh(id, favLocation);
	} else {
		document.getElementById(addFav).style.display='block';
		document.getElementById(delFav).style.display='none';
	}
}

function setSdDisplay(id) {
	var id_time = id + '_time_date';
	var id_hours = id + '_open_hours';
	var id_state = id + '_state';
	var set_home = id + '_set_home';
	var del_home = id + '_del_home';
	var homeOn= id + '_home_on';
	var homeOff= id + '_home_off';
	var homeCurrent=getHomeCookie();
	
	document.getElementById(id_time).style.display = 'block';
	document.getElementById(id_hours).style.display = 'none';
	document.getElementById(id_state).style.display = 'block';
	
	if (homeCurrent==id) {
		document.getElementById(homeOn).style.display = 'block';
		document.getElementById(homeOff).style.display = 'none';
		setHomeSites(id);
	} else {
		document.getElementById(homeOn).style.display = 'none';
		document.getElementById(homeOff).style.display = 'block';
	}
}

function setSd3Display(id) {
	var id_time = id + '_time_date';
	var id_hours = id + '_open_hours';
	var id_support = id + '_support';
	var id_state = id + '_state';
	var set_home = id + '_set_home';
	var del_home = id + '_del_home';
	var homeOn= id + '_home_on';
	var homeOff= id + '_home_off';
	var homeCurrent=getHomeCookie();
	
	document.getElementById(id_time).style.display = 'block';
	document.getElementById(id_hours).style.display = 'none';
	document.getElementById(id_support).style.display = 'none';
	document.getElementById(id_state).style.display = 'block';
	
	if (homeCurrent==id) {
		document.getElementById(homeOn).style.display = 'block';
		document.getElementById(homeOff).style.display = 'none';
		setHomeSites(id);
	} else {
		document.getElementById(homeOn).style.display = 'none';
		document.getElementById(homeOff).style.display = 'block';
	}
}

function setLayerDisplay(id, value) {
	document.getElementById(id).style.display = value;
}

function setAsHome(id) {
	var homeCurrent=getHomeCookie();
	var d = new Date();
    var exdays = 365;
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
	document.cookie = "home_sd=" + id + "; " + expires + "; path=/";
	
 	var homeSetOn=id + '_home_on';
	var homeSetOff=id + '_home_off';
	
	if (homeCurrent!='0') {
		var homeUnsetOn=homeCurrent + '_home_on';
		var homeUnsetOff=homeCurrent + '_home_off';
		document.getElementById(homeUnsetOn).style.display = 'none';
		document.getElementById(homeUnsetOff).style.display = 'block';
	}
	
	document.getElementById(homeSetOn).style.display = 'block';
	document.getElementById(homeSetOff).style.display = 'none';
	
	setHomeSites(id);
}

function delAsHome(id) {
	var d = new Date();
    var exdays = -1;
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
	document.cookie = "home_sd=" + id + "; " + expires + "; path=/";
	
	var homeUnsetOn=id + '_home_on';
	var homeUnsetOff=id + '_home_off';
	
	document.getElementById(homeUnsetOn).style.display = 'none';
	document.getElementById(homeUnsetOff).style.display = 'block';
	
	delHomeSites();
}

function setAsFav(id, favLocation) {
	var divID = '#' + id;
	var regionDivID = '#' + favLocation + '_favs';
	var addFav = id + '_add_fav';
	var delFav = id + '_del_fav';
	$(divID).appendTo(regionDivID);
	document.getElementById('fav_title').style.display='block';
	document.getElementById(addFav).style.display='none';
	document.getElementById(delFav).style.display='block';
	
	var id_fav=id + '_fav';
	var d = new Date();
    var exdays = 365;
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
	document.cookie = id_fav+"=" + '1' + "; " + expires + "; path=/";
	
	toggle_site(id);
	
	fc=fc+1;
}

function setAsFavRefresh(id, favLocation) {
	var divID = '#' + id;
	var regionDivID = '#' + favLocation + '_favs';
	var addFav = id + '_add_fav';
	var delFav = id + '_del_fav';
	$(divID).appendTo(regionDivID);
	document.getElementById('fav_title').style.display='block';
	document.getElementById(addFav).style.display='none';
	document.getElementById(delFav).style.display='block';

	
	var id_fav=id + '_fav';
	var d = new Date();
    var exdays = 365;
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
	document.cookie = id_fav+"=" + '1' + "; " + expires + "; path=/";
	
	fc=fc+1;
}


function delAsFav(id, favLocation, subLocation) {
	var divID = '#' + id;
	var toDiv = '#' + favLocation + '_' + subLocation;
	var addFav = id + '_add_fav';
	var delFav = id + '_del_fav';
	var id_lrg = id + '_lrg';
	var id_sml = id + '_sml';
	$(divID).appendTo(toDiv);
	document.getElementById(addFav).style.display='block';
	document.getElementById(delFav).style.display='none';
	document.getElementById(id_lrg).style.display='block';
	document.getElementById(id_sml).style.display='none';
	
	var id_fav=id + '_fav';
	var d = new Date();
    var exdays = -1;
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
	document.cookie = id_fav+"=" + '0' + "; " + expires + "; path=/";
	
	toggle_site(id);
	
	fc=fc-1;
	
	if (fc<1) {
		document.getElementById('fav_title').style.display='none';
	}
}

function aztAdjust() {
	if ((azt_time.getTime()-ast_time.getTime())>3600) {
		azt_time.setSeconds(azt_time.getSeconds()-3600);
	}
}

function vetAdjust() {
	if (vet_time.getMinutes()!=ukt_time.getMinutes) {
		vet_time.setSeconds(vet_time.getSeconds()+1800);
	}
}

function homeTextChange(id, value) {
	var elementID=id + '_home_txt_on';
	
	if (value=='over') {
		document.getElementById(elementID).innerHTML='Unset My Service Desk';
	}
	
	if (value=='out') {
		document.getElementById(elementID).innerHTML='My Service Desk';
	}
}

function setHomeSites(id) {
	if (id=='boulder') {
		delHomeSites();
		
		document.getElementById('uk_title').style.display = 'none';
		document.getElementById('uk_sites').style.display = getCookie('uk_sites');
		document.getElementById('eu_title').style.display = 'none';
		document.getElementById('eu_sites').style.display = getCookie('eu_sites');
		document.getElementById('ame_title').style.display = 'none';
		document.getElementById('ame_sites').style.display = getCookie('ame_sites');
		document.getElementById('asia_title').style.display = 'none';
		document.getElementById('asia_sites').style.display = getCookie('asia_sites');
		document.getElementById('sea_title').style.display = 'none';
		document.getElementById('sea_sites').style.display = getCookie('sea_sites');
		document.getElementById('anz_title').style.display = 'none';
		document.getElementById('anz_sites').style.display = getCookie('anz_sites');
		
		document.getElementById('mexico').style.display = 'none';
		document.getElementById('bogota').style.display = 'none';
		document.getElementById('lima').style.display = 'none';
		document.getElementById('caracas').style.display = 'none';
		document.getElementById('buenos').style.display = 'none';
		document.getElementById('saopaulo').style.display = 'none';
		document.getElementById('rio').style.display = 'none';
		
		document.getElementById('belfast').style.display = 'none';
/*		document.getElementById('sullom_voe').style.display = 'none';*/
		document.getElementById('aberdeen').style.display = 'none';
/*		document.getElementById('grangemouth').style.display = 'none';*/
		document.getElementById('hull').style.display = 'none';
		document.getElementById('milton_keynes').style.display = 'none';
		document.getElementById('hemel').style.display = 'none';
		document.getElementById('swindon').style.display = 'none';
		document.getElementById('pangbourne').style.display = 'none';
		document.getElementById('sunbury').style.display = 'none';
/*		document.getElementById('bedfont').style.display = 'none';*/
		document.getElementById('sjs').style.display = 'none';
		document.getElementById('20cs').style.display = 'none';
		document.getElementById('leatherhead').style.display = 'none';
		
		document.getElementById('stavanger').style.display = 'none';
		document.getElementById('copenhagen').style.display = 'none';
		document.getElementById('stockholm').style.display = 'none';
		document.getElementById('vantaa').style.display = 'none';
		document.getElementById('lisbon').style.display = 'none';
		document.getElementById('castellon').style.display = 'none';
		document.getElementById('cergy').style.display = 'none';
		document.getElementById('rotterdam').style.display = 'none';
		document.getElementById('geel').style.display = 'none';
		document.getElementById('bertrange').style.display = 'none';
		document.getElementById('bochum').style.display = 'none';
		document.getElementById('hamburg').style.display = 'none';
		document.getElementById('zug').style.display = 'none';
		document.getElementById('milan').style.display = 'none';
		document.getElementById('prague').style.display = 'none';
		document.getElementById('wiener').style.display = 'none';
		document.getElementById('bratislava').style.display = 'none';
		document.getElementById('budapest').style.display = 'none';
		document.getElementById('krakow').style.display = 'none';
		document.getElementById('bucharest').style.display = 'none';
		document.getElementById('kiev').style.display = 'none';
		document.getElementById('athens').style.display = 'none';
		document.getElementById('istanbul').style.display = 'none';
		document.getElementById('nicosia').style.display = 'none';
		document.getElementById('moscow').style.display = 'none';
		
		document.getElementById('luanda').style.display = 'none';
		document.getElementById('capetown').style.display = 'none';
		document.getElementById('jburg').style.display = 'none';
		document.getElementById('cairo').style.display = 'none';
		document.getElementById('basra').style.display = 'none';
		document.getElementById('tbilisi').style.display = 'none';
		document.getElementById('baku').style.display = 'none';
		document.getElementById('dubai').style.display = 'none';
		document.getElementById('muscat').style.display = 'none';
		
		document.getElementById('mumbai').style.display = 'none';
		document.getElementById('new_delhi').style.display = 'none';
		document.getElementById('kolkata').style.display = 'none';
		document.getElementById('almaty').style.display = 'none';
		document.getElementById('hong_kong').style.display = 'none';
		document.getElementById('beijing').style.display = 'none';
		document.getElementById('shanghai').style.display = 'none';
		document.getElementById('taipei').style.display = 'none';
		document.getElementById('seoul').style.display = 'none';
		document.getElementById('ulsan').style.display = 'none';
		document.getElementById('tokyo').style.display = 'none';
		
		document.getElementById('bangkok').style.display = 'none';
		document.getElementById('ho_chi_minh').style.display = 'none';
		document.getElementById('jakarta').style.display = 'none';
		document.getElementById('kuala_lumpur').style.display = 'none';
		document.getElementById('singapore').style.display = 'none';
		document.getElementById('makati').style.display = 'none';
		
		document.getElementById('perth').style.display = 'none';
		document.getElementById('adelaide').style.display = 'none';
		document.getElementById('melbourne').style.display = 'none';
		document.getElementById('sydney').style.display = 'none';
		document.getElementById('brisbane').style.display = 'none';
		document.getElementById('christchurch').style.display = 'none';
		document.getElementById('wellington').style.display = 'none';
		document.getElementById('auckland').style.display = 'none';
	} else if (id=='dublin') {
		delHomeSites();
		
		document.getElementById('na_title').style.display = 'none';
		document.getElementById('na_sites').style.display = getCookie('na_sites');
		document.getElementById('sla_title').style.display = 'none';
		document.getElementById('sla_sites').style.display = getCookie('sla_sites');
		document.getElementById('uk_title').style.display = 'none';
		document.getElementById('uk_sites').style.display = getCookie('uk_sites');
		document.getElementById('ame_title').style.display = 'none';
		document.getElementById('ame_sites').style.display = getCookie('ame_sites');
		document.getElementById('asia_title').style.display = 'none';
		document.getElementById('asia_sites').style.display = getCookie('asia_sites');
		document.getElementById('sea_title').style.display = 'none';
		document.getElementById('sea_sites').style.display = getCookie('sea_sites');
		document.getElementById('anz_title').style.display = 'none';
		document.getElementById('anz_sites').style.display = getCookie('anz_sites');
		
		document.getElementById('calgary').style.display = 'none';
		document.getElementById('prudhoe').style.display = 'none';
		document.getElementById('anchorage').style.display = 'none';
		document.getElementById('cherry').style.display = 'none';
		document.getElementById('lapalma').style.display = 'none';
		document.getElementById('wamsutter').style.display = 'none';
		document.getElementById('durango').style.display = 'none';
		document.getElementById('tulsa').style.display = 'none';
		document.getElementById('houston').style.display = 'none';
		document.getElementById('port_allen').style.display = 'none';
		document.getElementById('chicago').style.display = 'none';
		document.getElementById('whiting').style.display = 'none';
		document.getElementById('toledo').style.display = 'none';
		document.getElementById('cooper_river').style.display = 'none';
		document.getElementById('wayne').style.display = 'none';
		
		document.getElementById('mexico').style.display = 'none';
		document.getElementById('bogota').style.display = 'none';
		document.getElementById('lima').style.display = 'none';
		document.getElementById('caracas').style.display = 'none';
		document.getElementById('pos').style.display = 'none';
		document.getElementById('galeota').style.display = 'none';
		document.getElementById('buenos').style.display = 'none';
		document.getElementById('saopaulo').style.display = 'none';
		document.getElementById('rio').style.display = 'none';
		
		document.getElementById('belfast').style.display = 'none';
/*		document.getElementById('sullom_voe').style.display = 'none';*/
		document.getElementById('aberdeen').style.display = 'none';
/*		document.getElementById('grangemouth').style.display = 'none';*/
		document.getElementById('hull').style.display = 'none';
		document.getElementById('milton_keynes').style.display = 'none';
		document.getElementById('hemel').style.display = 'none';
		document.getElementById('swindon').style.display = 'none';
		document.getElementById('pangbourne').style.display = 'none';
		document.getElementById('sunbury').style.display = 'none';
/*		document.getElementById('bedfont').style.display = 'none';*/
		document.getElementById('sjs').style.display = 'none';
		document.getElementById('20cs').style.display = 'none';
		document.getElementById('leatherhead').style.display = 'none';
		
		document.getElementById('stavanger').style.display = 'none';
		document.getElementById('copenhagen').style.display = 'none';
		document.getElementById('stockholm').style.display = 'none';
		document.getElementById('vantaa').style.display = 'none';
		document.getElementById('lisbon').style.display = 'none';
		document.getElementById('castellon').style.display = 'none';
		document.getElementById('cergy').style.display = 'none';
		document.getElementById('bertrange').style.display = 'none';
		document.getElementById('bochum').style.display = 'none';
		document.getElementById('hamburg').style.display = 'none';
		document.getElementById('zug').style.display = 'none';
		document.getElementById('milan').style.display = 'none';
		document.getElementById('prague').style.display = 'none';
		document.getElementById('wiener').style.display = 'none';
		document.getElementById('bratislava').style.display = 'none';
		document.getElementById('budapest').style.display = 'none';
		document.getElementById('krakow').style.display = 'none';
		document.getElementById('bucharest').style.display = 'none';
		document.getElementById('kiev').style.display = 'none';
		document.getElementById('athens').style.display = 'none';
		document.getElementById('istanbul').style.display = 'none';
		document.getElementById('nicosia').style.display = 'none';
		document.getElementById('moscow').style.display = 'none';
		
		document.getElementById('luanda').style.display = 'none';
		document.getElementById('capetown').style.display = 'none';
		document.getElementById('jburg').style.display = 'none';
		document.getElementById('cairo').style.display = 'none';
		document.getElementById('basra').style.display = 'none';
		document.getElementById('tbilisi').style.display = 'none';
		document.getElementById('baku').style.display = 'none';
		document.getElementById('dubai').style.display = 'none';
		document.getElementById('muscat').style.display = 'none';
		
		document.getElementById('mumbai').style.display = 'none';
		document.getElementById('new_delhi').style.display = 'none';
		document.getElementById('kolkata').style.display = 'none';
		document.getElementById('almaty').style.display = 'none';
		document.getElementById('hong_kong').style.display = 'none';
		document.getElementById('beijing').style.display = 'none';
		document.getElementById('shanghai').style.display = 'none';
		document.getElementById('taipei').style.display = 'none';
		document.getElementById('seoul').style.display = 'none';
		document.getElementById('ulsan').style.display = 'none';
		document.getElementById('tokyo').style.display = 'none';
		
		document.getElementById('bangkok').style.display = 'none';
		document.getElementById('ho_chi_minh').style.display = 'none';
		document.getElementById('jakarta').style.display = 'none';
		document.getElementById('kuala_lumpur').style.display = 'none';
		document.getElementById('singapore').style.display = 'none';
		document.getElementById('makati').style.display = 'none';
		
		document.getElementById('perth').style.display = 'none';
		document.getElementById('adelaide').style.display = 'none';
		document.getElementById('melbourne').style.display = 'none';
		document.getElementById('sydney').style.display = 'none';
		document.getElementById('brisbane').style.display = 'none';
		document.getElementById('christchurch').style.display = 'none';
		document.getElementById('wellington').style.display = 'none';
		document.getElementById('auckland').style.display = 'none';
	} else if (id=='brno') {
		delHomeSites();
		
		document.getElementById('na_title').style.display = 'none';
		document.getElementById('na_sites').style.display = getCookie('na_sites');
		document.getElementById('uk_title').style.display = 'none';
		document.getElementById('uk_sites').style.display = getCookie('uk_sites');
		document.getElementById('asia_title').style.display = 'none';
		document.getElementById('asia_sites').style.display = getCookie('asia_sites');
		document.getElementById('sea_title').style.display = 'none';
		document.getElementById('sea_sites').style.display = getCookie('sea_sites');
		document.getElementById('anz_title').style.display = 'none';
		document.getElementById('anz_sites').style.display = getCookie('anz_sites');
		
		document.getElementById('calgary').style.display = 'none';
		document.getElementById('prudhoe').style.display = 'none';
		document.getElementById('anchorage').style.display = 'none';
		document.getElementById('cherry').style.display = 'none';
		document.getElementById('lapalma').style.display = 'none';
		document.getElementById('wamsutter').style.display = 'none';
		document.getElementById('durango').style.display = 'none';
		document.getElementById('tulsa').style.display = 'none';
		document.getElementById('houston').style.display = 'none';
		document.getElementById('port_allen').style.display = 'none';
		document.getElementById('chicago').style.display = 'none';
		document.getElementById('whiting').style.display = 'none';
		document.getElementById('toledo').style.display = 'none';
		document.getElementById('cooper_river').style.display = 'none';
		document.getElementById('wayne').style.display = 'none';
		
		document.getElementById('pos').style.display = 'none';
		document.getElementById('galeota').style.display = 'none';
		
		document.getElementById('belfast').style.display = 'none';
/*		document.getElementById('sullom_voe').style.display = 'none';*/
		document.getElementById('aberdeen').style.display = 'none';
/*		document.getElementById('grangemouth').style.display = 'none';*/
		document.getElementById('hull').style.display = 'none';
		document.getElementById('milton_keynes').style.display = 'none';
		document.getElementById('hemel').style.display = 'none';
		document.getElementById('swindon').style.display = 'none';
		document.getElementById('pangbourne').style.display = 'none';
		document.getElementById('sunbury').style.display = 'none';
/*		document.getElementById('bedfont').style.display = 'none';*/
		document.getElementById('sjs').style.display = 'none';
		document.getElementById('20cs').style.display = 'none';
		document.getElementById('leatherhead').style.display = 'none';
		
		document.getElementById('stavanger').style.display = 'none';
		document.getElementById('copenhagen').style.display = 'none';
		document.getElementById('stockholm').style.display = 'none';
		document.getElementById('vantaa').style.display = 'none';
		document.getElementById('rotterdam').style.display = 'none';
		document.getElementById('geel').style.display = 'none';
		document.getElementById('budapest').style.display = 'none';
		document.getElementById('bucharest').style.display = 'none';
		document.getElementById('kiev').style.display = 'none';
		document.getElementById('moscow').style.display = 'none';
		
		document.getElementById('capetown').style.display = 'none';
		document.getElementById('jburg').style.display = 'none';
		document.getElementById('cairo').style.display = 'none';
		document.getElementById('basra').style.display = 'none';
		document.getElementById('tbilisi').style.display = 'none';
		document.getElementById('baku').style.display = 'none';
		document.getElementById('dubai').style.display = 'none';
		document.getElementById('muscat').style.display = 'none';
		
		document.getElementById('mumbai').style.display = 'none';
		document.getElementById('new_delhi').style.display = 'none';
		document.getElementById('kolkata').style.display = 'none';
		document.getElementById('almaty').style.display = 'none';
		document.getElementById('hong_kong').style.display = 'none';
		document.getElementById('beijing').style.display = 'none';
		document.getElementById('shanghai').style.display = 'none';
		document.getElementById('taipei').style.display = 'none';
		document.getElementById('seoul').style.display = 'none';
		document.getElementById('ulsan').style.display = 'none';
		document.getElementById('tokyo').style.display = 'none';
		
		document.getElementById('bangkok').style.display = 'none';
		document.getElementById('ho_chi_minh').style.display = 'none';
		document.getElementById('jakarta').style.display = 'none';
		document.getElementById('kuala_lumpur').style.display = 'none';
		document.getElementById('singapore').style.display = 'none';
		document.getElementById('makati').style.display = 'none';
		
		document.getElementById('perth').style.display = 'none';
		document.getElementById('adelaide').style.display = 'none';
		document.getElementById('melbourne').style.display = 'none';
		document.getElementById('sydney').style.display = 'none';
		document.getElementById('brisbane').style.display = 'none';
		document.getElementById('christchurch').style.display = 'none';
		document.getElementById('wellington').style.display = 'none';
		document.getElementById('auckland').style.display = 'none';
	} else if (id=='greenock') {
		delHomeSites();
	} else if (id=='bangalore') {
		delHomeSites();
	}
}

function delHomeSites() {
	document.getElementById('na_title').style.display = 'block';
	document.getElementById('na_sites').style.display = getCookie('na_sites');
	document.getElementById('sla_title').style.display = 'block';
	document.getElementById('sla_sites').style.display = getCookie('sla_sites');
	document.getElementById('uk_title').style.display = 'block';
	document.getElementById('uk_sites').style.display = getCookie('uk_sites');
	document.getElementById('eu_title').style.display = 'block';
	document.getElementById('eu_sites').style.display = getCookie('eu_sites');
	document.getElementById('ame_title').style.display = 'block';
	document.getElementById('ame_sites').style.display = getCookie('ame_sites');
	document.getElementById('asia_title').style.display = 'block';
	document.getElementById('asia_sites').style.display = getCookie('asia_sites');
	document.getElementById('sea_title').style.display = 'block';
	document.getElementById('sea_sites').style.display = getCookie('sea_sites');
	document.getElementById('anz_title').style.display = 'block';
	document.getElementById('anz_sites').style.display = getCookie('anz_sites');
	
	document.getElementById('calgary').style.display = 'block';
	document.getElementById('prudhoe').style.display = 'block';
	document.getElementById('anchorage').style.display = 'block';
	document.getElementById('cherry').style.display = 'block';
	document.getElementById('lapalma').style.display = 'block';
	document.getElementById('wamsutter').style.display = 'block';
	document.getElementById('durango').style.display = 'block';
	document.getElementById('tulsa').style.display = 'block';
	document.getElementById('houston').style.display = 'block';
	document.getElementById('port_allen').style.display = 'block';
	document.getElementById('chicago').style.display = 'block';
	document.getElementById('whiting').style.display = 'block';
	document.getElementById('toledo').style.display = 'block';
	document.getElementById('cooper_river').style.display = 'block';
	document.getElementById('wayne').style.display = 'block';
	
	document.getElementById('mexico').style.display = 'block';
	document.getElementById('bogota').style.display = 'block';
	document.getElementById('lima').style.display = 'block';
	document.getElementById('caracas').style.display = 'block';
	document.getElementById('pos').style.display = 'block';
	document.getElementById('galeota').style.display = 'block';
	document.getElementById('buenos').style.display = 'block';
	document.getElementById('saopaulo').style.display = 'block';
	document.getElementById('rio').style.display = 'block';
	
	document.getElementById('belfast').style.display = 'block';
/*	document.getElementById('sullom_voe').style.display = 'block';*/
	document.getElementById('aberdeen').style.display = 'block';
/*	document.getElementById('grangemouth').style.display = 'block';*/
	document.getElementById('hull').style.display = 'block';
	document.getElementById('milton_keynes').style.display = 'block';
	document.getElementById('hemel').style.display = 'block';
	document.getElementById('swindon').style.display = 'block';
	document.getElementById('pangbourne').style.display = 'block';
	document.getElementById('sunbury').style.display = 'block';
/*	document.getElementById('bedfont').style.display = 'block';*/
	document.getElementById('sjs').style.display = 'block';
	document.getElementById('20cs').style.display = 'block';
	document.getElementById('leatherhead').style.display = 'block';
	
	document.getElementById('stavanger').style.display = 'block';
	document.getElementById('copenhagen').style.display = 'block';
	document.getElementById('stockholm').style.display = 'block';
	document.getElementById('vantaa').style.display = 'block';
	document.getElementById('lisbon').style.display = 'block';
	document.getElementById('castellon').style.display = 'block';
	document.getElementById('cergy').style.display = 'block';
	document.getElementById('rotterdam').style.display = 'block';
	document.getElementById('geel').style.display = 'block';
	document.getElementById('bertrange').style.display = 'block';
	document.getElementById('bochum').style.display = 'block';
	document.getElementById('hamburg').style.display = 'block';
	document.getElementById('zug').style.display = 'block';
	document.getElementById('milan').style.display = 'block';
	document.getElementById('prague').style.display = 'block';
	document.getElementById('wiener').style.display = 'block';
	document.getElementById('bratislava').style.display = 'block';
	document.getElementById('budapest').style.display = 'block';
	document.getElementById('krakow').style.display = 'block';
	document.getElementById('bucharest').style.display = 'block';
	document.getElementById('kiev').style.display = 'block';
	document.getElementById('athens').style.display = 'block';
	document.getElementById('istanbul').style.display = 'block';
	document.getElementById('nicosia').style.display = 'block';
	document.getElementById('moscow').style.display = 'block';
	
	document.getElementById('luanda').style.display = 'block';
	document.getElementById('capetown').style.display = 'block';
	document.getElementById('jburg').style.display = 'block';
	document.getElementById('cairo').style.display = 'block';
	document.getElementById('basra').style.display = 'block';
	document.getElementById('tbilisi').style.display = 'block';
	document.getElementById('baku').style.display = 'block';
	document.getElementById('dubai').style.display = 'block';
	document.getElementById('muscat').style.display = 'block';
	
	document.getElementById('mumbai').style.display = 'block';
	document.getElementById('new_delhi').style.display = 'block';
	document.getElementById('kolkata').style.display = 'block';
	document.getElementById('almaty').style.display = 'block';
	document.getElementById('hong_kong').style.display = 'block';
	document.getElementById('beijing').style.display = 'block';
	document.getElementById('shanghai').style.display = 'block';
	document.getElementById('taipei').style.display = 'block';
	document.getElementById('seoul').style.display = 'block';
	document.getElementById('ulsan').style.display = 'block';
	document.getElementById('tokyo').style.display = 'block';
	
	document.getElementById('bangkok').style.display = 'block';
	document.getElementById('ho_chi_minh').style.display = 'block';
	document.getElementById('jakarta').style.display = 'block';
	document.getElementById('kuala_lumpur').style.display = 'block';
	document.getElementById('singapore').style.display = 'block';
	document.getElementById('makati').style.display = 'block';
	
	document.getElementById('perth').style.display = 'block';
	document.getElementById('adelaide').style.display = 'block';
	document.getElementById('melbourne').style.display = 'block';
	document.getElementById('sydney').style.display = 'block';
	document.getElementById('brisbane').style.display = 'block';
	document.getElementById('christchurch').style.display = 'block';
	document.getElementById('wellington').style.display = 'block';
	document.getElementById('auckland').style.display = 'block';
}

function setSites() {
	setLayerDisplay('service_desks', getCookie('service_desks'));
	setLayerDisplay('fav_locations', getCookie('fav_locations'));
	setLayerDisplay('global_locations', getCookie('global_locations'));
	setLayerDisplay('na_sites', getCookie('na_sites'));
	setLayerDisplay('sla_sites', getCookie('sla_sites'));
	setLayerDisplay('uk_sites', getCookie('uk_sites'));
	setLayerDisplay('eu_sites', getCookie('eu_sites'));
	setLayerDisplay('ame_sites', getCookie('ame_sites'));
	setLayerDisplay('asia_sites', getCookie('asia_sites'));
	setLayerDisplay('sea_sites', getCookie('sea_sites'));
	setLayerDisplay('anz_sites', getCookie('anz_sites'));
	
	setSd3Display('boulder');
	setSd3Display('dublin');
	setSdDisplay('greenock');
	setSd3Display('brno');
	setSdDisplay('bangalore');
	
	setSiteDisplay('calgary', getCookie('calgary'), getFavCookie('calgary'), 'na');
	setSiteDisplay('prudhoe', getCookie('prudhoe'), getFavCookie('prudhoe'), 'na');
	setSiteDisplay('anchorage', getCookie('anchorage'), getFavCookie('anchorage'), 'na');
	setSiteDisplay('cherry', getCookie('cherry'), getFavCookie('cherry'), 'na');
	setSiteDisplay('lapalma', getCookie('lapalma'), getFavCookie('lapalma'), 'na');
	setSiteDisplay('wamsutter', getCookie('wamsutter'), getFavCookie('wamsutter'), 'na');
	setSiteDisplay('durango', getCookie('durango'), getFavCookie('durango'), 'na');
	setSiteDisplay('tulsa', getCookie('tulsa'), getFavCookie('tulsa'), 'na');
	setSiteDisplay('houston', getCookie('houston'), getFavCookie('houston'), 'na');
	setSiteDisplay('port_allen', getCookie('port_allen'), getFavCookie('port_allen'), 'na');
	setSiteDisplay('chicago', getCookie('chicago'), getFavCookie('chicago'), 'na');
	setSiteDisplay('whiting', getCookie('whiting'), getFavCookie('whiting'), 'na');
	setSiteDisplay('toledo', getCookie('toledo'), getFavCookie('toledo'), 'na');
	setSiteDisplay('cooper_river', getCookie('cooper_river'), getFavCookie('cooper_river'), 'na');
	setSiteDisplay('wayne', getCookie('wayne'), getFavCookie('wayne'), 'na');
	
	setSiteDisplay('mexico', getCookie('mexico'), getFavCookie('mexico'), 'sla');
	setSiteDisplay('bogota', getCookie('bogota'), getFavCookie('bogota'), 'sla');
	setSiteDisplay('lima', getCookie('lima'), getFavCookie('lima'), 'sla');
	setSiteDisplay('caracas', getCookie('caracas'), getFavCookie('caracas'), 'sla');
	setSiteDisplay('pos', getCookie('pos'), getFavCookie('pos'), 'sla');
	setSiteDisplay('galeota', getCookie('galeota'), getFavCookie('galeota'), 'sla');
	setSiteDisplay('buenos', getCookie('buenos'), getFavCookie('buenos'), 'sla');
	setSiteDisplay('saopaulo', getCookie('saopaulo'), getFavCookie('saopaulo'), 'sla');
	setSiteDisplay('rio', getCookie('rio'), getFavCookie('rio'), 'sla');
	
	setSiteDisplay('belfast', getCookie('belfast'), getFavCookie('belfast'), 'uk');
/*	setSiteDisplay('sullom_voe', getCookie('sullom_voe'), getFavCookie('sullom_voe'), 'uk');*/
	setSiteDisplay('aberdeen', getCookie('aberdeen'), getFavCookie('aberdeen'), 'uk');
/*	setSiteDisplay('grangemouth', getCookie('grangemouth'), getFavCookie('grangemouth'), 'uk');*/
	setSiteDisplay('hull', getCookie('hull'), getFavCookie('hull'), 'uk');
	setSiteDisplay('milton_keynes', getCookie('milton_keynes'), getFavCookie('milton_keynes'), 'uk');
	setSiteDisplay('hemel', getCookie('hemel'), getFavCookie('hemel'), 'uk');
	setSiteDisplay('swindon', getCookie('swindon'), getFavCookie('swindon'), 'uk');
	setSiteDisplay('pangbourne', getCookie('pangbourne'), getFavCookie('pangbourne'), 'uk');
	setSiteDisplay('sunbury', getCookie('sunbury'), getFavCookie('sunbury'), 'uk');
/*	setSiteDisplay('bedfont', getCookie('bedfont'), getFavCookie('bedfont'), 'uk');*/
	setSiteDisplay('sjs', getCookie('sjs'), getFavCookie('sjs'), 'uk');
	setSiteDisplay('20cs', getCookie('20cs'), getFavCookie('20cs'), 'uk');
	setSiteDisplay('leatherhead', getCookie('leatherhead'), getFavCookie('leatherhead'), 'uk');
	
	setSiteDisplay('stavanger', getCookie('stavanger'), getFavCookie('stavanger'), 'eu');
	setSiteDisplay('copenhagen', getCookie('copenhagen'), getFavCookie('copenhagen'), 'eu');
	setSiteDisplay('stockholm', getCookie('stockholm'), getFavCookie('stockholm'), 'eu');
	setSiteDisplay('vantaa', getCookie('vantaa'), getFavCookie('vantaa'), 'eu');
	setSiteDisplay('lisbon', getCookie('lisbon'), getFavCookie('lisbon'), 'eu');
	setSiteDisplay('castellon', getCookie('castellon'), getFavCookie('castellon'), 'eu');
	setSiteDisplay('cergy', getCookie('cergy'), getFavCookie('cergy'), 'eu');
	setSiteDisplay('rotterdam', getCookie('rotterdam'), getFavCookie('rotterdam'), 'eu');
	setSiteDisplay('geel', getCookie('geel'), getFavCookie('geel'), 'eu');
	setSiteDisplay('bertrange', getCookie('bertrange'), getFavCookie('bertrange'), 'eu');
	setSiteDisplay('bochum', getCookie('bochum'), getFavCookie('bochum'), 'eu');
	setSiteDisplay('hamburg', getCookie('hamburg'), getFavCookie('hamburg'), 'eu');
	setSiteDisplay('zug', getCookie('zug'), getFavCookie('zug'), 'eu');
	setSiteDisplay('milan', getCookie('milan'), getFavCookie('milan'), 'eu');
	setSiteDisplay('prague', getCookie('prague'), getFavCookie('prague'), 'eu');
	setSiteDisplay('wiener', getCookie('wiener'), getFavCookie('wiener'), 'eu');
	setSiteDisplay('bratislava', getCookie('bratislava'), getFavCookie('bratislava'), 'eu');
	setSiteDisplay('budapest', getCookie('budapest'), getFavCookie('budapest'), 'eu');
	setSiteDisplay('krakow', getCookie('krakow'), getFavCookie('krakow'), 'eu');
	setSiteDisplay('bucharest', getCookie('bucharest'), getFavCookie('bucharest'), 'eu');
	setSiteDisplay('kiev', getCookie('kiev'), getFavCookie('kiev'), 'eu');
	setSiteDisplay('athens', getCookie('athens'), getFavCookie('athens'), 'eu');
	setSiteDisplay('istanbul', getCookie('istanbul'), getFavCookie('istanbul'), 'eu');
	setSiteDisplay('nicosia', getCookie('nicosia'), getFavCookie('nicosia'), 'eu');
	setSiteDisplay('moscow', getCookie('moscow'), getFavCookie('moscow'), 'eu');
	
	setSiteDisplay('luanda', getCookie('luanda'), getFavCookie('luanda'), 'ame');
	setSiteDisplay('capetown', getCookie('capetown'), getFavCookie('capetown'), 'ame');
	setSiteDisplay('jburg', getCookie('jburg'), getFavCookie('jburg'), 'ame');
	setSiteDisplay('cairo', getCookie('cairo'), getFavCookie('cairo'), 'ame');
	setSiteDisplay('basra', getCookie('basra'), getFavCookie('basra'), 'ame');
	setSiteDisplay('tbilisi', getCookie('tbilisi'), getFavCookie('tbilisi'), 'ame');
	setSiteDisplay('baku', getCookie('baku'), getFavCookie('baku'), 'ame');
	setSiteDisplay('dubai', getCookie('dubai'), getFavCookie('dubai'), 'ame');
	setSiteDisplay('muscat', getCookie('muscat'), getFavCookie('muscat'), 'ame');
	
	setSiteDisplay('mumbai', getCookie('mumbai'), getFavCookie('mumbai'), 'asia');
	setSiteDisplay('new_delhi', getCookie('new_delhi'), getFavCookie('new_delhi'), 'asia');
	setSiteDisplay('kolkata', getCookie('kolkata'), getFavCookie('kolkata'), 'asia');
	setSiteDisplay('almaty', getCookie('almaty'), getFavCookie('almaty'), 'asia');
	setSiteDisplay('hong_kong', getCookie('hong_kong'), getFavCookie('hong_kong'), 'asia');
	setSiteDisplay('beijing', getCookie('beijing'), getFavCookie('beijing'), 'asia');
	setSiteDisplay('shanghai', getCookie('shanghai'), getFavCookie('shanghai'), 'asia');
	setSiteDisplay('taipei', getCookie('taipei'), getFavCookie('taipei'), 'asia');
	setSiteDisplay('seoul', getCookie('seoul'), getFavCookie('seoul'), 'asia');
	setSiteDisplay('ulsan', getCookie('ulsan'), getFavCookie('ulsan'), 'asia');
	setSiteDisplay('tokyo', getCookie('tokyo'), getFavCookie('tokyo'), 'asia');
	
	setSiteDisplay('bangkok', getCookie('bangkok'), getFavCookie('bangkok'), 'sea');
	setSiteDisplay('ho_chi_minh', getCookie('ho_chi_minh'), getFavCookie('ho_chi_minh'), 'sea');
	setSiteDisplay('jakarta', getCookie('jakarta'), getFavCookie('jakarta'), 'sea');
	setSiteDisplay('kuala_lumpur', getCookie('kuala_lumpur'), getFavCookie('kuala_lumpur'), 'sea');
	setSiteDisplay('singapore', getCookie('singapore'), getFavCookie('singapore'), 'sea');
	setSiteDisplay('makati', getCookie('makati'), getFavCookie('makati'), 'sea');
	
	setSiteDisplay('perth', getCookie('perth'), getFavCookie('perth'), 'anz');
	setSiteDisplay('adelaide', getCookie('adelaide'), getFavCookie('adelaide'), 'anz');
	setSiteDisplay('melbourne', getCookie('melbourne'), getFavCookie('melbourne'), 'anz');
	setSiteDisplay('sydney', getCookie('sydney'), getFavCookie('sydney'), 'anz');
	setSiteDisplay('brisbane', getCookie('brisbane'), getFavCookie('brisbane'), 'anz');
	setSiteDisplay('christchurch', getCookie('christchurch'), getFavCookie('christchurch'), 'anz');
	setSiteDisplay('wellington', getCookie('wellington'), getFavCookie('wellington'), 'anz');
	setSiteDisplay('auckland', getCookie('auckland'), getFavCookie('auckland'), 'anz');
}

function setLocationInfo() {
	var boulder_hours=formatHours('boulder');
	document.getElementById("boulder_loc").innerHTML='Boulder';
	document.getElementById("boulder_loc_state").innerHTML=', CO';
	document.getElementById("boulder_country").innerHTML=countries[1];
	document.getElementById("boulder_days").innerHTML=sd_days;
	document.getElementById("boulder_hours").innerHTML=boulder_hours;
	document.getElementById("boulder_countries").innerHTML=boulder_countries;
	document.getElementById("boulder_country_times").innerHTML=SupportBoulder();
	
	var dublin_hours=formatHours('dublin');
	document.getElementById("dublin_loc").innerHTML='Dublin';
	document.getElementById("dublin_country").innerHTML=countries[8];
	document.getElementById("dublin_days").innerHTML=sd_days;
	document.getElementById("dublin_hours").innerHTML=dublin_hours;
	document.getElementById("dublin_countries").innerHTML=dublin_countries;
	document.getElementById("dublin_country_times").innerHTML=SupportDublin();
	
	var greenock_hours=formatHours('greenock');
	document.getElementById("greenock_loc").innerHTML='Greenock';
	document.getElementById("greenock_country").innerHTML=countries[9];
	document.getElementById("greenock_days").innerHTML=sd_days;
	document.getElementById("greenock_hours").innerHTML=greenock_hours;
	
	var brno_hours=formatHours('brno');
	document.getElementById("brno_loc").innerHTML='Brno';
	document.getElementById("brno_country").innerHTML=countries[23];
	document.getElementById("brno_days").innerHTML=sd_days;
	document.getElementById("brno_hours").innerHTML=brno_hours;
	document.getElementById("brno_countries").innerHTML=brno_countries;
	document.getElementById("brno_country_times").innerHTML=SupportBrno();
	
	var bangalore_hours=formatHours('bangalore');
	document.getElementById("bangalore_loc").innerHTML='Bangalore';
	document.getElementById("bangalore_country").innerHTML=countries[41];
	document.getElementById("bangalore_days").innerHTML=sd_days;
	document.getElementById("bangalore_hours").innerHTML=bangalore_hours;
	
	document.getElementById("calgary_loc").innerHTML='Calgary';
	document.getElementById("calgary_loc_sml").innerHTML='Calgary';
	document.getElementById("calgary_state").innerHTML=', AB';
	document.getElementById("calgary_country").innerHTML=countries[0];
	document.getElementById("prudhoe_loc").innerHTML='Prudhoe Bay';
	document.getElementById("prudhoe_loc_sml").innerHTML='Prudhoe Bay';
	document.getElementById("prudhoe_state").innerHTML=', AK';
	document.getElementById("prudhoe_country").innerHTML=countries[1];
	document.getElementById("anchorage_loc").innerHTML='Anchorage';
	document.getElementById("anchorage_loc_sml").innerHTML='Anchorage';
	document.getElementById("anchorage_state").innerHTML=', AK';
	document.getElementById("anchorage_country").innerHTML=countries[1];
	document.getElementById("cherry_loc").innerHTML='Cherry Point';
	document.getElementById("cherry_loc_sml").innerHTML='Cherry Point';
	document.getElementById("cherry_state").innerHTML=', WA';
	document.getElementById("cherry_country").innerHTML=countries[1];
	document.getElementById("lapalma_loc").innerHTML='La Palma';
	document.getElementById("lapalma_loc_sml").innerHTML='La Palma';
	document.getElementById("lapalma_state").innerHTML=', CA';
	document.getElementById("lapalma_country").innerHTML=countries[1];
	document.getElementById("wamsutter_loc").innerHTML='Wamsutter';
	document.getElementById("wamsutter_loc_sml").innerHTML='Wamsutter';
	document.getElementById("wamsutter_state").innerHTML=', WY';
	document.getElementById("wamsutter_country").innerHTML=countries[1];
	document.getElementById("durango_loc").innerHTML='Durango';
	document.getElementById("durango_loc_sml").innerHTML='Durango';
	document.getElementById("durango_state").innerHTML=', CO';
	document.getElementById("durango_country").innerHTML=countries[1];
	document.getElementById("tulsa_loc").innerHTML='Tulsa';
	document.getElementById("tulsa_loc_sml").innerHTML='Tulsa';
	document.getElementById("tulsa_state").innerHTML=', OK';
	document.getElementById("tulsa_country").innerHTML=countries[1];
	document.getElementById("houston_loc").innerHTML='Houston';
	document.getElementById("houston_loc_sml").innerHTML='Houston';
	document.getElementById("houston_state").innerHTML=', TX';
	document.getElementById("houston_country").innerHTML=countries[1];
	document.getElementById("port_allen_loc").innerHTML='Port Allen';
	document.getElementById("port_allen_loc_sml").innerHTML='Port Allen';
	document.getElementById("port_allen_state").innerHTML=', LA';
	document.getElementById("port_allen_country").innerHTML=countries[1];
	document.getElementById("chicago_loc").innerHTML='Chicago';
	document.getElementById("chicago_loc_sml").innerHTML='Chicago';
	document.getElementById("chicago_state").innerHTML=', IL';
	document.getElementById("chicago_country").innerHTML=countries[1];
	document.getElementById("whiting_loc").innerHTML='Whiting';
	document.getElementById("whiting_loc_sml").innerHTML='Whiting';
	document.getElementById("whiting_state").innerHTML=', IN';
	document.getElementById("whiting_country").innerHTML=countries[1];
	document.getElementById("toledo_loc").innerHTML='Toledo';
	document.getElementById("toledo_loc_sml").innerHTML='Toledo';
	document.getElementById("toledo_state").innerHTML=', OH';
	document.getElementById("toledo_country").innerHTML=countries[1];
	document.getElementById("cooper_river_loc").innerHTML='Cooper River';
	document.getElementById("cooper_river_loc_sml").innerHTML='Cooper River';
	document.getElementById("cooper_river_state").innerHTML=', SC';
	document.getElementById("cooper_river_country").innerHTML=countries[1];
	document.getElementById("wayne_loc").innerHTML='Wayne';
	document.getElementById("wayne_loc_sml").innerHTML='Wayne';
	document.getElementById("wayne_state").innerHTML=', NJ';
	document.getElementById("wayne_country").innerHTML=countries[1];
	
	document.getElementById("mexico_loc").innerHTML='Mexico City';
	document.getElementById("mexico_loc_sml").innerHTML='Mexico City';
	document.getElementById("mexico_country").innerHTML=countries[2];
	document.getElementById("bogota_loc").innerHTML='Bogot&aacute;';
	document.getElementById("bogota_loc_sml").innerHTML='Bogot&aacute;';
	document.getElementById("bogota_country").innerHTML=countries[3];
	document.getElementById("lima_loc").innerHTML='Lima';
	document.getElementById("lima_loc_sml").innerHTML='Lima';
	document.getElementById("lima_country").innerHTML=countries[57];
	document.getElementById("caracas_loc").innerHTML='Caracas';
	document.getElementById("caracas_loc_sml").innerHTML='Caracas';
	document.getElementById("caracas_country").innerHTML=countries[4];
	document.getElementById("pos_loc").innerHTML='Port of Spain';
	document.getElementById("pos_loc_sml").innerHTML='Port of Spain';
	document.getElementById("pos_country").innerHTML=countries[5];
	document.getElementById("galeota_loc").innerHTML='Galeota Point';
	document.getElementById("galeota_loc_sml").innerHTML='Galeota Point';
	document.getElementById("galeota_country").innerHTML=countries[5];
	document.getElementById("buenos_loc").innerHTML='Buenos Aires';
	document.getElementById("buenos_loc_sml").innerHTML='Buenos Aires';
	document.getElementById("buenos_country").innerHTML=countries[6];
	document.getElementById("saopaulo_loc").innerHTML='S&atilde;o Paulo';
	document.getElementById("saopaulo_loc_sml").innerHTML='S&atilde;o Paulo';
	document.getElementById("saopaulo_country").innerHTML=countries[7];
	document.getElementById("rio_loc").innerHTML='Rio de Janeiro';
	document.getElementById("rio_loc_sml").innerHTML='Rio de Janeiro';
	document.getElementById("rio_country").innerHTML=countries[7];
	
	document.getElementById("belfast_loc").innerHTML='Belfast';
	document.getElementById("belfast_loc_sml").innerHTML='Belfast';
	document.getElementById("belfast_country").innerHTML=countries[9];
/*	document.getElementById("sullom_voe_loc").innerHTML='Sullom Voe';*/
/*	document.getElementById("sullom_voe_loc_sml").innerHTML='Sullom Voe';*/
/*	document.getElementById("sullom_voe_country").innerHTML=countries[9];*/
	document.getElementById("aberdeen_loc").innerHTML='Aberdeen';
	document.getElementById("aberdeen_loc_sml").innerHTML='Aberdeen';
	document.getElementById("aberdeen_country").innerHTML=countries[9];
/*	document.getElementById("grangemouth_loc").innerHTML='Grangemouth';*/
/*	document.getElementById("grangemouth_loc_sml").innerHTML='Grangemouth';*/
/*	document.getElementById("grangemouth_country").innerHTML=countries[9];*/
	document.getElementById("hull_loc").innerHTML='Hull';
	document.getElementById("hull_loc_sml").innerHTML='Hull';
	document.getElementById("hull_country").innerHTML=countries[9];
	document.getElementById("milton_keynes_loc").innerHTML='Milton Keynes';
	document.getElementById("milton_keynes_loc_sml").innerHTML='Milton Keynes';
	document.getElementById("milton_keynes_country").innerHTML=countries[9];
	document.getElementById("hemel_loc").innerHTML='Hemel Hempstead';
	document.getElementById("hemel_loc_sml").innerHTML='Hemel Hempstead';
	document.getElementById("hemel_country").innerHTML=countries[9];
	document.getElementById("swindon_loc").innerHTML='Swindon';
	document.getElementById("swindon_loc_sml").innerHTML='Swindon';
	document.getElementById("swindon_country").innerHTML=countries[9];
	document.getElementById("pangbourne_loc").innerHTML='Pangbourne';
	document.getElementById("pangbourne_loc_sml").innerHTML='Pangbourne';
	document.getElementById("pangbourne_country").innerHTML=countries[9];
	document.getElementById("sunbury_loc").innerHTML='Sunbury';
	document.getElementById("sunbury_loc_sml").innerHTML='Sunbury';
	document.getElementById("sunbury_country").innerHTML=countries[9];
/*	document.getElementById("bedfont_loc").innerHTML='Bedfont Lakes';*/
/*	document.getElementById("bedfont_loc_sml").innerHTML='Bedfont Lakes';*/
/*	document.getElementById("bedfont_country").innerHTML=countries[9];*/
	document.getElementById("sjs_loc").innerHTML="St. James's Square";
	document.getElementById("sjs_loc_sml").innerHTML="St. James's Square";
	document.getElementById("sjs_country").innerHTML=countries[9];
	document.getElementById("20cs_loc").innerHTML='Canada Square';
	document.getElementById("20cs_loc_sml").innerHTML='Canada Square';
	document.getElementById("20cs_country").innerHTML=countries[9];
	document.getElementById("leatherhead_loc").innerHTML='Leatherhead';
	document.getElementById("leatherhead_loc_sml").innerHTML='Leatherhead';
	document.getElementById("leatherhead_country").innerHTML=countries[9];
	
	document.getElementById("stavanger_loc").innerHTML='Stavanger';
	document.getElementById("stavanger_loc_sml").innerHTML='Stavanger';
	document.getElementById("stavanger_country").innerHTML=countries[10];
	document.getElementById("copenhagen_loc").innerHTML='Copenhagen';
	document.getElementById("copenhagen_loc_sml").innerHTML='Copenhagen';
	document.getElementById("copenhagen_country").innerHTML=countries[11];
	document.getElementById("stockholm_loc").innerHTML='Stockholm';
	document.getElementById("stockholm_loc_sml").innerHTML='Stockholm';
	document.getElementById("stockholm_country").innerHTML=countries[12];
	document.getElementById("vantaa_loc").innerHTML='Vantaa';
	document.getElementById("vantaa_loc_sml").innerHTML='Vantaa';
	document.getElementById("vantaa_country").innerHTML=countries[13];
	document.getElementById("lisbon_loc").innerHTML='Lisbon';
	document.getElementById("lisbon_loc_sml").innerHTML='Lisbon';
	document.getElementById("lisbon_country").innerHTML=countries[14];
	document.getElementById("castellon_loc").innerHTML='Castell&oacute;n';
	document.getElementById("castellon_loc_sml").innerHTML='Castell&oacute;n';
	document.getElementById("castellon_country").innerHTML=countries[15];
	document.getElementById("cergy_loc").innerHTML='Cergy';
	document.getElementById("cergy_loc_sml").innerHTML='Cergy';
	document.getElementById("cergy_country").innerHTML=countries[16];
	document.getElementById("rotterdam_loc").innerHTML='Rotterdam';
	document.getElementById("rotterdam_loc_sml").innerHTML='Rotterdam';
	document.getElementById("rotterdam_country").innerHTML=countries[17];
	document.getElementById("geel_loc").innerHTML='Geel';
	document.getElementById("geel_loc_sml").innerHTML='Geel';
	document.getElementById("geel_country").innerHTML=countries[18];
	document.getElementById("bertrange_loc").innerHTML='Bertrange';
	document.getElementById("bertrange_loc_sml").innerHTML='Bertrange';
	document.getElementById("bertrange_country").innerHTML=countries[19];
	document.getElementById("bochum_loc").innerHTML='Bochum';
	document.getElementById("bochum_loc_sml").innerHTML='Bochum';
	document.getElementById("bochum_country").innerHTML=countries[20];
	document.getElementById("hamburg_loc").innerHTML='Hamburg';
	document.getElementById("hamburg_loc_sml").innerHTML='Hamburg';
	document.getElementById("hamburg_country").innerHTML=countries[20];
	document.getElementById("zug_loc").innerHTML='Zug';
	document.getElementById("zug_loc_sml").innerHTML='Zug';
	document.getElementById("zug_country").innerHTML=countries[21];
	document.getElementById("milan_loc").innerHTML='Milan';
	document.getElementById("milan_loc_sml").innerHTML='Milan';
	document.getElementById("milan_country").innerHTML=countries[22];
	document.getElementById("prague_loc").innerHTML='Prague';
	document.getElementById("prague_loc_sml").innerHTML='Prague';
	document.getElementById("prague_country").innerHTML=countries[23];
	document.getElementById("wiener_loc").innerHTML='Wiener Neudorf';
	document.getElementById("wiener_loc_sml").innerHTML='Wiener Neudorf';
	document.getElementById("wiener_country").innerHTML=countries[24];
	document.getElementById("bratislava_loc").innerHTML='Bratislava';
	document.getElementById("bratislava_loc_sml").innerHTML='Bratislava';
	document.getElementById("bratislava_country").innerHTML=countries[25];
	document.getElementById("budapest_loc").innerHTML='Budapest';
	document.getElementById("budapest_loc_sml").innerHTML='Budapest';
	document.getElementById("budapest_country").innerHTML=countries[26];
	document.getElementById("krakow_loc").innerHTML='Krak&oacute;w';
	document.getElementById("krakow_loc_sml").innerHTML='Krak&oacute;w';
	document.getElementById("krakow_country").innerHTML=countries[27];
	document.getElementById("bucharest_loc").innerHTML='Bucharest';
	document.getElementById("bucharest_loc_sml").innerHTML='Bucharest';
	document.getElementById("bucharest_country").innerHTML=countries[28];
	document.getElementById("kiev_loc").innerHTML='Kiev';
	document.getElementById("kiev_loc_sml").innerHTML='Kiev';
	document.getElementById("kiev_country").innerHTML=countries[29];
	document.getElementById("athens_loc").innerHTML='Athens';
	document.getElementById("athens_loc_sml").innerHTML='Athens';
	document.getElementById("athens_country").innerHTML=countries[30];
	document.getElementById("istanbul_loc").innerHTML='Istanbul';
	document.getElementById("istanbul_loc_sml").innerHTML='Istanbul';
	document.getElementById("istanbul_country").innerHTML=countries[31];
	document.getElementById("nicosia_loc").innerHTML='Nicosia';
	document.getElementById("nicosia_loc_sml").innerHTML='Nicosia';
	document.getElementById("nicosia_country").innerHTML=countries[32];
	document.getElementById("moscow_loc").innerHTML='Moscow';
	document.getElementById("moscow_loc_sml").innerHTML='Moscow';
	document.getElementById("moscow_country").innerHTML=countries[55];
	
	document.getElementById("luanda_loc").innerHTML='Luanda';
	document.getElementById("luanda_loc_sml").innerHTML='Luanda';
	document.getElementById("luanda_country").innerHTML=countries[33];
	document.getElementById("capetown_loc").innerHTML='Cape Town';
	document.getElementById("capetown_loc_sml").innerHTML='Cape Town';
	document.getElementById("capetown_country").innerHTML=countries[34];
	document.getElementById("jburg_loc").innerHTML='Johannesburg';
	document.getElementById("jburg_loc_sml").innerHTML='Johannesburg';
	document.getElementById("jburg_country").innerHTML=countries[34];
	document.getElementById("cairo_loc").innerHTML='Cairo';
	document.getElementById("cairo_loc_sml").innerHTML='Cairo';
	document.getElementById("cairo_country").innerHTML=countries[35];
	document.getElementById("basra_loc").innerHTML='Basra';
	document.getElementById("basra_loc_sml").innerHTML='Basra';
	document.getElementById("basra_country").innerHTML=countries[36];
	document.getElementById("tbilisi_loc").innerHTML='Tbilisi';
	document.getElementById("tbilisi_loc_sml").innerHTML='Tbilisi';
	document.getElementById("tbilisi_country").innerHTML=countries[37];
	document.getElementById("baku_loc").innerHTML='Baku';
	document.getElementById("baku_loc_sml").innerHTML='Baku';
	document.getElementById("baku_country").innerHTML=countries[38];
	document.getElementById("dubai_loc").innerHTML='Dubai';
	document.getElementById("dubai_loc_sml").innerHTML='Dubai';
	document.getElementById("dubai_country").innerHTML=countries[39];
	document.getElementById("muscat_loc").innerHTML='Muscat';
	document.getElementById("muscat_loc_sml").innerHTML='Muscat';
	document.getElementById("muscat_country").innerHTML=countries[40];
	
	document.getElementById("mumbai_loc").innerHTML='Mumbai';
	document.getElementById("mumbai_loc_sml").innerHTML='Mumbai';
	document.getElementById("mumbai_country").innerHTML=countries[41];
	document.getElementById("new_delhi_loc").innerHTML='New Delhi';
	document.getElementById("new_delhi_loc_sml").innerHTML='New Delhi';
	document.getElementById("new_delhi_country").innerHTML=countries[41];
	document.getElementById("kolkata_loc").innerHTML='Kolkata';
	document.getElementById("kolkata_loc_sml").innerHTML='Kolkata';
	document.getElementById("kolkata_country").innerHTML=countries[41];
	document.getElementById("almaty_loc").innerHTML='Almaty';
	document.getElementById("almaty_loc_sml").innerHTML='Almaty';
	document.getElementById("almaty_country").innerHTML=countries[56];
	document.getElementById("hong_kong_loc").innerHTML='Hong Kong';
	document.getElementById("hong_kong_loc_sml").innerHTML='Hong Kong';
	document.getElementById("hong_kong_country").innerHTML=countries[42];
	document.getElementById("beijing_loc").innerHTML='Beijing';
	document.getElementById("beijing_loc_sml").innerHTML='Beijing';
	document.getElementById("beijing_country").innerHTML=countries[43];
	document.getElementById("shanghai_loc").innerHTML='Shanghai';
	document.getElementById("shanghai_loc_sml").innerHTML='Shanghai';
	document.getElementById("shanghai_country").innerHTML=countries[43];
	document.getElementById("taipei_loc").innerHTML='Taipei';
	document.getElementById("taipei_loc_sml").innerHTML='Taipei';
	document.getElementById("taipei_country").innerHTML=countries[44];
	document.getElementById("seoul_loc").innerHTML='Seoul';
	document.getElementById("seoul_loc_sml").innerHTML='Seoul';
	document.getElementById("seoul_country").innerHTML=countries[45];
	document.getElementById("ulsan_loc").innerHTML='Ulsan';
	document.getElementById("ulsan_loc_sml").innerHTML='Ulsan';
	document.getElementById("ulsan_country").innerHTML=countries[45];
	document.getElementById("tokyo_loc").innerHTML='Tokyo';
	document.getElementById("tokyo_loc_sml").innerHTML='Tokyo';
	document.getElementById("tokyo_country").innerHTML=countries[46];
	
	document.getElementById("bangkok_loc").innerHTML='Bangkok';
	document.getElementById("bangkok_loc_sml").innerHTML='Bangkok';
	document.getElementById("bangkok_country").innerHTML=countries[47];
	document.getElementById("ho_chi_minh_loc").innerHTML='Ho Chi Minh City';
	document.getElementById("ho_chi_minh_loc_sml").innerHTML='Ho Chi Minh City';
	document.getElementById("ho_chi_minh_country").innerHTML=countries[48];
	document.getElementById("jakarta_loc").innerHTML='Jakarta';
	document.getElementById("jakarta_loc_sml").innerHTML='Jakarta';
	document.getElementById("jakarta_country").innerHTML=countries[54];
	document.getElementById("kuala_lumpur_loc").innerHTML='Kuala Lumpur';
	document.getElementById("kuala_lumpur_loc_sml").innerHTML='Kuala Lumpur';
	document.getElementById("kuala_lumpur_country").innerHTML=countries[49];
	document.getElementById("singapore_loc").innerHTML='Singapore';
	document.getElementById("singapore_loc_sml").innerHTML='Singapore';
	document.getElementById("singapore_country").innerHTML=countries[50];
	document.getElementById("makati_loc").innerHTML='Manila';
	document.getElementById("makati_loc_sml").innerHTML='Manila';
	document.getElementById("makati_country").innerHTML=countries[51];
	
	document.getElementById("perth_loc").innerHTML='Perth';
	document.getElementById("perth_loc_sml").innerHTML='Perth';
	document.getElementById("perth_state").innerHTML=', WA';
	document.getElementById("perth_country").innerHTML=countries[52];
	document.getElementById("adelaide_loc").innerHTML='Adelaide';
	document.getElementById("adelaide_loc_sml").innerHTML='Adelaide';
	document.getElementById("adelaide_state").innerHTML=', SA';
	document.getElementById("adelaide_country").innerHTML=countries[52];
	document.getElementById("melbourne_loc").innerHTML='Melbourne';
	document.getElementById("melbourne_loc_sml").innerHTML='Melbourne';
	document.getElementById("melbourne_state").innerHTML=', VIC';
	document.getElementById("melbourne_country").innerHTML=countries[52];
	document.getElementById("sydney_loc").innerHTML='Sydney';
	document.getElementById("sydney_loc_sml").innerHTML='Sydney';
	document.getElementById("sydney_state").innerHTML=', NSW';
	document.getElementById("sydney_country").innerHTML=countries[52];
	document.getElementById("brisbane_loc").innerHTML='Brisbane';
	document.getElementById("brisbane_loc_sml").innerHTML='Brisbane';
	document.getElementById("brisbane_state").innerHTML=', QLD';
	document.getElementById("brisbane_country").innerHTML=countries[52];
	document.getElementById("christchurch_loc").innerHTML='Christchurch';
	document.getElementById("christchurch_loc_sml").innerHTML='Christchurch';
	document.getElementById("christchurch_country").innerHTML=countries[53];
	document.getElementById("wellington_loc").innerHTML='Wellington';
	document.getElementById("wellington_loc_sml").innerHTML='Wellington';
	document.getElementById("wellington_country").innerHTML=countries[53];
	document.getElementById("auckland_loc").innerHTML='Auckland';
	document.getElementById("auckland_loc_sml").innerHTML='Auckland';
	document.getElementById("auckland_country").innerHTML=countries[53];
}

function displaytime(){
	akt_time.setSeconds(akt_time.getSeconds()+1);
	pst_time.setSeconds(pst_time.getSeconds()+1);
	mst_time.setSeconds(mst_time.getSeconds()+1);
	cst_time.setSeconds(cst_time.getSeconds()+1);
	est_time.setSeconds(est_time.getSeconds()+1);
	cen_time.setSeconds(cen_time.getSeconds()+1);
	col_time.setSeconds(col_time.getSeconds()+1);
	per_time.setSeconds(per_time.getSeconds()+1);
	vet_time.setSeconds(vet_time.getSeconds()+1);
	atl_time.setSeconds(atl_time.getSeconds()+1);
	art_time.setSeconds(art_time.getSeconds()+1);
	brt_time.setSeconds(brt_time.getSeconds()+1);
	ukt_time.setSeconds(ukt_time.getSeconds()+1);
	wet_time.setSeconds(wet_time.getSeconds()+1);
	cet_time.setSeconds(cet_time.getSeconds()+1);
	eet_time.setSeconds(eet_time.getSeconds()+1);
	mos_time.setSeconds(mos_time.getSeconds()+1);
	wat_time.setSeconds(wat_time.getSeconds()+1);
	sat_time.setSeconds(sat_time.getSeconds()+1);
	egy_time.setSeconds(egy_time.getSeconds()+1);
	ast_time.setSeconds(ast_time.getSeconds()+1);
	get_time.setSeconds(get_time.getSeconds()+1);
	azt_time.setSeconds(azt_time.getSeconds()+1);
	gst_time.setSeconds(gst_time.getSeconds()+1);
	ist_time.setSeconds(ist_time.getSeconds()+1);
	alm_time.setSeconds(alm_time.getSeconds()+1);
	hkt_time.setSeconds(hkt_time.getSeconds()+1);
	cht_time.setSeconds(hkt_time.getSeconds()+1);
	kst_time.setSeconds(kst_time.getSeconds()+1);
	jst_time.setSeconds(jst_time.getSeconds()+1);
	ict_time.setSeconds(ict_time.getSeconds()+1);
	wit_time.setSeconds(wit_time.getSeconds()+1);
	myt_time.setSeconds(myt_time.getSeconds()+1);
	sgt_time.setSeconds(sgt_time.getSeconds()+1);
	pht_time.setSeconds(pht_time.getSeconds()+1);
	awa_time.setSeconds(awa_time.getSeconds()+1);
	asa_time.setSeconds(asa_time.getSeconds()+1);
	avic_time.setSeconds(avic_time.getSeconds()+1);
	answ_time.setSeconds(answ_time.getSeconds()+1);
	aqld_time.setSeconds(aqld_time.getSeconds()+1);
	nzt_time.setSeconds(nzt_time.getSeconds()+1);
	
	var loc_secs=padlength(akt_time.getSeconds());
	
	var akt_ts=padlength(akt_time.getHours())+":"+padlength(akt_time.getMinutes());
	var pst_ts=padlength(pst_time.getHours())+":"+padlength(pst_time.getMinutes());
	var mst_ts=padlength(mst_time.getHours())+":"+padlength(mst_time.getMinutes());
	var cst_ts=padlength(cst_time.getHours())+":"+padlength(cst_time.getMinutes());
	var est_ts=padlength(est_time.getHours())+":"+padlength(est_time.getMinutes());
	var cen_ts=padlength(cen_time.getHours())+":"+padlength(cen_time.getMinutes());
	var col_ts=padlength(col_time.getHours())+":"+padlength(col_time.getMinutes());
	var per_ts=padlength(per_time.getHours())+":"+padlength(per_time.getMinutes());
	var vet_ts=padlength(vet_time.getHours())+":"+padlength(vet_time.getMinutes());
	var atl_ts=padlength(atl_time.getHours())+":"+padlength(atl_time.getMinutes());
	var art_ts=padlength(art_time.getHours())+":"+padlength(art_time.getMinutes());
	var brt_ts=padlength(brt_time.getHours())+":"+padlength(brt_time.getMinutes());
	var ukt_ts=padlength(ukt_time.getHours())+":"+padlength(ukt_time.getMinutes());
	var wet_ts=padlength(wet_time.getHours())+":"+padlength(wet_time.getMinutes());
	var cet_ts=padlength(cet_time.getHours())+":"+padlength(cet_time.getMinutes());
	var eet_ts=padlength(eet_time.getHours())+":"+padlength(eet_time.getMinutes());
	var mos_ts=padlength(mos_time.getHours())+":"+padlength(mos_time.getMinutes());
	var wat_ts=padlength(wat_time.getHours())+":"+padlength(wat_time.getMinutes());
	var sat_ts=padlength(sat_time.getHours())+":"+padlength(sat_time.getMinutes());
	var egy_ts=padlength(egy_time.getHours())+":"+padlength(egy_time.getMinutes());
	var ast_ts=padlength(ast_time.getHours())+":"+padlength(ast_time.getMinutes());
	var get_ts=padlength(get_time.getHours())+":"+padlength(get_time.getMinutes());
	var azt_ts=padlength(azt_time.getHours())+":"+padlength(azt_time.getMinutes());
	var gst_ts=padlength(gst_time.getHours())+":"+padlength(gst_time.getMinutes());
	var ist_ts=padlength(ist_time.getHours())+":"+padlength(ist_time.getMinutes());
	var alm_ts=padlength(alm_time.getHours())+":"+padlength(alm_time.getMinutes());
	var hkt_ts=padlength(hkt_time.getHours())+":"+padlength(hkt_time.getMinutes());
	var cht_ts=padlength(cht_time.getHours())+":"+padlength(cht_time.getMinutes());
	var kst_ts=padlength(kst_time.getHours())+":"+padlength(kst_time.getMinutes());
	var jst_ts=padlength(jst_time.getHours())+":"+padlength(jst_time.getMinutes());
	var ict_ts=padlength(ict_time.getHours())+":"+padlength(ict_time.getMinutes());
	var wit_ts=padlength(wit_time.getHours())+":"+padlength(wit_time.getMinutes());
	var myt_ts=padlength(myt_time.getHours())+":"+padlength(myt_time.getMinutes());
	var sgt_ts=padlength(sgt_time.getHours())+":"+padlength(sgt_time.getMinutes());
	var pht_ts=padlength(pht_time.getHours())+":"+padlength(pht_time.getMinutes());
	var awa_ts=padlength(awa_time.getHours())+":"+padlength(awa_time.getMinutes());
	var asa_ts=padlength(asa_time.getHours())+":"+padlength(asa_time.getMinutes());
	var avic_ts=padlength(avic_time.getHours())+":"+padlength(avic_time.getMinutes());
	var answ_ts=padlength(answ_time.getHours())+":"+padlength(answ_time.getMinutes());
	var aqld_ts=padlength(aqld_time.getHours())+":"+padlength(aqld_time.getMinutes());
	var nzt_ts=padlength(nzt_time.getHours())+":"+padlength(nzt_time.getMinutes());
	
	var mst_sd_ds=weekday[mst_time.getDay()]+"<br />"+ordi(mst_time.getDate())+" "+month[mst_time.getMonth()];
	var ukt_sd_ds=weekday[ukt_time.getDay()]+"<br />"+ordi(ukt_time.getDate())+" "+month[ukt_time.getMonth()];
	var cet_sd_ds=weekday[cet_time.getDay()]+"<br />"+ordi(cet_time.getDate())+" "+month[cet_time.getMonth()];
	var ist_sd_ds=weekday[ist_time.getDay()]+"<br />"+ordi(ist_time.getDate())+" "+month[ist_time.getMonth()];
	
/* 	var akt_ds=weekday[akt_time.getDay()]+", "+ordi(akt_time.getDate())+" "+month[akt_time.getMonth()];
	var pst_ds=weekday[pst_time.getDay()]+", "+ordi(pst_time.getDate())+" "+month[pst_time.getMonth()];
	var mst_ds=weekday[mst_time.getDay()]+", "+ordi(mst_time.getDate())+" "+month[mst_time.getMonth()];
	var cst_ds=weekday[cst_time.getDay()]+", "+ordi(cst_time.getDate())+" "+month[cst_time.getMonth()];
	var est_ds=weekday[est_time.getDay()]+", "+ordi(est_time.getDate())+" "+month[est_time.getMonth()];
	var cen_ds=weekday[cen_time.getDay()]+", "+ordi(cen_time.getDate())+" "+month[cen_time.getMonth()];
	var col_ds=weekday[col_time.getDay()]+", "+ordi(col_time.getDate())+" "+month[col_time.getMonth()];
	var vet_ds=weekday[vet_time.getDay()]+", "+ordi(vet_time.getDate())+" "+month[vet_time.getMonth()];
	var atl_ds=weekday[atl_time.getDay()]+", "+ordi(atl_time.getDate())+" "+month[atl_time.getMonth()];
	var art_ds=weekday[art_time.getDay()]+", "+ordi(art_time.getDate())+" "+month[art_time.getMonth()];
	var brt_ds=weekday[brt_time.getDay()]+", "+ordi(brt_time.getDate())+" "+month[brt_time.getMonth()];
	var ukt_ds=weekday[ukt_time.getDay()]+", "+ordi(ukt_time.getDate())+" "+month[ukt_time.getMonth()];
	var wet_ds=weekday[wet_time.getDay()]+", "+ordi(wet_time.getDate())+" "+month[wet_time.getMonth()];
	var cet_ds=weekday[cet_time.getDay()]+", "+ordi(cet_time.getDate())+" "+month[cet_time.getMonth()];
	var eet_ds=weekday[eet_time.getDay()]+", "+ordi(eet_time.getDate())+" "+month[eet_time.getMonth()];
	var wat_ds=weekday[wat_time.getDay()]+", "+ordi(wat_time.getDate())+" "+month[wat_time.getMonth()];
	var sat_ds=weekday[sat_time.getDay()]+", "+ordi(sat_time.getDate())+" "+month[sat_time.getMonth()];
	var egy_ds=weekday[egy_time.getDay()]+", "+ordi(egy_time.getDate())+" "+month[egy_time.getMonth()];
	var ast_ds=weekday[ast_time.getDay()]+", "+ordi(ast_time.getDate())+" "+month[ast_time.getMonth()];
	var get_ds=weekday[get_time.getDay()]+", "+ordi(get_time.getDate())+" "+month[get_time.getMonth()];
	var azt_ds=weekday[azt_time.getDay()]+", "+ordi(azt_time.getDate())+" "+month[azt_time.getMonth()];
	var gst_ds=weekday[gst_time.getDay()]+", "+ordi(gst_time.getDate())+" "+month[gst_time.getMonth()];
	var ist_ds=weekday[ist_time.getDay()]+", "+ordi(ist_time.getDate())+" "+month[ist_time.getMonth()];
	var hkt_ds=weekday[hkt_time.getDay()]+", "+ordi(hkt_time.getDate())+" "+month[hkt_time.getMonth()];
	var cht_ds=weekday[cht_time.getDay()]+", "+ordi(cht_time.getDate())+" "+month[cht_time.getMonth()];
	var kst_ds=weekday[kst_time.getDay()]+", "+ordi(kst_time.getDate())+" "+month[kst_time.getMonth()];
	var jst_ds=weekday[jst_time.getDay()]+", "+ordi(jst_time.getDate())+" "+month[jst_time.getMonth()];
	var ict_ds=weekday[ict_time.getDay()]+", "+ordi(ict_time.getDate())+" "+month[ict_time.getMonth()];
	var myt_ds=weekday[myt_time.getDay()]+", "+ordi(myt_time.getDate())+" "+month[myt_time.getMonth()];
	var sgt_ds=weekday[sgt_time.getDay()]+", "+ordi(sgt_time.getDate())+" "+month[sgt_time.getMonth()];
	var pht_ds=weekday[pht_time.getDay()]+", "+ordi(pht_time.getDate())+" "+month[pht_time.getMonth()];
	var awa_ds=weekday[awa_time.getDay()]+", "+ordi(awa_time.getDate())+" "+month[awa_time.getMonth()];
	var asa_ds=weekday[asa_time.getDay()]+", "+ordi(asa_time.getDate())+" "+month[asa_time.getMonth()];
	var avic_ds=weekday[avic_time.getDay()]+", "+ordi(avic_time.getDate())+" "+month[avic_time.getMonth()];
	var answ_ds=weekday[answ_time.getDay()]+", "+ordi(answ_time.getDate())+" "+month[answ_time.getMonth()];
	var aqld_ds=weekday[aqld_time.getDay()]+", "+ordi(aqld_time.getDate())+" "+month[aqld_time.getMonth()];
	var nzt_ds=weekday[nzt_time.getDay()]+", "+ordi(nzt_time.getDate())+" "+month[nzt_time.getMonth()];
	 */
	
	var mst_yesterday=new Date(mst_time.getTime()-86400000);
	var mst_tomorrow=new Date(mst_time.getTime()+86400000);
	var ukt_yesterday=new Date(ukt_time.getTime()-86400000);
	var ukt_tomorrow=new Date(ukt_time.getTime()+86400000);
	var cet_yesterday=new Date(cet_time.getTime()-86400000);
	var cet_tomorrow=new Date(cet_time.getTime()+86400000);
	var ist_yesterday=new Date(ist_time.getTime()-86400000);
	var ist_tomorrow=new Date(ist_time.getTime()+86400000);
	
	var boulder_openClose=openClose(boulder['open'][mst_time.getDay()], boulder['close'][mst_time.getDay()], mst_ts + ':' + loc_secs, boulder['open'][mst_yesterday.getDay()],  boulder['close'][mst_yesterday.getDay()], boulder['open'][mst_tomorrow.getDay()],  boulder['close'][mst_tomorrow.getDay()], 'boulder');
	var dublin_openClose=openClose(dublin['open'][ukt_time.getDay()], dublin['close'][ukt_time.getDay()], ukt_ts + ':' + loc_secs, dublin['open'][ukt_yesterday.getDay()],  dublin['close'][ukt_yesterday.getDay()], dublin['open'][ukt_tomorrow.getDay()],  dublin['close'][ukt_tomorrow.getDay()], 'dublin');
	var greenock_openClose=openClose(greenock['open'][ukt_time.getDay()], greenock['close'][ukt_time.getDay()], ukt_ts + ':' + loc_secs, greenock['open'][ukt_yesterday.getDay()],  greenock['close'][ukt_yesterday.getDay()], greenock['open'][ukt_tomorrow.getDay()],  greenock['close'][ukt_tomorrow.getDay()], 'greenock');
	var brno_openClose=openClose(brno['open'][cet_time.getDay()], brno['close'][cet_time.getDay()], cet_ts + ':' + loc_secs, brno['open'][cet_yesterday.getDay()],  brno['close'][cet_yesterday.getDay()], brno['open'][cet_tomorrow.getDay()],  brno['close'][cet_tomorrow.getDay()], 'brno');
	var bangalore_openClose=openClose(bangalore['open'][ist_time.getDay()], bangalore['close'][ist_time.getDay()], ist_ts + ':' + loc_secs, bangalore['open'][ist_yesterday.getDay()],  bangalore['close'][ist_yesterday.getDay()], bangalore['open'][ist_tomorrow.getDay()],  bangalore['close'][ist_tomorrow.getDay()], 'bangalore');
	
	document.getElementById("boulder_time").innerHTML=mst_ts;
	document.getElementById("boulder_secs").innerHTML=loc_secs;
	document.getElementById("boulder_date").innerHTML=mst_sd_ds;
	document.getElementById("boulder_open_state").innerHTML=boulder_openClose['state'];
	document.getElementById("boulder_open_text").innerHTML=boulder_openClose['text'];
	document.getElementById("boulder_open_image").src=boulder_openClose['image'];
	
	document.getElementById("dublin_time").innerHTML=ukt_ts;
	document.getElementById("dublin_secs").innerHTML=loc_secs;
	document.getElementById("dublin_date").innerHTML=ukt_sd_ds;
	document.getElementById("dublin_open_state").innerHTML=dublin_openClose['state'];
	document.getElementById("dublin_open_text").innerHTML=dublin_openClose['text'];
	document.getElementById("dublin_open_image").src=dublin_openClose['image'];
	
	document.getElementById("greenock_time").innerHTML=ukt_ts;
	document.getElementById("greenock_secs").innerHTML=loc_secs;
	document.getElementById("greenock_date").innerHTML=ukt_sd_ds;
	document.getElementById("greenock_open_state").innerHTML=greenock_openClose['state'];
	document.getElementById("greenock_open_text").innerHTML=greenock_openClose['text'];
	document.getElementById("greenock_open_image").src=greenock_openClose['image'];
	
	document.getElementById("brno_time").innerHTML=cet_ts;
	document.getElementById("brno_secs").innerHTML=loc_secs;
	document.getElementById("brno_date").innerHTML=cet_sd_ds;
	document.getElementById("brno_open_state").innerHTML=brno_openClose['state'];
	document.getElementById("brno_open_text").innerHTML=brno_openClose['text'];
	document.getElementById("brno_open_image").src=brno_openClose['image'];
	
	document.getElementById("bangalore_time").innerHTML=ist_ts;
	document.getElementById("bangalore_secs").innerHTML=loc_secs;
	document.getElementById("bangalore_date").innerHTML=ist_sd_ds;
	document.getElementById("bangalore_open_state").innerHTML=bangalore_openClose['state'];
	document.getElementById("bangalore_open_text").innerHTML=bangalore_openClose['text'];
	document.getElementById("bangalore_open_image").src=bangalore_openClose['image'];
	
	document.getElementById("calgary_time").innerHTML=mst_ts;
	document.getElementById("calgary_secs").innerHTML=loc_secs;
	document.getElementById("prudhoe_time").innerHTML=akt_ts;
	document.getElementById("prudhoe_secs").innerHTML=loc_secs;
	document.getElementById("anchorage_time").innerHTML=akt_ts;
	document.getElementById("anchorage_secs").innerHTML=loc_secs;
	document.getElementById("cherry_time").innerHTML=pst_ts;
	document.getElementById("cherry_secs").innerHTML=loc_secs;
	document.getElementById("lapalma_time").innerHTML=pst_ts;
	document.getElementById("lapalma_secs").innerHTML=loc_secs;
	document.getElementById("wamsutter_time").innerHTML=mst_ts;
	document.getElementById("wamsutter_secs").innerHTML=loc_secs;
	document.getElementById("durango_time").innerHTML=mst_ts;
	document.getElementById("durango_secs").innerHTML=loc_secs;
	document.getElementById("tulsa_time").innerHTML=cst_ts;
	document.getElementById("tulsa_secs").innerHTML=loc_secs;
	document.getElementById("houston_time").innerHTML=cst_ts;
	document.getElementById("houston_secs").innerHTML=loc_secs;
	document.getElementById("port_allen_time").innerHTML=cst_ts;
	document.getElementById("port_allen_secs").innerHTML=loc_secs;
	document.getElementById("chicago_time").innerHTML=cst_ts;
	document.getElementById("chicago_secs").innerHTML=loc_secs;
	document.getElementById("whiting_time").innerHTML=cst_ts;
	document.getElementById("whiting_secs").innerHTML=loc_secs;
	document.getElementById("toledo_time").innerHTML=est_ts;
	document.getElementById("toledo_secs").innerHTML=loc_secs;
	document.getElementById("cooper_river_time").innerHTML=est_ts;
	document.getElementById("cooper_river_secs").innerHTML=loc_secs;
	document.getElementById("wayne_time").innerHTML=est_ts;
	document.getElementById("wayne_secs").innerHTML=loc_secs;
	
	document.getElementById("mexico_time").innerHTML=cen_ts;
	document.getElementById("mexico_secs").innerHTML=loc_secs;
	document.getElementById("bogota_time").innerHTML=col_ts;
	document.getElementById("bogota_secs").innerHTML=loc_secs;
	document.getElementById("lima_time").innerHTML=per_ts;
	document.getElementById("lima_secs").innerHTML=loc_secs;
	document.getElementById("caracas_time").innerHTML=vet_ts;
	document.getElementById("caracas_secs").innerHTML=loc_secs;
	document.getElementById("pos_time").innerHTML=atl_ts;
	document.getElementById("pos_secs").innerHTML=loc_secs;
	document.getElementById("galeota_time").innerHTML=atl_ts;
	document.getElementById("galeota_secs").innerHTML=loc_secs;
	document.getElementById("buenos_time").innerHTML=art_ts;
	document.getElementById("buenos_secs").innerHTML=loc_secs;
	document.getElementById("saopaulo_time").innerHTML=brt_ts;
	document.getElementById("saopaulo_secs").innerHTML=loc_secs;
	document.getElementById("rio_time").innerHTML=brt_ts;
	document.getElementById("rio_secs").innerHTML=loc_secs;
	
	document.getElementById("belfast_time").innerHTML=ukt_ts;
	document.getElementById("belfast_secs").innerHTML=loc_secs;
/*	document.getElementById("sullom_voe_time").innerHTML=ukt_ts;*/
/*	document.getElementById("sullom_voe_secs").innerHTML=loc_secs;*/
	document.getElementById("aberdeen_time").innerHTML=ukt_ts;
	document.getElementById("aberdeen_secs").innerHTML=loc_secs;
/*	document.getElementById("grangemouth_time").innerHTML=ukt_ts;*/
/*	document.getElementById("grangemouth_secs").innerHTML=loc_secs;*/
	document.getElementById("hull_time").innerHTML=ukt_ts;
	document.getElementById("hull_secs").innerHTML=loc_secs;
	document.getElementById("milton_keynes_time").innerHTML=ukt_ts;
	document.getElementById("milton_keynes_secs").innerHTML=loc_secs;
	document.getElementById("hemel_time").innerHTML=ukt_ts;
	document.getElementById("hemel_secs").innerHTML=loc_secs;
	document.getElementById("swindon_time").innerHTML=ukt_ts;
	document.getElementById("swindon_secs").innerHTML=loc_secs;
	document.getElementById("pangbourne_time").innerHTML=ukt_ts;
	document.getElementById("pangbourne_secs").innerHTML=loc_secs;
	document.getElementById("sunbury_time").innerHTML=ukt_ts;
	document.getElementById("sunbury_secs").innerHTML=loc_secs;
/*	document.getElementById("bedfont_time").innerHTML=ukt_ts;*/
/*	document.getElementById("bedfont_secs").innerHTML=loc_secs;*/
	document.getElementById("sjs_time").innerHTML=ukt_ts;
	document.getElementById("sjs_secs").innerHTML=loc_secs;
	document.getElementById("20cs_time").innerHTML=ukt_ts;
	document.getElementById("20cs_secs").innerHTML=loc_secs;
	document.getElementById("leatherhead_time").innerHTML=ukt_ts;
	document.getElementById("leatherhead_secs").innerHTML=loc_secs;
	
	document.getElementById("stavanger_time").innerHTML=cet_ts;
	document.getElementById("stavanger_secs").innerHTML=loc_secs;
	document.getElementById("copenhagen_time").innerHTML=cet_ts;
	document.getElementById("copenhagen_secs").innerHTML=loc_secs;
	document.getElementById("stockholm_time").innerHTML=cet_ts;
	document.getElementById("stockholm_secs").innerHTML=loc_secs;
	document.getElementById("vantaa_time").innerHTML=eet_ts;
	document.getElementById("vantaa_secs").innerHTML=loc_secs;
	document.getElementById("lisbon_time").innerHTML=wet_ts;
	document.getElementById("lisbon_secs").innerHTML=loc_secs;
	document.getElementById("castellon_time").innerHTML=cet_ts;
	document.getElementById("castellon_secs").innerHTML=loc_secs;
	document.getElementById("cergy_time").innerHTML=cet_ts;
	document.getElementById("cergy_secs").innerHTML=loc_secs;
	document.getElementById("rotterdam_time").innerHTML=cet_ts;
	document.getElementById("rotterdam_secs").innerHTML=loc_secs;
	document.getElementById("geel_time").innerHTML=cet_ts;
	document.getElementById("geel_secs").innerHTML=loc_secs;
	document.getElementById("bertrange_time").innerHTML=cet_ts;
	document.getElementById("bertrange_secs").innerHTML=loc_secs;
	document.getElementById("bochum_time").innerHTML=cet_ts;
	document.getElementById("bochum_secs").innerHTML=loc_secs;
	document.getElementById("hamburg_time").innerHTML=cet_ts;
	document.getElementById("hamburg_secs").innerHTML=loc_secs;
	document.getElementById("zug_time").innerHTML=cet_ts;
	document.getElementById("zug_secs").innerHTML=loc_secs;
	document.getElementById("milan_time").innerHTML=cet_ts;
	document.getElementById("milan_secs").innerHTML=loc_secs;
	document.getElementById("prague_time").innerHTML=cet_ts;
	document.getElementById("prague_secs").innerHTML=loc_secs;
	document.getElementById("wiener_time").innerHTML=cet_ts;
	document.getElementById("wiener_secs").innerHTML=loc_secs;
	document.getElementById("bratislava_time").innerHTML=cet_ts;
	document.getElementById("bratislava_secs").innerHTML=loc_secs;
	document.getElementById("budapest_time").innerHTML=cet_ts;
	document.getElementById("budapest_secs").innerHTML=loc_secs;
	document.getElementById("krakow_time").innerHTML=cet_ts;
	document.getElementById("krakow_secs").innerHTML=loc_secs;
	document.getElementById("bucharest_time").innerHTML=eet_ts;
	document.getElementById("bucharest_secs").innerHTML=loc_secs;
	document.getElementById("kiev_time").innerHTML=eet_ts;
	document.getElementById("kiev_secs").innerHTML=loc_secs;
	document.getElementById("athens_time").innerHTML=eet_ts;
	document.getElementById("athens_secs").innerHTML=loc_secs;
	document.getElementById("istanbul_time").innerHTML=eet_ts;
	document.getElementById("istanbul_secs").innerHTML=loc_secs;
	document.getElementById("nicosia_time").innerHTML=eet_ts;
	document.getElementById("nicosia_secs").innerHTML=loc_secs;
	document.getElementById("moscow_time").innerHTML=mos_ts;
	document.getElementById("moscow_secs").innerHTML=loc_secs;
	
	document.getElementById("luanda_time").innerHTML=wat_ts;
	document.getElementById("luanda_secs").innerHTML=loc_secs;
	document.getElementById("capetown_time").innerHTML=sat_ts;
	document.getElementById("capetown_secs").innerHTML=loc_secs;
	document.getElementById("jburg_time").innerHTML=sat_ts;
	document.getElementById("jburg_secs").innerHTML=loc_secs;
	document.getElementById("cairo_time").innerHTML=egy_ts;
	document.getElementById("cairo_secs").innerHTML=loc_secs;
	document.getElementById("basra_time").innerHTML=ast_ts;
	document.getElementById("basra_secs").innerHTML=loc_secs;
	document.getElementById("tbilisi_time").innerHTML=get_ts;
	document.getElementById("tbilisi_secs").innerHTML=loc_secs;
	document.getElementById("baku_time").innerHTML=azt_ts;
	document.getElementById("baku_secs").innerHTML=loc_secs;
	document.getElementById("dubai_time").innerHTML=gst_ts;
	document.getElementById("dubai_secs").innerHTML=loc_secs;
	document.getElementById("muscat_time").innerHTML=gst_ts;
	document.getElementById("muscat_secs").innerHTML=loc_secs;
	
	document.getElementById("mumbai_time").innerHTML=ist_ts;
	document.getElementById("mumbai_secs").innerHTML=loc_secs;
	document.getElementById("new_delhi_time").innerHTML=ist_ts;
	document.getElementById("new_delhi_secs").innerHTML=loc_secs;
	document.getElementById("kolkata_time").innerHTML=ist_ts;
	document.getElementById("kolkata_secs").innerHTML=loc_secs;
	document.getElementById("almaty_time").innerHTML=alm_ts;
	document.getElementById("almaty_secs").innerHTML=loc_secs;
	document.getElementById("hong_kong_time").innerHTML=hkt_ts;
	document.getElementById("hong_kong_secs").innerHTML=loc_secs;
	document.getElementById("beijing_time").innerHTML=cht_ts;
	document.getElementById("beijing_secs").innerHTML=loc_secs;
	document.getElementById("shanghai_time").innerHTML=cht_ts;
	document.getElementById("shanghai_secs").innerHTML=loc_secs;
	document.getElementById("taipei_time").innerHTML=cht_ts;
	document.getElementById("taipei_secs").innerHTML=loc_secs;
	document.getElementById("seoul_time").innerHTML=kst_ts;
	document.getElementById("seoul_secs").innerHTML=loc_secs;
	document.getElementById("ulsan_time").innerHTML=kst_ts;
	document.getElementById("ulsan_secs").innerHTML=loc_secs;
	document.getElementById("tokyo_time").innerHTML=jst_ts;
	document.getElementById("tokyo_secs").innerHTML=loc_secs;
	
	document.getElementById("bangkok_time").innerHTML=ict_ts;
	document.getElementById("bangkok_secs").innerHTML=loc_secs;
	document.getElementById("ho_chi_minh_time").innerHTML=ict_ts;
	document.getElementById("ho_chi_minh_secs").innerHTML=loc_secs;
	document.getElementById("jakarta_time").innerHTML=wit_ts;
	document.getElementById("jakarta_secs").innerHTML=loc_secs;
	document.getElementById("kuala_lumpur_time").innerHTML=myt_ts;
	document.getElementById("kuala_lumpur_secs").innerHTML=loc_secs;
	document.getElementById("singapore_time").innerHTML=sgt_ts;
	document.getElementById("singapore_secs").innerHTML=loc_secs;
	document.getElementById("makati_time").innerHTML=pht_ts;
	document.getElementById("makati_secs").innerHTML=loc_secs;
	
	document.getElementById("perth_time").innerHTML=awa_ts;
	document.getElementById("perth_secs").innerHTML=loc_secs;
	document.getElementById("adelaide_time").innerHTML=asa_ts;
	document.getElementById("adelaide_secs").innerHTML=loc_secs;
	document.getElementById("melbourne_time").innerHTML=avic_ts;
	document.getElementById("melbourne_secs").innerHTML=loc_secs;
	document.getElementById("sydney_time").innerHTML=answ_ts;
	document.getElementById("sydney_secs").innerHTML=loc_secs;
	document.getElementById("brisbane_time").innerHTML=aqld_ts;
	document.getElementById("brisbane_secs").innerHTML=loc_secs;
	document.getElementById("christchurch_time").innerHTML=nzt_ts;
	document.getElementById("christchurch_secs").innerHTML=loc_secs;
	document.getElementById("wellington_time").innerHTML=nzt_ts;
	document.getElementById("wellington_secs").innerHTML=loc_secs;
	document.getElementById("auckland_time").innerHTML=nzt_ts;
	document.getElementById("auckland_secs").innerHTML=loc_secs;
	
	if (ukt_time.getMinutes()==0 && ukt_time.getSeconds()<=15) {
		var minProgress=60;
	} else {
		var minProgress=ukt_time.getMinutes();
	}
	
	var secProgress=((minProgress*60)+ukt_time.getSeconds())-15;
	var progress=(secProgress/3600)*100;
	
	document.getElementById("page_progressbar").style.width=progress + '%';
	
	if (ukt_time.getMinutes()==0 && ukt_time.getSeconds()==15) {
		location.reload(true);
	}
	
}

function start(){
	$(".loader").fadeOut("slow");
	aztAdjust();
	vetAdjust();
	setInterval("displaytime()", 1000);
	setSites();
	setLocationInfo();
}