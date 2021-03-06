<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title><?= $title ?></title>
   <!-- Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
   <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <link rel="shortcut icon" href="https://a.academia-assets.com/images/academia-logo-2021.svg">
   <!-- Custom fonts for this template-->
   <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">

</head>

<body>

   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewbox="0 0 118 94">
         <title>Bootstrap</title>
         <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
         </path>
      </symbol>
   </svg>

   <main>

      <header class="p-3 mb-3 border-bottom" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
         <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
               <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                     <use xlink:href="#bootstrap" />
                  </svg>
               </a>

               <form class="col-12 col-sm-5 mb-3 mb-lg-0 me-lg-auto">
                  <input type="search" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                  <datalist id="datalistOptions">
                     <option value="San Francisco">
                  </datalist>
                  <!-- <input type="search" class="form-control-sm" placeholder="Search..." aria-label="Search"> -->
               </form>

               <div class="col-md-3 me-lg-2 text-end">
                  <a href="#" class="btn btn-primary btn-sm me-2">
                     <i class="fas fa-fw fa-plus"></i>
                     ADD NEW
                  </a>

                  <a href="#" class="btn btn-outline-secondary btn-sm me-2">
                     <i class="far fa-envelope"></i>
                  </a>

                  <a href="#" class="btn btn-outline-secondary btn-sm me-2">
                     <i class="far fa-bell"></i>
                  </a>
               </div>


               <div class="dropdown text-end">
                  <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="mdo" width="30" height="30" style="object-fit: cover;" class="rounded-2">
                  </a>
                  <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                     <li><a class="dropdown-item" href="#">Settings</a></li>
                     <li><a class="dropdown-item" href="#">Profile</a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Sign out</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </header>
   </main>