       
@extends('Admin.master')
@section('content')
    
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Customer List</h4><!-- /.content-title -->
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    
                    <tr>
                      
                      <th>name</th>
                      <th>email</th>
                      <th>Phone No</th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach($customerList as $demo)
                    <tr>
                     
                      <td>{{ $demo->fname }} {{ $demo->lname }}</td>
                      <td>{{ $demo->email }}</td>
                      <td>{{ $demo->phone_no }}</td>
                
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