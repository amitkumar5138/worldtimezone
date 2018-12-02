<html>
<head>

<header>
	<div class="overlay">
<h1>World Time Zones</h1>

</header>



<script type="text/javascript">
/*Alaska Time*/
var akt_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Anchorage')); print $datetime->format('F d, Y H:i:s'); ?>';
var akt_tz_diff='-09:00';
var akt_time=new Date(akt_current);

/*Pacific Time*/
var pst_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Los_Angeles')); print $datetime->format('F d, Y H:i:s'); ?>';
var pst_time=new Date(pst_current);
var pst_tz_diff='-08:00';
var pst_time=new Date(pst_current);

/*Mountain Time*/
var mst_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Denver')); print $datetime->format('F d, Y H:i:s'); ?>';
var mst_time=new Date(mst_current);
var mst_tz_diff='-07:00';
var mst_time=new Date(mst_current);

/*Central Time*/
var cst_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Chicago')); print $datetime->format('F d, Y H:i:s'); ?>';
var cst_tz_diff='-06:00';
var cst_time=new Date(cst_current);

/*Eastern Time*/
var est_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/New_York')); print $datetime->format('F d, Y H:i:s'); ?>';
var est_tz_diff='-05:00';
var est_time=new Date(est_current);

/*Central Standard Time*/
var cen_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Chicago')); print $datetime->format('F d, Y H:i:s'); ?>';
var cen_tz_diff='-06:00';
var cen_time=new Date(cen_current);

/*Columbia Time*/
var col_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Bogota')); print $datetime->format('F d, Y H:i:s'); ?>';
var col_tz_diff='-05:00';
var col_time=new Date(col_current);

/*Peru Time*/
var per_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Lima')); print $datetime->format('F d, Y H:i:s'); ?>';
var per_tz_diff='-05:00';
var per_time=new Date(per_current);

/*Venezuelan Time*/
var vet_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Caracas')); print $datetime->format('F d, Y H:i:s'); ?>';
var vet_tz_diff='-04:30';
var vet_time=new Date(vet_current);

/*Atlantic Standard Time*/
var atl_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Halifax')); print $datetime->format('F d, Y H:i:s'); ?>';
var atl_tz_diff='-04:00';
var atl_time=new Date(atl_current);

/*Argentina Time*/
var art_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Argentina/Buenos_Aires')); print $datetime->format('F d, Y H:i:s'); ?>';
var art_tz_diff='-03:00';
var art_time=new Date(art_current);

/*Brasilia Time*/
var brt_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('America/Sao_Paulo')); print $datetime->format('F d, Y H:i:s'); ?>';
var brt_tz_diff='-02:00';
var brt_time=new Date(brt_current);

/*UK & Ireland Time*/
var ukt_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Europe/London')); print $datetime->format('F d, Y H:i:s'); ?>';
var ukt_tz_diff='+00:00';
var ukt_time=new Date(ukt_current);

/*Western European Time*/
var wet_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Europe/Dublin')); print $datetime->format('F d, Y H:i:s'); ?>';
var wet_tz_diff='+00:00';
var wet_time=new Date(wet_current);

/*Central European Time*/
var cet_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Europe/Prague')); print $datetime->format('F d, Y H:i:s'); ?>';
var cet_tz_diff='+01:00';
var cet_time=new Date(cet_current);

/*Eastern European Time*/
var eet_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Europe/Helsinki')); print $datetime->format('F d, Y H:i:s'); ?>';
var eet_tz_diff='+02:00';
var eet_time=new Date(eet_current);

/*Moscow Time*/
var mos_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Europe/Moscow')); print $datetime->format('F d, Y H:i:s'); ?>';
var mos_tz_diff='+03:00';
var mos_time=new Date(mos_current);

/*West Africa Time*/
var wat_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Africa/Lagos')); print $datetime->format('F d, Y H:i:s'); ?>';
var wat_tz_diff='+01:00';
var wat_time=new Date(wat_current);

/*South Africa Time*/
var sat_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Africa/Johannesburg')); print $datetime->format('F d, Y H:i:s'); ?>';
var sat_tz_diff='+02:00';
var sat_time=new Date(sat_current);

/*Egypt Time*/
var egy_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Africa/Cairo')); print $datetime->format('F d, Y H:i:s'); ?>';
var egy_tz_diff='+02:00';
var egy_time=new Date(egy_current);

/*Arabia Time*/
var ast_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Baghdad')); print $datetime->format('F d, Y H:i:s'); ?>';
var ast_tz_diff='+03:00';
var ast_time=new Date(ast_current);

/*Georgia Time*/
var get_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Tbilisi')); print $datetime->format('F d, Y H:i:s'); ?>';
var get_tz_diff='+04:00';
var get_time=new Date(get_current);

/*Azerbaijan Time*/
var azt_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Baku')); print $datetime->format('F d, Y H:i:s'); ?>';
var azt_tz_diff='+04:00';
var azt_time=new Date(azt_current);

/*Gulf Time*/
var gst_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Muscat')); print $datetime->format('F d, Y H:i:s'); ?>';
var gst_tz_diff='+04:00';
var gst_time=new Date(gst_current);

/*India Time*/
var ist_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Calcutta')); print $datetime->format('F d, Y H:i:s'); ?>';
var ist_tz_diff='+05:30';
var ist_time=new Date(ist_current);

/*Alma-Ata Time*/
var alm_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Almaty')); print $datetime->format('F d, Y H:i:s'); ?>';
var alm_tz_diff='+06:00';
var alm_time=new Date(alm_current);

/*Hong Kong Time*/
var hkt_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Hong_Kong')); print $datetime->format('F d, Y H:i:s'); ?>';
var hkt_tz_diff='+08:00';
var hkt_time=new Date(hkt_current);

/*China Time*/
var cht_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Macau')); print $datetime->format('F d, Y H:i:s'); ?>';
var cht_tz_diff='+08:00';
var cht_time=new Date(cht_current);

/*Korea Time*/
var kst_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Pyongyang')); print $datetime->format('F d, Y H:i:s'); ?>';
var kst_tz_diff='+09:00';
var kst_time=new Date(kst_current);

/*Japan Time*/
var jst_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Tokyo')); print $datetime->format('F d, Y H:i:s'); ?>';
var jst_tz_diff='+09:00';
var jst_time=new Date(jst_current);

/*Indochina Time*/
var ict_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Vientiane')); print $datetime->format('F d, Y H:i:s'); ?>';
var ict_tz_diff='+07:00';
var ict_time=new Date(ict_current);

/*Western Indonesian Time*/
var wit_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Bangkok')); print $datetime->format('F d, Y H:i:s'); ?>';
var wit_tz_diff='+07:00';
var wit_time=new Date(wit_current);

/*Malaysia Time*/
var myt_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Kuala_Lumpur')); print $datetime->format('F d, Y H:i:s'); ?>';
var myt_tz_diff='+08:00';
var myt_time=new Date(myt_current);

/*Singapore Time*/
var sgt_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Singapore')); print $datetime->format('F d, Y H:i:s'); ?>';
var sgt_tz_diff='+08:00';
var sgt_time=new Date(sgt_current);

/*Philippine Time*/
var pht_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Asia/Manila')); print $datetime->format('F d, Y H:i:s'); ?>';
var pht_tz_diff='+08:00';
var pht_time=new Date(pht_current);

/*Australia Times*/
var awa_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Australia/Perth')); print $datetime->format('F d, Y H:i:s'); ?>';
var awa_tz_diff='+08:00';
var awa_time=new Date(awa_current);

var asa_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Australia/Adelaide')); print $datetime->format('F d, Y H:i:s'); ?>';
var asa_tz_diff='+10:30';
var asa_time=new Date(asa_current);

var avic_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Australia/Lord_Howe')); print $datetime->format('F d, Y H:i:s'); ?>';
var avic_tz_diff='+11:00';
var avic_time=new Date(avic_current);

var answ_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Australia/Sydney')); print $datetime->format('F d, Y H:i:s'); ?>';
var answ_tz_diff='+11:00';
var answ_time=new Date(answ_current);

var aqld_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Australia/Brisbane')); print $datetime->format('F d, Y H:i:s'); ?>';
var aqld_tz_diff='+10:00';
var aqld_time=new Date(aqld_current);

/*New Zealand Time*/
var nzt_current='<?php $datetime=new DateTime();$datetime->setTimezone(new DateTimeZone('Pacific/Auckland')); print $datetime->format('F d, Y H:i:s'); ?>';
var nzt_tz_diff='+13:00';
var nzt_time=new Date(nzt_current);
</script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/vars.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<title>Time Zones</title>
</head>

<body>

<div class="loader"></div>



<div id="page_progress" class="progresscontainer">
	<div id="page_progressbar" class="progressbar">
	</div>
</div>



<div id="service_desks_title" class="titlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('service_desks');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="subtitle hn_light">Service Desks</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="service_desks" class="groupcontainer">

