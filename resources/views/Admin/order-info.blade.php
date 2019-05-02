       
@extends('Admin.master')
@section('content')
    
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">

			@if(Session::get('message'))
			<br/>
                <div class="alert alert-success" id="message">
                    <h3 class=" text-center text-success"> {{ Session::get('message') }}</h3>
                </div>
            @endif

            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Users Info List</h4><!-- /.content-title -->
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>#order id</th>
                      <th>name</th>
                      <th>Address</th>
                      <th>Mobile</th>
                      <th>email</th>
                      <th>demo id</th>
                      <th>Quantity</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($orderInfos as $orderInfo)
                    <tr>
                      <td>{{ $orderInfo->id }}</td>
                      <td>{{ $orderInfo->name }}</td>
                      <td>{{ $orderInfo->address }}</td>
                      <td>{{ $orderInfo->phone_no }}</td>
                      <td>{{ $orderInfo->email }}</td>
                      <td>{{ $orderInfo->demo_id }}</td>
                      <td>{{ $orderInfo->quentity }}</td>
                      <td>{{ $orderInfo->status }}</td>
                
                      
                      <td class="action">
                        <ul>
                          <li><a href="{{ route('accept-order-req',['id'=>$orderInfo->id]) }}" class="profile">Accept Request</a></li>
                          <li><a href="{{ route('reject-order-req',['id'=>$orderInfo->id]) }}" class="message">Cancle Request</a></li>
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