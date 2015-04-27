<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CKEditor Upload Image</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!-- Style CSS -->
<link rel="stylesheet" href="css/style.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">

<!-- Start your form here -->
<div class="row">
<div class="col-md-10">

  <div class="form-group">
  <label class="col-sm-2 control-label">Your Content</label>
  <div class="col-sm-10">
  <textarea id="ckeditor" name="description" class="form-control"></textarea>
  </div>
  </div>

  <div class="form-group">
  <label class="col-sm-2 control-label"></label>
  <div class="col-sm-6"><br />
  <a href="" class="btn btn-default btn-sm" data-toggle="modal" data-target=".upload-form-modal">
  <i class="fa fa-upload"></i> Upload Image</a>
  </div>
  </div>

</div>
</div>
<!-- End of form -->


<!-- Here's your modal begin -->
<div class="modal fade upload-form-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
        <h4 class="modal-title">Upload Your Image Here</h4>
        </div>
        <div class="modal-body">

        <p>  
        <div id="displayImg">
        </div>
        </p>

        <form id="frm" method="post" enctype="multipart/form-data" action="processImage.php">
        <div id="imgLoading" style="display:none">
        <img src="loading.gif" alt="Uploading...."/>
        </div>
        <div id="ingLoadButton">
        <input type="file" name="deskImg" id="deskImg" />
        </div>
        <p><hr />hint : click image to insert into CKEditor.</p>
        </form>
        </div>
    </div>
  </div>
</div>
<!-- End of Modal -->

</div>

<!-- Important JS to make this project works -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.deskform.js"></script>
<script type="text/javascript" src="js/jquery.migrate-1.2.1.min.js"></script>
<!-- End of Important JS -->

<!-- CKEditor -->
<script src="http://cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>

<!-- CKEditor Adapters --> 
<script src="js/ckeditor/adapters/jquery.js"></script>

<script type="text/javascript">
  CKEDITOR.replace('ckeditor');
</script>

<!-- CKE Image Uploader JS -->
<script src="js/cke-upload-image.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>