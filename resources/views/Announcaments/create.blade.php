
@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style>
/*@import url('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css');*/
.container{
    border:  dot orange;
}
body{
background-image: url("/images/in.jpg");
height:50px;
}
.btn-primary{
  background-color: #193870; /* Dark blue */ 
  float: right;
}
.btn-primary:hover{
  background-color: #FF8C00; /* Orange */
  color: white;
}
.card-header{
    background-color:#193870
}
</style>
</head>
<body>
   <!-- PAGE TO INSERT NEW ANNOUNCEMENT FROM COMPANY -->
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">

  <div class="card-header pl-3 text-white">Create Announcement </div>
  <div class="card-body">
            <form role="form" action="{{ route('Announcaments.store') }}" class="container" method="POST">
    @csrf
                <div class="form-group">
                    <label> Company Name </label>
                    <input maxlength="100"  name="name" type="text" required="required" class="form-control" placeholder="Compane name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Job title</label>
                    <input maxlength="100" name ="title" type="text" required="required" class="form-control" placeholder="e.g Software Engineering"/>
                </div>

                <div class="form-group">
             <label class="control-label">City</label>
             <input maxlength="100" name="city" type="text" required="required" class="form-control" placeholder="e.g Riyadh" />
              </div>
                <input type="hidden" value="{{Auth::user()->company->id}}" name="Company_id"/>
                   <div class="form-group">
                    <label class="control-label">Start durationn </label>
                    <input maxlength="100" name="A_start" type="date" required="required" class="form-control" />
                </div>
                 <div class="form-group">
                    <label class="control-label">End duration</label>
                    <input maxlength="100" name="A_end" type="date" required="required" class="form-control" />
                </div>
                 <div class="form-group">
                    <label class="control-label">Job description</label>
                    <textarea maxlength="100" name="description" type="text" required="required" class="form-control" placeholder="Job description"></textarea>  
                </div>
                <button class="btn btn-primary pull-right" type="submit" id="btnsubmit">Publish</button>
            </div>
        </div>
    </form>
</div>
    


</body>
</html>
@endsection
