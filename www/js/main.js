$(document).ready(function(){

//The noah object will be populated from a database through PHP script, but will have data for testing until then
var noah = {
	profile: {firstName: "Mike",lastName: "Rudd"},
	apps: [{name: 'Weather Station', visible: true, script: 'wxstation.js', css: 'wxstation.css'}, {name: 'Settings', visible: true}, {name: 'Meadery',visible: true}, {name: 'Assistant',visible: true}],
	addApp: function(name,visibility){
		this.apps[name] = {visible:visibility};
	},
	getAppNames: function(){
				var appNames = [];
				for(i=0;i<Object.keys(this.apps).length;i++){
					appNames[i]= this.apps[i].name;
				}
				return appNames;
	},
	getVisible: function(){
				var visibleApps = [];
				var a = 0;
				for(i=0;i<Object.keys(this.apps).length;i++){
					if(this.apps[i].visible){
						visibleApps[a]= this.apps[i];
						a++;
					}
				}
				return visibleApps;
	}
	
};

$('#view-ports').html(updateVisibleApps("viewport",noah.getVisible()));
});//End of Doc Ready

function updateVisibleApps(location,appData){
	if(location == "viewport"){
		try{
		var viewportNodes = $('#view-ports').children();
		for(i=0;i<appData.length;i++){
			var miniName = appData[i].name.replace(/ /g, "-").toLowerCase();
			var found = false;
			for(a=0;a<viewportNodes.length;a++){
				if($(viewportNodes[a]).attr('id') == miniName){
					found = true;
					break;
				}
			}
			if(found){
				break;
			}else{
				var div = document.createElement('div');
				$(div).attr('id') = miniName;
				$(div).html(appData[i].name);
				$('#view-ports').append(div);
				break;
			}
		}
		}catch(e){
			alert(e);
		}
	}else if(location == "head"){
		var headNodes = $('head').children();
		for(i=0;i<appData.length;i++){
			if(appData[i].hasOwnProperty('script')){
				for(a=0;a<headNodes.length;a++){
					if(headNodes[a].attr('script').includes(appData[i].script)){
						break;
					}else{
						var script = document.createElement('script');
						$(script).attr('script') = 'js/'+appData[i].script;
						$('head').append(script);
						break;
					}
				}
				
			}
			if(appData[i].hasOwnProperty('css')){
				for(a=0;a<headNodes.length;a++){
					if(headNodes[a].attr('css').includes(appData[i].css)){
						break;
					}else{
						var css = document.createElement('link');
						$(css).attr('href') = 'css/'+appData[i].css;
						$(css).attr('rel') = 'stylesheet';
						$('head').append(css);
						break;
					}
				}
			}
		}
		
	}
}//End of updateVisibleApps
