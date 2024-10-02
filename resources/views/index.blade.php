@extends('layout')


@section('content')
<!-- banner section start -->
<div class="banner_section layout_padding">
   <section class="slide-wrapper">
      <div class="container-fluid">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_taital_main">
                              <h3 class="banner_text">Hello Am <br>Joy Seno</h3>
                              <h1 class="banner_taital">UI/UX Designer</h1>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="social_icon">
                              <ul>
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_taital_main">
                              <h3 class="banner_text">Hello Am <br>Joy Seno</h3>
                              <h1 class="banner_taital">UI/UX Designer</h1>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="social_icon">
                              <ul>
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_taital_main">
                              <h3 class="banner_text">Hello Am <br>Joy Seno</h3>
                              <h1 class="banner_taital">UI/UX Designer</h1>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="social_icon">
                              <ul>
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_taital_main">
                              <h3 class="banner_text">Hello Am <br>Joy Seno</h3>
                              <h1 class="banner_taital">UI/UX Designer</h1>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="social_icon">
                              <ul>
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="container">
      <div class="video_bt">
         <div class="play_icon"><img src="assets/images/play-icon.png"></div>
      </div>
   </div>
</div>
<!-- banner section end -->
</div>
<!-- header section end -->
<!-- services section start -->
<div class="services_section layout_padding" id="services">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="services_taital">My <span class="portfolio_taital_1">Services</span></h1>
         </div>
         <div class="col-sm-12 mt-5">
            <form action="/filterEquips" method="get" id="submitSearchEquipForm" onsubmit="submitSearchEquipForm(event)">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" name="data" id="data" placeholder="Search by (last name)">

                  <input type="submit" class="btn btn-warning" value="Search">
               </div>
            </form>
            @if (session('status'))
            <h6 class="alert alert-success"> {{session('status')}}</h6>
            @endif
            <table border="3" class="table table-bordered table-hover mt-5">
               <thead class="table-dark">
                  <tr>
                     <td>Id</td>
                     <td>First Name</td>
                     <td>Last Name</td>
                     <td>Phone Number</td>
                     <td>City Name</td>
                     <td>Email</td>
                     <td>
                        <!-- <td> Statues -->
                        <div class="btn-group ml-2" role="group" aria-label="Default button group">
                           <form action="contr.php" method="post">
                              <a href="/"><button type="button" name="all" class="btn btn-outline-warning">All</button></a>
                              <a href="/filterActive?status=1"><button type="button" name="active" class="btn btn-outline-warning">Active</button></a>
                              <a href="/filterActive?status=0"><button type="button" name="inactive" class="btn btn-outline-warning">Inactive</button></a>
                           </form>
                        </div>
                     </td>
                     <td>Uploaded File</td>
                     <td>
                        Add/change Data <br>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           Add New Data
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel">Add Data</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    <form action="/add-user" method="post" id="addForm" onsubmit="store(event)" enctype="multipart/form-data">
                                       @csrf

                                       <div class="form-group mb-3">
                                          <label for="" class="text-dark">First Name</label>
                                          <input type="text" class="form-control" id="first_name-add" name="first_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                       </div>
                                       <div class="form-group mb-3">
                                          <label for="" class="text-dark">Last Name</label>
                                          <input type="text" class="form-control" id="last_name-add" name="last_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                       </div>
                                       <div class="form-group mb-3">
                                          <label for="" class="text-dark">Phone Number</label>
                                          <input type="text" class="form-control" id="phone_number-add" name="phone_number" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                       </div>
                                       <div class="form-group mb-3">
                                          <label for="" class="text-dark">Email</label>
                                          <input type="text" id="email-add" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                       </div>
                                       <div class="form-group mb-3">
                                          <label for="" class="text-dark">City</label>
                                          <input type="text" id="city-add" name="city" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                       </div>
                                       <div class="form-group mb-3">
                                          <label for="" class="text-dark">Status</label>
                                          <input type="text" id="statues-add" name="statues" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                       </div>
                                       <div class="form-group mb-3">
                                          <label for="" class="text-dark">Upload File</label>
                                          <?php
                                          // <form action="/upload-add" method="post"  id="uploadaddForm" enctype="multipart/form-data">
                                          //    @csrf
                                          //    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                             // <!-- <input type="hidden" name="user_id_pic" data-user-id="{{ $data->Id }}" id="myuser_id_pic" value=""> -->
                                             // <button type='button' class='btn btn-warning btn-sm '>Upload File</button>
                                          // </form>
                                             ?>
                                             <input class="form-control form-control-sm" id="formFileSm" name="image" type="file" ><br>
                                            
                                             
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-outline-success">Save</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </td>
                  </tr>
               </thead>
               <tbody id="equipTableBody">
                  @foreach ($users as $key => $data)
           
                  <tr id="tab_{{$data->Id}}">
                     <td>{{ $data->Id }}</td>
                     <td>{{ $data->first_name }}</td>
                     <td >{{ $data->last_name }}</td>
                     <td>{{ $data->phone_number}}</td>
                     <td>{{ $data->city }}</td>
                     <td>{{ $data->email }}</td>
                     <td>
                        {{ $data->statues ? 'Active' : 'Inactive' }}
                     </td>
                     <td>
                        <div class="mb-3">
                           <!-- @if($data->Id==40)
                           <?php
                           // dd($data);
                           ?>
                           @endif -->
                              @if ($data->file_path)
                              <img src="{{ asset('storage/' . $data->file_path) }}" id="imge" alt="Uploaded Image" width="200">
                              @else
                              <p>No file uploaded.</p>
                              @endif
                        </div>
                     </td>

                     <td>

                        <input type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#editModal" onClick="changeUserId(this)" data-user-id="{{ $data->Id }}" value="Edit">
                        <a href="/delete-user/{{$data->Id}}"><input type="button" class="btn btn-sm btn-outline-danger" onClick="deleteUser('{{$data->Id}}')" data-user-id="{{ $data->Id }}" value="Delete"></a>
                        <!-- onClick="deleteUser(this)" -->
                     </td>
                  </tr>
                  @endforeach
               </tbody>
               <!-- Modal -->
               <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h2 class="modal-title" id="editModalLabel">Edit Data</h2>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <form action="/updateUser" id="edit_form" onsubmit="editData(event)" enctype="multipart/form-data" method="post">
                              {{csrf_field()}}
                              <!-- Make sure to use PUT for update -->
                              <!-- @method('post') -->
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="hidden" name="user_id" data-user-id="" id="myUser_id" value="">
                              <div class="form-group mb-3">
                                 <label for="" class="text-dark">First Name</label>
                                 <input type="text" class="form-control" id="firstname" name="first_name" >
                              </div>
                              <div class="form-group mb-3">
                                 <label for="" class="text-dark">Last Name</label>
                                 <input type="text" class="form-control" id="lastname" name="last_name" >
                              </div>
                              <div class="form-group mb-3">
                                 <label for="" class="text-dark">Phone Number</label>
                                 <input type="text" class="form-control" id="phonenumber" name="phone_number" >
                              </div>
                              <div class="form-group mb-3">
                                 <label for="" class="text-dark">Email</label>
                                 <input type="email" class="form-control" id="email" name="email" >
                              </div>
                              <div class="form-group mb-3">
                                 <label for="" class="text-dark">City</label>
                                 <input type="text" class="form-control" id="city" name="city" >
                              </div>
                              <div class="form-group mb-3">
                                 <label for="" class="text-dark">Status</label>
                                 <input type="text" class="form-control" id="statues" name="statues" >
                              </div>
                              <div class="form-group mb-3">
                                 <label for="" class="text-dark">Upload File</label>
                                 <input class="form-control form-control-sm" id="formFileSm image" name="file_path" type="file" ><br>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-outline-success">Save</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </table>

         </div>
      </div>
   </div>
   <div class="container">
      <div class="services_section_2">
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="assets/images/icon-1.png"></div>
                  <div class="app_icon_1"><img src="assets/images/icon-1.png"></div>
                  <h4 class="services_text active">App Design</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="assets/images/icon-2.png"></div>
                  <div class="app_icon_1"><img src="assets/images/icon-6.png"></div>
                  <h4 class="services_text">Website Design</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="assets/images/icon-3.png"></div>
                  <div class="app_icon_1"><img src="assets/images/icon-7.png"></div>
                  <h4 class="services_text">Html And Css</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="assets/images/icon-4.png"></div>
                  <div class="app_icon_1"><img src="assets/images/icon-8.png"></div>
                  <h4 class="services_text">Logo Designign</h4>
               </div>
            </div>
         </div>
         <div class="readmore_bt"><a href="#">Read More</a></div>
      </div>
   </div>
