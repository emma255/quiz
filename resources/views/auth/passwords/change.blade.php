<div class="modal fade" id="password-change" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="edit-customerLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-customerLabel">Change my password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('password-change') }}">
                @csrf
                <div class="modal-body">
                    <div class="mb-1 row">
                        <label for="password" class="col-md-4 text-right">
                            New Password
                        </label>
                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required minlength="3">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="password-confirm" class="col-md-4 text-md-right">{{ __('Confirm Password') }}</label>
                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-block">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
