function showProductLv2Names(PTid) {
	var part = document.getElementById('productLv2Names' + PTid);
	if(part.style.display == "none") {
		part.style.display = '';
	}
	else {
		part.style.display = 'none';
	}
}