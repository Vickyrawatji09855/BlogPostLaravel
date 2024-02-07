<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <style>
    #formid{
        display: flex;
  justify-content: center;
 /* background-color : grey; */
  margin-top: 10px;
    }
  </style>
  <body>

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


<div id="formid">

<form action="{{url('UpdatePost/'.$post->id)}}" method="post">
   @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control"  name="title" value="{{$post->title}}" required>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" value="{{$post->Content}}" name="content" required>{{$post->Content}}</textarea>
  <label for="floatingTextarea">Content</label>
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$post->author}}" name="author" required>
    @error('author')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Publication Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$post->Publication_Date}}" name="Publication" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>

   
  </body>
</html>