<form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
    @csrf
    <div class="input-group mb-3">
        <div class="input-group-prepend">
									<span class="input-group-text">
										<i class="icon-envelope"></i>
									</span>
        </div>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>

    <div class="row">
        <div class="col-6">
            <button type="submit" class="btn btn-primary px-4">Отправить</button>
        </div>
    </div>
</form>