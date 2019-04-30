@extends('Admin.master')
@section('content')

   <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">

          <div class="col-md-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Add Card/Banner/Poster</h4>
              </div>



@if(Session::get('message'))
                <div class="alert alert-success" id="message">
                    <h3 class=" text-center text-success"> {{ Session::get('message') }}</h3>
                </div>
            @endif
            <div class=" card card-default">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


              <div class="content-details show">
                <div class="card">
                  <div class="card-body card-block">
                    <form action="{{ route('save-demo') }}" method="POST" enctype="multipart/form-data">
                       {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Demo Type <span>*</span></label>
                          <div class="input-group">
                            <select name="demo_type" class="form-control">
                              <option value="Card">Card</option>
                              <option value="Banner">Banner</option>
                              <option value="Poster">Poster</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Demo Name</label>
                          <div class="input-group">
                            <input class="form-control" name="demo_name" type="text" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Demo Price</label>
                          <div class="input-group">
                            <input class="form-control" name="price" type="text" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Image</label>
                          <div class="input-group">
                            <input class="form-control" name="image" type="file" accept="image/x-png,image/gif,image/jpeg" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Available Size</label>
                          <div class="input-group">
                            <input class="form-control" name="availabe_size" type="text" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Owner</label>
                          <div class="input-group">
                            <input class="form-control" name="owner" type="text" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group prifile-form">
                          <input class="btn btn-primary" id="companyRegistration" type="submit">
                          {{--  <button class="btn btn-primary" id="companyRegistration" type="button">Create</button>  --}}
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
     @endsection