var wxstation = {
	icao: 'KOFF',
	sensorID: '12345ABCDE',
	units: {temperature: 'F', speed: 'MPH', distance: 'Miles', pressure: 'inHG'},
	changeICAO: function(icao){
		if(icao.length != 4){
			alert("Entry is wrong size, please check!");
		}else{
			this.icao = icao;
		}
	},
	changeSensorID: function(id){
		this.sensorID = id;
	},
	changeUnits: function(type,unit){
		switch(type){
			case 1: this.units.temperature = unit;break;
			case 2: this.units.speed = unit;break;
			case 3: this.units.distance = unit;break;
			case 4: this.units.pressure = unit;break;
		}
	}
};
