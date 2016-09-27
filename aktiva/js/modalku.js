$('.table').find('.edit').on('click', function(event) {
	event.preventDefault(); //

	postBodyElement = event.target.parentNode.parentNode.childNodes[1];
	var postBody = postBodyElement.textContent;
	$('#post-body').val(postBody); // mencari id post dan mengisi dengan variable postBody
	$('#edit-modal').modal(); // memunculkan modal.
});