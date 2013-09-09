function displayEditPage(aId) {
	var editForm = document.getElementById('editAddressForm'+aId);
	if(editForm.style.display == "none") {
		editForm.style.display = '';
	}
	else {
		editForm.style.display = 'none';
	}

}

function displayAddAddressPage() {
	var addAddressForm = document.getElementById('addAddressForm');
	if(addAddressForm.style.display == "none") {
		addAddressForm.style.display = '';
	}
	else {
		addAddressForm.style.display = 'none';
	}
}