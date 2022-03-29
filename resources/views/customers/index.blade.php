<x-main-layout>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">

                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-dark ml-3" href="{{ route('customers.create') }}"> Add Customer </a>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>S.No</th>
                    <th>Full Name</th>
                    <th>City</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->fullname }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->emailaddress }}</td>
                        <td>{{ $customer->phone_number }}</td>
                        <td>
                            <form action="{{ route('customers.destroy', $customer->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm(' Are You Sure You Want To Delete?')"
                                    class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $customers->links() }}
</x-main-layout>
