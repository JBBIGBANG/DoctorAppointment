<html>
    <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
        <table class="inp">
            <th class="">
                <td class="right" >
                    <button type="button" class="btn btn-info" ><a href="appointment_form" class="text-warning">Add record</a></button>
                </td>


            </th>
        </table>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">NID</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

                <?php
                $value=1;
            ?>
            @foreach ($todoArr as $doc)
                <tbody>
                    <tr class="text-muted bg-light">
                        <th scope="col">{{$value}}</th>
                        <th scope="col">{{$doc->name}}</th>
                        <th scope="col">{{$doc->date}}</th>
                        <th scope="col">{{$doc->time}}</th>
                        <th scope="col">{{$doc->nid}}</th>
                        <th scope="col">{{$doc->mobile_no}}</th>

                        <th>
                            <a href="doc_delete/{{$doc->id}}"><button>Delete</button></a>
                            <a href="doc_edit/{{$doc->id}}"><button>Edit</button></a>

                        </th>
                    </tr>

                </tbody>
            <?php
                $value+=1;
            ?>
            @endforeach

          </table>

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>



{{--

<!------ Include the above in your HEAD tag ---------->


<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/table.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>
<table class="inp">
    <th class="">
        <td class="right" >
            <button type="button" class="btn btn-info" ><a href="appointment_form" class="text-warning">Add record</a></button>
        </td>


    </th>
</table>
<div class="x" >
    <div class="row" >
        <table id="example" class="table table-striped table-bordered" >
            <thead>
                <tr >
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">NID</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
                <?php
                    $value=1;
                ?>
                @foreach ($doctorAppoinmentArr as $doc)
                    <tbody>
                        <tr class="text-muted bg-light">
                            <th scope="col">{{$value}}</th>
                            <th scope="col">{{$doc->name}}</th>
                            <th scope="col">{{$doc->date}}</th>
                            <th scope="col">{{$doc->time}}</th>
                            <th scope="col">{{$doc->nid}}</th>

                            <th scope="col">{{$doc->mobile_no}}</th>

                            <th>
                                <a ><i class="fa fa-edit" style="font-size:30px;"></i></a>
                                <a ><i class="fa fa-trash-o" style="font-size:30px; color:red""></i></i></a>
                            </th>
                        </tr>

                    </tbody>
                <?php
                    $value+=1;
                ?>
                @endforeach

        </table>
    </div>

</div>






    <script>
            $(document).ready(function() {
                $('#example').DataTable(
                    {

                "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                    "iDisplayLength": 5
                }
                    );
            } );



    </script>
</body> --}}
