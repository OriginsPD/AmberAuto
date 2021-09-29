<div class="p-20 w-full mx-auto">
    <h1>MODELS</h1>
    <form action="{{ route('Models.store') }}" method="POST">
        @csrf
        <input type="number" name="vehicle_model_nm">
        <div>
            @error('vehicle_model_nm')
            {{ $message }}
            @enderror
        </div>
        <input type="text" name="year">
        <div>
            @error('year')
            {{ $message }}
            @enderror
        </div>
        <input type="number" name="cost">
        <div>
            @error('cost')
            {{ $message }}
            @enderror
        </div>
        <select name="condition" id="">
            <option value="Good"> Good </option>
            <option value="Fair"> Fair </option>
            <option value="Bad"> Bad </option>
        </select>
        <div>
            @error('condition')
            {{ $message }}
            @enderror
        </div>
        <input type="number" name="mileage">
        <div>
            @error('mileage')
            {{ $message }}
            @enderror
        </div>
        <input type="number" name="capacity">
        <div>
            @error('capacity')
            {{ $message }}
            @enderror
        </div>
        <select name="driver_side" id="	driver_side">
            <option value="Left">Left Side</option>
            <option value="Right">Right Side</option>
        </select>
        <div>
            @error('driver_side')
            {{ $message }}
            @enderror
        </div>
        <select name="vehicle_types_id" id="vehicle_types_id">
            @forelse($vehicles as $vehicle)
            <option value="{{ $vehicle['id'] }}">{{ $vehicle['vehicle_types_nm'] }}</option>
            @empty
                <option selected disabled> No Types Added </option>
            @endforelse
        </select>
        <div>
            @error('vehicle_types_id')
            {{ $message }}
            @enderror
        </div>
        <input type="text" name="trans_type">
        <div>
            @error('trans_type')
            {{ $message }}
            @enderror
        </div>
        <button type="submit"> Submit</button>
    </form>

</div>
