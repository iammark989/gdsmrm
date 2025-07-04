<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml" >
<?php include('inc/head.php'); ?>
<body>

<div class="container mt-3">
<div class="spinner-border"></div>
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="tab" href="#home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#menu1">Menu 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#menu2">Menu 2</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">asdsadsadsad</div>
  <div class="tab-pane container fade" id="menu1">...</div>
  <div class="tab-pane container fade" id="menu2">...</div>
</div>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="la.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="chicago.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<div class="container mt-3">
  <h3>Tooltip Example</h3>
  
  <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" title="Hooray!">
    Hover over me!
  </button>
</div>
<script>
// Initialize tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

<div class="container mt-3">
  <h3>Popover Example</h3>
  
  <button type="button" class="btn btn-primary " data-bs-trigger="focus" data-bs-toggle="popover" title="Popover Header" data-bs-content="Some content inside the popover">
    Toggle popover
  </button>
</div>

<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>







</body>
</html>