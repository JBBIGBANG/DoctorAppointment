
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/bootstrap.min.css">

<style>
#success_message{ display: none;}
.left
{
    float: left;
    width: 65%;
}
.right
{
    float: right;
    width:35%;


}
.in{
    text-align: center;

}

.center {
        display:inline;
        margin: 3px;
      }


      .form-input input {
        display:none;
      }
      .form-input label {
        display:block;
        width:200px;
        height: auto;
        height: 200px;
        background:#333;
        border-radius:10px;
        cursor:pointer;
      }

      .form-input img {
        width:200px;
        height: 200px;
        margin: 2px;
        opacity: .4;
      }

      .imgRemove{
        position: relative;
        bottom: 114px;
        left: 68%;
        background-color: transparent;
        border: none;
        font-size: 30px;
        outline: none;
      }
      .imgRemove::after{
        content: ' \21BA';
        color: #fff;
        font-weight: 900;
        border-radius: 8px;
        cursor: pointer;
      }
      .small{
        color: firebrick;
      }
      .ni
      {
        text-align: center;

      }

</style>
</head>
<body>


<div class="container">



    <form class="well form-horizontal" action="insertdata" method="post"  id="contact_form">
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

                <!-- radio checks -->
                <div class="form-group">
                    <label class="col-md-4 control-label">লিঙ্গ </label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="sex" value="yes" /> পুরুষ
                            </label>

                            <label>
                                <input type="radio" name="sex" value="no" /> মহিলা
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">ঠিকানা</label>
                      <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <select name="address" class="form-control selectpicker" >
                                <option value=" " >আপনার ঠিকানা দিন</option>
                                <option>বরিশাল </option>

                            </select>
                        </div>
                  </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">মোবাইল নং</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="mobile" placeholder="০১৯........." class="form-control" type="text">
                        </div>
                    </div>
                </div>




            </div><!--left div finish-->


            <div class="right">
                <!-- Form Name -->

                <div>
                    <label for="file">
                        {{-- <img id="file-ip-1-preview" src="/images/user.png">
                        <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOne()"></button> --}}
                        </label>
                        <input type="file"  name="file"  >

                </div>

                {{-- <div class="image-upload-one">
                    <div class="center">
                    <div class="form-input">
                        <label for="file-ip-1">
                        <img id="file-ip-1-preview" src="/images/user.png">
                        <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOne()"></button>
                        </label>
                        <input type="file"  name="image" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);">
                    </div>
                    <small class="small">Use the ↺ icon to reset the image</small>
                    </div>
                </div> --}}


            </div><!--right div finish-->


        </fieldset>


                </div>



            </div><!-- /.container -->

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                    <button type="submit" class="btn btn-warning" >Submit<span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

</form>

    <script>

        function showPreviewOne(event){
          if(event.target.files.length > 0){
            let src = URL.createObjectURL(event.target.files[0]);
            let preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
          }
        }
        function myImgRemoveFunctionOne() {
          document.getElementById("file-ip-1-preview").src = "https://i.ibb.co/ZVFsg37/default.png";
        }

      </script>
</body>
</html>
