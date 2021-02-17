<?php
    include("n413connect.php");            
    include("head.php");
    $sql = "SELECT id, item, description, image FROM `n413_list`";
    $result = mysqli_query($link, $sql);
        $records = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
            $records[] = $row;
        }
?>
    <style>
        .cursor-pointer {cursor:pointer;}
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h2>NBA Teams</h2>
            </div> <!-- /.col-12 -->
        </div> <!-- /.row -->
        <?php
            foreach ($records as $record){
                echo '
                <div class="row record-item mt-3 cursor-pointer" data-id="'.$record["id"].'" data-item="'.$record["item"].'">
                    <div class="col-1"></div>  <!-- spacer -->
                    <div class="col-2"><img src="images/'.$record["image"].'" width="100%"/></div>
                    <div class="col-7"><b>'.$record["item"].'</b> '.$record["description"].'</div>
                </div>  <!-- /.row -->';
            } //foreach
        ?>            
    </div> <!-- /.container-fluid -->
</body>
<script>
    var this_page = "list";
    var page_title = 'AMP JAM Site | NBA Teams';
		
    $(document).ready(function(){ 
        document.title = page_title;
		navbar_update(this_page);
				
        $(".record-item").on("click", function(){
				var id = $(this).data('id');
				show_detail(id);
			}); //on()
	}); //document.ready
			
	function show_detail(id){
		window.location.assign("detail.php?id="+id);
	}
			
    function show_alert(id,item){
        alert("You have clicked Item "+id+", "+item+".");
    }
</script>    
</html>