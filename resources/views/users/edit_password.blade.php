@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('mypage.update_password') }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group row mb-3">
            <label for="" class="col-md-3 col-form-label text-md-right">新しいパスワード</label>

            <div class="col-md-7">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="password-confilm" class="col-md-3 col-form-label text-md-right">確認用</label>
        
            <div class="col-md-7">
                <input type="password" id="password-confilm" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-danger w-25">
                パスワード更新
            </button>
        </div>
    </form>
</div>
@endsection