<div id="boulder" class="sdcontainer">
	<a href="#" onClick="toggle_sd_3('boulder');" class="togglelink">
	
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<div class="tablelayout">
						<div class="row">
							<div class="cell">
								<span id="boulder_loc" class="sdlocation hn_light"></span><span id="boulder_loc_state" class="sdstate hn_light"></span>
							</div>
						</div>
						<div class="row">
							<div class="cell">
								<span id="boulder_country" class="sdcountry hn_light"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="cell-f">
					<img src="images/flag_usa.png" class="flagsd" />
				</div>
			</div>
		</div>
		
		<div id="boulder_time_date">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="boulder_time" class="sdtime hn_light"></span><span id="boulder_secs" class="sdtimesecs hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="boulder_date" class="sddate hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="boulder_open_hours">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="boulder_days" class="opendays hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="boulder_hours" class="openhours hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="boulder_support">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="boulder_countries" class="countries hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="boulder_country_times" class="countrytimes hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="boulder_state">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-o">
						<img id="boulder_open_image" src="" class="opencloseimg" />
					</div>
					<div class="cell-l">
						<span id="boulder_open_state" class="sdopenclosed hn_light"></span><br /><span id="boulder_open_text" class="sdopenclosedtext hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
	</a>
	
	<div id="boulder_home_on" class="homeontablelayout" onMouseOver="homeTextChange('boulder', 'over');" onMouseOut="homeTextChange('boulder', 'out');">
		<a href="#" onClick="delAsHome('boulder');" class="togglelink">
			<div class="row">
				<div class="cell-home-on">
					<span id="boulder_home_txt_on" class="sdhomeon hn_light">My Service Desk</span>
				</div>
				<div class="cell-home-icon">
					<img src="images/location_ibm.png" class="iconsdhomeon">
				</div>
			</div>
		</a>
	</div>
		
	<div id="boulder_home_off" class="homeofftablelayout">
		<a href="#" onClick="setAsHome('boulder');" class="togglelink">
			<div class="row">
				<div class="cell-home-off">
					<span id="boulder_home_txt_off" class="sdhomeoff hn_light">Set As My Service Desk</span>
				</div>
				<div class="cell-home-icon">
					<img src="images/location_ibm_gs.png" class="iconsdhomeoff">
				</div>
			</div>
		</a>
	</div>
</div>

<div id="dublin" class="sdcontainer">
	<a href="#" onClick="toggle_sd_3('dublin');" class="togglelink">
	
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<div class="tablelayout">
						<div class="row">
							<div class="cell">
								<span id="dublin_loc" class="sdlocation hn_light"></span></span>
							</div>
						</div>
						<div class="row">
							<div class="cell">
								<span id="dublin_country" class="sdcountry hn_light"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="cell-f">
					<img src="images/flag_ire.png" class="flagsd" />
				</div>
			</div>
		</div>
		
		<div id="dublin_time_date">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="dublin_time" class="sdtime hn_light"></span><span id="dublin_secs" class="sdtimesecs hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="dublin_date" class="sddate hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="dublin_open_hours">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="dublin_days" class="opendays hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="dublin_hours" class="openhours hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="dublin_support">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="dublin_countries" class="countries hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="dublin_country_times" class="countrytimes hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="dublin_state">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-o">
						<img id="dublin_open_image" src="" class="opencloseimg" />
					</div>
					<div class="cell-l">
						<span id="dublin_open_state" class="sdopenclosed hn_light"></span><br /><span id="dublin_open_text" class="sdopenclosedtext hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
	</a>
	
	<div id="dublin_home_on" class="homeontablelayout" onMouseOver="homeTextChange('dublin', 'over');" onMouseOut="homeTextChange('dublin', 'out');">
		<a href="#" onClick="delAsHome('dublin');" class="togglelink">
			<div class="row">
				<div class="cell-home-on">
					<span id="dublin_home_txt_on" class="sdhomeon hn_light">My Service Desk</span>
				</div>
				<div class="cell-home-icon">
					<img src="images/location_ibm.png" class="iconsdhomeon">
				</div>
			</div>
		</a>
	</div>
		
	<div id="dublin_home_off" class="homeofftablelayout">
		<a href="#" onClick="setAsHome('dublin');" class="togglelink">
			<div class="row">
				<div class="cell-home-off">
					<span id="dublin_home_txt_off" class="sdhomeoff hn_light">Set As My Service Desk</span>
				</div>
				<div class="cell-home-icon">
					<img src="images/location_ibm_gs.png" class="iconsdhomeoff">
				</div>
			</div>
		</a>
	</div>
</div>

<div id="greenock" class="sdcontainer">
	<a href="#" onClick="toggle_sd('greenock');" class="togglelink">
	
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<div class="tablelayout">
						<div class="row">
							<div class="cell">
								<span id="greenock_loc" class="sdlocation hn_light"></span></span>
							</div>
						</div>
						<div class="row">
							<div class="cell">
								<span id="greenock_country" class="sdcountry hn_light"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="cell-f">
					<img src="images/flag_gbr.png" class="flagsd" />
				</div>
			</div>
		</div>
		
		<div id="greenock_time_date">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="greenock_time" class="sdtime hn_light"></span><span id="greenock_secs" class="sdtimesecs hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="greenock_date" class="sddate hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="greenock_open_hours">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="greenock_days" class="opendays hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="greenock_hours" class="openhours hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="greenock_state">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-o">
						<img id="greenock_open_image" src="" class="opencloseimg" />
					</div>
					<div class="cell-l">
						<span id="greenock_open_state" class="sdopenclosed hn_light"></span><br /><span id="greenock_open_text" class="sdopenclosedtext hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
	</a>
	
	<div id="greenock_home_on" class="homeontablelayout" onMouseOver="homeTextChange('greenock', 'over');" onMouseOut="homeTextChange('greenock', 'out');">
		<a href="#" onClick="delAsHome('greenock');" class="togglelink">
			<div class="row">
				<div class="cell-home-on">
					<span id="greenock_home_txt_on" class="sdhomeon hn_light">My Service Desk</span>
				</div>
				<div class="cell-home-icon">
					<img src="images/location_ibm.png" class="iconsdhomeon">
				</div>
			</div>
		</a>
	</div>
		
	<div id="greenock_home_off" class="homeofftablelayout">
		<a href="#" onClick="setAsHome('greenock');" class="togglelink">
			<div class="row">
				<div class="cell-home-off">
					<span id="greenock_home_txt_off" class="sdhomeoff hn_light">Set As My Service Desk</span>
				</div>
				<div class="cell-home-icon">
					<img src="images/location_ibm_gs.png" class="iconsdhomeoff">
				</div>
			</div>
		</a>
	</div>
</div>

<div id="brno" class="sdcontainer">
	<a href="#" onClick="toggle_sd_3('brno');" class="togglelink">
	
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<div class="tablelayout">
						<div class="row">
							<div class="cell">
								<span id="brno_loc" class="sdlocation hn_light"></span></span>
							</div>
						</div>
						<div class="row">
							<div class="cell">
								<span id="brno_country" class="sdcountry hn_light"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="cell-f">
					<img src="images/flag_cze.png" class="flagsd" />
				</div>
			</div>
		</div>
		
		<div id="brno_time_date">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="brno_time" class="sdtime hn_light"></span><span id="brno_secs" class="sdtimesecs hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="brno_date" class="sddate hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="brno_open_hours">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="brno_days" class="opendays hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="brno_hours" class="openhours hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="brno_support">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="brno_countries" class="countries hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="brno_country_times" class="countrytimes hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="brno_state">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-o">
						<img id="brno_open_image" src="" class="opencloseimg" />
					</div>
					<div class="cell-l">
						<span id="brno_open_state" class="sdopenclosed hn_light"></span><br /><span id="brno_open_text" class="sdopenclosedtext hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
	</a>
	
	<div id="brno_home_on" class="homeontablelayout" onMouseOver="homeTextChange('brno', 'over');" onMouseOut="homeTextChange('brno', 'out');">
		<a href="#" onClick="delAsHome('brno');" class="togglelink">
			<div class="row">
				<div class="cell-home-on">
					<span id="brno_home_txt_on" class="sdhomeon hn_light">My Service Desk</span>
				</div>
				<div class="cell-home-icon">
					<img src="images/location_ibm.png" class="iconsdhomeon">
				</div>
			</div>
		</a>
	</div>
		
	<div id="brno_home_off" class="homeofftablelayout">
		<a href="#" onClick="setAsHome('brno');" class="togglelink">
			<div class="row">
				<div class="cell-home-off">
					<span id="brno_home_txt_off" class="sdhomeoff hn_light">Set As My Service Desk</span>
				</div>
				<div class="cell-home-icon">
					<img src="images/location_ibm_gs.png" class="iconsdhomeoff">
				</div>
			</div>
		</a>
	</div>
</div>

