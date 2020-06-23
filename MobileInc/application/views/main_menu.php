<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   echo $js;
   echo $mainjs;
   echo $css;
   echo $maincss;
   ?>
   <title>Mobile.Inc</title>
   <style>
      html {
         scroll-behavior: smooth;
      }
   </style>
</head>

<body>


   <div class="super_container">
      <header class="header">
         <div class="header_overlay"></div>
         <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
               <a>
                  <div class="d-flex flex-row align-items-center justify-content-start">
                     <div><img src="images/logo_1.png" alt=""></div>
                     <div>Mobile.Inc</div>

                  </div>
               </a>
            </div>
            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
               <!-- Search -->
               <div class="header_search">
                  <form action="index.php/Search_ctrl" method="POST">
                     <input type="text" name="carivalue" class="search_input" placeholder="Search Item" required="required">
                     <button name="cari" type="submit" class="header_search_button"><img src="images/search.png" alt=""></button>
                  </form>
               </div>
               <form action="index.php/Riwayat_ctrl" method="POST">
                  <button class='	glyphicon glyphicon-th-list' type="submit" name="submit" style="background-color: white;border-style: none;"></button>
                  <label for='submit' style='margin-left : 5px; margin-top:5px'>History</label>
               </form>
               <form action="index.php/Favorite_ctrl" method="POST">
                  <button type="submit" name="submit" style="background-color: white;border-style: none;">
                     <div><img src="images/heart_2.svg" alt="https://www.flaticon.com/authors/freepik" style="width:50px; height:30px; "></div>
                  </button>
                  <label for='submit'>MyFavorite</label>
               </form>
               <!-- User -->
               <div class="user">
                  <?php
                  $fav = $this->Main_menu->ambil_product();
                  if ($user > 0) {
                     echo "<form action = 'index.php/Auth/logout' method = 'POST'>";
                     echo "<button type=\"submit\" name = \"submit\" style = \"background-color: white;border-style: none;\"><div><img src=\"images/logout.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
                     echo "<label for = 'submit'>Logout</label>";
                     echo "</form></div>";
                  } else {
                     echo "<form  method = 'POST'>";
                     echo "<button type=\"submit\" name = \"login\" style = \"background-color: white;border-style: none;\"><div><img src=\"images/user.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
                     echo "<label for = 'login'>Login</label>";
                     echo "</form></div>";
                     if (isset($_POST['login'])) {
                        redirect('Auth');
                     }
                  }
                  ?>

                  <!-- Cart -->
                  <?php $id = $user['id']; ?>
                  <form action="index.php/Cart_ctrl" method="POST">
                     <?php echo "<input type = \"hidden\" value=\"$id\" name = \"total\">";  ?>
                     <button type="submit" name="submit" style="background-color: white;border-style: none;">
                        <div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik" style="width:50px; height:30px; "></div>
                     </button>
                     <label for='submit'>Cart/checkout</label>
                  </form>
               </div>
            </div>
            </a>
         </div>
   </div>

   </header>
   <div class="super_container_inner">
      <div class="super_overlay"></div>
      <!-- Home -->
      <div class="home">
         <!-- Home Slider -->
         <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
               <!-- Slide -->
               <div class="owl-item">
                  <div class="background_image" style="background-image:url(assets/img/bg_1.jpg)"></div>
                  <div class="container fill_height">
                     <div class="row fill_height">
                        <div class="col fill_height">
                           <div class="home_container d-flex flex-column align-items-center justify-content-start">
                              <div class="home_content">
                                 <div class="home_title">New Arrivals</div>
                                 <div class="home_subtitle">Gaming Component</div>
                                 <div class="home_items">
                                    <div class="row">
                                       <div class="col-sm-3 offset-lg-1">
                                          <div class="home_item_side"><a><img src="assets/img/analog.jpg" alt=""></a></div>
                                       </div>
                                       <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                          <div class="product home_item_large">
                                             <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                <div>
                                                   <div>from</div>
                                                   <div>70<span>k</span></div>
                                                </div>
                                             </div>
                                             <div class="product_image"><img src="assets/img/adaptornintendo.jpg" alt=""></div>
                                             <div class="product_content">
                                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                   <div>
                                                      <div>
                                                         <div class="product_name"><span style="font-size:25px; color:white;">Adaptor Nintendo Wii 220v - Perak</span></div>
                                                      </div>
                                                   </div>
                                                   <div class="ml-auto text-right">
                                                      <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                      <div class="product_price text-right">Rp.70,000</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-3">
                                          <div class="home_item_side"><a><img src="assets/img/neogeo.jpg" alt=""></a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Slide -->
               <div class="owl-item">
                  <div class="background_image" style="background-image:url(assets/img/bg_2.jpg)"></div>
                  <div class="container fill_height">
                     <div class="row fill_height">
                        <div class="col fill_height">
                           <div class="home_container d-flex flex-column align-items-center justify-content-start">
                              <div class="home_content">
                                 <div class="home_title">Popular</div>
                                 <div class="home_subtitle">Wheels Equipment</div>
                                 <div class="home_items">
                                    <div class="row">
                                       <div class="col-sm-3 offset-lg-1">
                                          <div class="home_item_side"><a><img src="assets/img/ipega.jpg" alt=""></a></div>
                                       </div>
                                       <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                          <div class="product home_item_large">
                                             <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                <div>
                                                   <div>from</div>
                                                   <div>4.316<span>k</span></div>
                                                </div>
                                             </div>
                                             <div class="product_image"><img src="assets/img/logitech.jpg" alt=""></div>
                                             <div class="product_content">
                                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                   <div>
                                                      <div>
                                                         <div class="product_name"><span style="font-size:25px; color:white;">Logitech G29 Driving Force racing Wheel for PS3/Ps4</span></div>
                                                      </div>
                                                   </div>
                                                   <div class="ml-auto text-right">
                                                      <div class="rating_r rating_r_5 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                      <div class="product_price text-right">Rp.4,316,000</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-3">
                                          <div class="home_item_side"><a><img src="assets/img/nintendowii.jpg" alt=""></a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Slide -->
               <div class="owl-item">
                  <div class="background_image" style="background-image:url(assets/img/bg_3.jpg)"></div>
                  <div class="container fill_height">
                     <div class="row fill_height">
                        <div class="col fill_height">
                           <div class="home_container d-flex flex-column align-items-center justify-content-start">
                              <div class="home_content">
                                 <div class="home_title">Old School Games</div>
                                 <div class="home_subtitle">Gameboy Console</div>
                                 <div class="home_items">
                                    <div class="row">
                                       <div class="col-sm-3 offset-lg-1">
                                          <div class="home_item_side"><a><img src="assets/img/arcade.jpg" alt=""></a></div>
                                       </div>
                                       <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                          <div class="product home_item_large">
                                             <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                <div>
                                                   <div>from</div>
                                                   <div>3.850<span>k</span></div>
                                                </div>
                                             </div>
                                             <div class="product_image"><img src="assets/img/loudpedeck.jpg" alt=""></div>
                                             <div class="product_content">
                                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                   <div>
                                                      <div>
                                                         <div class="product_name"><span style="font-size:25px; color:white;">Loupedeck + Photo Editing</span></div>
                                                      </div>
                                                   </div>
                                                   <div class="ml-auto text-right">
                                                      <div class="rating_r rating_r_3 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                      <div class="product_price text-right">Rp.3,850,000</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-3">
                                          <div class="home_item_side"><a><img src="assets/img/gameboy.jpg" alt=""></a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Slide -->
               <div class="owl-item">
                  <div class="background_image" style="background-image:url(assets/img/bg_4.jpg)"></div>
                  <div class="container fill_height">
                     <div class="row fill_height">
                        <div class="col fill_height">
                           <div class="home_container d-flex flex-column align-items-center justify-content-start">
                              <div class="home_content">
                                 <div class="home_title">Premium Collection</div>
                                 <div class="home_subtitle">Joystick</div>
                                 <div class="home_items">
                                    <div class="row">
                                       <div class="col-sm-3 offset-lg-1">
                                          <div class="home_item_side"><a><img src="assets/img/stikps2.jpg" alt=""></a></div>
                                       </div>
                                       <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                          <div class="product home_item_large">
                                             <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                <div>
                                                   <div> from</div>
                                                   <div>535<span>k</span></div>
                                                </div>
                                             </div>
                                             <div class="product_image"><img src="assets/img/stikps4.jpg" alt=""></div>
                                             <div class="product_content">
                                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                   <div>
                                                      <div>
                                                         <div class="product_name"><span style="font-size:25px; color:white;">Stick Stik ps4 - Dualshock 4 - Wireless controller - Putih</span></div>
                                                      </div>
                                                   </div>
                                                   <div class="ml-auto text-right">
                                                      <div class="rating_r rating_r_5 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                      <div class="product_price text-right">Rp.535,000</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-3">
                                          <div class="home_item_side"><a><img src="assets/img/stikps3.jpg" alt=""></a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            <!-- Home Slider Dots -->
            <div class="home_slider_dots_container">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <div class="home_slider_dots">
                           <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
                              <li class="home_slider_custom_dot active">01</li>
                              <li class="home_slider_custom_dot">02</li>
                              <li class="home_slider_custom_dot">03</li>
                              <li class="home_slider_custom_dot">04</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Products -->
      <div class="products">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 offset-lg-3">
                  <div class="section_title text-center">Popular on Electronics</div>
               </div>
            </div>
            <div class="row page_nav_row">
               <div class="col">
                  <div class="page_nav">
                     <ul class="d-flex flex-row align-items-start justify-content-center">
                        <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#laptop">Gaming Component </a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#automotive"> Wheels </a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#gaming"> Gameboy </a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#makanan"> Joystick</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="tab-content ">
               <div id="laptop" role="tabpanel " class="tab-pane active row products_row">
                  <?php $fav = $this->Main_menu->ambil_favorite($user['id']);
                  show_product($productlaptop, $fav); ?>
                  <!-- Product -->
               </div>
               <div id="automotive" role="tabpanel " class="tab-pane row products_row">
                  <?php show_product($productautomotive, $fav); ?>
                  <!-- Product -->
               </div>
               <div id="gaming" role="tabpanel " class="tab-pane row products_row">
                  <?php show_product($productgaming, $fav); ?>
                  <!-- Product -->
               </div>
               <div id="makanan" role="tabpanel " class="tab-pane row products_row">
                  <?php show_product($productmakanan, $fav); ?>
                  <!-- Product -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Boxes -->
   <div class="boxes">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">
                  <!-- Box -->
                  <div class="box">
                     <div class="background_image" style="background-image:url(assets/img/box_1.jpg)"></div>
                     <div class="box_content d-flex flex-row align-items-center justify-content-start">
                        <div class="box_left">
                           <div class="box_image">
                              <a href="#">
                                 <div class="background_image" style="background-image:url(assets/img/box_1_img.jpg)"></div>
                              </a>
                           </div>
                        </div>
                        <div class="box_right text-center">
                           <div class="box_title">Gaming Component</div>
                        </div>
                     </div>
                  </div>
                  <!-- Box -->
                  <div class="box">
                     <div class="background_image" style="background-image:url(assets/img/box_2.jpg)"></div>
                     <div class="box_content d-flex flex-row align-items-center justify-content-start">
                        <div class="box_left">
                           <div class="box_image">
                              <a href="#">
                                 <div class="background_image" style="background-image:url(assets/img/box_2_img.jpg)"></div>
                              </a>
                           </div>
                        </div>
                        <div class="box_right text-center">
                           <div class="box_title">Wheels Collection</div>
                        </div>
                     </div>
                  </div>
                  <!-- Box -->
                  <div class="box">
                     <div class="background_image" style="background-image:url(assets/img/box_3.jpg)"></div>
                     <div class="box_content d-flex flex-row align-items-center justify-content-start">
                        <div class="box_left">
                           <div class="box_image">
                              <a href="#">
                                 <div class="background_image" style="background-image:url(assets/img/box_3_img.jpg)"></div>
                              </a>
                           </div>
                        </div>
                        <div class="box_right text-center">
                           <div class="box_title">Old School Games</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Features -->
   <div class="features">
      <div class="container">
         <div class="row">
            <!-- Feature -->
            <div class="col-lg-4 feature_col">
               <div class="feature d-flex flex-row align-items-start justify-content-start">
                  <div class="feature_left">
                     <div class="feature_icon"><img src="images/icon_1.svg" alt=""></div>
                  </div>
                  <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                     <div class="feature_title">Fast Secure Payments</div>
                  </div>
               </div>
            </div>
            <!-- Feature -->
            <div class="col-lg-4 feature_col">
               <div class="feature d-flex flex-row align-items-start justify-content-start">
                  <div class="feature_left">
                     <div class="feature_icon ml-auto mr-auto"><img src="images/icon_2.svg" alt=""></div>
                  </div>
                  <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                     <div class="feature_title">Premium Products</div>
                  </div>
               </div>
            </div>
            <!-- Feature -->
            <div class="col-lg-4 feature_col">
               <div class="feature d-flex flex-row align-items-start justify-content-start">
                  <div class="feature_left">
                     <div class="feature_icon"><img src="images/icon_3.svg" alt=""></div>
                  </div>
                  <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                     <div class="feature_title">Fast Delivery</div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   </div>
   </div>
