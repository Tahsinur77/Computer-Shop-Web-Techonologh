document.getElementById('product').addEventListener('change', function () {
	var style = this.value;

	var x = style+"_input.php";


	document.getElementById("includedContent").innerHTML='<object type="text/html" data='+ x +' style = "width : 800px;height:2000px" ></object>';

	// if(style == 'laptop'){
	// 	//document.getElementById('hidden_div').style.display = 'block';
	// 	document.getElementById("includedContent").innerHTML='<object type="text/html" data="readDataBase/laptop_input.php" style = "width : 800px;height:2000px" ></object>';
	// 	//$("#includedContent").load("xxx.php");
	// }

	// else{
	// 	document.getElementById("includedContent").innerHTML='<object type="text/html" data="xxx.php" style = "width : 500px;height:1000px" ></object>';
	// }
});