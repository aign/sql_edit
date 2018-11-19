<?php 
    require_once 'config.php';
 
    if( isset( $_GET['sql_text'] ) )
    {
        $sql_text = $_GET['sql_text'];    
        
    }

    elseif (isset( $_GET['sql_field'] )) {
        $sql_field = $_GET['sql_field'];
        
    }
    else 
    {
        die('Incomplete request. ver 1.4');
    }

    //require "template.php";
?>    

<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE test 1.4</title>
<style type="text/css" media="screen">
    #editor { 
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>
</head>
<body>

<div id="editor">
<?php
    if (isset($sql_text)){
        echo $sql_text;
    }
    if (isset($sql_field)){
        echo $sql_field;
    }

?>

</div>
    
<script src="https://ace.c9.io/build/src/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/chrome");
    editor.session.setMode("ace/mode/sql");
</script>
</body>
</html>