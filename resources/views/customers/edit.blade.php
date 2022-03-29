<x-main-layout>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">

                </div>
                <div class="pull-right">
                    <a class="btn btn-dark" href="{{ route('customers.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mt-5 d-flex justify-content-center">
                    <div class="col-3">
                        <strong>Full Name</strong>
                        <input type="text" name="fullname" value="{{ $customer->fullname }}" class="form-control">
                        @error('fullname')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    <div class="col-3">
                        <strong>City</strong>
                        <input type="text" name="city" class="form-control" placeholder="City"
                            value="{{ $customer->city }}">
                        @error('city')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    <div class="col-3">
                        <strong>Email Address</strong>
                        <input type="text" name="emailaddress" value="{{ $customer->emailaddress }}"
                            class="form-control" placeholder="Email Address">
                        @error('emailaddress')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="  mt-5 d-flex justify-content-center">
                    <div class="col-3">
                        <strong>Phone Number</strong>
                        <input type="text" name="phone_number" value="{{ $customer->phone_number }}"
                            class="form-control" placeholder="Phone Number">
                        @error('phonenumber')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark ml-3">Submit</button>
                </div>

            </div>
        </form>
    </div>
</x-main-layout>
