<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Order List</title>


  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/css/linea-basic.css">
  <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="assets/css/countrySelect.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/index-01.css">

    <div class="content-wrapper container-fluid">
      <aside class="left-panel">
        <nav class="navbar">
          <ul class="navbar-nav">

            <li class="nav-item dropdown active">
              <a class="nav-link" href="total-request-list.php">
                 <i class="fa fa-tachometer"></i><span class="menu-title">Dashboard</span>
              </a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="total-request-list.php">
                <i class="fa fa-hashtag"></i> <span class="menu-title">Request Check</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="add-post.php">
                <i class="fa fa-hashtag"></i> <span class="menu-title">Add Demo</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="add-post.php">
                <i class="fa fa-hashtag"></i> <span class="menu-title">Comment</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="add-post.php">
                <i class="fa fa-hashtag"></i> <span class="menu-title">Message</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="index.php" role="button">
                <i class="fa fa-power-off"></i> <span class="menu-title">Logout</span>
              </a>
            </li>

          </ul>
        </nav>
      </aside>

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
  </div>


  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/tables/jquery.dataTables.min.js"></script>
  <script src="assets/js/tables/dataTables.bootstrap4.min.js"></script>

  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function() {
      "use strict";

      $('.data-table').DataTable();
    });
  </script>


</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:01:56 GMT -->
</html>
