<!-- resources/views/livewire/user/myorder.blade.php -->

<div>
    <h1>User Orders</h1>

    <table>
        <thead>
            <tr>

                <th>Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Product List</th>
                <th>Total Order</th>
                <th>Schedule</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $order)
                <tr>

                    <td>{{ $order->name }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->phonenumber }}</td>
                    <td>{{ $order->productlist }}</td>
                    <td>{{ $order->totalorder }}</td>
                    <td>{{ $order->schedule }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
