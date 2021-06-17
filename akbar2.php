<!DOCTYPE html>
<html>
<body>
<form>
        <div>
            <label>KATA</label> <br>
            <input name="kata" type="text" placeholder="Masukkan kata">
        </div>
  
        <div>
            <button>Submit</button>
        </div>
    </form>
<?php

$kata = @$_GET['kata'];

if($kata == ''){
echo "";
}else if($kata == strrev($kata)){
echo "True <br>"; 
}else{
echo "False <br>"; 
}

?>
</body>
</html>