<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE test</title>
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
<?= $_GET['name'] ?>
</div>
    
<script src="https://ace.c9.io/build/src/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/chrome");
    editor.session.setMode("ace/mode/sql");
</script>
</body>
</html>