<div class="row">


<?PHP 

 $res=getroomsitem();
 while ($row=mysqli_fetch_array($res))
 {
echo <<<DELIMETER
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4><a href=".php?ser=$row[servier_id]"> $row[servier_name]</a></h4>
                    <p>$row[servier_des]</p>
                </div>
            </div>
        </div>
        DELIMETER;
    

 }
?>
</div>

          