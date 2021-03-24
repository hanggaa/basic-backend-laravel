<!doctype>
<html>
<head>
<title>CRUD</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/crud/create" method="POST">
        @csrf
        <div class="mb-3">
            <label for="namaitem" class="form-label">Nama Item</label>
            <input name ="nama_item"type="text" class="form-control" id="namaitem" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="nomoritem" class="form-label">Nomor Item</label>
            <input name="no_item"type="text" class="form-control" id="nomoritem">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
    </div>
    </div>
    <table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nama Item</th>
        <th>Nomor Item</th>
        <th>Aksi</th>
    </tr>
    @foreach($index_inven as $shw)
    <tr>
        <td>{{$shw->id}}</td>
        <td>{{$shw->nama_item}}</td>
        <td>{{$shw->no_item}}</td>
        <td>
        <a href="/crud/{{$shw->id}}/edit" class="btn btn-outline-success">Edit</a>
        <a href="/crud/{{$shw->id}}/hapus" class="btn btn-outline-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>