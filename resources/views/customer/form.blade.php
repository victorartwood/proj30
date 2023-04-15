<div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" name="name" id="name"
        class="form-control shadow {{ $errors->first('name') != null ? 'is-invalid' : (old('name') == null ? '' : 'is-valid') }}"
        placeholder="Full name" aria-describedby="helpId" value="{{ old('name') != '' ? old('name') : $customer->name }}">
    <div class="valid-feedback">Customer's name looks okay</div>
    <div class="invalid-feedback">{{ $errors->first('name') }} :-(</div>
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" name="phone" id="phone"
        class="form-control shadow {{ $errors->first('phone') != null ? 'is-invalid' : (old('phone') == null ? '' : 'is-valid') }}"
        placeholder="Phone" aria-describedby="helpId"
        value="{{ old('phone') != '' ? old('phone') : $customer->phone }}">
    <div class="valid-feedback">Customer's phone number looks okay</div>
    <div class="invalid-feedback">{{ $errors->first('phone') }} :-(</div>
</div>
<div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="email" name="email" id="email"
        class="form-control shadow {{ $errors->first('email') != null ? 'is-invalid' : (old('email') == null ? '' : 'is-valid') }}"
        placeholder="Email address" aria-describedby="helpId"
        value="{{ old('email') != '' ? old('email') : $customer->email }}">
    <div class="valid-feedback">Customer's Email address looks okay</div>
    <div class="invalid-feedback">{{ $errors->first('email') }} :-(</div>
</div>
<div class="mb-3">
    <label for="" class="form-label">Physical address</label>
    <input type="address" name="address" id="address"
        class="form-control shadow {{ $errors->first('address') != null ? 'is-invalid' : (old('address') == null ? '' : 'is-valid') }}"
        placeholder="address address" aria-describedby="helpId"
        value="{{ old('address') != '' ? old('email') : $customer->address }}">
    <div class="valid-feedback">Customer's address address looks okay</div>
    <div class="invalid-feedback">{{ $errors->first('address') }} :-(</div>
</div>
<div class="mb-3">
    <label for="company_id" class="form-label">Company</label>
    <select name="company_id" id="company_id"
        class="form-control shadow {{ $errors->first('company_id') != null ? 'is-invalid' : (old('company_id') == null ? '' : 'is-valid') }}">
        <option value="" disabled selected>-- Select one --</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>
                {{ $company->name }}</option>
        @endforeach
    </select>
    <div class="valid-feedback">Customer's company looks okay</div>
    <div class="invalid-feedback">{{ $errors->first('company_id') }} :-(</div>
</div>
<div class="mb-3">
    <label for="active" class="form-label">Status</label>
    <select name="active" id="active"
        class="form-control shadow {{ $errors->first('active') != null ? 'is-invalid' : (old('active') == null ? '' : 'is-valid') }}">
        <option value="" disabled selected>--Select one--</option>
        @foreach ($customer->activeOptions() as $itemKey => $itemValue)
            <option value="{{ $itemKey }}" {{ $itemValue == $customer->active ? 'selected' : '' }}>
                {{ $itemValue }}</option>
        @endforeach
    </select>
    <div class="valid-feedback">Customer's Status looks okay</div>
    <div class="invalid-feedback">{{ $errors->first('active') }} :-(</div>
</div>
