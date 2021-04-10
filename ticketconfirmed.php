<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     
  
  <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  
</head>

<body id="index">
 
          <label class="w3-text-red "><b>Date of Birth &nbsp;:&nbsp;</b></label>
          <input type="text" name="dob" id="dob" value="<?php echo $dob; ?>" placeholder="Enter Your D.O.B" autocomplete="off" style="width: 190px;" class="w3-panel w3-border w3-center w3-padding w3-round-large w3-border-blue "><br>
      <script>
    var d = new Date();
    var year = d.getFullYear() - 18;
    d.setFullYear(year);
    $('#dob').datepicker({
      changeYear: true,
      changeMonth: true,
      yearRange: '1920:' + year + '',
      defaultDate: d
    });
  </script>
</body>

</html><div class="form-group">
 				<input type="file" id="fileup" class="btn btn-default"> 
					<p class="help-block">*	Select your photo and upload</p>
 					<p class="help-block">* File should be in the format of jpg,png,jpeg</p>
 					<p class="help-block">* This should be verified during visiting time</p>
					<p class="help-block">* We will never share your photo to anyone</p>
			</div><div class="form-group">
          <label for="ph">Mobile No:</label>
          <input class="form-control" type="text" name="ph"/> 
        </div>