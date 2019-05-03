     @extends('Admin.master')
        @section('content')     
            <div class="dashboard-contents">
        <div class="contents-inner">
        	<div class="row">
          		<div class="col-12">
            		<div class="section-content">
                	<div class="content-head">
                  	<h4 class="content-title">Conversation With User</h4>
                	</div>
          			<div class="content-details show">
                <div class="message-wrapper">
	    <div class="message-field">
	        <form action="{{ route('send-admin-message') }}" method="POST">
                {{ csrf_field() }}
                    <input type="text" placeholder="Message to user" name="message">
                    <input type="hidden" placeholder="Message to user" value="{{ $customer_id }}" name="customer_id">
                    <input type="submit" name="btn" class="msg-btn" value="Send">
	              	</form>
        </div>
        <br/>
                    

                @foreach($messages as $message)
                  @if(empty($message->admin))
								<div class="user">
									<h6 class="user-name"><a href="#">{{ Session::get('customer_fname') }}</a></h6>
									<p class="user-message">{{ $message->message }}</p>
                                </div>
                                @else
								<div class="admin">
									<h6 class="admin-name"><a href="#">Admin</a></h6>
									<p class="admin-message">{{ $message->message }}</p>
                                </div>
                                @endif
							@endforeach
							  </div>
	              		
              			</div>
            		</div>
          		</div>

        	</div>
          </div>
          </div>
          @endsection