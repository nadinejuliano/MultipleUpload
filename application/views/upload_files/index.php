<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multiple Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 40px;">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">


<?php
    if ($this->session->flashdata('statusMsg')){ //change!
        echo '<div class="alert alert-success" role="alert">';
        echo $this->session->flashdata('statusMsg');
        echo "</div>";
    }
?>
        <form enctype="multipart/form-data" action="" method="post">
            <div class="form-group">
                <label>Choose Files</label>
                <input type="file" class="form-control" name="userFiles[]" multiple/>
            </div>
            <center>
            <div class="form-group">
                <input class="btn btn-warning" type="submit" name="fileSubmit" value="UPLOAD"/>
            </div>
            </center>
        </form>
    
    
    <center>
    
        <ul class="gallery">
            <?php if(!empty($files)): foreach($files as $file): ?>
            <div class="col-xs-6 col-md-3">
            <li class="thumbnail">
                <img src="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" alt="">
                <p>Uploaded On <?php echo date("j M Y",strtotime($file['created'])); ?></p>
            </li>
            </div>
            <?php endforeach; else: ?>
            <p>Image(s) not found.....</p>
            <?php endif; ?>
        </ul>
    </center>
    

</div>
<div class="col-md-3"></div>
</div>
</div>

</body>
</html>