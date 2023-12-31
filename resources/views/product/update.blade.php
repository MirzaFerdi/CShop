@extends('layouts.main')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Update Produk</h1>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <form id="form" action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                      <label for="namaProduk" class="form-label">Nama Produk<span style="color: red;">*</span></label>
                      <input type="text" class="form-control" id="namaProduk" name="product_name" value="{{$product->product_name}}" required>
                      @if ($errors->has('product_name'))
                          <p class="text-red">*{{$errors->first('product_name')}}</p>
                      @endif
                    </div>

                    <div class="mb-2 form-group">
                        <label for="namaProduk" class="form-label">Kategori<span style="color: red;">*</span></label>
                        <select class="form-control" id="category_id" name="category_id" >
                            @foreach ($category as $ct)
                            <option value="{{$ct->id}}" {{$product->category_id == $ct->id ? 'selected' : ''}} >
                                {{$ct->category_name}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-2">
                      <label for="kodeProduk" class="form-label">Kode Produk</label>
                      <input type="text" class="form-control" id="kodeProduk" name="product_code" value="{{$product->product_code}}" readonly>
                    </div>


                    <div class="mb-2">
                      <label for="deskripsi" class="form-label">Deskripsi</label>
                      <textarea class="form-control" id="deskripsi" rows="3" name="description" >{{$product->description}}</textarea>
                      @if ($errors->has('description'))
                            <p class="text-red">*{{ $errors->first('description') }}</p>
                      @endif
                    </div>

                    <div class="mb-2">
                      <label for="harga" class="form-label">Harga<span style="color: red;">*</span></label>
                      <input type="number" class="form-control" id="harga" name="price" required value="{{$product->price}}">
                      @if ($errors->has('price'))
                            <p class="text-red">*{{ $errors->first('price') }}</p>
                      @endif
                    </div>

                    <div class="mb-2">
                      <label for="satuan" class="form-label">Satuan<span style="color: red;">*</span></label>
                      <input type="text" class="form-control" id="satuan" name="unit" required value="{{$product->unit}}">
                      @if ($errors->has('unit'))
                        <p class="text-red">*{{ $errors->first('unit')}}</p>
                      @endif
                    </div>

                    <div class="mb-2">
                      <label for="diskon" class="form-label">Diskon<span style="color: red;">*</span></label>
                      <input type="number" class="form-control" id="diskon" name="discount_amount" required value="{{$product->discount_amount}}">
                    </div>

                    <div class="mb-2">
                      <label for="stok" class="form-label">Stok<span style="color: red;">*</span></label>
                      <input type="number" class="form-control" id="stok" name="stock" required value="{{$product->stock}}">
                      @if ($errors->has('stock'))
                        <p class="text-red">*{{ $errors->first('stock')}}</p>
                      @endif
                    </div>

                    <div class="mb-2">
                        <label for="gambar" class="form-label">Foto Produk</label>
                        <input type="file" class="form-control" id="gambar" name="image" multiple>
                    </div>

                  <div class="modal-footer">
                    <a class="btn bg-secondary" href="{{route('product')}}">Batal</a>
                    <button type="submit" name="tambah" class="btn btn-primary">Update</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection
