<x-layout>
    <!--== Start Contact Form ==-->
    <div class="contact-form">
        <h4 class="contact-form-title">Registration</h4>
        <form id="contact-form" action="/register" method="post">
            @csrf
                <div class="form-group col-md-6">
                    <input class="form-control" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <input class="form-control" type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
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
