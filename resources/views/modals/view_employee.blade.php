<!-- Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Employee</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-header">{{ __('View') }}</div>
                    <div id="view_photo_div" style="text-align: center; border-bottom: 1px solid gray; padding: 10px 0;">
                        <img style="object-fit: cover; width: 500px; height: 500px; border-radius: 50%" id="view_photo">
                    </div>
                <div class="card-body">

                    <div class="row mb-3">
                        <label for="view_name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input disabled id="view_name" type="text" class="form-control">
                        </div>

                    </div>

                    <div class="row mb-3">
                        <label for="view_email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input disabled id="view_email" type="email" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="user_type" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>

                        <div class="col-md-6">
                            {{-- <select id="view_user_type" class="form-select">
                                <option selected disabled>Select User Type</option>
                            </select> --}}
                            <input disabled id="view_user_type" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                        <div class="col-md-6">
                            <input disabled id="view_role" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="comapny" class="col-md-4 col-form-label text-md-end">{{ __('Company') }}</label>

                        <div class="col-md-6">
                            <input disabled id="view_company" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="job_title" class="col-md-4 col-form-label text-md-end">{{ __('JobTitle') }}</label>

                        <div class="col-md-6">
                            <input disabled id="view_job_title" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                        <div class="col-md-6">
                            <input disabled id="view_phone" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="home_phone" class="col-md-4 col-form-label text-md-end">{{ __('HomePhone') }}</label>

                        <div class="col-md-6">
                            <input disabled id="view_home_phone" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                        <div class="col-md-6">
                            {{-- <select id="view_address" class="form-select">
                                <option selected disabled>Select User Type</option>
                            </select> --}}
                            <input disabled id="view_address" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

                        <div class="col-md-6">
                            {{-- <select id="view_city" class="form-select">
                                <option selected disabled>Select User Type</option>
                            </select> --}}
                            <input disabled id="view_city" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="state_province" class="col-md-4 col-form-label text-md-end">{{ __('StateProvince') }}</label>

                        <div class="col-md-6">
                            <input disabled id="view_state_province" type="text" class="form-control">
                            {{-- <select id="view_state_province" class="form-select">
                                <option selected disabled>Select User Type</option>
                            </select> --}}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="zip_postal_code" class="col-md-4 col-form-label text-md-end">{{ __('ZipPostalCode') }}</label>

                        <div class="col-md-6">
                            <input disabled id="view_zip_postal_code" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="country_region" class="col-md-4 col-form-label text-md-end">{{ __('CountryRegion') }}</label>

                        <div class="col-md-6">
                            <input disabled id="view_country_region" type="text" class="form-control">
                        </div>
                    </div>

                    {{-- <div class="row mb-3">
                        <label for="photo" class="col-md-4 col-form-label text-md-end">{{ __('Photo') }}</label>

                        <div class="col-md-6">
                            <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" autocomplete="photo" autofocus>
                        </div>
                    </div> --}}

                    <div class="row mb-0">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>