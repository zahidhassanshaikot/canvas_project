       
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
                      <th>#No</th>
                      <th>Information</th>
                      <th>Address</th>
                      <th>Mobile</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>
                        <div class="name">
                          <h6>Name:</h6><p>Md.Zamal Hossain</p>
                        </div>
                      </td>
                      <td>
                          <div><h6>Present Address</h6>
                            <p>Dhanmondi 32,Dhaka</p>
                          </div>
                          <div><h6>Parmanent Address</h6>
                            <p>Rajshahi</p>
                          </div>
                      </td>
                      <td>+11722545455</td>
                      <td class="action">
                        <ul>
                          <li><a href="#" target="blank" class="profile">Add Request</a></li>
                          <li><a href="#" class="message">Cancle Request</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>
                        <div class="name">
                          <h6>Name:</h6><p>Mst.Jinia Hoque</p>
                        </div>
                      </td>
                      <td>
                          <div><h6>Present Address</h6>
                            <p>Dhanmondi 32,Dhaka</p>
                          </div>
                          <div><h6>Parmanent Address</h6>
                            <p>Rajshahi</p>
                          </div>
                      </td>
                      <td>+117255256</td>
                      <td class="action">
                        <ul>
                          <li><a href="#" target="blank" class="profile">Add Request</a></li>
                          <li><a href="#" class="message">Cancle Request</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>
                        <div class="name">
                          <h6>Name:</h6><p>Md.Arian Islam</p>
                        </div>
                      </td>
                      <td>
                          <div><h6>Present Address</h6>
                            <p>Mohammadpur,Dhaka</p>
                          </div>
                          <div><h6>Parmanent Address</h6>
                            <p>Kushtia</p>
                          </div>
                      </td>
                      <td>+215454551</td>
                      <td class="action">
                        <ul>
                          <li><a href="#" target="blank" class="profile">Add Request</a></li>
                          <li><a href="#" class="message">Cancle Request</a></li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>

                  <tfoot>
                    <tr>
                      <th>#No</th>
                      <th>Information</th>
                      <th>Address</th>
                      <th>Mobile</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
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