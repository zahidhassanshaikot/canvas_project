      <aside class="left-panel">
        <nav class="navbar">
          <ul class="navbar-nav">

            <li class="nav-item dropdown active">
              <a class="nav-link" href="{{ route('order-info') }}">
                 <i class="fa fa-tachometer"></i><span class="menu-title">Dashboard</span>
              </a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('order-info') }}">
                <i class="fa fa-hashtag"></i> <span class="menu-title">Request Check</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('add-demo') }}">
                <i class="fa fa-hashtag"></i> <span class="menu-title">Add Demo</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('demo-list') }}">
                <i class="fa fa-hashtag"></i> <span class="menu-title">Demo List</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('customer-list') }}">
                <i class="fa fa-hashtag"></i> <span class="menu-title">Customer List</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('comment-list') }}">
                <i class="fa fa-hashtag"></i> <span class="menu-title">Comment</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('messages-list') }}">
                <i class="fa fa-hashtag"></i> <span class="menu-title">Message</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('logout') }}" role="button"onclick="event.preventDefault();
                                                     
                  document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i> <span class="menu-title">Logout</span>
                  
              </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                      </form>
            </li>

          </ul>
        </nav>
      </aside>