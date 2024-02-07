<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <style>
    .table{
        margin-top:15px;
    }
  </style>

  <nav class="navbar bg-primary navbar-expand-lg ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">BlogPOst</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create">Create new Post</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   $i=1;
   ?>
    @foreach($blog as $blg)
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$blg->title}}</td>
      <td>{{$blg->author}}</td>
      <td>
        <a href="{{ url('viewfullpost/'.$blg->id)}}"><button class="btn btn-outline-success" >View</button></a> 
        <a href="{{ url('editfullpost/'.$blg->id)}}"><button class="btn btn-outline-dark" >Edit</button></a> 
        <a href="{{ url('deletefullpost/'.$blg->id)}}"><button onclick="return confirm('Are you sure?');" class="btn btn-outline-danger" >Delete</button></a> 
    
    </td>
    </tr>
    <?php 
   $i++;
   ?>
    @endforeach
  
  </tbody>
</table>

</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
  </body>
</html>