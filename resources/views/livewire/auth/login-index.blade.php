<div>
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                    <h3 class="font-weight-bolder text-info text-gradient">Sistem Informasi Etiket Darma
                        Ferry</h3>
                    <p class="mb-0">Masukan email dan password</p>
                </div>
                <div class="card-body">
                    <form id="form-login" wire:submit.prevent="login">
                        @csrf
                        <label>Email</label>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                aria-describedby="email-addon" wire:model="email">
                            @error('email')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <label>Password</label>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                                aria-describedby="password-addon" wire:model="password">
                            @error('password')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                    style="background-image:url('{{ asset('/') }}data_template/assets/img/curved-images/curved6.jpg')">
                </div>
            </div>
        </div>
    </div>
</div>
