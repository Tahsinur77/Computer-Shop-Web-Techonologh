function typelist() {

	var brandlist = document.getElementById('brand').value;

	if(brandlist == "Intel"){		
    const brand_types = ["Duel Core", "Pentium Gold", "Core i3", "Core i5", "Core i7", "Core i9" ];
    var type = '<option disabled selected>Select Type</option>';
    for (var i = 0; i < brand_types.length; i++) {
      var value = brand_types[i];
      type += '<option>' + value + '</option>';
    }
	}
  else if(brandlist == "AMD"){
    const brand_types = ["Ryzen3", "Ryzen5", "Ryzen7", "Ryzen9"];
    var type = '<option disabled selected>Select Type</option>';
    for (var i = 0; i < brand_types.length; i++) {
      var value = brand_types[i];
      type += '<option>' + value + '</option>';
    }
  }
  else{
    var type = '<option disabled selected>Select Type</option>';
  }
	
	//  set/send districts name to District lists from division
	document.getElementById("type").innerHTML= type;
}