<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.html">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

 
  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
         <span style="color:rgba(70,99,202,255)">Category</span><i class="bi bi-chevron-down ms-auto" style="color:rgba(70,99,202,255)"></i>
        </a>
        <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('category_index')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Category List</span>
            </a>
          </li>
          <li>
            <a href="{{route('category_create')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Category Create</span>
            </a>
          </li>
        </ul>
      </li><!-- End Category Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#cart-nav" data-bs-toggle="collapse" href="#">
         <span style="color:rgba(70,99,202,255)">Cart</span><i class="bi bi-chevron-down ms-auto" style="color:rgba(70,99,202,255)"></i>
        </a>
        <ul id="cart-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('cart_index')}}" >
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Cart List</span>
            </a>
          </li>
          <li>
            <a href="{{route('cart_create')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Cart Create</span>
            </a>
          </li>       
        </ul>
      </li><!-- End Cart Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#company-nav" data-bs-toggle="collapse" href="#">
         <span style="color:rgba(70,99,202,255)">Company</span><i class="bi bi-chevron-down ms-auto" style="color:rgba(70,99,202,255)"></i>
        </a>
        <ul id="company-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('company_index')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Company List</span>
            </a>
          </li>
          <li>
            <a href="{{route('company_create')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Company Create</span>
            </a>
          </li>
        </ul>
      </li><!-- End Company Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#medicine-nav" data-bs-toggle="collapse" href="#">
         <span style="color:rgba(70,99,202,255)">Product</span><i class="bi bi-chevron-down ms-auto" style="color:rgba(70,99,202,255)"></i>
        </a>
        <ul id="medicine-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('product_index')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)" >Product List</span>
            </a>
          </li>
          <li>
            <a href="{{route('product_create')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Product Create</span>
            </a>
          </li>
        </ul>
      </li><!-- End Medicine Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#order-nav" data-bs-toggle="collapse" href="#">
         <span style="color:rgba(70,99,202,255)">Order</span><i class="bi bi-chevron-down ms-auto" style="color:rgba(70,99,202,255)"></i>
        </a>
        <ul id="order-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('order_index')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Order List</span>
            </a>
          </li>
          <li>
            <a href="{{route('order_create')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Order Create</span>
            </a>
          </li>
        </ul>
      </li><!-- End Order Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#slider-nav" data-bs-toggle="collapse" href="#">
         <span style="color:rgba(70,99,202,255)">Slider</span><i class="bi bi-chevron-down ms-auto" style="color:rgba(70,99,202,255)"></i>
        </a>
        <ul id="slider-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('slider_index')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Slider List</span>
            </a>
          </li>
          <li>
            <a href="{{route('slider_create')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Slider Create</span>
            </a>
          </li>
        </ul>
      </li><!-- End Slider Nav -->


    
 





</ul>

</aside>