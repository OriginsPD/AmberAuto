<div class="p-20 w-full mx-auto">
    <h1>BRANDS</h1>
    <form action="{{ route('Brands.store') }}" method="POST">
        @csrf
        <input type="text" name="brand_nm">
        <div>
            @error('brand_nm')
            {{ $message }}
            @enderror
        </div>
        <input type="text" name="brand_desc">
        <div>
            @error('brand_desc')
            {{ $message }}
            @enderror
        </div>
        <button type="submit"> Submit</button>
    </form>
</div>

<a href="{{ route('Type.index') }}"> TYPE </a>


