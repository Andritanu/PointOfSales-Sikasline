<!DOCTYPE html>
<html>
    <head>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/test.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <nav class="navbar navbar-expand-lg navbar" style="background-color: #F5F5F5;">
            <a class="navbar-brand" href="#">P O S</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="http://127.0.0.1:8000/barang">Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/merek">Brand</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/distributor">Distributor</a>
                </li>
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="post" onclick="return confirm('Are you sure you want to logout ?');">
                        @csrf
                        <button type="submit" class="btn btn-outline-secondary">Logout</button>
                    </form>
                </li>
                </ul>
            </div>
        </nav>
    </head>

    <style>
    html, body {
    position: relative;
    justify-content: center;
    align-items: center; 
    background:url(../img/6.jpg) no-repeat;
    background-size: 100%;
    }
    </style>
</html>

<footer>
<script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
   $(document).ready(function() {
  $('#example').dataTable({"sPaginationType": "full_numbers"});
  $('#example').DataTable();
} );
</script>

</footer>   