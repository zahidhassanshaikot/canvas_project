       
@extends('Admin.master')
@section('content')
    
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Users Info List</h4><!-- /.content-title -->
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    
                    <tr>
                      <th>#Id</th>
                      <th>Demo name</th>
                      <th>Demo type</th>
                      <th>Price</th>
                      <th>Owner</th>
                      <th>Image</th>
                      <th>availabe_size</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($demos as $demo)
                    <tr>
                      <td>{{ $demo->id }}</td>
                      <td>{{ $demo->demo_name }}</td>
                      <td>{{ $demo->demo_type }}</td>
                      <td>{{ $demo->price }}</td>
                      <td>{{ $demo->owner }}</td>
                      <td><img src="{{ asset($demo->image) }}" style="height:40px;weight:40px" alt="image"></td> 
                      <td>{{ $demo->availabe_size }}</td>
                      <td class="action">
                        <ul>
                          {{--  <li><a href="#" target="blank" class="profile">Add Request</a></li>  --}}
                          <li><a href="{{ route('delete-demo',['id'=>$demo->id]) }}" class="message">Delete</a></li>
                        </ul>
                      </td>
                    </tr>
@endforeach
                  </tbody>

                </table>
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->

    <footer class="site-footer">
        <div class="copyright">
          <div class="float-left">
            Copyright © 2018 <a href="#" target="_blank"></a>
          </div>

          <div class="float-right">
            Developed with Love by <a href="#" rel="nofollow"></a>
          </div>
        </div><!-- /.copyright -->
      </footer><!-- /.site-footer -->
    </div><!-- /.dashboard-contents -->

    @endsection