
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
<style>
#success_message{ display: none;}

.ni{
    text-align: center;

}
</style>
</head>
<body>

<div class="container">

    <form class="well form-horizontal" action="appoinment_submit" method="POST"  id="contact_form">
        @csrf
        <fieldset>
            <legend class="ni">Appoinment Form</legend>
            <div class="left">
                <!-- Form Name -->


                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="name" placeholder="Name" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                <!--  input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Date </label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input name="date"  class="form-control"  type="date">
                        </div>
                    </div>
                </div>

                 <!--  input-->
                 <div class="form-group">
                    <label class="col-md-4 control-label">Time </label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input name="time"  class="form-control"  type="time">
                        </div>
                    </div>
                </div>
                 <!--  input-->
                 <div class="form-group">
                    <label class="col-md-4 control-label">NID</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <input name="nid" placeholder="NID no" class="form-control"  type="text">
                        </div>
                    </div>
                </div>



                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Mobile NO</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="mobile_no" placeholder="019........." class="form-control" type="text">
                        </div>
                    </div>
                </div>




            </div><!--left div finish-->






<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success" >Submit<span class="glyphicon glyphicon-send"></span></button>
        </div>


    <div class="col-md-4">
      <button type="button" class="btn btn-warning" ><a href="fisheris_show" class="text-warning">Back</a></button>
    </div>
  </div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
<script>
  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },


            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

</script>
</body>
</html>