</div>
<!-- services section end -->
<!-- portfolio section start -->
<div class="portfolio_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="portfolio_taital">My <span class="portfolio_taital_1">Portfolio</span></h1>
         </div>
      </div>
      <div class="portfolio_section">
         <div class="portfolio_section_2">
            <div class="row">
               <div class="col-md-8">
                  <div class="container_main">
                     <img src="assets/images/img-1.png" alt="" class="image">
                     <div class="overlay">
                        <div class="text">
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="container_main">
                     <img src="assets/images/img-2.png" alt="" class="image">
                     <div class="overlay">
                        <div class="text">
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="portfolio_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div class="container_main">
                     <img src="assets/images/img-3.png" alt="" class="image">
                     <div class="overlay">
                        <div class="text">
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="container_main">
                     <img src="assets/images/img-4.png" alt="" class="image">
                     <div class="overlay">
                        <div class="text">
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="container_main">
                     <img src="assets/images/img-5.png" alt="" class="image">
                     <div class="overlay">
                        <div class="text">
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="seemore_bt"><a href="#">See More</a></div>
   </div>
</div>
<!-- portfolio section end -->
<!-- blog section start -->
<div class="blog_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="blog_taital">My <span class="blog_taital_1">Blog</span></h1>
            <p class="blog_text">upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
         </div>
      </div>
   </div>
   <div class="blog_section_2">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="blog_box">
                  <div class="blog_img">
                     <h4 class="date_text">Jun 05</h4>
                     <h4 class="prep_text">Veniam, quis nostrud </h4>
                  </div>
                  <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="blog_box">
                  <div class="blog_img_2">
                     <h4 class="date_text">Jun 05</h4>
                     <h4 class="prep_text">Veniam, quis nostrud </h4>
                  </div>
                  <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="blog_box">
                  <div class="blog_box_3">
                     <div class="blog_img">
                        <h4 class="date_text">Jun 05</h4>
                        <h4 class="prep_text">Veniam, quis nostrud </h4>
                     </div>
                     <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="readmore_bt_1"><a href="#">Read More</a></div>
      </div>
   </div>
