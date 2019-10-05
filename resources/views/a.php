<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI ドロップ</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#draggable" ).draggable();
        $( "#droppable" ).droppable();
      } );
    </script>
  </head>
  <body>
    <div id="draggable" class="ui-widget-content">
      この部分を右側の枠にドラッグしてください。
    </div>
    <div id="droppable" class="ui-widget-header">  
      <p>こちらにドロップしてください。</p>
    </div>
   </body>
  </html> 