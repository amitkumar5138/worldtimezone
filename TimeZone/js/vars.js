window.onload=start;

if (Notification.permission !== 'denied' || Notification.permission === "default") {
	Notification.requestPermission(function (permission) {});
}

var fc=0;

var th = ['','Thousand','Million', 'Billion','Trillion'];
var dg = ['Zero','One','Two','Three','Four', 'Five','Six','Seven','Eight','Nine'];
var tn = ['Ten','Eleven','Twelve','Thirteen', 'Fourteen','Fifteen','Sixteen', 'Seventeen','Eighteen','Nineteen'];
var tw = ['Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

var regions=new Array(8);
	regions[0]="North America";
	regions[0]['code']="na";
	regions[1]="South & Latin America";
	regions[1]['code']="sla";
	regions[2]="United Kingdom";
	regions[2]['code']="uk";
	regions[3]="Europe";
	regions[3]['code']="eu";
	regions[4]="Africa & Middle East";
	regions[4]['code']="ame";
	regions[5]="Asia";
	regions[5]['code']="asis";
	regions[6]="Southeast Asia";
	regions[6]['code']="sea";
	regions[7]="Australia & New Zealand";
	regions[7]['code']="anz";

var countries=new Array(54);
	countries[0]="Canada";
	countries[1]="United States of America";
	countries[2]="Mexico";
	countries[3]="Columbia";
	countries[4]="Venezuela";
	countries[5]="Trinidad & Tobago";
	countries[6]="Argentina";
	countries[7]="Brazil";
	countries[8]="Republic of Ireland";
	countries[9]="United Kingdom";
	countries[10]="Norway";
	countries[11]="Denmark";
	countries[12]="Sweden";
	countries[13]="Finland";
	countries[14]="Portugal";
	countries[15]="Spain";
	countries[16]="France";
	countries[17]="Netherlands";
	countries[18]="Belgium";
	countries[19]="Luxembourg";
	countries[20]="Germany";
	countries[21]="Switzerland";
	countries[22]="Italy";
	countries[23]="Czech Republic";
	countries[24]="Austria";
	countries[25]="Slovakia";
	countries[26]="Hungary";
	countries[27]="Poland";
	countries[28]="Romaina";
	countries[29]="Ukraine";
	countries[30]="Greece";
	countries[31]="Turkey";
	countries[32]="Cyprus";
	countries[33]="Angola";
	countries[34]="South Africa";
	countries[35]="Egypt";
	countries[36]="Iraq";
	countries[37]="Georgia";
	countries[38]="Azerbaijan";
	countries[39]="United Arab Emirates";
	countries[40]="Oman";
	countries[41]="India";
	countries[42]="Hong Kong";
	countries[43]="China";
	countries[44]="Taiwan";
	countries[45]="South Korea";
	countries[46]="Japan";
	countries[47]="Thailand";
	countries[48]="Vietnam";
	countries[49]="Malaysia";
	countries[50]="Singapore";
	countries[51]="Philippines";
	countries[52]="Australia";
	countries[53]="New Zealand";
	countries[54]="Indonesia";
	countries[55]="Russia";
	countries[56]="Kazakstan";
	countries[57]="Peru";
	
/* var serviceDesks=new Array(5);

	serviceDesks['boulder']=new Array(7);
	serviceDesks['boulder']['display']='Boulder';
	serviceDesks['boulder']['display_state']=', CO';
	serviceDesks['boulder']['display_country']=countries[1];
	serviceDesks['boulder']['order']=1;
	serviceDesks['boulder']['open']=new Array(7);
	serviceDesks['boulder']['close']=new Array(7);
	serviceDesks['boulder']['open'][0]='00:00:00';
	serviceDesks['boulder']['open'][1]='06:00:00';
	serviceDesks['boulder']['open'][2]='06:00:00';
	serviceDesks['boulder']['open'][3]='06:00:00';
	serviceDesks['boulder']['open'][4]='06:00:00';
	serviceDesks['boulder']['open'][5]='06:00:00';
	serviceDesks['boulder']['open'][6]='00:00:00';
	serviceDesks['boulder']['close'][0]='00:00:00';
	serviceDesks['boulder']['close'][1]='18:00:00';
	serviceDesks['boulder']['close'][2]='18:00:00';
	serviceDesks['boulder']['close'][3]='18:00:00';
	serviceDesks['boulder']['close'][4]='18:00:00';
	serviceDesks['boulder']['close'][5]='18:00:00';
	serviceDesks['boulder']['close'][6]='00:00:00';
	serviceDesks['boulder']['support']=new Array(3);
	serviceDesks['boulder']['support']['canada']=new Array(3);
	serviceDesks['boulder']['support']['usa']=new Array(3);
	serviceDesks['boulder']['support']['trinidad']=new Array(3);
	serviceDesks['boulder']['support']['canada']['display_country']=countries[0];
	serviceDesks['boulder']['support']['canada']['open']='06:00:00';
	serviceDesks['boulder']['support']['canada']['close']='18:00:00';
	serviceDesks['boulder']['support']['usa']['display_country']=countries[1];
	serviceDesks['boulder']['support']['usa']['open']='06:00:00';
	serviceDesks['boulder']['support']['usa']['close']='18:00:00';
	serviceDesks['boulder']['support']['trinidad']['display_country']=countries[5];
	serviceDesks['boulder']['support']['trinidad']['open']='06:00:00';
	serviceDesks['boulder']['support']['trinidad']['close']='18:00:00';
	
	serviceDesks['dublin']=new Array(6);
	serviceDesks['dublin']['display']='Dublin';
	serviceDesks['dublin']['display_country']=countries[8];
	serviceDesks['dublin']['order']=2;
	serviceDesks['dublin']['open']=new Array(7);
	serviceDesks['dublin']['close']=new Array(7);
	serviceDesks['dublin']['open'][0]='00:00:00';
	serviceDesks['dublin']['open'][1]='06:00:00';
	serviceDesks['dublin']['open'][2]='06:00:00';
	serviceDesks['dublin']['open'][3]='06:00:00';
	serviceDesks['dublin']['open'][4]='06:00:00';
	serviceDesks['dublin']['open'][5]='06:00:00';
	serviceDesks['dublin']['open'][6]='00:00:00';
	serviceDesks['dublin']['close'][0]='00:00:00';
	serviceDesks['dublin']['close'][1]='17:00:00';
	serviceDesks['dublin']['close'][2]='17:00:00';
	serviceDesks['dublin']['close'][3]='17:00:00';
	serviceDesks['dublin']['close'][4]='17:00:00';
	serviceDesks['dublin']['close'][5]='17:00:00';
	serviceDesks['dublin']['close'][6]='00:00:00';
	serviceDesks['dublin']['support']=new Array(6);
	serviceDesks['dublin']['support']['norway']=new Array(3);
	serviceDesks['dublin']['support']['finland']=new Array(3);
	serviceDesks['dublin']['support']['denmark']=new Array(3);
	serviceDesks['dublin']['support']['sweden']=new Array(3);
	serviceDesks['dublin']['support']['belgium']=new Array(3);
	serviceDesks['dublin']['support']['netherlands']=new Array(3);
	serviceDesks['dublin']['support']['norway']['display_country']=countries[10];
	serviceDesks['dublin']['support']['norway']['open']='06:00:00';
	serviceDesks['dublin']['support']['norway']['close']='16:00:00';
	serviceDesks['dublin']['support']['finland']['display_country']=countries[13];
	serviceDesks['dublin']['support']['finland']['open']='06:00:00';
	serviceDesks['dublin']['support']['finland']['close']='16:00:00';
	serviceDesks['dublin']['support']['denmark']['display_country']=countries[11];
	serviceDesks['dublin']['support']['denmark']['open']='07:00:00';
	serviceDesks['dublin']['support']['denmark']['close']='17:00:00';
	serviceDesks['dublin']['support']['sweden']['display_country']=countries[12];
	serviceDesks['dublin']['support']['sweden']['open']='07:00:00';
	serviceDesks['dublin']['support']['sweden']['close']='17:00:00';
	serviceDesks['dublin']['support']['netherlands']['display_country']=countries[17];
	serviceDesks['dublin']['support']['netherlands']['open']='07:00:00';
	serviceDesks['dublin']['support']['netherlands']['close']='17:00:00';
	serviceDesks['dublin']['support']['belgium']['display_country']=countries[18];
	serviceDesks['dublin']['support']['belgium']['open']='07:00:00';
	serviceDesks['dublin']['support']['belgium']['close']='17:00:00';
	
	
	serviceDesks['greenock']=new Array(5);
	serviceDesks['greenock']['display']='Greenock';
	serviceDesks['greenock']['display_country']=countries[9];
	serviceDesks['greenock']['order']=3;
	serviceDesks['greenock']['open']=new Array(7);
	serviceDesks['greenock']['close']=new Array(7);
	serviceDesks['greenock']['open'][0]='00:00:00';
	serviceDesks['greenock']['open'][1]='00:00:00';
	serviceDesks['greenock']['open'][2]='00:00:00';
	serviceDesks['greenock']['open'][3]='00:00:00';
	serviceDesks['greenock']['open'][4]='00:00:00';
	serviceDesks['greenock']['open'][5]='00:00:00';
	serviceDesks['greenock']['open'][6]='00:00:00';
	serviceDesks['greenock']['close'][0]='23:59:59';
	serviceDesks['greenock']['close'][1]='23:59:59';
	serviceDesks['greenock']['close'][2]='23:59:59';
	serviceDesks['greenock']['close'][3]='23:59:59';
	serviceDesks['greenock']['close'][4]='23:59:59';
	serviceDesks['greenock']['close'][5]='23:59:59';
	serviceDesks['greenock']['close'][6]='23:59:59';
	
	serviceDesks['brno']=new Array(6);
	serviceDesks['brno']['display']='Brno';
	serviceDesks['brno']['display_country']=countries[23];
	serviceDesks['brno']['order']=4;
	serviceDesks['brno']['open']=new Array(7);
	serviceDesks['brno']['close']=new Array(7);
	serviceDesks['brno']['open'][0]='00:00:00';
	serviceDesks['brno']['open'][1]='08:00:00';
	serviceDesks['brno']['open'][2]='08:00:00';
	serviceDesks['brno']['open'][3]='08:00:00';
	serviceDesks['brno']['open'][4]='08:00:00';
	serviceDesks['brno']['open'][5]='08:00:00';
	serviceDesks['brno']['open'][6]='00:00:00';
	serviceDesks['brno']['close'][0]='00:00:00';
	serviceDesks['brno']['close'][1]='03:00:00';
	serviceDesks['brno']['close'][2]='03:00:00';
	serviceDesks['brno']['close'][3]='03:00:00';
	serviceDesks['brno']['close'][4]='03:00:00';
	serviceDesks['brno']['close'][5]='03:00:00';
	serviceDesks['brno']['close'][6]='00:00:00';
	serviceDesks['brno']['support']=new Array(13);
	serviceDesks['brno']['support']['angola']['display_country']=countries[33];
	serviceDesks['brno']['support']['angola']['open']='08:00:00';
	serviceDesks['brno']['support']['angola']['close']='18:00:00';
	serviceDesks['brno']['support']['austria']['display_country']=countries[24];
	serviceDesks['brno']['support']['austria']['open']='08:00:00';
	serviceDesks['brno']['support']['austria']['close']='18:00:00';
	serviceDesks['brno']['support']['france']['display_country']=countries[16];
	serviceDesks['brno']['support']['france']['open']='08:00:00';
	serviceDesks['brno']['support']['france']['close']='18:00:00';
	serviceDesks['brno']['support']['germany']['display_country']=countries[20];
	serviceDesks['brno']['support']['germany']['open']='08:00:00';
	serviceDesks['brno']['support']['germany']['close']='18:00:00';
	serviceDesks['brno']['support']['poland']['display_country']=countries[27];
	serviceDesks['brno']['support']['poland']['open']='08:00:00';
	serviceDesks['brno']['support']['poland']['close']='18:00:00';
	serviceDesks['brno']['support']['spain']['display_country']=countries[15];
	serviceDesks['brno']['support']['spain']['open']='08:00:00';
	serviceDesks['brno']['support']['spain']['close']='18:00:00';
	serviceDesks['brno']['support']['switzerland']['display_country']=countries[21];
	serviceDesks['brno']['support']['switzerland']['open']='08:00:00';
	serviceDesks['brno']['support']['switzerland']['close']='18:00:00';
	serviceDesks['brno']['support']['portugal']['display_country']=countries[14];
	serviceDesks['brno']['support']['portugal']['open']='09:00:00';
	serviceDesks['brno']['support']['portugal']['close']='19:00:00';
	serviceDesks['brno']['support']['brazil']['display_country']=countries[7];
	serviceDesks['brno']['support']['brazil']['open']='12:00:00';
	serviceDesks['brno']['support']['brazil']['close']='22:00:00';
	serviceDesks['brno']['support']['argentina']['display_country']=countries[6];
	serviceDesks['brno']['support']['argentina']['open']='11:00:00';
	serviceDesks['brno']['support']['argentina']['close']='01:00:00';
	serviceDesks['brno']['support']['venezuela']['display_country']=countries[4];
	serviceDesks['brno']['support']['venezuela']['open']='13:00:00';
	serviceDesks['brno']['support']['venezuela']['close']='23:00:00';
	serviceDesks['brno']['support']['columbia']['display_country']=countries[3];
	serviceDesks['brno']['support']['columbia']['open']='14:00:00';
	serviceDesks['brno']['support']['columbia']['close']='00:00:00';
	serviceDesks['brno']['support']['mexico']['display_country']=countries[2];
	serviceDesks['brno']['support']['mexico']['open']='15:00:00';
	serviceDesks['brno']['support']['mexico']['close']='03:00:00';
	
	serviceDesks['bangalore']=new Array(5);
	serviceDesks['bangalore']['display']='Bangalore';
	serviceDesks['bangalore']['display_country']=countries[41];
	serviceDesks['banaglore']['order']=5;
	serviceDesks['bangalore']['open']=new Array(7);
	serviceDesks['bangalore']['close']=new Array(7);
	serviceDesks['bangalore']['open'][0]='00:00:00';
	serviceDesks['bangalore']['open'][1]='00:00:00';
	serviceDesks['bangalore']['open'][2]='00:00:00';
	serviceDesks['bangalore']['open'][3]='00:00:00';
	serviceDesks['bangalore']['open'][4]='00:00:00';
	serviceDesks['bangalore']['open'][5]='00:00:00';
	serviceDesks['bangalore']['open'][6]='00:00:00';
	serviceDesks['bangalore']['close'][0]='23:59:59';
	serviceDesks['bangalore']['close'][1]='23:59:59';
	serviceDesks['bangalore']['close'][2]='23:59:59';
	serviceDesks['bangalore']['close'][3]='23:59:59';
	serviceDesks['bangalore']['close'][4]='23:59:59';
	serviceDesks['bangalore']['close'][5]='23:59:59';
	serviceDesks['bangalore']['close'][6]='23:59:59';
	
var locations=new Array(8);
	locations[regions[0]['code']]=new Array(2);
	locations[regions[1]['code']]=new Array(6);
	locations[regions[2]['code']]=new Array(3);
	locations[regions[3]['code']]=new Array(23);
	locations[regions[4]['code']]=new Array(8);
	locations[regions[5]['code']]=new Array(6);
	locations[regions[6]['code']]=new Array(5);
	locations[regions[7]['code']]=new Array(2);
	
	locations[regions[0]['code']]['canada']=new Array(2);
	locations[regions[0]['code']]['canada']['display']='Canada';
	locations[regions[0]['code']]['canada']['sites']=new Array(1);
	
	locations[regions[0]['code']]['canada']['sites']['calgary']=new Array(5);
	locations[regions[0]['code']]['canada']['sites']['calgary']['display']='calgary';
	locations[regions[0]['code']]['canada']['sites']['calgary']['display_sml']='calgary';
	locations[regions[0]['code']]['canada']['sites']['calgary']['display_state']=', AB';
	locations[regions[0]['code']]['canada']['sites']['calgary']['order']=1;
	locations[regions[0]['code']]['canada']['sites']['calgary']['supported_by']=new Array(3);
	locations[regions[0]['code']]['canada']['sites']['calgary']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['canada']['sites']['calgary']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['canada']['sites']['calgary']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']=new Array(2);
	locations[regions[0]['code']]['usa']['display']='United States of America';
	locations[regions[0]['code']]['usa']['sites']=new Array(14);
	
	locations[regions[0]['code']]['usa']['sites']['prudhoe']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['prudhoe']['display']='Prudhoe Bay';
	locations[regions[0]['code']]['usa']['sites']['prudhoe']['display_sml']='Prudhoe Bay';
	locations[regions[0]['code']]['usa']['sites']['prudhoe']['display_state']=', AK';
	locations[regions[0]['code']]['usa']['sites']['prudhoe']['order']=2;
	locations[regions[0]['code']]['usa']['sites']['prudhoe']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['prudhoe']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['prudhoe']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['prudhoe']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['anchorage']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['anchorage']['display']='Anchorage';
	locations[regions[0]['code']]['usa']['sites']['anchorage']['display_sml']='Anchorage';
	locations[regions[0]['code']]['usa']['sites']['anchorage']['display_state']=', AK';
	locations[regions[0]['code']]['usa']['sites']['anchorage']['order']=3;
	locations[regions[0]['code']]['usa']['sites']['anchorage']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['anchorage']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['anchorage']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['anchorage']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['cherry']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['cherry']['display']='Cherry Point';
	locations[regions[0]['code']]['usa']['sites']['cherry']['display_sml']='Cherry Point';
	locations[regions[0]['code']]['usa']['sites']['cherry']['display_state']=', WA';
	locations[regions[0]['code']]['usa']['sites']['cherry']['order']=4;
	locations[regions[0]['code']]['usa']['sites']['cherry']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['cherry']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['cherry']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['cherry']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['lapalma']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['lapalma']['display']='La Palma';
	locations[regions[0]['code']]['usa']['sites']['lapalma']['display_sml']='La Palma';
	locations[regions[0]['code']]['usa']['sites']['lapalma']['display_state']=', CA';
	locations[regions[0]['code']]['usa']['sites']['lapalma']['order']=5;
	locations[regions[0]['code']]['usa']['sites']['lapalma']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['lapalma']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['lapalma']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['lapalma']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['wamsutter']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['wamsutter']['display']='Wamsutter';
	locations[regions[0]['code']]['usa']['sites']['wamsutter']['display_sml']='Wamsutter';
	locations[regions[0]['code']]['usa']['sites']['wamsutter']['display_state']=', WY';
	locations[regions[0]['code']]['usa']['sites']['wamsutter']['order']=6;
	locations[regions[0]['code']]['usa']['sites']['wamsutter']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['wamsutter']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['wamsutter']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['wamsutter']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['durango']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['durango']['display']='Durango';
	locations[regions[0]['code']]['usa']['sites']['durango']['display_sml']='Durango';
	locations[regions[0]['code']]['usa']['sites']['durango']['display_state']=', CO';
	locations[regions[0]['code']]['usa']['sites']['durango']['order']=7;
	locations[regions[0]['code']]['usa']['sites']['durango']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['durango']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['durango']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['durango']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['tulsa']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['tulsa']['display']='Tulsa';
	locations[regions[0]['code']]['usa']['sites']['tulsa']['display_sml']='Tulsa';
	locations[regions[0]['code']]['usa']['sites']['tulsa']['display_state']=', OK';
	locations[regions[0]['code']]['usa']['sites']['tulsa']['order']=8;
	locations[regions[0]['code']]['usa']['sites']['tulsa']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['tulsa']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['tulsa']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['tulsa']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['houston']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['houston']['display']='Houston';
	locations[regions[0]['code']]['usa']['sites']['houston']['display_sml']='Houston';
	locations[regions[0]['code']]['usa']['sites']['houston']['display_state']=', TX';
	locations[regions[0]['code']]['usa']['sites']['houston']['order']=9;
	locations[regions[0]['code']]['usa']['sites']['houston']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['houston']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['houston']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['houston']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['port_allen']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['port_allen']['display']='Port Allen';
	locations[regions[0]['code']]['usa']['sites']['port_allen']['display_sml']='Port Allen';
	locations[regions[0]['code']]['usa']['sites']['port_allen']['display_state']=', LA';
	locations[regions[0]['code']]['usa']['sites']['port_allen']['order']=10;
	locations[regions[0]['code']]['usa']['sites']['port_allen']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['port_allen']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['port_allen']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['port_allen']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['chicago']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['chicago']['display']='Chicago';
	locations[regions[0]['code']]['usa']['sites']['chicago']['display_sml']='Chicago';
	locations[regions[0]['code']]['usa']['sites']['chicago']['display_state']=', IL';
	locations[regions[0]['code']]['usa']['sites']['chicago']['order']=11;
	locations[regions[0]['code']]['usa']['sites']['chicago']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['chicago']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['chicago']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['chicago']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['whiting']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['whiting']['display']='Whiting';
	locations[regions[0]['code']]['usa']['sites']['whiting']['display_sml']='Whiting';
	locations[regions[0]['code']]['usa']['sites']['whiting']['display_state']=', IN';
	locations[regions[0]['code']]['usa']['sites']['whiting']['order']=12;
	locations[regions[0]['code']]['usa']['sites']['whiting']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['whiting']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['whiting']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['whiting']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['toledo']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['toledo']['display']='Toledo';
	locations[regions[0]['code']]['usa']['sites']['toledo']['display_sml']='Toledo';
	locations[regions[0]['code']]['usa']['sites']['toledo']['display_state']=', OH';
	locations[regions[0]['code']]['usa']['sites']['toledo']['order']=13;
	locations[regions[0]['code']]['usa']['sites']['toledo']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['toledo']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['toledo']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['toledo']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['cooper_river']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['cooper_river']['display']='Cooper River';
	locations[regions[0]['code']]['usa']['sites']['cooper_river']['display_sml']='Cooper River';
	locations[regions[0]['code']]['usa']['sites']['cooper_river']['display_state']=', SC';
	locations[regions[0]['code']]['usa']['sites']['cooper_river']['order']=14;
	locations[regions[0]['code']]['usa']['sites']['cooper_river']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['cooper_river']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['cooper_river']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['cooper_river']['supported_by'][2]=serviceDesks[4];
	
	locations[regions[0]['code']]['usa']['sites']['wayne']=new Array(5);
	locations[regions[0]['code']]['usa']['sites']['wayne']['display']='Wayne';
	locations[regions[0]['code']]['usa']['sites']['wayne']['display_sml']='Wayne';
	locations[regions[0]['code']]['usa']['sites']['wayne']['display_state']=', NJ';
	locations[regions[0]['code']]['usa']['sites']['wayne']['order']=15;
	locations[regions[0]['code']]['usa']['sites']['wayne']['supported_by']=new Array(3);
	locations[regions[0]['code']]['usa']['sites']['wayne']['supported_by'][0]=serviceDesks[0];
	locations[regions[0]['code']]['usa']['sites']['wayne']['supported_by'][1]=serviceDesks[2];
	locations[regions[0]['code']]['usa']['sites']['wayne']['supported_by'][2]=serviceDesks[4];
	
	
	
	
	
	
	
	locations[regions[1]['code']]['mexico']=new Array();
	locations[regions[1]['code']]['columbia']=new Array();
	locations[regions[1]['code']]['venezuela']=new Array();
	locations[regions[1]['code']]['trinidad']=new Array();
	locations[regions[1]['code']]['argentina']=new Array();
	locations[regions[1]['code']]['brazil']=new Array();
	
	locations[regions[2]['code']]['nireland']=new Array();
	locations[regions[2]['code']]['scotland']=new Array();
	locations[regions[2]['code']]['england']=new Array();
	
	locations[regions[3]['code']]['norway']=new Array();
	locations[regions[3]['code']]['denmark']=new Array();
	locations[regions[3]['code']]['sweden']=new Array();
	locations[regions[3]['code']]['finland']=new Array();
	locations[regions[3]['code']]['portugal']=new Array();
	locations[regions[3]['code']]['spain']=new Array();
	locations[regions[3]['code']]['france']=new Array();
	locations[regions[3]['code']]['netherlands']=new Array();
	locations[regions[3]['code']]['belgium']=new Array();
	locations[regions[3]['code']]['luxembourg']=new Array();
	locations[regions[3]['code']]['germany']=new Array();
	locations[regions[3]['code']]['switzerland']=new Array();
	locations[regions[3]['code']]['italy']=new Array();
	locations[regions[3]['code']]['czech']=new Array();
	locations[regions[3]['code']]['austria']=new Array();
	locations[regions[3]['code']]['slovakia']=new Array();
	locations[regions[3]['code']]['hungary']=new Array();
	locations[regions[3]['code']]['poland']=new Array();
	locations[regions[3]['code']]['romania']=new Array();
	locations[regions[3]['code']]['ukraine']=new Array();
	locations[regions[3]['code']]['greece']=new Array();
	locations[regions[3]['code']]['turkey']=new Array();
	locations[regions[3]['code']]['cyprus']=new Array();
	
	locations[regions[4]['code']]['angola']=new Array();
	locations[regions[4]['code']]['south_africa']=new Array();
	locations[regions[4]['code']]['egypt']=new Array();
	locations[regions[4]['code']]['iraq']=new Array();
	locations[regions[4]['code']]['georgia']=new Array();
	locations[regions[4]['code']]['azerbaijan']=new Array();
	locations[regions[4]['code']]['uae']=new Array();
	locations[regions[4]['code']]['oman']=new Array();
	
	locations[regions[5]['code']]['india']=new Array();
	locations[regions[5]['code']]['hong_kong']=new Array();
	locations[regions[5]['code']]['china']=new Array();
	locations[regions[5]['code']]['taiwan']=new Array();
	locations[regions[5]['code']]['south_korea']=new Array();
	locations[regions[5]['code']]['japan']=new Array();
	
	locations[regions[6]['code']]['thailand']=new Array();
	locations[regions[6]['code']]['vietnam']=new Array();
	locations[regions[6]['code']]['malaysia']=new Array();
	locations[regions[6]['code']]['singapore']=new Array();
	locations[regions[6]['code']]['philippines']=new Array();
	
	locations[regions[7]['code']]['australia']=new Array();
	locations[regions[7]['code']]['new_zealand']=new Array(); */



	
var siteStatus=new Array(5);
	siteStatus['boulder']=new Array(2);
	siteStatus['dublin']=new Array(2);
	siteStatus['greenock']=new Array(2);
	siteStatus['brno']=new Array(2);
	siteStatus['bangalore']=new Array(2);
	
	siteStatus['boulder']['open']=0;
	siteStatus['boulder']['name']='Boulder';
	siteStatus['dublin']['open']=0;
	siteStatus['dublin']['name']='Dublin';
	siteStatus['greenock']['open']=0;
	siteStatus['greenock']['name']='Greenock';
	siteStatus['brno']['open']=0;
	siteStatus['brno']['name']='Brno';
	siteStatus['bangalore']['open']=0;
	siteStatus['bangalore']['name']='Bangalore';

var boulder=new Array(2);
	boulder['open']=new Array(7);
	boulder['close']=new Array(7);

	boulder['open'][0]='00:00:00';
	boulder['open'][1]='06:00:00';
	boulder['open'][2]='06:00:00';
	boulder['open'][3]='06:00:00';
	boulder['open'][4]='06:00:00';
	boulder['open'][5]='06:00:00';
	boulder['open'][6]='00:00:00';
	boulder['close'][0]='00:00:00';
	boulder['close'][1]='18:00:00';
	boulder['close'][2]='18:00:00';
	boulder['close'][3]='18:00:00';
	boulder['close'][4]='18:00:00';
	boulder['close'][5]='18:00:00';
	boulder['close'][6]='00:00:00';
	
var dublin=new Array(2);
	dublin['open']=new Array(7);
	dublin['close']=new Array(7);

	dublin['open'][0]='00:00:00';
	dublin['open'][1]='06:00:00';
	dublin['open'][2]='06:00:00';
	dublin['open'][3]='06:00:00';
	dublin['open'][4]='06:00:00';
	dublin['open'][5]='06:00:00';
	dublin['open'][6]='00:00:00';
	dublin['close'][0]='00:00:00';
	dublin['close'][1]='17:00:00';
	dublin['close'][2]='17:00:00';
	dublin['close'][3]='17:00:00';
	dublin['close'][4]='17:00:00';
	dublin['close'][5]='17:00:00';
	dublin['close'][6]='00:00:00';
	
var greenock=new Array(2);
	greenock['open']=new Array(7);
	greenock['close']=new Array(7);

	greenock['open'][0]='00:00:00';
	greenock['open'][1]='00:00:00';
	greenock['open'][2]='00:00:00';
	greenock['open'][3]='00:00:00';
	greenock['open'][4]='00:00:00';
	greenock['open'][5]='00:00:00';
	greenock['open'][6]='00:00:00';
	greenock['close'][0]='23:59:59';
	greenock['close'][1]='23:59:59';
	greenock['close'][2]='23:59:59';
	greenock['close'][3]='23:59:59';
	greenock['close'][4]='23:59:59';
	greenock['close'][5]='23:59:59';
	greenock['close'][6]='23:59:59';
	
var brno=new Array(2);
	brno['open']=new Array(7);
	brno['close']=new Array(7);

	brno['open'][0]='00:00:00';
	brno['open'][1]='08:00:00';
	brno['open'][2]='08:00:00';
	brno['open'][3]='08:00:00';
	brno['open'][4]='08:00:00';
	brno['open'][5]='08:00:00';
	brno['open'][6]='00:00:00';
	brno['close'][0]='00:00:00';
	brno['close'][1]='03:00:00';
	brno['close'][2]='03:00:00';
	brno['close'][3]='03:00:00';
	brno['close'][4]='03:00:00';
	brno['close'][5]='03:00:00';
	brno['close'][6]='00:00:00';
	
var bangalore=new Array(2);
	bangalore['open']=new Array(7);
	bangalore['close']=new Array(7);

	bangalore['open'][0]='00:00:00';
	bangalore['open'][1]='00:00:00';
	bangalore['open'][2]='00:00:00';
	bangalore['open'][3]='00:00:00';
	bangalore['open'][4]='00:00:00';
	bangalore['open'][5]='00:00:00';
	bangalore['open'][6]='00:00:00';
	bangalore['close'][0]='23:59:59';
	bangalore['close'][1]='23:59:59';
	bangalore['close'][2]='23:59:59';
	bangalore['close'][3]='23:59:59';
	bangalore['close'][4]='23:59:59';
	bangalore['close'][5]='23:59:59';
	bangalore['close'][6]='23:59:59';
	
var nel_support=new Array(3);
	nel_support['boulder']=new Array(3);
	nel_support['brno']=new Array(13);
	nel_support['dublin']=new Array(7);
	
	nel_support['boulder']['canada']=new Array(2);
	nel_support['boulder']['usa']=new Array(2);
	nel_support['boulder']['trinidad']=new Array(2);
	
	nel_support['brno']['angola']=new Array(2);
	nel_support['brno']['austria']=new Array(2);
	nel_support['brno']['france']=new Array(2);
	nel_support['brno']['germany']=new Array(2);
	nel_support['brno']['poland']=new Array(2);
	nel_support['brno']['spain']=new Array(2);
	nel_support['brno']['switzerland']=new Array(2);
	nel_support['brno']['portugal']=new Array(2);
	nel_support['brno']['brazil']=new Array(2);
	nel_support['brno']['argentina']=new Array(2);
	nel_support['brno']['venezuela']=new Array(2);
	nel_support['brno']['peru']=new Array(2);
	nel_support['brno']['columbia']=new Array(2);
	nel_support['brno']['mexico']=new Array(2);
	
	nel_support['dublin']['belgium']=new Array(2);
	nel_support['dublin']['netherlands']=new Array(2);
	
	nel_support['boulder']['canada']['open']='06:00:00';
	nel_support['boulder']['canada']['close']='18:00:00';
	nel_support['boulder']['usa']['open']='06:00:00';
	nel_support['boulder']['usa']['close']='18:00:00';
	nel_support['boulder']['trinidad']['open']='06:00:00';
	nel_support['boulder']['trinidad']['close']='18:00:00';
	
	nel_support['brno']['angola']['open']='08:00:00';
	nel_support['brno']['angola']['close']='18:00:00';
	nel_support['brno']['austria']['open']='08:00:00';
	nel_support['brno']['austria']['close']='18:00:00';
	nel_support['brno']['france']['open']='08:00:00';
	nel_support['brno']['france']['close']='18:00:00';
	nel_support['brno']['germany']['open']='08:00:00';
	nel_support['brno']['germany']['close']='18:00:00';
	nel_support['brno']['poland']['open']='08:00:00';
	nel_support['brno']['poland']['close']='18:00:00';
	nel_support['brno']['spain']['open']='08:00:00';
	nel_support['brno']['spain']['close']='18:00:00';
	nel_support['brno']['switzerland']['open']='08:00:00';
	nel_support['brno']['switzerland']['close']='18:00:00';
	nel_support['brno']['portugal']['open']='09:00:00';
	nel_support['brno']['portugal']['close']='19:00:00';
	nel_support['brno']['brazil']['open']='12:00:00';
	nel_support['brno']['brazil']['close']='22:00:00';
	nel_support['brno']['argentina']['open']='11:00:00';
	nel_support['brno']['argentina']['close']='01:00:00';
	nel_support['brno']['venezuela']['open']='13:00:00';
	nel_support['brno']['venezuela']['close']='23:00:00';
	nel_support['brno']['peru']['open']='14:00:00';
	nel_support['brno']['peru']['close']='00:00:00';
	nel_support['brno']['columbia']['open']='14:00:00';
	nel_support['brno']['columbia']['close']='00:00:00';
	nel_support['brno']['mexico']['open']='15:00:00';
	nel_support['brno']['mexico']['close']='03:00:00';
	
	nel_support['dublin']['belgium']['open']='07:00:00';
	nel_support['dublin']['belgium']['close']='17:00:00';
	nel_support['dublin']['netherlands']['open']='07:00:00';
	nel_support['dublin']['netherlands']['close']='17:00:00';

var weekday=new Array(7);
	weekday[0]="Sunday";
	weekday[1]="Monday";
	weekday[2]="Tuesday";
	weekday[3]="Wednesday";
	weekday[4]="Thursday";
	weekday[5]="Friday";
	weekday[6]="Saturday";

var month=new Array(12);
	month[0]="January";
	month[1]="February";
	month[2]="March";
	month[3]="April";
	month[4]="May";
	month[5]="June";
	month[6]="July";
	month[7]="August";
	month[8]="September";
	month[9]="October";
	month[10]="November";
	month[11]="December";
	
var sd_days=weekday[1] + '<br />' + weekday[2] + '<br />' + weekday[3] + '<br />' + weekday[4] + '<br />' + weekday[5] + '<br />' + weekday[6] + '<br />' + weekday[0];

var boulder_countries='<img src="images/flag_can.png" class="flagsdsml" />' + countries[0] + '<br /><img src="images/flag_usa.png" class="flagsdsml" />' + countries[1] + '<br /><img src="images/flag_tto.png" class="flagsdsml" />' + countries[5];

var brno_countries='<img src="images/flag_ago.png" class="flagsdsml" />' + countries[33] + '<br /><img src="images/flag_aut.png" class="flagsdsml" />' + countries[24] + '<br /><img src="images/flag_fra.png" class="flagsdsml" />' + countries[16] + '<br /><img src="images/flag_deu.png" class="flagsdsml" />' + countries[20] + '<br /><img src="images/flag_pol.png" class="flagsdsml" />' + countries[27] + '<br /><img src="images/flag_esp.png" class="flagsdsml" />' + countries[15] + '<br /><img src="images/flag_swz.png" class="flagsdsml" />' + countries[21] + '<br /><img src="images/flag_prt.png" class="flagsdsml" />' + countries[14] + '<br /><img src="images/flag_arg.png" class="flagsdsml" />' + countries[6] + '<br /><img src="images/flag_bra.png" class="flagsdsml" />' + countries[7] + '<br /><img src="images/flag_ven.png" class="flagsdsml" />' + countries[4] + '<br /><img src="images/flag_per.png" class="flagsdsml" />' + countries[57] + '<br /><img src="images/flag_col.png" class="flagsdsml" />' + countries[3] + '<br /><img src="images/flag_mex.png" class="flagsdsml" />' + countries[2];

var dublin_countries='<img src="images/flag_bel.png" class="flagsdsml" />' +countries[18] + '<br /><img src="images/flag_nld.png" class="flagsdsml" />' + countries[17];