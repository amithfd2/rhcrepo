<!DOCTYPE html>
<html lang="en">
<head>
<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/stylenew.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/dragdrop/jquery-ui.js"></script>


</head>

<body>

<div class="container">

<!-------->
<div id="content">
	<div class="header">
		<div class="leftblock"><h2 class="logoText">NFL</h2></div>
		
	</div>
	<br class="clear"/>
    <ul id="tabs" class="nav nav-tabs " data-tabs="tabs">
        <li class="active"><a href="#home" data-toggle="tab">Game</a></li>
        <li><a href="#store" data-toggle="tab">Graph</a></li>
        <li><a href="#order" data-toggle="tab">Player</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="home">
		    <div class="topContents">
				<div class="searchWrapp">
					<form class="navbar-form navbar-left" role="search">
						  
					  <label>Game Id:</label>
					  <div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<br class="clear"/>
				</div>
			    <div class="leftbody">
									
					<table class="table table-bordered table-striped">
					  <th>Name</th>
					  <th>Entry</th>
					  <th>Prize</th>
					  <th>Starts</th>
					  
					  <tr>
						<td>NFL Sunday 2nd Chance [$250,000 Guaranteed]</td>
						<td>$109</td>
						<td>$250000</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>Fantasy Millionaire SUPERQualifier</td>
						<td>$100</td>
						<td>$16308</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>Fantasy Millionaire SUPERQualifier</td>
						<td>$27</td>
						<td>$8180</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>Fantasy Millionaire SUPERQualifier</td>
						<td>$11</td>
						<td>$4745</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>NFL $100,000 Chop Block [$100,000 Guaranteed]</td>
						<td>$55</td>
						<td>$100000</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>NFL $50K Gridiron [$50,000 Guaranteed]</td>
						<td>$27</td>
						<td>$50000</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>NFL $30K Flea Flicker [$30,000 Guaranteed]</td>
						<td>$5</td>
						<td>$30000</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>NFL $50K Hail Mary [$50,000 Guaranteed]</td>
						<td>$11</td>
						<td>$30000</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>NFL $30K Flea Flicker [$30,000 Guaranteed]</td>
						<td>$5</td>
						<td>$30000</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>NFL $25K Super High Roller [$25,000 Guaranteed]</td>
						<td>$530</td>
						<td>$250000</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>NFL $15,000 Play-Action [$15,000 Guaranteed!]</td>
						<td>$2</td>
						<td>$15000</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>NFL $15K Gridiron (Thurs) [$15,000 Guaranteed]</td>
						<td>$27</td>
						<td>$15000</td>
						<td>Sun 10:30pm</td>
					  </tr>
					  <tr>
						<td>MLB $10K High Heat [$10,000 Guaranteed]</td>
						<td>$109</td>
						<td>$10000</td>
						<td>Sun 10:30pm</td>
					  </tr>
					</table>
					
			    </div>
			    <div class="rightbody">
					<!--<table class="table table-bordered table-striped" id="rows">
						<th>Name</th>
						<tr><td id="draggable_1" class="ui-widget-content">Peyton Manning</td></tr>
						<tr><td id="draggable_2" class="ui-widget-content">Colin Kaepernick</td></tr>
						<tr><td id="draggable_3" class="ui-widget-content">Victor Cruz</td></tr>
						<tr><td id="draggable_4" class="ui-widget-content">Adrian Peterson</td></tr>
						<tr><td id="draggable_5" class="ui-widget-content">Eli Manning</td></tr>
						<tr><td id="draggable_6" class="ui-widget-content">AJ Green</td></tr>
						<tr><td id="draggable_7" class="ui-widget-content">Demaryius Thomas</td></tr>
						<tr><td id="draggable_8" class="ui-widget-content">Anquan Boldin</td></tr>
						<tr><td id="draggable_9" class="ui-widget-content">Michael Vick</td></tr>
						<tr><td id="draggable_10" class="ui-widget-content">Reggie Bush</td></tr>
						<tr><td id="draggable_11" class="ui-widget-content">Andrew Luck</td></tr>
						<tr><td id="draggable_12" class="ui-widget-content">LeSean McCoy</td></tr>
						<tr><td id="draggable_13" class="ui-widget-content">Aaron Rodgers</td></tr>
					</table>-->
					
						
				
 
					
					
					
			    </div>
			    <br class="clear"/>
			</div>
			
			
        </div>       
    </div>
	
	<div class="footer">
		<label>©Copyright 2012—2013 NFL. All Rights Reserved</label>
	</div>

</div>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>
<script>


  $(function() {

	$('[id^="draggable_"]').each(function(index, td){
		var id=this.id;
		$('#'+id+'').draggable({ revert: true });
	});
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
         // var srcId = $(this).closest('#'+id+'').attr('id');
		 // alert(srcId);
		 // $('#'+id+'').draggable({ revert: false });
      }
    });
  });
</script>


<script>
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
        });
      });
    }
 
    // image recycle function
    var trash_icon = "<a href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
    function recycleImage( $item ) {
      $item.fadeOut(function() {
        $item.find( "a.ui-icon-refresh" ).remove().end().css( "width", "280px").appendTo( $gallery ).fadeIn();
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
  });
</script>
  
  
  
</div> <!-- container -->




</body>
</html>