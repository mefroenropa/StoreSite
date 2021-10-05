@include('auth.profile.layouts.head-tag')
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
                 <a href="<?= route('profile.view') ?>">
               <img src="<?= asset($user->avatar) ?>" alt=""> 
              </a>
            
              <h1><?= fullUsername($user) ?></h1>
              <p><?= $user->email ?></p>
          </div>

          <ul class="nav nav-pills nav-stacked">
              <li class="<?= sidebarActive(route('profile.view'), false) ?>"><a href="<?= route('profile.view') ?>"> <i class="fa fa-user"></i> پروفایل</a></li>
              <li class="<?= sidebarActive(route('profile.bought.show'), false) ?>"><a href="<?= route('profile.bought.show') ?>"> <i class="fa fa-server" aria-hidden="true"></i> سبد خرید <span class="label label-warning pull-right r-activity"><?= count($user->boughts()->get()) ?></span></a></li>
              <li class="<?= sidebarActive(route('auth.logout'), false) ?>"><a href="<?= route('auth.logout') ?>" style="border-left: 5px solid red;"> خروج از حساب</a></li>
            </ul>
      </div>
  </div>
@yield('content')
</div>
</div>




</body>
</html>