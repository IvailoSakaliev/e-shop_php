function Changepagee(page) {
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        	 if (this.readyState == 4 && this.status == 200) {
          		document.getElementById("information").innerHTML = this.responseText;
				menu.slideUp('400');
				n = 2;
          		MenuAnimaion();
        	}
        };
        
        xmlhttp.open("GET","../blocks/" + page+ ".php" , true);
        xmlhttp.send();
}