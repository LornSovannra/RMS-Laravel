<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-header">{{ __('Create') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{-- {{ route('create_employee') }} --}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="item_name" class="col-md-4 col-form-label text-md-end">{{ __('Table Name') }}</label>

                            <div class="col-md-6">
                                <input id="item_name" type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{ old('item_name') }}" required autocomplete="item_name" autofocus>

                                @error('item_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category_id" class="col-md-4 col-form-label text-md-end">{{ __('Category ID') }}</label>

                            <div class="col-md-6">
                                <select it="category_id" class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id" value="{{ old('category_id') }}" required autocomplete="category_id" autofocus>
                                    <option selected disabled>Select Category ID</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Phnom Penh">Phnom Penh</option>
                                </select>

                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="unit_price" class="col-md-4 col-form-label text-md-end">{{ __('Unit Price') }}</label>

                            <div class="col-md-6">
                                <input id="unit_price" type="number" class="form-control @error('unit_price') is-invalid @enderror" name="unit_price" value="{{ old('unit_price') }}" required autocomplete="unit_price" autofocus>

                                @error('unit_price')
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
                                    <option selected disabled>Select Status</option>
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
                            <label for="item_image" class="col-md-4 col-form-label text-md-end">{{ __('Item Image') }}</label>

                            <div class="col-md-6">
                                <input id="item_image" type="file" class="form-control @error('item_image') is-invalid @enderror" name="item_image" value="{{ old('item_image') }}" autocomplete="item_image" autofocus>

                                @error('item_image')
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