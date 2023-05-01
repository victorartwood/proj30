<div class="mb-3">
    <label for="customer_id" class="form-label">Customer</label>
    <select
        class="form-select {{ $errors->first('customer_id') != null ? 'is-invalid' : (old('customer_id') != null ? 'is-valid' : '') }}"
        name="customer_id" id="customer_id" required>
        <option selected disabled value="">Choose...</option>
        @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
    </select>
    <div class="valid-feedback">Looks good! :)</div>
    <div class="invalid-feedback">{{ $errors->first('customer_id') }}</div>
</div>
<div class="mb-3">
    <label for="company_id" class="form-label">Company</label>
    <select
        class="form-select shadow {{ $errors->first('company_id') != null ? 'is-invalid' : (old('companyr_id') != null ? 'is-valid' : '') }}"
        name="company_id" id="company_id">
        <option selected disabled value="">Choose...</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}" {{ old('company_id') == $customer->id ? 'selected' : '' }}>
                {{ $company->name }}</option>
        @endforeach
    </select>
    <div class="valid-feedback">Lokks good this one! :)</div>
    <div class="invalid-feedback">{{ $errors->first('company_id') }}</div>
</div>
<div class="mb-3">
    <label for="from" class="form-label">From date</label>
    <input type="date" class="form-control shadow" name="from" id="from">
</div>
<div class="mb-3">
    <label for="to" class="form-label">To date</label>
    <input type="date" class="form-control shadow" name="to" id="to">
</div>
<div class="mb-3">
    <label for="amount" class="form-label">Amount</label>
    <input type="number"
        class="form-control shadow {{ $errors->first('amount') != null ? 'is-invalid' : (old('amount') != null ? 'is-valid' : '') }}"
        name="amount" id="amount">
    <div class="valid-feedback">Looks good! :)</div>
    <div class="invalid-feedback">{{ $errors->First('amount') }}</div>
</div>

<div class="mb-3">
    <label for="active" class="form-label">Status</label>
    <select
        class="form-select shadow {{ $errors->first('active') != null ? 'is-invalid' : (old('active') != null ? 'is-valid' : '') }} "
        name="active" id="active">
        <option disabled>-- Select one --</option>
        @foreach ($payment->activeOptions() as $itemKey => $itemValue)
            <option value="{{ $itemKey }}" {{ $payment->active == $itemValue ? 'selected' : '' }}>
                {{ $itemValue }}</option>
        @endforeach
    </select>
    <div class="valid-feedback">Looks okay! :)</div>
    <div class="invalid-feedback">{{ $errors->first('active') }}</div>
</div>