<div id="bangalore" class="sdcontainer">
	<a href="#" onClick="toggle_sd('bangalore');" class="togglelink">
	
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<div class="tablelayout">
						<div class="row">
							<div class="cell">
								<span id="bangalore_loc" class="sdlocation hn_light"></span></span>
							</div>
						</div>
						<div class="row">
							<div class="cell">
								<span id="bangalore_country" class="sdcountry hn_light"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="cell-f">
					<img src="images/flag_ind.png" class="flagsd" />
				</div>
			</div>
		</div>
		
		<div id="bangalore_time_date">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="bangalore_time" class="sdtime hn_light"></span><span id="bangalore_secs" class="sdtimesecs hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="bangalore_date" class="sddate hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="bangalore_open_hours">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-l">
						<span id="bangalore_days" class="opendays hn_light"></span>
					</div>
					<div class="cell-r">
						<span id="bangalore_hours" class="openhours hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="bangalore_state">
			<div class="tablelayout">
				<div class="row">
					<div class="cell-o">
						<img id="bangalore_open_image" src="" class="opencloseimg" />
					</div>
					<div class="cell-l">
						<span id="bangalore_open_state" class="sdopenclosed hn_light"></span><br /><span id="bangalore_open_text" class="sdopenclosedtext hn_light"></span>
					</div>
				</div>
			</div>
		</div>
		
	</a>
	
	<div id="bangalore_home_on" class="homeontablelayout" onMouseOver="homeTextChange('bangalore', 'over');" onMouseOut="homeTextChange('bangalore', 'out');">
		<a href="#" onClick="delAsHome('bangalore');" class="togglelink">
			<div class="row">
				<div class="cell-home-on">
					<span id="bangalore_home_txt_on" class="sdhomeon hn_light">My Service Desk</span>
				</div>
				<div class="cell-home-icon">
					<img src="images/location_ibm.png" class="iconsdhomeon">
				</div>
			</div>
		</a>
	</div>
		
	<div id="bangalore_home_off" class="homeofftablelayout">
		<a href="#" onClick="setAsHome('bangalore');" class="togglelink">
			<div class="row">
				<div class="cell-home-off">
					<span id="bangalore_home_txt_off" class="sdhomeoff hn_light">Set As My Service Desk</span>
				</div>
				<div class="cell-home-icon">
					<img src="images/location_ibm_gs.png" class="iconsdhomeoff">
				</div>
			</div>
		</a>
	</div>
</div>

</div>



<div id="fav_title" class="favtitlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('fav_locations');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="subtitle hn_light">My Bookmarked Global Locations</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="fav_locations">

	<div id="na_favs" class="groupcontainer">

	</div>

	<div id="sla_favs" class="groupcontainer">

	</div>

	<div id="uk_favs" class="groupcontainer">

	</div>

	<div id="eu_favs" class="groupcontainer">

	</div>

	<div id="ame_favs" class="groupcontainer">

	</div>

	<div id="asia_favs" class="groupcontainer">

	</div>

	<div id="sea_favs" class="groupcontainer">

	</div>

	<div id="anz_favs" class="groupcontainer">

	</div>
	
</div>


<div id="global_title" class="subtitlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('global_locations');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="subtitle hn_light">Global Locations</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="global_locations">

<div id="na_title" class="regiontitlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('na_sites');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="regiontitle hn_light">North America</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgxsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="na_sites" class="regioncontainer">

<div id="na_1">
	<div id="calgary" class="sitecontainer">
		<a href="#" onClick="toggle_site('calgary');" class="togglelink">
			
			<div id="calgary_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="calgary_loc" class="sitelocation hn_light"></span><span id="calgary_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="calgary_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_can.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="calgary_time" class="sitetime hn_light"></span><span id="calgary_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="calgary_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('calgary', 'na');" />
							</div>
							<div id="calgary_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('calgary', 'na', '1');" />
							</div>
						</div>
					</div>
				</div>
				
				<!--<div class="tablelayout">
					<div class="row">
						<div class="cell-d">
							<span id="calgary_date" class="sitedate hn_light"></span>
						</div>
					</div>
				</div>-->

			</div>

			<div id="calgary_sml">
				<span id="calgary_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_can.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_2">
	<div id="prudhoe" class="sitecontainer">
		<a href="#" onClick="toggle_site('prudhoe');" class="togglelink">
			
			<div id="prudhoe_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="prudhoe_loc" class="sitelocation hn_light"></span><span id="prudhoe_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="prudhoe_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="prudhoe_time" class="sitetime hn_light"></span><span id="prudhoe_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="prudhoe_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('prudhoe', 'na');" />
							</div>
							<div id="prudhoe_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('prudhoe', 'na', '2');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="prudhoe_sml">
				<span id="prudhoe_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_3">
	<div id="anchorage" class="sitecontainer">
		<a href="#" onClick="toggle_site('anchorage');" class="togglelink">
			
			<div id="anchorage_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="anchorage_loc" class="sitelocation hn_light"></span><span id="anchorage_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="anchorage_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="anchorage_time" class="sitetime hn_light"></span><span id="anchorage_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="anchorage_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('anchorage', 'na');" />
							</div>
							<div id="anchorage_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('anchorage', 'na', '3');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="anchorage_sml">
				<span id="anchorage_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_4">
	<div id="cherry" class="sitecontainer">
		<a href="#" onClick="toggle_site('cherry');" class="togglelink">
			
			<div id="cherry_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="cherry_loc" class="sitelocation hn_light"></span><span id="cherry_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="cherry_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="cherry_time" class="sitetime hn_light"></span><span id="cherry_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="cherry_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('cherry', 'na');" />
							</div>
							<div id="cherry_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('cherry', 'na', '4');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="cherry_sml">
				<span id="cherry_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_5">
	<div id="lapalma" class="siteendcontainer">
		<a href="#" onClick="toggle_site('lapalma');" class="togglelink">
			
			<div id="lapalma_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="lapalma_loc" class="sitelocation hn_light"></span><span id="lapalma_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="lapalma_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="lapalma_time" class="sitetime hn_light"></span><span id="lapalma_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="lapalma_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('lapalma', 'na');" />
							</div>
							<div id="lapalma_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('lapalma', 'na', '5');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="lapalma_sml">
				<span id="lapalma_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_6">
	<div id="wamsutter" class="sitecontainer">
		<a href="#" onClick="toggle_site('wamsutter');" class="togglelink">
			
			<div id="wamsutter_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="wamsutter_loc" class="sitelocation hn_light"></span><span id="wamsutter_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="wamsutter_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="wamsutter_time" class="sitetime hn_light"></span><span id="wamsutter_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="wamsutter_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('wamsutter', 'na');" />
							</div>
							<div id="wamsutter_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('wamsutter', 'na', '6');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="wamsutter_sml">
				<span id="wamsutter_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_7">
	<div id="durango" class="sitecontainer">
		<a href="#" onClick="toggle_site('durango');" class="togglelink">
			
			<div id="durango_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="durango_loc" class="sitelocation hn_light"></span><span id="durango_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="durango_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="durango_time" class="sitetime hn_light"></span><span id="durango_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="durango_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('durango', 'na');" />
							</div>
							<div id="durango_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('durango', 'na', '7');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="durango_sml">
				<span id="durango_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_8">
	<div id="tulsa" class="sitecontainer">
		<a href="#" onClick="toggle_site('tulsa');" class="togglelink">
			
			<div id="tulsa_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="tulsa_loc" class="sitelocation hn_light"></span><span id="tulsa_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="tulsa_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="tulsa_time" class="sitetime hn_light"></span><span id="tulsa_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="tulsa_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('tulsa', 'na');" />
							</div>
							<div id="tulsa_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('tulsa', 'na', '8');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="tulsa_sml">
				<span id="tulsa_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_9">
	<div id="houston" class="sitecontainer">
		<a href="#" onClick="toggle_site('houston');" class="togglelink">
			
			<div id="houston_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="houston_loc" class="sitelocation hn_light"></span><span id="houston_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="houston_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="houston_time" class="sitetime hn_light"></span><span id="houston_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="houston_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('houston', 'na');" />
							</div>
							<div id="houston_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('houston', 'na', '9');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="houston_sml">
				<span id="houston_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_10">
	<div id="port_allen" class="siteendcontainer">
		<a href="#" onClick="toggle_site('port_allen');" class="togglelink">
			
			<div id="port_allen_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="port_allen_loc" class="sitelocation hn_light"></span><span id="port_allen_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="port_allen_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="port_allen_time" class="sitetime hn_light"></span><span id="port_allen_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="port_allen_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('port_allen', 'na');" />
							</div>
							<div id="port_allen_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('port_allen', 'na', '10');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="port_allen_sml">
				<span id="port_allen_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_11">
	<div id="chicago" class="sitecontainer">
		<a href="#" onClick="toggle_site('chicago');" class="togglelink">
			
			<div id="chicago_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="chicago_loc" class="sitelocation hn_light"></span><span id="chicago_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="chicago_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="chicago_time" class="sitetime hn_light"></span><span id="chicago_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="chicago_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('chicago', 'na');" />
							</div>
							<div id="chicago_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('chicago', 'na', '11');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="chicago_sml">
				<span id="chicago_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_12">
	<div id="whiting" class="sitecontainer">
		<a href="#" onClick="toggle_site('whiting');" class="togglelink">
			
			<div id="whiting_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="whiting_loc" class="sitelocation hn_light"></span><span id="whiting_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="whiting_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="whiting_time" class="sitetime hn_light"></span><span id="whiting_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="whiting_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('whiting', 'na');" />
							</div>
							<div id="whiting_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('whiting', 'na', '12');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="whiting_sml">
				<span id="whiting_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_13">
	<div id="toledo" class="sitecontainer">
		<a href="#" onClick="toggle_site('toledo');" class="togglelink">
			
			<div id="toledo_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="toledo_loc" class="sitelocation hn_light"></span><span id="toledo_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="toledo_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="toledo_time" class="sitetime hn_light"></span><span id="toledo_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="toledo_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('toledo', 'na');" />
							</div>
							<div id="toledo_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('toledo', 'na', '13');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="toledo_sml">
				<span id="toledo_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_14">
	<div id="cooper_river" class="sitecontainer">
		<a href="#" onClick="toggle_site('cooper_river');" class="togglelink">
			
			<div id="cooper_river_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="cooper_river_loc" class="sitelocation hn_light"></span><span id="cooper_river_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="cooper_river_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="cooper_river_time" class="sitetime hn_light"></span><span id="cooper_river_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="cooper_river_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('cooper_river', 'na');" />
							</div>
							<div id="cooper_river_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('cooper_river', 'na', '14');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="cooper_river_sml">
				<span id="cooper_river_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="na_15">
	<div id="wayne" class="siteendcontainer">
		<a href="#" onClick="toggle_site('wayne');" class="togglelink">
			
			<div id="wayne_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="wayne_loc" class="sitelocation hn_light"></span><span id="wayne_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="wayne_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_usa.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="wayne_time" class="sitetime hn_light"></span><span id="wayne_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="wayne_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('wayne', 'na');" />
							</div>
							<div id="wayne_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('wayne', 'na', '15');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="wayne_sml">
				<span id="wayne_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_usa.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