</body>

</html>

<?php
function show_product($product, $fav)
{
   foreach ($product->result_array() as $row) {
      $var_img = $row['Pic'];
      $nama = $row['Nama_barang'];
      $stok = $row['Stok'];
      $harga = $row['Harga_barang'];
      $id = $row['Kode_barang'];
      $rating = $row['Rating'];
      $ketemu = 0;
      foreach ($fav->result_array() as $key) {
         if ($key['Kode_product'] == $row['Kode_barang']) {
            $ketemu = 1;
            break;
         }
      }
      echo '<div class="col-xl-4 col-md-6">';
      echo '<div class="product">';
      echo "<div class='product_image'><img src='assets/img/$var_img'></div>";
      echo '<div class="product_content">';
      echo '<div class="product_info d-flex flex-row align-items-start justify-content-start">';
      echo "<div class='product_name'><a>$nama</a></div>";
      echo '<div class="ml-auto text-right">';
      echo "<div class=\"rating_r rating_r_$rating home_item_rating\"><i></i><i></i><i></i><i></i><i></i></div>";
      echo "<div class=\"product_price text-right\"><span>Rp ";
      echo number_format($harga);
      echo "</span></div>";
      echo "<div class='product_price text-right'><span>$stok stock</span></div>";
      echo '</div>';
      echo '</div>';

      echo '<div class="product_buttons">';
      echo '<div class="text-right d-flex flex-row align-items-start justify-content-start">';

      echo '<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">';
      echo '<div><div>';
      if ($ketemu == 1) {

         echo "<button type=\"submit\" name = \"submitfav\" style = \"background-color: white;border-style: none;\"><div><img src=\"images/heart3.svg\" alt=\"\" style = \"width:50px; height:30px; \"></div></button>";
      } else {
         echo "<form method = 'POST'>";
         echo "<input type = 'hidden' name = 'idfav' value = '$id'>";
         echo "<button type=\"submit\" name = \"submitfav\" style = \"background-color: white;border-style: none;\"><div><img src=\"images/heart_2.svg\" alt=\"\" style = \"width:50px; height:30px; \"></div></button>";
         echo "</form>";
      }

      echo '<div>+</div></div></div>';
      echo '</div>';

      echo '<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">';
      echo '<div><div>';
      if ($stok > 0) {
         echo "<form action = 'index.php/Modal_ctrl' method = 'POST'>";
         echo "<input type = 'hidden' name = 'Submit' value = '$id'>";
         echo "<button type=\"submit\" name = \"submit\" style = \"background-color: white;border-style: none;\"><div><img src=\"images/cart.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
         echo "</form>";
      } else {
         echo "<form  method = 'POST'>";
         echo "<input type = 'hidden' name = 'Submit' value = '$id'>";
         echo "<button type=\"submit\" name = \"outstok\" style = \"background-color: white;border-style: none;\"><div><img src=\"images/cart.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
         echo "</form>";
      }

      echo '<div>+</div></div></div>';
      echo '</div>';
      echo '</div>';

      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
   }
}
if (isset($_POST['outstok'])) {
   echo "<script type='text/javascript'>alert('Sorry, the product you order is out of stock');</script>";
}

if (isset($_POST['submitfav'])) {
   echo "<script type='text/javascript'>alert('added to my favorite');</script>";
   $id = $_POST['idfav'];
   $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
   if ($data['user'] > 0) {
      $this->Main_menu->favorite($user['id'], $id);
      redirect("Main_menu_ctrl");
   } else {
      redirect('Auth');
   }
}


?>