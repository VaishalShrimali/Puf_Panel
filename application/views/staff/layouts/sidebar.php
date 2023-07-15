 <?php $staff = $this->session->userdata('staff')['staff_role']; ?>
 <!--sidebar wrapper -->
 <div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <img src="<?php echo base_url('public/admin/assets/images/logo/logo.png') ?>" width="176px" alt="logo icon">
         </div>

         <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
         </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
         <li>
             <a href="<?php echo base_url('Staff/') ?>">
                 <div class="parent-icon"><i class='bx bx-home-alt'></i>
                 </div>
                 <div class="menu-title">Dashboard</div>
             </a>
         </li>
         <?php if ($staff == '2') : ?>
             <li>
                 <a href="<?php echo base_url('Inventory/index') ?>">
                     <div class="parent-icon"><i class='fadeIn animated bx bx-home'></i>
                     </div>
                     <div class="menu-title">Inventory</div>
                 </a>
             </li>
         <?php endif ?>
         <?php if ($staff == '3') : ?>
             <li>
                 <a href="<?php echo base_url('Puf/delivery_list') ?>">
                     <div class="parent-icon"><i class='lni lni-money-location'></i>
                     </div>
                     <div class="menu-title">Delivery</div>
                 </a>
             </li>
         <?php endif ?>

     </ul>
     <!--end navigation-->
 </div>
 <!--end sidebar wrapper -->