</div>



<div id="sla_title" class="regiontitlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('sla_sites');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="regiontitle hn_light">South & Latin America</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgxsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="sla_sites" class="regioncontainer">

<div id="sla_1">
	<div id="mexico" class="sitecontainer">
		<a href="#" onClick="toggle_site('mexico');" class="togglelink">
			
			<div id="mexico_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="mexico_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="mexico_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_mex.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="mexico_time" class="sitetime hn_light"></span><span id="mexico_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="mexico_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('mexico', 'sla');" />
							</div>
							<div id="mexico_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('mexico', 'sla', '1');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="mexico_sml">
				<span id="mexico_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_mex.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sla_2">
	<div id="bogota" class="sitecontainer">
		<a href="#" onClick="toggle_site('bogota');" class="togglelink">
			
			<div id="bogota_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="bogota_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="bogota_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_col.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="bogota_time" class="sitetime hn_light"></span><span id="bogota_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="bogota_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('bogota', 'sla');" />
							</div>
							<div id="bogota_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('bogota', 'sla', '2');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="bogota_sml">
				<span id="bogota_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_col.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sla_9">
	<div id="lima" class="sitecontainer">
		<a href="#" onClick="toggle_site('lima');" class="togglelink">
			
			<div id="lima_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="lima_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="lima_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_per.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="lima_time" class="sitetime hn_light"></span><span id="lima_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="lima_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('lima', 'sla');" />
							</div>
							<div id="lima_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('lima', 'sla', '9');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="lima_sml">
				<span id="lima_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_per.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sla_3">
	<div id="caracas" class="sitecontainer">
		<a href="#" onClick="toggle_site('caracas');" class="togglelink">
			
			<div id="caracas_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="caracas_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="caracas_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_ven.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="caracas_time" class="sitetime hn_light"></span><span id="caracas_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="caracas_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('caracas', 'sla');" />
							</div>
							<div id="caracas_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('caracas', 'sla', '3');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="caracas_sml">
				<span id="caracas_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_ven.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sla_4">
	<div id="pos" class="sitecontainer">
		<a href="#" onClick="toggle_site('pos');" class="togglelink">
			
			<div id="pos_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="pos_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="pos_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_tto.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="pos_time" class="sitetime hn_light"></span><span id="pos_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="pos_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('pos', 'sla');" />
							</div>
							<div id="pos_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('pos', 'sla', '4');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="pos_sml">
				<span id="pos_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_tto.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sla_5">
	<div id="galeota" class="siteendcontainer">
		<a href="#" onClick="toggle_site('galeota');" class="togglelink">
			
			<div id="galeota_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="galeota_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="galeota_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_tto.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="galeota_time" class="sitetime hn_light"></span><span id="galeota_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="galeota_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('galeota', 'sla');" />
							</div>
							<div id="galeota_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('galeota', 'sla', '5');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="galeota_sml">
				<span id="galeota_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_tto.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sla_6">
	<div id="buenos" class="sitecontainer">
		<a href="#" onClick="toggle_site('buenos');" class="togglelink">
			
			<div id="buenos_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="buenos_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="buenos_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_arg.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="buenos_time" class="sitetime hn_light"></span><span id="buenos_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="buenos_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('buenos', 'sla');" />
							</div>
							<div id="buenos_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('buenos', 'sla', '6');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="buenos_sml">
				<span id="buenos_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_arg.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sla_7">
	<div id="saopaulo" class="sitecontainer">
		<a href="#" onClick="toggle_site('saopaulo');" class="togglelink">
			
			<div id="saopaulo_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="saopaulo_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="saopaulo_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_bra.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="saopaulo_time" class="sitetime hn_light"></span><span id="saopaulo_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="saopaulo_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('saopaulo', 'sla');" />
							</div>
							<div id="saopaulo_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('saopaulo', 'sla', '7');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="saopaulo_sml">
				<span id="saopaulo_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_bra.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sla_8">
	<div id="rio" class="sitecontainer">
		<a href="#" onClick="toggle_site('rio');" class="togglelink">
			
			<div id="rio_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="rio_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="rio_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_bra.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="rio_time" class="sitetime hn_light"></span><span id="rio_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="rio_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('rio', 'sla');" />
							</div>
							<div id="rio_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('rio', 'sla', '8');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="rio_sml">
				<span id="rio_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_bra.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

</div>



<div id="uk_title" class="regiontitlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('uk_sites');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="regiontitle hn_light">United Kingdom</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgxsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="uk_sites" class="regioncontainer">

<div id="uk_1">
	<div id="belfast" class="sitecontainer">
		<a href="#" onClick="toggle_site('belfast');" class="togglelink">
			
			<div id="belfast_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="belfast_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="belfast_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_nir.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="belfast_time" class="sitetime hn_light"></span><span id="belfast_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="belfast_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('belfast', 'uk');" />
							</div>
							<div id="belfast_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('belfast', 'uk', '1');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="belfast_sml">
				<span id="belfast_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_nir.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<!--<div id="uk_2">
	<div id="sullom_voe" class="sitecontainer">
		<a href="#" onClick="toggle_site('sullom_voe');" class="togglelink">
			
			<div id="sullom_voe_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="sullom_voe_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="sullom_voe_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_sco.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="sullom_voe_time" class="sitetime hn_light"></span><span id="sullom_voe_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="sullom_voe_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('sullom_voe', 'uk');" />
							</div>
							<div id="sullom_voe_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('sullom_voe', 'uk', '2');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="sullom_voe_sml">
				<span id="sullom_voe_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_sco.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>-->

<div id="uk_3">
	<div id="aberdeen" class="sitecontainer">
		<a href="#" onClick="toggle_site('aberdeen');" class="togglelink">
			
			<div id="aberdeen_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="aberdeen_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="aberdeen_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_sco.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="aberdeen_time" class="sitetime hn_light"></span><span id="aberdeen_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="aberdeen_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('aberdeen', 'uk');" />
							</div>
							<div id="aberdeen_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('aberdeen', 'uk', '3');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="aberdeen_sml">
				<span id="aberdeen_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_sco.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<!--<div id="uk_4">
	<div id="grangemouth" class="sitecontainer">
		<a href="#" onClick="toggle_site('grangemouth');" class="togglelink">
			
			<div id="grangemouth_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="grangemouth_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="grangemouth_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_sco.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="grangemouth_time" class="sitetime hn_light"></span><span id="grangemouth_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="grangemouth_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('grangemouth', 'uk');" />
							</div>
							<div id="grangemouth_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('grangemouth', 'uk', '4');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="grangemouth_sml">
				<span id="grangemouth_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_sco.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>-->

