 <!-- ########## START: LEFT PANEL ########## -->
 <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
 <div class="br-sideleft sideleft-scrollbar">
   <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
   <ul class="br-sideleft-menu">
     <li class="br-menu-item">
       <a href="{{ route('dashboard') }}" class="br-menu-link active">
         <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
         <span class="menu-item-label">Dashboard</span>
       </a><!-- br-menu-link -->
     </li><!-- br-menu-item -->
  
     <li class="br-menu-item">
       <a href="#" class="br-menu-link with-sub">
         <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
         <span class="menu-item-label">Branch</span>
       </a><!-- br-menu-link -->
       <ul class="br-menu-sub">
         <li class="sub-item"><a href="{{ route('branchadd') }}" class="sub-link">Add Branch</a></li>
         <li class="sub-item"><a href="{{ route('branchmanage')}}" class="sub-link">Manage Branch</a></li>
       </ul>
     </li>
     <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Product</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route('productadd')}}" class="sub-link">Manage Product</a></li>
      </ul>
    </li>
    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Purchase</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="#" class="sub-link">Add Purchase</a></li>
        <li class="sub-item"><a href="#" class="sub-link">Manage Purchase</a></li>
      </ul>
    </li>
    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Stock</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="#" class="sub-link">Add Stock</a></li>
        <li class="sub-item"><a href="#" class="sub-link">Manage Stock</a></li>
      </ul>
    </li>
    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Sales</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="#" class="sub-link">Add Sales</a></li>
        <li class="sub-item"><a href="#" class="sub-link">Manage Sales</a></li>
      </ul>
    </li>

   <br>
 </div><!-- br-sideleft -->
 <!-- ########## END: LEFT PANEL ########## -->

   