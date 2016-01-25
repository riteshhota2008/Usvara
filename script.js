//check if search field is empty
function checkFields(){
	var text = document.getElementById("text-field").value;

	if(text == null || text == ""){
		alert("Please type a word!");
	}
}

//check if email field is empty
function subscribe(){
	var email = document.getElementById("email-id").value;
		
	if(email == null || email == ""){
		alert("Please type your email!");
	}
}

//styling of filter buttons when clicked
function background(id){
			switch(id){
				case 'filter-button1':
					document.getElementById("search").style.opacity = 1;

					document.getElementById("search-field1").style.zIndex = 100;
					document.getElementById("filter-button1").style.borderTop = "thin solid grey";
					document.getElementById("filter-button1").style.borderRight = "thin solid grey";
					document.getElementById("filter-button1").style.borderLeft = "thin solid grey";	
					document.getElementById("filter-button1").style.borderRadius = "10px";	

					document.getElementById("filter-button2").style.border = "0";
					document.getElementById("filter-button3").style.border = "0";
					document.getElementById("filter-button4").style.border = "0";

					document.getElementById("search").style.borderRight = "thin solid grey";
					document.getElementById("search").style.borderLeft = "thin solid grey";
					document.getElementById("search").style.borderBottom = "thin solid grey";			

					document.getElementById("heroes-search").style.opacity = 0;
					document.getElementById("search-field2").style.zIndex = -1;
					document.getElementById("singers-search").style.opacity = 0;
					document.getElementById("search-field3").style.zIndex = -1;
					document.getElementById("music-dir-search").style.opacity = 0;
					document.getElementById("search-field4").style.zIndex = -1;
					break;

				case 'filter-button2':
					
					document.getElementById("search").style.opacity =0;
					document.getElementById("search-field1").style.zIndex = -1;
					document.getElementById("singers-search").style.opacity =0;	
					document.getElementById("search-field3").style.zIndex = -1;			
					document.getElementById("heroes-search").style.opacity =1;
					document.getElementById("search-field2").style.zIndex = 100;

					document.getElementById("filter-button2").style.borderTop = "thin solid grey";
					document.getElementById("filter-button2").style.borderRight = "thin solid grey";
					document.getElementById("filter-button2").style.borderLeft = "thin solid grey";	
					document.getElementById("filter-button2").style.borderRadius = "10px";

					document.getElementById("filter-button1").style.border = "0";
					document.getElementById("filter-button3").style.border = "0";
					document.getElementById("filter-button4").style.border = "0";

					document.getElementById("music-dir-search").style.opacity =0;
					document.getElementById("search-field4").style.zIndex = -1;
					break;

				case 'filter-button3':
					
					document.getElementById("search").style.opacity =0;
					document.getElementById("search-field1").style.zIndex = -1;
					document.getElementById("singers-search").style.opacity =1;
					document.getElementById("search-field3").style.zIndex = 100;

					document.getElementById("filter-button3").style.borderTop = "thin solid grey";
					document.getElementById("filter-button3").style.borderRight = "thin solid grey";
					document.getElementById("filter-button3").style.borderLeft = "thin solid grey";	
					document.getElementById("filter-button3").style.borderRadius = "10px";

					document.getElementById("filter-button1").style.border = "0";
					document.getElementById("filter-button2").style.border = "0";
					document.getElementById("filter-button4").style.border = "0";

					document.getElementById("heroes-search").style.opacity =0;	
					document.getElementById("search-field2").style.zIndex = -1;			
					document.getElementById("music-dir-search").style.opacity =0;
					document.getElementById("search-field4").style.zIndex = -1;
					break;

				case 'filter-button4':
					
					document.getElementById("search").style.opacity =0;
					document.getElementById("search-field1").style.zIndex = -1;
					document.getElementById("singers-search").style.opacity =0;
					document.getElementById("search-field2").style.zIndex = -1;
					document.getElementById("heroes-search").style.opacity =0;
					document.getElementById("search-field3").style.zIndex = -1;
					document.getElementById("music-dir-search").style.opacity =1;
					document.getElementById("search-field4").style.zIndex = 100;

					document.getElementById("filter-button4").style.borderTop = "thin solid grey";
					document.getElementById("filter-button4").style.borderRight = "thin solid grey";
					document.getElementById("filter-button4").style.borderLeft = "thin solid grey";	
					document.getElementById("filter-button4").style.borderRadius = "10px";

					document.getElementById("filter-button1").style.border = "0";
					document.getElementById("filter-button2").style.border = "0";
					document.getElementById("filter-button3").style.border = "0";	
					break;
				}

			}