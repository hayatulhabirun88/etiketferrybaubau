<div>
    <form method="post" wire:submit.prevent="login">
        <div class="form-group">
            <input class="form-control" type="email" name="email" id="email" wire:model="email"
                placeholder="Masukan Email">
            @error('email')
                <span class="text-danger" style="font-size:12px;margin-left:15px;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group position-relative">
            <input class="form-control" id="psw-input" type="password" name="password" placeholder="Masukan Password"
                wire:model="password">
            @error('password')
                <span class="text-danger" style="font-size:12px;margin-left:15px;">{{ $message }}</span>
            @enderror
            <div class="position-absolute" id="password-visibility">
                <i class="bi bi-eye"></i>
                <i class="bi bi-eye-slash"></i>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">Masuk</button>
    </form>
</div>
