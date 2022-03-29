<x-main-layout>


    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">

                </div>
                <div class="pull-right">
                    <a class="btn btn-dark" href="{{ route('customers.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">



            @csrf
            <div class="  mt-5 d-flex justify-content-center">
                <div class=" col-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}">
                </div>

            </div>
            <div class=" d-flex justify-content-center">
                <div class="col-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                <div class="col-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="emailaddress" aria-describedby="emailHelp" value="{{ old('emailaddress') }}">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                    </div>
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                <div class="col-3">
                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="phone_number">
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>

        </form>
    </div>
    </slot>
    </div>
    </div>

</x-main-layout>
