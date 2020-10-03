<?php

if($_FILES['file']['size']>0){ #file submited is 0 or not
	if($_FILES['file']['size']<=153600){  #kb=153600
		if(move_uploaded_file($_FILES['file']['tmp_name'], "images/".$_FILES['file']["name"])){ #file from form and uploading
			//file  upload
			?>
			<script type="text/javascript">
			parent.document.getElementById("message").innerHTML="";
			parent.document.getElementById("file").value="";
			window.parent.updatepicture("<?php echo 'images/'.$_FILES['file']["name"];?>");
			</script>
			<?php


		}
		else{
			//the upload fail
			?>
			<script type="text/javascript">
			parent.document.getElementById("message").innerHTML="<font color='#ff0000> There was an error uploading image. Please try again.</font>";
			</script>
			<?php

		}

	}
	else{
		//fie is big
		?>
					<script type="text/javascript">
			parent.document.getElementById("message").innerHTML="<font color='#ff0000> Your file is too big.</font>";
			</script>
			<?php
	}
}

?>
