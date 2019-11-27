<?php 
include('config.php');
$id = $_REQUEST['sid'];

		$qry="DELETE FROM `products` WHERE `id` = '$id'";
		$run= mysqli_query($mysqli, $qry);
		if($run == true){
			?>
				<script type="text/javascript">
					alert('Data Deleted');
					window.open('admin_dash.php?val=0','_self');
				</script>
			<?php 
		}

?>