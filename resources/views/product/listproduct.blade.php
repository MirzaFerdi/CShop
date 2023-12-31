@extends('layouts.main')


@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>List Product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">List Product</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="input-group">
                    <?php
                    $kata_kunci="";
                    if (isset($_POST['kata_kunci'])) {
                        $kata_kunci=$_POST['kata_kunci'];
                    }
                    ?>
                    <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control form-control-md" placeholder="Cari...">
                    <div class="input-group-append">
                        <button type="submit" name="cari" class="btn btn-md btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="" class="table table-bordered table-hover text-center">
            <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Kode Produk</th>
              <th>Nama Produk</th>
              <th>Deskripsi</th>
              <th>Harga</th>
              <th>Satuan</th>
              <th>Diskon</th>
              <th>Stok</th>
              <th>Foto</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($product as $row)

            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$row->category->category_name}}</td>
              <td>{{$row->product_code}}</td>
              <td>{{$row->product_name}}</td>
              <td>{{$row->description}}</td>
              <td>{{$row->price}}</td>
              <td>{{$row->unit}}</td>
              <td>{{$row->discount_amount}}</td>
              <td>{{$row->stock}}</td>

              @if ($row->image)
                <td>
                    <img src="{{asset('storage/image/'. $row->image)}}" alt="{{$row->image}}" width="75px" height="auto">
                </td>
                @else
                <td>Not Found</td>
              @endif
            </tr>
            @endforeach

            </tbody>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>

@endsection
