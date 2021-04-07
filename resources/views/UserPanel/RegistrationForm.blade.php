
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
.container
{
width: 3000px;

}
.leftcontainer
{
    float: left;
    width:800px;
}
.rightcontainer
{
    float: right;
    width:800px;;
}
</style>
</head>
<body>
<div class="container">
<div class="leftcontainer">

    <form class="well form-horizontal" action="socialService_submit" method="post"  id="contact_form">
        @csrf
        <fieldset>
            <legend class="ni">নিবন্ধন করুন</legend>
            <div class="left">
                <!-- Form Name -->


                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label">নাম </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="name" placeholder="আপনার নাম" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                <!-- Text input-->



                <!--  input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">জন্ম তারিখ </label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input name="dob"  class="form-control"  type="date">
                        </div>
                    </div>
                </div>
                 <!--  input-->
                 <div class="form-group">
                    <label class="col-md-4 control-label">জাতীয় পরিচয়পত্রের নম্বার</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <input name="nid" placeholder="জাতীয় পরিচয়পত্রের নং" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                 <!--  input-->
                 <div class="form-group">
                    <label class="col-md-4 control-label">জেলা</label>
                      <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <select name="district" class="form-control selectpicker">
                                <option value="বরিশাল" >বরিশাল </option>

                            </select>
                        </div>
                  </div>
                </div>

                 <!--  input-->
                 <div class="form-group">
                    <label class="col-md-4 control-label">উপজেলা</label>
                      <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <select name="upozilla" class="form-control selectpicker">
                                <option value="বরিশাল" >বরিশাল </option>
                                <option value="কাশিপুর" >কাশিপুর </option>
                                <option value="রুপাতলি" >রুপাতলি </option>


                            </select>
                        </div>
                  </div>
                </div>



                <!-- radio checks -->
                <div class="form-group">
                    <label class="col-md-4 control-label">লিঙ্গ </label>
                    <div class="col-md-4">
                        <div class="radio" value="gender" name="gender">
                            <label>
                                <input type="radio" name="gender" value="পুরুষ" /> পুরুষ
                            </label>

                            <label>
                                <input type="radio" name="gender" value="মহিলা" /> মহিলা
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Text input-->


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">মোবাইল নং</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="mobile_no" placeholder="০১৯........." class="form-control" type="text">
                        </div>
                    </div>
                </div>


            </div>
            <div class="rightcontainer">
                <div class="gallery">
                    <a target="_blank" href="img_lights.jpg">
                      <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                  </div>

            </div>
        </div><!--left div finish-->

</div>





<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success" >Send <span class="glyphicon glyphicon-send"></span></button>
        </div>


    <div class="col-md-4">
      <button type="button" class="btn btn-warning" ><a href="socialServiceShow" class="text-warning">Back</a></button>
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
