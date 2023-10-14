<!DOCTYPE html><html>
<head><title>WebMole</title></head>
<style>
#wm-search-bar {
  width: 90%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 100px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 7px 20px 7px 20px;
}
#wm-submit {
  width: 10%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 100px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 7px 20px 7px 20px;
}
</style>

<body style='background-color:grey;'><div id='wm-search-box'>
    <form action='/go/view.php' method=post><input  id='wm-search-bar' type=text name='u' placeholder='URL' value=
        <?php echo $_POST['u']; ?>><input id='wm-submit'type=submit value='Go'></div>
    <?php
        $page = $_POST['u'];
        $url='https://webmole.rf.gd/go?u='.$page;
        $frame = "<iframe src='".$url."'  width=100% height='100000'></iframe>";
        echo $frame;
    ?>
    
    
</body>
</html>