</div>
<!-- blog section end -->
<!-- contact section start -->
<div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="contact_taital">My <span class="contact_taital_1">Contact</span></h1>
         </div>
      </div>
      <div class="contact_section_2">
         <div class="row">
            <div class="col-md-12">
               <div class="mail_section_1">
                  <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                  <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                  <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                  <textarea class="massage-bt" placeholder="Your Massage" rows="5" id="comment" name="Your Massage"></textarea>
                  <div class="send_bt"><a href="#">Send Now</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- contact section end -->
<!-- project box section start -->
<div class="project_box">
   <div class="container">
      <div class="project_main">
         <h1 class="hire_text">Hire me for your projects</h1>
         <div class="callnow_bt"><a href="#">Call Now</a></div>
      </div>
   </div>
</div>
<!-- project box section end -->


<script>
   function store(event) {
      event.preventDefault(); // Prevent form submission
      var formData = new FormData(event.target);

      // let formData = {
      //    first_name: $('#first_name-add').val(),
      //    last_name: $('#last_name-add').val(),
      //    phone_number: $('#phone_number-add').val(),
      //    email: $('#email-add').val(),
      //    city: $('#city-add').val(),
      //    statues: $('#statues-add').val(),
      // };

      $.ajax({
         url: '/add-user',
         type: 'POST',
         data:  formData,
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },

         success: function(response) {
            console.log($('#imge').val());
            alert('User added successfully!');
            console.log(response['image']);
            $('#exampleModal').hide('fast'); // Close the modal after success
            // fetch('#services');
            $('.modal-backdrop').hide('fast'); // Close the modal backdrop
            location.reload();
         },
         error: function(error) {
            console.log('Error:', error);
            alert('Failed to add user!');
         },
         cache: false,
         contentType: false,
         processData: false
      });
   }

   function changeUserId(elm) {
      //alert($(elm).attr('data-user-id'));
      var myUserId = $(elm).attr('data-user-id');
      $("#myUser_id").attr('data-user-id', myUserId);
      $.ajax({
         url: "/getUser",
         type: "GET",
         data: {
            'user_id': myUserId
         },
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         success: function(response) {
            console.log(response['user_id']);
            console.log(response['first_name']);
            console.log(response['last_name']);
            console.log(response['phone_number']);
            console.log(response['email']);
            console.log(response['city']);
            console.log(response['statues']);
            
            $("#myUser_id").val(response['user_id']);
            $("#firstname").val(response['first_name']);
            $("#lastname").val(response['last_name']);
            $("#phonenumber").val(response['phone_number']);
            $("#email").val(response['email']);
            $("#city").val(response['city']);
            $("#statues").val(response['statues']);

            //$("#equipTableBody").html(response);
         },
         error: function(error) {
            console.log("Error:", error);
         }
      });
   }


   function editData(e) {
      event.preventDefault(); // Prevent form submission
      var formData = new FormData(event.target);
      

      var userId = $('#myUser_id').attr('data-user-id'); // Get user id
      //alert(userId);
      // var userId = $(elm).attr('data-user-id'); // Get user id



      $.ajax({
         url: '/updateUser',
         type: 'POST',

         data: formData,
         // headers: {
         //    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         // },
         success: function(response) {
            // Handle successful response, refresh the table or show a message
            // console.log(data);
            // console.log(data);
            console.log(response);
            

            $("#tab_" + userId).html(response);

            //alert('User updated successfully!');
            $('#editModal').hide('fast'); // Close the modal after success
            $('.modal-backdrop').hide('fast'); // Close the modal backdrop
            // fetch('#services');


            location.reload(); // Reload the page to see changes (optional)
         },
         error: function(error) {
            console.log('Error:', error);
            //alert('Failed to update user!');
         },
         cache: false,
         contentType: false,
         processData: false
      });
   }

   function deleteUser(userId) {
      // let userId = $('#myUser_id').val();
      $.ajax({
         url: '/delete-user/' + userId,
         type: 'GET',
         data: {
            _token: $('input[name=_token]').val() // Include CSRF token
         },
         success: function(response) {
            alert('User deleted successfully!');
            location.reload(); // Reload the page to reflect changes (optional)
         },
         error: function(error) {
            console.log('Error:', error);
            // alert('User deleted successfully!');
            alert('Failed to delete user!');
         }
      });
   }


   // function uploadaddpic(elm) { //new
   //    // e.preventDefault(); // Prevent form submission

   
   //    // var userId = $('#myuser_id_pic').attr('data-user-id');
   //    // var formData = $('#uploadForm').serialize();

   //    $.ajax({
   //       url: '/upload-add', // The route to handle the file upload
   //       type: 'POST',
   //       data: $(this).serialize(),
   //       contentType: false, // Do not set content type
   //       processData: false, // Do not process the data
   //       headers: {
   //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   //       },
   //       success: function(response) {
   //             console.log($('#myuser_id_pic').val());            
   //             console.log($('#formFileSm').val());
   //             alert('File uploaded successfully.');
   //             // location.reload(); // Reload to see the updated image
   //       },
   //       error: function(error) {
   //             // console.log(userId);
   //             alert('File upload failed.');
   //             console.log(error);
   //       }
   //    });
   // }



   // function uploadpic(e) {
   //    e.preventDefault(); // Prevent form submission

   //    var form = $(e.target); // Get the form element using jQuery
   //    var formData = new FormData(); // Create a new FormData object

   //    // Serialize the form data (excluding files) and append to FormData
   //    var serializedData = form.serializeArray();
   //    $.each(serializedData, function(key, field) {
   //       formData.append(field.name, field.value);
   //    });

   //    // Append the file input manually to the FormData
   //    var fileInput = form.find('input[name="file"]')[0];
   //    if (fileInput.files.length > 0) {
   //       formData.append('file', fileInput.files[0]);
   //    }
      

   //    $.ajax({
   //       url: '/upload', // The route to handle the file upload
   //       type: 'POST',
   //       data: formData,
   //       contentType: false, // Do not set content type
   //       processData: false, // Do not process the data
   //       headers: {
   //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   //       },
   //       success: function(response) {
   //             console.log(response['user_id']);
   //             console.log(response['file']);
   //             alert('File uploaded successfully.');
   //             location.reload(); // Reload to see the updated image
   //       },
   //       error: function(error) {
   //             // console.log(userId);
   //             alert('File upload failed.');
   //             console.log(error);
   //       }
   //    });
   // }

   // function uploadpic(e) {
   //    e.preventDefault(); // Prevent form submission
   //    var userId = $('#myuser_id_pic').attr('data-user-id');
   //    //   let form = $(this)[0]; // Get the form element
   //    //   let formData = new FormData(form); // Create FormData object with form data

   //    $.ajax({
   //       url: '/upload', // The route to handle the file upload
   //       type: 'POST',
   //       data: {
   //          'user_id': userId,
   //          _token: $('input[id=token]').val()
   //       },
   //       headers: {
   //          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   //       },
   //       // contentType: false, // Don't set content type
   //       // processData: false, // Don't process the files
   //       success: function(response) {
   //          console.log(userId);
   //          console.log(response['file_path']);
   //          alert('File uploaded successfully.');
   //          //location.reload(); // Reload to see the updated image
   //       },
   //       error: function(error) {
            
   //          console.log(userId);
   //          alert('File upload failed.');
   //          console.log(error);
   //       }
   //    });
   // }
</script>
@endsection