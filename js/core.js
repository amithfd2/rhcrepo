 var reloadmatch = true;
 var reloadplayer = true;
 $(function() {
    // there's the gallery and the trash
    var $gallery = $( "#gallery" ),
	$trash = $( "#trash" );
 
		// let the gallery items be draggable
	$( "li", $gallery ).draggable({
		cancel: "a.ui-icon", // clicking an icon won't initiate dragging
		revert: "invalid", // when not dropped, the item will revert back to its initial position
		containment: "document",
		helper: "clone",
		cursor: "move"
	});
 
	// let the trash be droppable, accepting the gallery items
	$trash.droppable({
		accept: "#gallery > li",
		activeClass: "ui-state-highlight",
		drop: function( event, ui ) {
			deleteImage( ui.draggable );
		}
	});
 
	// let the gallery be droppable as well, accepting items from the trash
	$gallery.droppable({
		accept: "#trash li",
		activeClass: "custom-state-active",
		drop: function( event, ui ) {
			recycleImage( ui.draggable );
		}
	});
 
	// image deletion function
	var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
	function deleteImage( $item ) {
		$item.fadeOut(function() {
			var $list = $( "ul", $trash ).length ?
			$( "ul", $trash ) :
			$( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash ); 
			$item.find( "a.ui-icon-trash" ).remove();
			$item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
				$item.animate({ width: "300px" }).css("float","left").find( "img" ).animate({ height: "36px" });
				$("ul li:last-child").addClass("borderBottom");
			});
		});
	}
 
	// image recycle function
	var trash_icon = "<a href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
	function recycleImage( $item ) {
		$item.fadeOut(function() {
			$item.find( "a.ui-icon-refresh" ).remove().end().css( "width", "280px").appendTo( $gallery ).fadeIn();
			$("ul li:nth-last-child(2)").removeClass("borderBottom");
		});
	}  
 
	// resolve the icons behavior with event delegation
	$( "ul.gallery > li" ).click(function( event ) {
		var $item = $( this ),
		$target = $( event.target ); 
		if ( $target.is( "a.ui-icon-trash" ) ) {
			deleteImage( $item );
		} else if ( $target.is( "a.ui-icon-zoomin" ) ) {
			viewLargerImage( $target );
		} else if ( $target.is( "a.ui-icon-refresh" ) ) {
			recycleImage( $item );
		}
 
		return false;
	});
	
	$( "#graph_tab" ).click(function() {
		if(reloadmatch){
			$.get("matchstat.cfm", function() {})
			.done(function(data){
				if($.trim(data)!=''){ 
					$( "#graph" ).html(data);
					reloadmatch=false;
				} 
				else{
					$( ".loaderImage" ).html("No record found");
				}
			});		
		}
	});	
	$( "#player_tab" ).click(function() {
		if(reloadplayer){
			$.get("playerstat.cfm", function() {})
			.done(function(data) {
				if($.trim(data)!=''){
					$( "#player" ).html(data);
					reloadplayer=false;
				} 
				else{
					$( ".loaderImage" ).html("No record found");
				}
			});		
		}
	});
	
});  
$( "#graphShow" ).click(function() {
	$('.playDetailsWrapp').fadeIn();
	$('.GraphWrapp').fadeIn();	
});

function closegame(ele,id){
	$.ajax({url:"ajaxpage.cfm?type=deleteSelection&gameId="+id,
		success:function(result){
			location.href='';
		}
	});
}

