<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-header">{{ __('Create') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{-- {{ route('create_employee') }} --}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="employee_id" class="col-md-4 col-form-label text-md-end">{{ __('Employee ID') }}</label>

                            <div class="col-md-6">
                                <select it="employee_id" class="form-select @error('employee_id') is-invalid @enderror" aria-label="Default select example" name="employee_id" value="{{ old('employee_id') }}" required autocomplete="employee_id" autofocus>
                                    <option selected disabled>Select Order ID</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Phnom Penh">Phnom Penh</option>
                                </select>

                                @error('employee_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="order_date" class="col-md-4 col-form-label text-md-end">{{ __('Order Date') }}</label>

                            <div class="col-md-6">
                                <input id="order_date" type="date" class="form-control @error('order_date') is-invalid @enderror" name="order_date" value="{{ old('order_date') }}" required autocomplete="order_date" autofocus>

                                @error('order_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select it="status" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
                                    <option selected disabled>Select Item ID</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Phnom Penh">Phnom Penh</option>
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="print_qty" class="col-md-4 col-form-label text-md-end">{{ __('Print Qty') }}</label>

                            <div class="col-md-6">
                                <input id="print_qty" type="number" class="form-control @error('print_qty') is-invalid @enderror" name="print_qty" value="{{ old('print_qty') }}" required autocomplete="print_qty" autofocus>

                                @error('print_qty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="table_id" class="col-md-4 col-form-label text-md-end">{{ __('Table ID') }}</label>

                            <div class="col-md-6">
                                <select it="table_id" class="form-select @error('table_id') is-invalid @enderror" aria-label="Default select example" name="table_id" value="{{ old('table_id') }}" required autocomplete="table_id" autofocus>
                                    <option selected disabled>Select Item ID</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Phnom Penh">Phnom Penh</option>
                                </select>

                                @error('table_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Create</button>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>