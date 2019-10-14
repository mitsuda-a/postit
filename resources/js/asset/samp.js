$( function() {
	$( '.drag' ).draggable();
	$( '.drop' ).droppable();
	$( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
    
});