<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('show.css')}}">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bgimg-1">
<br><br>
<h5 class="animate__animated animate__fadeInUp">
    <table class="table table-striped" style="color:black;">
        <thead style="text-shadow: -1px -1px 0 #ffffff, 1px -1px 0 #ffffff, -1px 1px 0 #ffffff, 1px 1px 0 #ffffff;">
        <tr>
            <th>Owner Name</th>
            <th>Book Name</th>
            <th>View Book</th>
            <th>Download Book</th>
        </tr>
        </thead>
            @if(count($Data) > 0)
                @foreach($Data as $Book)
                    <tbody>
                  <tr>
                      <td style="text-shadow: 2px 2px 5px white;">{{$Book->ownername}}</td>
                      <td style="text-shadow: 2px 2px 5px white;">{{$Book->bookname}}</td>
                      <td><a href="{{url('/view',$Book->id)}}">View</a></td>
                      <td><a href="{{url('/download',$Book->book)}}">Download</a></td>
                  </tr>
                    </tbody>
                @endforeach
            @endif
        </tr>
    </table>
</h5>
</body>
</html>
