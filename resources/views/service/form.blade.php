<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name"
        class="form-control shadow  {{ $errors->first('name') != null ? 'is-invalid' : (old('name') != null ? 'is-valid' : '') }}"
        value="{{ old('name') != null ? old('name') : ($service->name != null ? $service->name : '') }}"
        placeholder="Service Name">
    <div class="valid-feedback">Looking good here :)</div>
    <div class="invalid-feedback">{{ $errors->first('name') }}:(</div>
</div>


<div class="mb-3">
    <label for="company_id" class="form-label">Company</label>
    <select name="company_id" id="company_id"
        class="form-control shadow {{ $errors->first('company_id') != null ? 'is-invalid' : (old('company_id') == null ? '' : 'is-valid') }}">
        <option value="" disabled selected>-- Select one --</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $service->company_id ? 'selected' : '' }}>
                {{ $company->name }}</option>
        @endforeach
    </select>
    <div class="valid-feedback">Customer's company looks okay</div>
    <div class="invalid-feedback">{{ $errors->first('company_id') }} :-(</div>
</div>


<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" id="price"
        class="form-control shadow  {{ $errors->first('price') != null ? 'is-invalid' : (old('price') != null ? 'is-valid' : '') }}"
        value="{{ old('price') != null ? old('price') : ($service->price != null ? $service->price : '') }}"
        placeholder="Service price">
    <div class="valid-feedback">Looking good here :)</div>
    <div class="invalid-feedback">{{ $errors->first('price') }}:(</div>
</div>

<div class="mb-3">
    <label for="active" class="form-label">Status</label>
    <select
        class="form-select shadow {{ $errors->first('active') != null ? 'is-invalid' : (old('active') != null ? 'is-valid' : '') }} "
        name="active" id="active">
        <option disabled>-- Select one --</option>
        @foreach ($service->activeOptions() as $itemKey => $itemValue)
            <option value="{{ $itemKey }}" {{ $company->active == $itemValue ? 'selected' : '' }}>
                {{ $itemValue }}</option>
        @endforeach
    </select>
    <div class="valid-feedback">Looks okay :)</div>
    <div class="invalid-feedback">{{ $errors->first('active') }}</div>
</div>
