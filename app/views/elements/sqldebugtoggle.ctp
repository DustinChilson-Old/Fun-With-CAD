<?php if (Configure::read('debug') >= 2) { ?> 
<div id='sqldebugtoggle'> 
    <style type="text/css"> 
    #cakeSqlLog { display: none; } 
    </style> 
    <script language="javascript"><!-- 
    function sqldebugtoggle_toggleLayer(whichLayer) { 
        if (document.getElementById) 
        { 
            // this is the way the standards work 
            var style2 = document.getElementById(whichLayer).style; 
            style2.display = style2.display? "":"block"; 
        } 
        else if (document.all) 
        { 
            // this is the way old msie versions work 
            var style2 = document.all[whichLayer].style; 
            style2.display = style2.display? "":"block"; 
        } 
        else if (document.layers) 
        { 
            // this is the way nn4 works 
            var style2 = document.layers[whichLayer].style; 
            style2.display = style2.display? "":"block"; 
        } 
    } 
    --></script> 
    <a onclick="sqldebugtoggle_toggleLayer('cakeSqlLog')">[Expand/Collapse SQL]</a> 
</div> 
<?php } ?> 

