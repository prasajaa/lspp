<!-- Nav Sidebar -->
<nav
class="sidebar offcanvas-md offcanvas-start"
data-bs-scroll="true"
data-bs-backdrop="false"
>
<div class="d-flex justify-content-end m-3 d-block d-md-none">
  <button
    aria-label="Close"
    data-bs-dismiss="offcanvas"
    data-bs-target=".sidebar"
    class="btn p-0 border-0 fs-4"
  >
    <i class="fas fa-close"></i>
  </button>
</div>
<div class="d-flex justify-content-center mt-md-5 mb-5">
  <img
    src="{{asset('dashboard/images/logo.svg')}}"
    alt="Logo"
    width="140px"
    height="40px"
  />
</div>
<div class="pt-2 d-flex flex-column gap-5">
  <div class="menu p-0">
    <p>Daily Use</p>
    <a href="{{route('admin.kursus.index')}}" class="{{request()->is('admin/kursus') ? 'item-menu active' : 'item-menu'}}">
      <i class="icon ic-stats"></i>
      Kursus
    </a>

    <a href="{{route('admin.user.index')}}" class="{{request()->is('admin/kursus') ? 'item-menu active' : 'item-menu'}}">
        <i class="icon ic-stats"></i>
        User
      </a>
  </div>
  <div class="menu">
    <p>Others</p>
    <a href="#" class="item-menu" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
      <i class="icon ic-logout"></i>
      Logout
    </a>
    <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">

      <input type="hidden" name="_token" value="{{csrf_token()}}">

  </form>
  </div>
</div>
</nav>
