<!doctype>
<html>
<head>
<title>Edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Edit Data</h2>
    <div class="row">
        <form action="/crud/{{$show_edit->id}}/update" method="POST">
        @csrf
        <div class="mb-3">
            <label for="namaitem" class="form-label">Nama Item</label>
            <input value="{{$show_edit->nama_item}}" name ="nama_item"type="text" class="form-control" id="namaitem" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="nomoritem" class="form-label">Nomor Item</label>
            <input value="{{$show_edit->no_item}}" name="no_item"type="text" class="form-control" id="nomoritem">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>