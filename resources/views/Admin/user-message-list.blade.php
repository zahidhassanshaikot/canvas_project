       
@extends('Admin.master')
@section('content')

    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Total request List for </h4><!-- /.content-title -->
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    <tr>
                      
                      <th>Name</th>
                      <th>status</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
@foreach($messageUser as $user)
                    <tr>
                     
                      <td> {{ $user->fname }} </td>
                      <td> {{ $user->status }} </td>
                      <td class="action">
                        <ul>
                          <li><a href="{{ route('admim-message',['id'=> $user->id]) }}" target="blank" class="profile">View Message</a></li>
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
@endsection