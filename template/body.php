<div class="content">
<?php
                $tamrin=$_GET['excersice'] ??null;
                if($tamrin){

                    include "bin/$tamrin.php";

                }else{
                    echo 'no tamrin';
                }
                
?>
</div>