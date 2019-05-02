       
@extends('Admin.master')
@section('content')
    
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Comments List</h4><!-- /.content-title -->
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    
                    <tr>
                      
                      <th>name</th>
                      <th>email</th>
                      <th>Comment</th>
                      <th>comment at</th>
                      <th>demo id</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($commentList as $demo)
                    <tr>
                     
                      <td>{{ $demo->name }}</td>
                      <td>{{ $demo->email }}</td>
                      <td>{{ $demo->comment }}</td>
                      <td>{{ $demo->demo_id }}</td>
                      <td>{{ $demo->created_at }}</td>
                     
                      <td class="action">
                        <ul>
                           <li><a href="{{ route('single-post',['id'=>$demo->demo_id]) }}"  class="profile">Reply</a></li> 
                          <li><a href="{{ route('delete-comment',['id'=>$demo->id]) }}" class="message">Delete</a></li>
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