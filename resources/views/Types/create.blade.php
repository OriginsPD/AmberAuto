
<div class="p-20 w-full mx-auto">
    <h1>TYPES</h1>
    <form action="{{ route('Type.store') }}" method="POST">
        @csrf
        <input type="text" name="vehicle_types_nm">
        <div>
            @error('vehicle_types_nm')
            {{ $message }}
            @enderror
        </div>
        <select name="brand_id" id="brand_id">
            @forelse($brands as $brand)
                <option value="{{ $brand['id'] }}">{{ $brand['brand_nm'] }}</option>
            @empty
                <option selected disabled> No Brands Added</option>
            @endforelse
        </select>
        <div>
        </div>
        <button type="submit"> Submit</button>
    </form>

</div>

<a href="{{ route('Models.index') }}">Models</a>