<div id="uk_5">
	<div id="hull" class="siteendcontainer">
		<a href="#" onClick="toggle_site('hull');" class="togglelink">
			
			<div id="hull_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="hull_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="hull_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_eng.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="hull_time" class="sitetime hn_light"></span><span id="hull_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="hull_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('hull', 'uk');" />
							</div>
							<div id="hull_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('hull', 'uk', '5');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="hull_sml">
				<span id="hull_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_eng.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="uk_6">
	<div id="milton_keynes" class="sitecontainer">
		<a href="#" onClick="toggle_site('milton_keynes');" class="togglelink">
			
			<div id="milton_keynes_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="milton_keynes_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="milton_keynes_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_eng.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="milton_keynes_time" class="sitetime hn_light"></span><span id="milton_keynes_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="milton_keynes_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('milton_keynes', 'uk');" />
							</div>
							<div id="milton_keynes_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('milton_keynes', 'uk', '6');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="milton_keynes_sml">
				<span id="milton_keynes_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_eng.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="uk_7">
	<div id="hemel" class="sitecontainer">
		<a href="#" onClick="toggle_site('hemel');" class="togglelink">
			
			<div id="hemel_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="hemel_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="hemel_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_eng.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="hemel_time" class="sitetime hn_light"></span><span id="hemel_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="hemel_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('hemel', 'uk');" />
							</div>
							<div id="hemel_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('hemel', 'uk', '7');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="hemel_sml">
				<span id="hemel_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_eng.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="uk_8">
	<div id="swindon" class="sitecontainer">
		<a href="#" onClick="toggle_site('swindon');" class="togglelink">
			
			<div id="swindon_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="swindon_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="swindon_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_eng.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="swindon_time" class="sitetime hn_light"></span><span id="swindon_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="swindon_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('swindon', 'uk');" />
							</div>
							<div id="swindon_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('swindon', 'uk', '8');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="swindon_sml">
				<span id="swindon_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_eng.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="uk_9">
	<div id="pangbourne" class="sitecontainer">
		<a href="#" onClick="toggle_site('pangbourne');" class="togglelink">
			
			<div id="pangbourne_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="pangbourne_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="pangbourne_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_eng.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="pangbourne_time" class="sitetime hn_light"></span><span id="pangbourne_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="pangbourne_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('pangbourne', 'uk');" />
							</div>
							<div id="pangbourne_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('pangbourne', 'uk', '9');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="pangbourne_sml">
				<span id="pangbourne_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_eng.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="uk_10">
	<div id="sunbury" class="siteendcontainer">
		<a href="#" onClick="toggle_site('sunbury');" class="togglelink">
			
			<div id="sunbury_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="sunbury_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="sunbury_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_eng.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="sunbury_time" class="sitetime hn_light"></span><span id="sunbury_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="sunbury_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('sunbury', 'uk');" />
							</div>
							<div id="sunbury_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('sunbury', 'uk', '10');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="sunbury_sml">
				<span id="sunbury_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_eng.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<!--<div id="uk_11">
	<div id="bedfont" class="sitecontainer">
		<a href="#" onClick="toggle_site('bedfont');" class="togglelink">
			
			<div id="bedfont_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="bedfont_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="bedfont_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_eng.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="bedfont_time" class="sitetime hn_light"></span><span id="bedfont_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="bedfont_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('bedfont', 'uk');" />
							</div>
							<div id="bedfont_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('bedfont', 'uk', '11');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="bedfont_sml">
				<span id="bedfont_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_eng.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>-->

<div id="uk_12">
	<div id="sjs" class="sitecontainer">
		<a href="#" onClick="toggle_site('sjs');" class="togglelink">
			
			<div id="sjs_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="sjs_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="sjs_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_eng.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="sjs_time" class="sitetime hn_light"></span><span id="sjs_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="sjs_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('sjs', 'uk');" />
							</div>
							<div id="sjs_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('sjs', 'uk', '11');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="sjs_sml">
				<span id="sjs_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_eng.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="uk_13">
	<div id="20cs" class="sitecontainer">
		<a href="#" onClick="toggle_site('20cs');" class="togglelink">
			
			<div id="20cs_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="20cs_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="20cs_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_eng.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="20cs_time" class="sitetime hn_light"></span><span id="20cs_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="20cs_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('20cs', 'uk');" />
							</div>
							<div id="20cs_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('20cs', 'uk', '12');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="20cs_sml">
				<span id="20cs_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_eng.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="uk_14">
	<div id="leatherhead" class="sitecontainer">
		<a href="#" onClick="toggle_site('leatherhead');" class="togglelink">
			
			<div id="leatherhead_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="leatherhead_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="leatherhead_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_eng.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="leatherhead_time" class="sitetime hn_light"></span><span id="leatherhead_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="leatherhead_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('leatherhead', 'uk');" />
							</div>
							<div id="leatherhead_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('leatherhead', 'uk', '13');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="leatherhead_sml">
				<span id="leatherhead_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_eng.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

</div>



<div id="eu_title" class="regiontitlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('eu_sites');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="regiontitle hn_light">Europe</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgxsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="eu_sites" class="regioncontainer">

