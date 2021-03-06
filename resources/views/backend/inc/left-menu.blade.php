
 <div class="br-logo"><a href=""><span>[</span>RENT<i>SHEBA</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="index.html" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
          <i class="fas fa-paste"></i>
          
            <span class="menu-item-label">Posts</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('post.index')}}" class="sub-link">Post List</a></li>
            <li class="sub-item"><a href="{{route('post.create')}}" class="sub-link">Add New Post</a></li>
            <li class="sub-item"><a href="{{route('comment.index')}}" class="sub-link">Comment List</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
          <i class="fas fa-building"></i>
            <span class="menu-item-label">Business</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('business.index')}}" class="sub-link">Business List</a></li>
            <li class="sub-item"><a href="{{route('business.create')}}" class="sub-link">Add New Business</a></li>
            <li class="sub-item"><a href="{{route('companycomment.index')}}" class="sub-link">Comment List</a></li>
          </ul>
        </li>

          
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
          <i class="fas fa-tags"></i>
            <span class="menu-item-label">Categorys</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('category.index')}}" class="sub-link">Category List</a></li>
            <li class="sub-item"><a href="{{route('category.create')}}" class="sub-link">Add New Category</a></li>
          </ul>
        </li>
        
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Location Management </label>
       
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="icon ion-location icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Cuntry</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('cuntry.index')}}" class="sub-link">Cuntry List</a></li>
            <li class="sub-item"><a href="{{route('cuntry.create')}}" class="sub-link">Add New Cuntry</a></li>
          </ul>
        </li>
     
       
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="icon ion-location icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Division</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('division.index')}}" class="sub-link">Division List</a></li>
            <li class="sub-item"><a href="{{route('division.create')}}" class="sub-link">Add New Division</a></li>
          </ul>
        </li>
       
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="icon ion-location icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">District</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('district.index')}}" class="sub-link">District List</a></li>
            <li class="sub-item"><a href="{{route('district.create')}}" class="sub-link">Add New District</a></li>
          </ul>
        </li>

       
      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

           
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="icon ion-person icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">User</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('user.index')}}" class="sub-link">User List</a></li>
          </ul>
        </li>

     

      <br>
    </div><!-- br-sideleft -->