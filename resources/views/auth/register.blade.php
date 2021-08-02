<x-layout>

    <x-page-header :title="$title"/>

    <!--== Start Contact Form ==-->
    <div class="contact-form m-lg-5">
        <form id="contact-form" action="{{ route('register') }}" method="post">
            @csrf
                <div class="form-group col-md-6">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <button class="btn btn-theme" type="submit">Submit</button>
                </div>
        </form>
    </div>
    <!--== End Contact Form ==-->
</x-layout>
