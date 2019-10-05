<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI ドロップ</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
      .ui-draggable, .ui-droppable { background-position: top; }
      #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
      #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#draggable" ).draggable();
        $( "#droppable" ).droppable({
          drop: function( event, ui ) {
          $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
          .html( "ドロップできました" );
          }
        });
      } );
    </script>
  </head>
  <body>
    <div id="draggable" class="ui-widget-content">
      <p>この部分を右側の枠にドラッグしてください。</p>
    </div>
    <div id="droppable" class="ui-widget-header">  
      <p>こちらにドロップしてください。</p>
    </div>
   </body>
  </html> 