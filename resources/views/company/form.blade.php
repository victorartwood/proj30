<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name"
        class="form-control shadow {{ $errors->first('name') != null ? 'is-invalid' : (old('name') != null ? 'is-valid' : '') }}"
        placeholder="Company name"
        value={{ $company->name != null ? $company->name : (old('name') != null ? old('name') : '') }}>
    <div class="valid-feedback">Looks good :)</div>
    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" id="phone"
        class="form-control shadow {{ $errors->first('phone') != null ? 'is-invalid' : (old('phone') != null ? 'is-valid' : '') }}"
        placeholder="Company phone"
        value={{ $company->phone != null ? $company->phone : (old('phone') != null ? old('phone') : '') }}>
    <div class="valid-feedback">Looks good :)</div>
    <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
</div>
<div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" name="email" id="email"
        class="form-control shadow {{ $errors->first('email') != null ? 'is-invalid' : (old('email') != null ? 'is-valid' : '') }}"
        placeholder="Company email"
        value={{ $company->email != null ? $company->email : (old('email') != null ? old('email') : '') }}>
    <div class="valid-feedback">Looks good :)</div>
    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
</div>
<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" id="address"
        class="form-control shadow {{ $errors->first('address') != null ? 'is-invalid' : (old('address') != null ? 'is-valid' : '') }}"
        placeholder="Company address"
        value={{ $company->address != null ? $company->address : (old('address') != null ? old('address') : '') }}>
    <div class="valid-feedback">Looks good :)</div>
    <div class="invalid-feedback">{{ $errors->first('address') }}</div>
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea
        class="form-control shadow {{ $errors->first('description') != null ? 'is-invalid' : (old('description') != null ? 'is-valid' : '') }}"
        name="description" id="description" rows="3">
    {{ $company->description != null ? $company->description : (old('description') != null ? old('description') : '') }}
    </textarea>
    <div class="valid-feedback">Looks good :)</div>
    <div class="invalid-feedback">{{ $errors->first('description') }}</div>
</div>
<div class="mb-3">
    <label for="active" class="form-label">Status</label>
    <select class="form-select shadow" name="active" id="active">
        <option disabled>-- Select one --</option>
        @foreach ($company->activeOptions() as $itemKey => $itemValue)
            <option value="{{ $itemKey }}" {{ $company->active == $itemKey ? 'selected' : '' }}>
                {{ $itemValue }}</option>
        @endforeach
    </select>
</div>
