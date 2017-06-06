$(document).ready(function(){
    var brImgLink = "flag-icon/br.svg";
    var engImgLink = "flag-icon/gb.svg";
		var esImgLink = "flag-icon/es.svg";
		var fraImgLink = "flag-icon/fr.svg";

		var imgBtnSel = $('#imgBtnSel');
		var imgBtnBr = $('#imgBtnBr');
		var imgBtnEng = $('#imgBtnEng');
		var imgBtnEs = $('#imgBtnEs');
		var imgBtnFra = $('#imgBtnFra');

		var imgNavSel = $('#imgNavSel');
		var imgNavBr = $('#imgNavBr');
		var imgNavEng = $('#imgNavEng');
		var imgNavEs = $('#imgNavEs');
		var imgNavFra = $('#imgNavFra');

		var spanNavSel = $('#lanNavSel');
		var spanBtnSel = $('#lanBtnSel');

		if (document.documentElement.lang == 'pt')
			imgBtnSel.attr("src",brImgLink);
		else if (document.documentElement.lang == 'fr')
			imgBtnSel.attr("src",fraImgLink);
		else if (document.documentElement.lang == 'es')
			imgBtnSel.attr("src",esImgLink);
		else if (document.documentElement.lang == 'en')
			imgBtnSel.attr("src",engImgLink);
		imgBtnBr.attr("src",brImgLink);
		imgBtnEng.attr("src",engImgLink);
		imgBtnEs.attr("src",esImgLink);
		imgBtnFra.attr("src",fraImgLink);

		if (document.documentElement.lang == 'pt')
			imgNavSel.attr("src",brImgLink);
		else if (document.documentElement.lang == 'fr')
			imgNavSel.attr("src",fraImgLink);
		else if (document.documentElement.lang == 'es')
			imgNavSel.attr("src",esImgLink);
		else if (document.documentElement.lang == 'en')
			imgNavSel.attr("src",engImgLink);
		imgNavBr.attr("src",brImgLink);
		imgNavEng.attr("src",engImgLink);
		imgNavEs.attr("src",esImgLink);
		imgNavFra.attr("src",fraImgLink);

		//$( ".language" ).on( "click", function( event ) {
			//var currentId = $(this).attr('id');

			//if(currentId == "navBr") {
				//imgNavSel.attr("src",brImgLink);
				//spanNavSel.text("PT");
			//} else if (currentId == "navEng") {
				//imgNavSel.attr("src",engImgLink);
				//spanNavSel.text("EN");
			//} else if (currentId == "navEs") {
				//imgNavSel.attr("src",esImgLink);
				//spanNavSel.text("ES");
			//} else if (currentId == "navFra") {
				//imgNavSel.attr("src",fraImgLink);
				//spanNavSel.text("FR");
			//}

			//if(currentId == "btnBr") {
				//imgBtnSel.attr("src",brImgLink);
				//spanBtnSel.text("PT");
			//} else if (currentId == "btnEng") {
				//imgBtnSel.attr("src",engImgLink);
				//spanBtnSel.text("EN");
			//} else if (currentId == "btnEs") {
				//imgBtnSel.attr("src",esImgLink);
				//spanBtnSel.text("ES");
			//} else if (currentId == "btnFra") {
				//imgBtnSel.attr("src",fraImgLink);
				//spanBtnSel.text("FR");
			//}
			
		//});
});
