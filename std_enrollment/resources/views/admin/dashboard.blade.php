@extends('layout')

@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Students</h2>
      @php
        $student = DB::table('std_tbl')
                  ->count('std_id');
      @endphp
      <h1 class="text-center"><strong>{{$student}}</strong></h1>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-1" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Teacher</h2>
      @php
        $teacher = DB::table('teacher_tbl')
                  ->count('teacher_id');
      @endphp
      <h1 class="text-center"><strong>{{$teacher}}</strong></h1>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-2" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Tution Fee</h2>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-3" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Revenue</h2>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-4" class="card-float-chart"></div>
    </div>
  </div>
</div>
</div>

<div class="row">
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><i class="mdi mdi-facebook"></i><p class="mb-0">Post to facebook</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"><i class="mdi mdi-twitter"></i><p class="mb-0">Tweet this job</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><i class="mdi mdi-google"></i><p class="mb-0">Post in Google+</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class="social-panel bg-linkedin"><i class="mdi mdi-linkedin"></i><p class="mb-0">Post to Linkedin</p></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body px-3" style="height:333px">
                      <div class="d-flex align-items-center justify-content-between">
                        <h2 class="card-title">Invites</h2>
                        <p class="mb-2 text-muted">This month</p>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-danger"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-success"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-warning"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="card task-list w-100">
                <div class="card-body">
                  <h2 class="card-title">Task List</h2>
                  <div class="task-cards selected">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Shiply Order</p>
                        <p class="reference-url">URL<a href="#">goo.gl/tp.ttt</a></p>
                      </div>
                      <p class="ticket-number ml-auto">#1698</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Shiply Order</p>
                        <p class="reference-url">URL<a href="#">goo.gl/tp.ttt</a></p>
                      </div>
                      <p class="ticket-number ml-auto">#1698</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Shiply Order</p>
                        <p class="reference-url">URL<a href="#">goo.gl/tp.ttt</a></p>
                      </div>
                      <p class="ticket-number ml-auto">#1698</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card user-visits w-100">
                    <div class="card-body">
                      <h2 class="card-title">User Visits</h2>
                      <div class="row mt-5">
                        <div class="col-6">
                          <p class="views text-muted">Views</p>
                          <p class="section">6080 sessions</p>
                          <a href="#" class="btn btn-secondary btn-sm">More Details</a>
                        </div>
                        <div class="col-6">
                          <div id="sparkline-line-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 global-card">
                  <div class="card bg-warning w-100">
                    <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
                      <h2>Batchly is a global</h2>
                      <p>We began with intensive and in-depth session to collate the needs of stakeholders</p>
                      <a href="#" class="btn btn-outline-secondary">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-lg-4 grid-margin d-flex align-items-stretch">
              <div class="card image-card w-100">
                <div class="wrapper image-container">
                  <div class="wrapper controls d-flex align-items-center justify-content-between px-3">
                    <p class="mb-0 text-white">Collection</p>
                    <a href="#" class="btn btn-rounded bg-primary btn-icon"><i class="mdi mdi-arrow-up text-white"></i></a>
                  </div>
                </div>
                <div class="wrapper text-wrapper py-4 px-3">
                  <p class="text-center card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo</p>
                  <div class="wrapper text-center mb-1"><a class="btn btn-primary btn-rounded btn-sm" href="#">Follow</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 grid-margin d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h2 class="card-title">Timeline Archive</h2>
                  <table class="table mb-0">
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-success">31/50</div></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-primary">23/45</div></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill badge-warning">16/25</div></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-success">17/54</div></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-danger">23/25</div></td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-primary">23/25</div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin d-flex align-items-stretch">
              <div class="card profile-card w-100">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center">
                    <img class="profile-img profile-img-lg" src="http://via.placeholder.com/47x47" alt="">
                    <div class="wrapper d-flex flex-column">
                      <h3 class="mb-0 bold ml-4">Smijth John</h3>
                      <small class="ml-4 text-muted">Developer</small>
                    </div>
                  </div>
                  <p class="mt-3 text-muted" style="height:83px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum recusandae iusto minus, libero tempora sapiente optio.iusto minus, libero tempora sapiente optio.</p>
                  <div class="table-responsive">
                    <table class="table mt-3 mb-0">
                      <tbody>
                        <tr>
                          <td><i class="mdi mdi-calendar-blank mdi-18px"></i></td>
                          <td>06.02.1987</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><i class="mdi mdi-cellphone-android mdi-18px"></i></td>
                          <td>097 00 000 00 00</td>
                          <td><a href="#" class="badge badge-success">SMS</a></td>
                        </tr>
                        <tr>
                          <td><i class="mdi mdi-email-outline mdi-18px"></i></td>
                          <td>smijith@gmail.com</td>
                          <td><a href="#" class="badge badge-warning">Email</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>       
          
         
            
           
@endsection