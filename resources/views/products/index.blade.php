@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mt-4">List Product</h3>
    <table class="table table-striped table-bordered">
    	<thead>
    		<tr>
    			<th>ID</th>
    			<th>SKU</th>
    			<th>Name</th>
    			<th>Price</th>
                <th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@forelse ($products as $product)
    			<tr>
    				<td>{{ $product['id'] }}</td>
    				<td>{{ $product['sku'] }}</td>
    				<td>{{ $product['name'] }}</td>
    				<td>{{ $product['price'] }}</td>
                    <td>
                        <a href="{{ route('products.show', $product['id']) }}" class="btn btn-sm btn-info">Detail</a>
                    </td>
    			</tr>
    		@empty
    			<tr>
    				<td colspan="5">
    					Empty
    				</td>
    			</tr>
    		@endforelse
    	</tbody>
    </table>
</div>
@endsection