<div id="eu_1">
	<div id="stavanger" class="sitecontainer">
		<a href="#" onClick="toggle_site('stavanger');" class="togglelink">
			
			<div id="stavanger_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="stavanger_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="stavanger_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_nor.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="stavanger_time" class="sitetime hn_light"></span><span id="stavanger_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="stavanger_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('stavanger', 'eu');" />
							</div>
							<div id="stavanger_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('stavanger', 'eu', '1');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="stavanger_sml">
				<span id="stavanger_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_nor.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_2">
	<div id="copenhagen" class="sitecontainer">
		<a href="#" onClick="toggle_site('copenhagen');" class="togglelink">
			
			<div id="copenhagen_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="copenhagen_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="copenhagen_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_dnk.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="copenhagen_time" class="sitetime hn_light"></span><span id="copenhagen_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="copenhagen_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('copenhagen', 'eu');" />
							</div>
							<div id="copenhagen_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('copenhagen', 'eu', '2');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="copenhagen_sml">
				<span id="copenhagen_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_dnk.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_3">
	<div id="stockholm" class="sitecontainer">
		<a href="#" onClick="toggle_site('stockholm');" class="togglelink">
			
			<div id="stockholm_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="stockholm_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="stockholm_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_swe.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="stockholm_time" class="sitetime hn_light"></span><span id="stockholm_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="stockholm_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('stockholm', 'eu');" />
							</div>
							<div id="stockholm_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('stockholm', 'eu', '3');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="stockholm_sml">
				<span id="stockholm_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_swe.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_4">
	<div id="vantaa" class="sitecontainer">
		<a href="#" onClick="toggle_site('vantaa');" class="togglelink">
			
			<div id="vantaa_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="vantaa_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="vantaa_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_fin.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="vantaa_time" class="sitetime hn_light"></span><span id="vantaa_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="vantaa_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('vantaa', 'eu');" />
							</div>
							<div id="vantaa_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('vantaa', 'eu', '4');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="vantaa_sml">
				<span id="vantaa_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_fin.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_5">
	<div id="lisbon" class="siteendcontainer">
		<a href="#" onClick="toggle_site('lisbon');" class="togglelink">
			
			<div id="lisbon_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="lisbon_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="lisbon_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_prt.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="lisbon_time" class="sitetime hn_light"></span><span id="lisbon_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="lisbon_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('lisbon', 'eu');" />
							</div>
							<div id="lisbon_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('lisbon', 'eu', '5');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="lisbon_sml">
				<span id="lisbon_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_prt.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_6">
	<div id="castellon" class="sitecontainer">
		<a href="#" onClick="toggle_site('castellon');" class="togglelink">
			
			<div id="castellon_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="castellon_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="castellon_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_esp.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="castellon_time" class="sitetime hn_light"></span><span id="castellon_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="castellon_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('castellon', 'eu');" />
							</div>
							<div id="castellon_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('castellon', 'eu', '6');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="castellon_sml">
				<span id="castellon_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_esp.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_7">
	<div id="cergy" class="sitecontainer">
		<a href="#" onClick="toggle_site('cergy');" class="togglelink">
			
			<div id="cergy_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="cergy_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="cergy_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_fra.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="cergy_time" class="sitetime hn_light"></span><span id="cergy_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="cergy_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('cergy', 'eu');" />
							</div>
							<div id="cergy_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('cergy', 'eu', '7');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="cergy_sml">
				<span id="cergy_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_fra.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_8">
	<div id="rotterdam" class="sitecontainer">
		<a href="#" onClick="toggle_site('rotterdam');" class="togglelink">
			
			<div id="rotterdam_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="rotterdam_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="rotterdam_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_nld.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="rotterdam_time" class="sitetime hn_light"></span><span id="rotterdam_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="rotterdam_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('rotterdam', 'eu');" />
							</div>
							<div id="rotterdam_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('rotterdam', 'eu', '8');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="rotterdam_sml">
				<span id="rotterdam_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_nld.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_9">
	<div id="geel" class="sitecontainer">
		<a href="#" onClick="toggle_site('geel');" class="togglelink">
			
			<div id="geel_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="geel_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="geel_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_bel.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="geel_time" class="sitetime hn_light"></span><span id="geel_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="geel_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('geel', 'eu');" />
							</div>
							<div id="geel_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('geel', 'eu', '9');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="geel_sml">
				<span id="geel_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_bel.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_10">
	<div id="bertrange" class="siteendcontainer">
		<a href="#" onClick="toggle_site('bertrange');" class="togglelink">
			
			<div id="bertrange_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="bertrange_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="bertrange_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_lux.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="bertrange_time" class="sitetime hn_light"></span><span id="bertrange_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="bertrange_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('bertrange', 'eu');" />
							</div>
							<div id="bertrange_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('bertrange', 'eu', '10');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="bertrange_sml">
				<span id="bertrange_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_lux.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_11">
	<div id="bochum" class="sitecontainer">
		<a href="#" onClick="toggle_site('bochum');" class="togglelink">
			
			<div id="bochum_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="bochum_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="bochum_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_deu.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="bochum_time" class="sitetime hn_light"></span><span id="bochum_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="bochum_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('bochum', 'eu');" />
							</div>
							<div id="bochum_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('bochum', 'eu', '11');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="bochum_sml">
				<span id="bochum_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_deu.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_12">
	<div id="hamburg" class="sitecontainer">
		<a href="#" onClick="toggle_site('hamburg');" class="togglelink">
			
			<div id="hamburg_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="hamburg_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="hamburg_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_deu.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="hamburg_time" class="sitetime hn_light"></span><span id="hamburg_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="hamburg_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('hamburg', 'eu');" />
							</div>
							<div id="hamburg_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('hamburg', 'eu', '12');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="hamburg_sml">
				<span id="hamburg_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_deu.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_13">
	<div id="zug" class="sitecontainer">
		<a href="#" onClick="toggle_site('zug');" class="togglelink">
			
			<div id="zug_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="zug_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="zug_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_swz.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="zug_time" class="sitetime hn_light"></span><span id="zug_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="zug_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('zug', 'eu');" />
							</div>
							<div id="zug_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('zug', 'eu', '13');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="zug_sml">
				<span id="zug_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_swz.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_14">
	<div id="milan" class="sitecontainer">
		<a href="#" onClick="toggle_site('milan');" class="togglelink">
			
			<div id="milan_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="milan_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="milan_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_ita.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="milan_time" class="sitetime hn_light"></span><span id="milan_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="milan_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('milan', 'eu');" />
							</div>
							<div id="milan_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('milan', 'eu', '14');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="milan_sml">
				<span id="milan_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_ita.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_15">
	<div id="prague" class="siteendcontainer">
		<a href="#" onClick="toggle_site('prague');" class="togglelink">
			
			<div id="prague_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="prague_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="prague_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_cze.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="prague_time" class="sitetime hn_light"></span><span id="prague_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="prague_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('prague', 'eu');" />
							</div>
							<div id="prague_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('prague', 'eu', '15');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="prague_sml">
				<span id="prague_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_cze.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_16">
	<div id="wiener" class="sitecontainer">
		<a href="#" onClick="toggle_site('wiener');" class="togglelink">
			
			<div id="wiener_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="wiener_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="wiener_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_aut.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="wiener_time" class="sitetime hn_light"></span><span id="wiener_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="wiener_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('wiener', 'eu');" />
							</div>
							<div id="wiener_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('wiener', 'eu', '16');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="wiener_sml">
				<span id="wiener_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_aut.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_17">
	<div id="bratislava" class="sitecontainer">
		<a href="#" onClick="toggle_site('bratislava');" class="togglelink">
			
			<div id="bratislava_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="bratislava_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="bratislava_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_svk.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="bratislava_time" class="sitetime hn_light"></span><span id="bratislava_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="bratislava_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('bratislava', 'eu');" />
							</div>
							<div id="bratislava_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('bratislava', 'eu', '17');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="bratislava_sml">
				<span id="bratislava_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_svk.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_18">
	<div id="budapest" class="sitecontainer">
		<a href="#" onClick="toggle_site('budapest');" class="togglelink">
			
			<div id="budapest_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="budapest_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="budapest_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_hun.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="budapest_time" class="sitetime hn_light"></span><span id="budapest_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="budapest_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('budapest', 'eu');" />
							</div>
							<div id="budapest_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('budapest', 'eu', '18');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="budapest_sml">
				<span id="budapest_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_hun.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_19">
	<div id="krakow" class="sitecontainer">
		<a href="#" onClick="toggle_site('krakow');" class="togglelink">
			
			<div id="krakow_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="krakow_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="krakow_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_pol.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="krakow_time" class="sitetime hn_light"></span><span id="krakow_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="krakow_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('krakow', 'eu');" />
							</div>
							<div id="krakow_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('krakow', 'eu', '19');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="krakow_sml">
				<span id="krakow_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_pol.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_20">
	<div id="bucharest" class="siteendcontainer">
		<a href="#" onClick="toggle_site('bucharest');" class="togglelink">
			
			<div id="bucharest_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="bucharest_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="bucharest_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_rou.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="bucharest_time" class="sitetime hn_light"></span><span id="bucharest_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="bucharest_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('bucharest', 'eu');" />
							</div>
							<div id="bucharest_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('bucharest', 'eu', '20');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="bucharest_sml">
				<span id="bucharest_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_rou.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_21">
	<div id="kiev" class="sitecontainer">
		<a href="#" onClick="toggle_site('kiev');" class="togglelink">
			
			<div id="kiev_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="kiev_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="kiev_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_ukr.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="kiev_time" class="sitetime hn_light"></span><span id="kiev_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="kiev_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('kiev', 'eu');" />
							</div>
							<div id="kiev_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('kiev', 'eu', '21');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="kiev_sml">
				<span id="kiev_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_ukr.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_22">
	<div id="athens" class="sitecontainer">
		<a href="#" onClick="toggle_site('athens');" class="togglelink">
			
			<div id="athens_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="athens_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="athens_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_grc.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="athens_time" class="sitetime hn_light"></span><span id="athens_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="athens_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('athens', 'eu');" />
							</div>
							<div id="athens_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('athens', 'eu', '22');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="athens_sml">
				<span id="athens_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_grc.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_23">
	<div id="istanbul" class="sitecontainer">
		<a href="#" onClick="toggle_site('istanbul');" class="togglelink">
			
			<div id="istanbul_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="istanbul_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="istanbul_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_tur.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="istanbul_time" class="sitetime hn_light"></span><span id="istanbul_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="istanbul_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('istanbul', 'eu');" />
							</div>
							<div id="istanbul_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('istanbul', 'eu', '23');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="istanbul_sml">
				<span id="istanbul_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_tur.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_24">
	<div id="nicosia" class="sitecontainer">
		<a href="#" onClick="toggle_site('nicosia');" class="togglelink">
			
			<div id="nicosia_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="nicosia_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="nicosia_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_cyp.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="nicosia_time" class="sitetime hn_light"></span><span id="nicosia_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="nicosia_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('nicosia', 'eu');" />
							</div>
							<div id="nicosia_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('nicosia', 'eu', '24');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="nicosia_sml">
				<span id="nicosia_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_cyp.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="eu_25">
	<div id="moscow" class="sitecontainer">
		<a href="#" onClick="toggle_site('moscow');" class="togglelink">
			
			<div id="moscow_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="moscow_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="moscow_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_rus.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="moscow_time" class="sitetime hn_light"></span><span id="moscow_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="moscow_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('moscow', 'eu');" />
							</div>
							<div id="moscow_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('moscow', 'eu', '24');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="moscow_sml">
				<span id="moscow_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_rus.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

</div>



<div id="ame_title" class="regiontitlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('ame_sites');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="regiontitle hn_light">Africa & Middle East</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgxsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="ame_sites" class="regioncontainer">

