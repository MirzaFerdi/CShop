@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update User</h1>
            </div>
        </div>
    </div>
</section>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form id="form" action="{{ route('user.update', $user->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama <span
                                        style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="nama" name="name"
                                        value="{{$user->name}}" required>
                                @if ($errors->has('name'))
                                    <p class="text-red">*{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="mb-2">
                                <label for="username" class="form-label">Username <span
                                        style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="username" name="username"
                                        value="{{$user->username}}" required>
                                @if ($errors->has('username'))
                                    <p class="text-red">*{{ $errors->first('username') }}</p>
                                @endif
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Email<span
                                        style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="email" name="email"
                                        value="{{$user->email}}" required>
                                @if ($errors->has('email'))
                                    <p class="text-red">*{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            {{-- <div class="mb-2">
                                <label for="password" class="form-label">Password<span
                                        style="color: red;">*</span></label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                @if ($errors->has('password'))
                                    <p class="text-red">*{{ $errors->first('password') }}</p>
                                @endif
                            </div> --}}
                            <div class="mb-2">
                                <label for="noHp" class="form-label">No Hp<span
                                        style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="noHp" name="phone_number"
                                       value="{{$user->phone_number}}" required>
                                @if ($errors->has('phone_number'))
                                    <p class="text-red">*{{ $errors->first('phone_number') }}</p>
                                @endif
                            </div>

                            <div class="modal-footer">
                                <a class="btn bg-secondary" href="{{ route('user') }}">Batal</a>
                                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