<div id="ame_1">
	<div id="luanda" class="sitecontainer">
		<a href="#" onClick="toggle_site('luanda');" class="togglelink">
			
			<div id="luanda_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="luanda_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="luanda_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_ago.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="luanda_time" class="sitetime hn_light"></span><span id="luanda_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="luanda_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('luanda', 'ame');" />
							</div>
							<div id="luanda_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('luanda', 'ame', '1');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="luanda_sml">
				<span id="luanda_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_ago.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="ame_2">
	<div id="capetown" class="sitecontainer">
		<a href="#" onClick="toggle_site('capetown');" class="togglelink">
			
			<div id="capetown_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="capetown_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="capetown_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_zaf.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="capetown_time" class="sitetime hn_light"></span><span id="capetown_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="capetown_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('capetown', 'ame');" />
							</div>
							<div id="capetown_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('capetown', 'ame', '2');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="capetown_sml">
				<span id="capetown_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_zaf.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="ame_3">
	<div id="jburg" class="sitecontainer">
		<a href="#" onClick="toggle_site('jburg');" class="togglelink">
			
			<div id="jburg_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="jburg_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="jburg_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_zaf.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="jburg_time" class="sitetime hn_light"></span><span id="jburg_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="jburg_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('jburg', 'ame');" />
							</div>
							<div id="jburg_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('jburg', 'ame', '3');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="jburg_sml">
				<span id="jburg_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_zaf.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="ame_4">
	<div id="cairo" class="sitecontainer">
		<a href="#" onClick="toggle_site('cairo');" class="togglelink">
			
			<div id="cairo_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="cairo_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="cairo_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_egy.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="cairo_time" class="sitetime hn_light"></span><span id="cairo_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="cairo_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('cairo', 'ame');" />
							</div>
							<div id="cairo_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('cairo', 'ame', '4');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="cairo_sml">
				<span id="cairo_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_egy.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="ame_5">
	<div id="basra" class="siteendcontainer">
		<a href="#" onClick="toggle_site('basra');" class="togglelink">
			
			<div id="basra_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="basra_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="basra_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_irq.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="basra_time" class="sitetime hn_light"></span><span id="basra_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="basra_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('basra', 'ame');" />
							</div>
							<div id="basra_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('basra', 'ame', '5');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="basra_sml">
				<span id="basra_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_irq.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="ame_6">
	<div id="tbilisi" class="sitecontainer">
		<a href="#" onClick="toggle_site('tbilisi');" class="togglelink">
			
			<div id="tbilisi_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="tbilisi_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="tbilisi_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_geo.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="tbilisi_time" class="sitetime hn_light"></span><span id="tbilisi_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="tbilisi_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('tbilisi', 'ame');" />
							</div>
							<div id="tbilisi_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('tbilisi', 'ame', '6');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="tbilisi_sml">
				<span id="tbilisi_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_geo.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="ame_7">
	<div id="baku" class="sitecontainer">
		<a href="#" onClick="toggle_site('baku');" class="togglelink">
			
			<div id="baku_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="baku_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="baku_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_aze.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="baku_time" class="sitetime hn_light"></span><span id="baku_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="baku_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('baku', 'ame');" />
							</div>
							<div id="baku_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('baku', 'ame', '7');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="baku_sml">
				<span id="baku_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_aze.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="ame_8">
	<div id="dubai" class="sitecontainer">
		<a href="#" onClick="toggle_site('dubai');" class="togglelink">
			
			<div id="dubai_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="dubai_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="dubai_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_uae.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="dubai_time" class="sitetime hn_light"></span><span id="dubai_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="dubai_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('dubai', 'ame');" />
							</div>
							<div id="dubai_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('dubai', 'ame', '8');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="dubai_sml">
				<span id="dubai_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_uae.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="ame_9">
	<div id="muscat" class="sitecontainer">
		<a href="#" onClick="toggle_site('muscat');" class="togglelink">
			
			<div id="muscat_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="muscat_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="muscat_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_omn.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="muscat_time" class="sitetime hn_light"></span><span id="muscat_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="muscat_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('muscat', 'ame');" />
							</div>
							<div id="muscat_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('muscat', 'ame', '9');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="muscat_sml">
				<span id="muscat_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_omn.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

</div>



<div id="asia_title" class="regiontitlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('asia_sites');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="regiontitle hn_light">Asia</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgxsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="asia_sites" class="regioncontainer">

<div id="asia_1">
	<div id="mumbai" class="sitecontainer">
		<a href="#" onClick="toggle_site('mumbai');" class="togglelink">
			
			<div id="mumbai_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="mumbai_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="mumbai_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_ind.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="mumbai_time" class="sitetime hn_light"></span><span id="mumbai_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="mumbai_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('mumbai', 'asia');" />
							</div>
							<div id="mumbai_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('mumbai', 'asia', '1');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="mumbai_sml">
				<span id="mumbai_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_ind.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="asia_2">
	<div id="new_delhi" class="sitecontainer">
		<a href="#" onClick="toggle_site('new_delhi');" class="togglelink">
			
			<div id="new_delhi_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="new_delhi_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="new_delhi_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_ind.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="new_delhi_time" class="sitetime hn_light"></span><span id="new_delhi_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="new_delhi_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('new_delhi', 'asia');" />
							</div>
							<div id="new_delhi_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('new_delhi', 'asia', '2');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="new_delhi_sml">
				<span id="new_delhi_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_ind.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="asia_3">
	<div id="kolkata" class="sitecontainer">
		<a href="#" onClick="toggle_site('kolkata');" class="togglelink">
			
			<div id="kolkata_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="kolkata_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="kolkata_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_ind.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="kolkata_time" class="sitetime hn_light"></span><span id="kolkata_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="kolkata_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('kolkata', 'asia');" />
							</div>
							<div id="kolkata_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('kolkata', 'asia', '3');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="kolkata_sml">
				<span id="kolkata_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_ind.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="asia_11">
	<div id="almaty" class="sitecontainer">
		<a href="#" onClick="toggle_site('almaty');" class="togglelink">
			
			<div id="almaty_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="almaty_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="almaty_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_kaz.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="almaty_time" class="sitetime hn_light"></span><span id="almaty_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="almaty_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('almaty', 'asia');" />
							</div>
							<div id="almaty_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('almaty', 'asia', '3');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="almaty_sml">
				<span id="almaty_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_kaz.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="asia_4">
	<div id="hong_kong" class="sitecontainer">
		<a href="#" onClick="toggle_site('hong_kong');" class="togglelink">
			
			<div id="hong_kong_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="hong_kong_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="hong_kong_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_hkg.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="hong_kong_time" class="sitetime hn_light"></span><span id="hong_kong_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="hong_kong_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('hong_kong', 'asia');" />
							</div>
							<div id="hong_kong_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('hong_kong', 'asia', '4');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="hong_kong_sml">
				<span id="hong_kong_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_hkg.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="asia_5">
	<div id="beijing" class="siteendcontainer">
		<a href="#" onClick="toggle_site('beijing');" class="togglelink">
			
			<div id="beijing_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="beijing_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="beijing_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_chn.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="beijing_time" class="sitetime hn_light"></span><span id="beijing_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="beijing_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('beijing', 'asia');" />
							</div>
							<div id="beijing_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('beijing', 'asia', '5');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="beijing_sml">
				<span id="beijing_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_chn.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="asia_6">
	<div id="shanghai" class="sitecontainer">
		<a href="#" onClick="toggle_site('shanghai');" class="togglelink">
			
			<div id="shanghai_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="shanghai_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="shanghai_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_chn.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="shanghai_time" class="sitetime hn_light"></span><span id="shanghai_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="shanghai_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('shanghai', 'asia');" />
							</div>
							<div id="shanghai_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('shanghai', 'asia', '6');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="shanghai_sml">
				<span id="shanghai_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_chn.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="asia_7">
	<div id="taipei" class="sitecontainer">
		<a href="#" onClick="toggle_site('taipei');" class="togglelink">
			
			<div id="taipei_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="taipei_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="taipei_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_twn.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="taipei_time" class="sitetime hn_light"></span><span id="taipei_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="taipei_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('taipei', 'asia');" />
							</div>
							<div id="taipei_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('taipei', 'asia', '7');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="taipei_sml">
				<span id="taipei_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_twn.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="asia_8">
	<div id="seoul" class="sitecontainer">
		<a href="#" onClick="toggle_site('seoul');" class="togglelink">
			
			<div id="seoul_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="seoul_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="seoul_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_kor.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="seoul_time" class="sitetime hn_light"></span><span id="seoul_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="seoul_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('seoul', 'asia');" />
							</div>
							<div id="seoul_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('seoul', 'asia', '8');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="seoul_sml">
				<span id="seoul_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_kor.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="asia_9">
	<div id="ulsan" class="sitecontainer">
		<a href="#" onClick="toggle_site('ulsan');" class="togglelink">
			
			<div id="ulsan_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="ulsan_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="ulsan_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_kor.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="ulsan_time" class="sitetime hn_light"></span><span id="ulsan_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="ulsan_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('ulsan', 'asia');" />
							</div>
							<div id="ulsan_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('ulsan', 'asia', '9');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="ulsan_sml">
				<span id="ulsan_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_kor.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="asia_10">
	<div id="tokyo" class="siteendcontainer">
		<a href="#" onClick="toggle_site('tokyo');" class="togglelink">
			
			<div id="tokyo_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="tokyo_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="tokyo_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_jpn.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="tokyo_time" class="sitetime hn_light"></span><span id="tokyo_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="tokyo_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('tokyo', 'asia');" />
							</div>
							<div id="tokyo_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('tokyo', 'asia', '10');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="tokyo_sml">
				<span id="tokyo_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_jpn.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

</div>



<div id="sea_title" class="regiontitlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('sea_sites');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="regiontitle hn_light">Southeast Asia</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgxsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="sea_sites" class="regioncontainer">

<div id="sea_1">
	<div id="bangkok" class="sitecontainer">
		<a href="#" onClick="toggle_site('bangkok');" class="togglelink">
			
			<div id="bangkok_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="bangkok_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="bangkok_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_tha.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="bangkok_time" class="sitetime hn_light"></span><span id="bangkok_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="bangkok_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('bangkok', 'sea');" />
							</div>
							<div id="bangkok_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('bangkok', 'sea', '1');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="bangkok_sml">
				<span id="bangkok_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_tha.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sea_2">
	<div id="ho_chi_minh" class="sitecontainer">
		<a href="#" onClick="toggle_site('ho_chi_minh');" class="togglelink">
			
			<div id="ho_chi_minh_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="ho_chi_minh_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="ho_chi_minh_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_vnm.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="ho_chi_minh_time" class="sitetime hn_light"></span><span id="ho_chi_minh_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="ho_chi_minh_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('ho_chi_minh', 'sea');" />
							</div>
							<div id="ho_chi_minh_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('ho_chi_minh', 'sea', '2');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="ho_chi_minh_sml">
				<span id="ho_chi_minh_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_vnm.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sea_6">
	<div id="jakarta" class="sitecontainer">
		<a href="#" onClick="toggle_site('jakarta');" class="togglelink">
			
			<div id="jakarta_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="jakarta_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="jakarta_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_idn.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="jakarta_time" class="sitetime hn_light"></span><span id="jakarta_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="jakarta_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('jakarta', 'sea');" />
							</div>
							<div id="jakarta_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('jakarta', 'sea', '6');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="jakarta_sml">
				<span id="jakarta_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_idn.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sea_3">
	<div id="kuala_lumpur" class="sitecontainer">
		<a href="#" onClick="toggle_site('kuala_lumpur');" class="togglelink">
			
			<div id="kuala_lumpur_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="kuala_lumpur_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="kuala_lumpur_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_mys.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="kuala_lumpur_time" class="sitetime hn_light"></span><span id="kuala_lumpur_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="kuala_lumpur_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('kuala_lumpur', 'sea');" />
							</div>
							<div id="kuala_lumpur_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('kuala_lumpur', 'sea', '3');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="kuala_lumpur_sml">
				<span id="kuala_lumpur_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_mys.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sea_4">
	<div id="singapore" class="sitecontainer">
		<a href="#" onClick="toggle_site('singapore');" class="togglelink">
			
			<div id="singapore_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="singapore_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="singapore_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_sgp.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="singapore_time" class="sitetime hn_light"></span><span id="singapore_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="singapore_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('singapore', 'sea');" />
							</div>
							<div id="singapore_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('singapore', 'sea', '4');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="singapore_sml">
				<span id="singapore_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_sgp.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="sea_5">
	<div id="makati" class="siteendcontainer">
		<a href="#" onClick="toggle_site('makati');" class="togglelink">
			
			<div id="makati_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="makati_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="makati_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_phl.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="makati_time" class="sitetime hn_light"></span><span id="makati_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="makati_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('makati', 'sea');" />
							</div>
							<div id="makati_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('makati', 'sea', '5');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="makati_sml">
				<span id="makati_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_phl.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

</div>



<div id="anz_title" class="regiontitlecontainer">
	<a href="#" class="toggle_divs" onClick="toggle_visibility('anz_sites');">
		<div class="tablelayout">
			<div class="row">
				<div class="cell">
					<span class="regiontitle hn_light">Australia & New Zealand</span>
				</div>
				<div class="cell">
					<img src="images/opencloselayer.png" class="layerimgxsml" />
				</div>
			</div>
		</div>
	</a>
</div>

<div id="anz_sites" class="regioncontainer">

<div id="anz_1">
	<div id="perth" class="sitecontainer">
		<a href="#" onClick="toggle_site('perth');" class="togglelink">
			
			<div id="perth_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="perth_loc" class="sitelocation hn_light"></span><span id="perth_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="perth_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_aus.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="perth_time" class="sitetime hn_light"></span><span id="perth_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="perth_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('perth', 'anz');" />
							</div>
							<div id="perth_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('perth', 'anz', '1');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="perth_sml">
				<span id="perth_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_aus.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="anz_2">
	<div id="adelaide" class="sitecontainer">
		<a href="#" onClick="toggle_site('adelaide');" class="togglelink">
			
			<div id="adelaide_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="adelaide_loc" class="sitelocation hn_light"></span><span id="adelaide_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="adelaide_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_aus.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="adelaide_time" class="sitetime hn_light"></span><span id="adelaide_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="adelaide_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('adelaide', 'anz');" />
							</div>
							<div id="adelaide_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('adelaide', 'anz', '2');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="adelaide_sml">
				<span id="adelaide_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_aus.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="anz_3">
	<div id="melbourne" class="sitecontainer">
		<a href="#" onClick="toggle_site('melbourne');" class="togglelink">
			
			<div id="melbourne_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="melbourne_loc" class="sitelocation hn_light"></span><span id="melbourne_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="melbourne_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_aus.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="melbourne_time" class="sitetime hn_light"></span><span id="melbourne_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="melbourne_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('melbourne', 'anz');" />
							</div>
							<div id="melbourne_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('melbourne', 'anz', '3');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="melbourne_sml">
				<span id="melbourne_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_aus.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="anz_4">
	<div id="sydney" class="sitecontainer">
		<a href="#" onClick="toggle_site('sydney');" class="togglelink">
			
			<div id="sydney_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="sydney_loc" class="sitelocation hn_light"></span><span id="sydney_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="sydney_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_aus.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="sydney_time" class="sitetime hn_light"></span><span id="sydney_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="sydney_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('sydney', 'anz');" />
							</div>
							<div id="sydney_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('sydney', 'anz', '4');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="sydney_sml">
				<span id="sydney_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_aus.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="anz_5">
	<div id="brisbane" class="siteendcontainer">
		<a href="#" onClick="toggle_site('brisbane');" class="togglelink">
			
			<div id="brisbane_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="brisbane_loc" class="sitelocation hn_light"></span><span id="brisbane_state" class="sitestate hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="brisbane_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_aus.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="brisbane_time" class="sitetime hn_light"></span><span id="brisbane_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="brisbane_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('brisbane', 'anz');" />
							</div>
							<div id="brisbane_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('brisbane', 'anz', '5');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="brisbane_sml">
				<span id="brisbane_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_aus.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="anz_6">
	<div id="christchurch" class="sitecontainer">
		<a href="#" onClick="toggle_site('christchurch');" class="togglelink">
			
			<div id="christchurch_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="christchurch_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="christchurch_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_nzl.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="christchurch_time" class="sitetime hn_light"></span><span id="christchurch_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="christchurch_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('christchurch', 'anz');" />
							</div>
							<div id="christchurch_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('christchurch', 'anz', '6');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="christchurch_sml">
				<span id="christchurch_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_nzl.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="anz_7">
	<div id="wellington" class="sitecontainer">
		<a href="#" onClick="toggle_site('wellington');" class="togglelink">
			
			<div id="wellington_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="wellington_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="wellington_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_nzl.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="wellington_time" class="sitetime hn_light"></span><span id="wellington_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="wellington_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('wellington', 'anz');" />
							</div>
							<div id="wellington_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('wellington', 'anz', '7');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="wellington_sml">
				<span id="wellington_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_nzl.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

<div id="anz_8">
	<div id="auckland" class="sitecontainer">
		<a href="#" onClick="toggle_site('auckland');" class="togglelink">
			
			<div id="auckland_lrg">

				<div class="tablelayout">
					<div class="row">
						<div class="cell">
							<div class="tablelayout">
								<div class="row">
									<div class="cell">
										<span id="auckland_loc" class="sitelocation hn_light"></span>
									</div>
								</div>
								<div class="row">
									<div class="cell">
										<span id="auckland_country" class="sitecountry hn_light"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-f">
							<img src="images/flag_nzl.png" class="flagsite" />
						</div>
					</div>
				</div>

				<div class="tablelayout">
					<div class="row">
						<div class="cell-l">
							<span id="auckland_time" class="sitetime hn_light"></span><span id="auckland_secs" class="sitetimesecs hn_light"></span>
						</div>
						<div class="cell-r">
							<div id="auckland_add_fav">
								<img src="images/star_off.png" class="favimg" onMouseOver="hoverFav(this);" onMouseOut="unhoverFav(this);" onClick="setAsFav('auckland', 'anz');" />
							</div>
							<div id="auckland_del_fav">
								<img src="images/star_on.png" class="favimg" onMouseOver="hoverFavDel(this);" onMouseOut="unhoverFavDel(this);" onClick="delAsFav('auckland', 'anz', '8');" />
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="auckland_sml">
				<span id="auckland_loc_sml" class="sitelocation_sml hn_light"></span><img src="images/flag_nzl.png" class="flagsitesml" />
			</div>
			
		</a>
	</div>
</div>

</div>

</div>

</body>
</html>