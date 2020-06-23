<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    echo $js; echo $otherjs;
    echo $css; echo $othercss;
?>
<header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
           <div class="logo">
              <form method="POST">
                <button type="submit" name = "kembali" style="border-style: none; background-color: transparent;">
                  <a>
                   <div class="d-flex flex-row align-items-center justify-content-start">
                      <div><img src="../images/logo_1.png" alt=""></div>
                      <?php
                    
                             echo"<div>Mobile.Inc</div>";
                         
                      ?>
                   </div>
                 </a>
                </button>
                </form>
                <?php
                  if (isset($_POST['kembali']))
                  {
                    redirect('Main_menu_ctrl');
                  }
                ?>
           </div>
           <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
              <!-- Search -->
              <div class="header_search">
                 <form action="Search_ctrl" method="POST">
                    <input type="text" name = "carivalue" class="search_input" placeholder="Search Item" required="required">
                    <button name = "cari" type = "submit" class="header_search_button"><img src="../images/search.png" alt=""></button>
                 </form>
              </div>
              <form action = "Riwayat_ctrl" method = "POST">
                 <button class = 'glyphicon glyphicon-th-list'type="submit" name = "submit" style = "background-color: white;border-style: none;"></button>
                 <label for = 'submit'style = 'margin-left : 5px; margin-top:5px'>History</label>
              </form>
              <form action = "Favorite_ctrl" method = "POST">
                 <button type="submit" name = "submit" style = "background-color: white;border-style: none;">
                    <div><img src="../images/heart_2.svg" alt="https://www.flaticon.com/authors/freepik" style = "width:50px; height:30px; "></div>
                 </button>
                 <label for = 'submit'>MyFavorite</label>
              </form>
              <div class="user">
                 <?php
                    if ($user > 0) 
                    {
                       echo "<form action = 'Auth/logout' method = 'POST'>";
                       echo "<button type=\"submit\" name = \"submit\" style = \"background-color: white;border-style: none;\"><div><img src=\"../images/logout.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
                       echo "<label for = 'submit'>Logout</label>";
                       echo "</form></div>";
                    } 
                    else 
                    {
                       echo "<form  method = 'POST'>";
                       echo "<button type=\"submit\" name = \"login\" style = \"background-color: white;border-style: none;\"><div><img src=\"../images/user.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
                       echo "<label for = 'login'>Login</label>";
                       echo "</form></div>";
                       if (isset($_POST['login'])) 
                       {
                          redirect('Auth');
                       }
                    }
                     $id = $user['id']; 
                 ?> 
                 <form action = "Cart_ctrl" method = "POST">
                      <?php echo "<input type = \"hidden\" value=\"$id\" name = \"total\">";  ?>
                    <button type="submit" name = "submit" style = "background-color: white;border-style: none;">
                       <div><img src="../images/cart.svg" alt="https://www.flaticon.com/authors/freepik" style = "width:50px; height:30px; "></div>
                    </button>
                    <label for = 'submit'>Cart/checkout</label>
                 </form>
              </div>
           </div>
           </a>
        </div>
  </div>
  </div>
  </header>
  <?php
  echo '<div class="super_container_inner">';
  	echo '<div class="super_overlay"></div>';
          echo '<div class="products">';
              echo '<div class="container">';
          		if (isset($_POST['cari']))
          		{

                      $key = $_POST['carivalue'];
                      $cari = $this->Search->ambil_product($key);
                      echo '<div class="row products_row">';
                      $fav = $this->Search->ambil_favorite($user['id']);
                      if ($cari->num_rows() >0)
                      {
                        foreach ($cari->result_array() as $row) {
                          $var_img = $row['Pic'];
                          $nama = $row['Nama_barang'];
                          $stok = $row['Stok'];
                          $harga = $row['Harga_barang'];
                          $id = $row ['Kode_barang'];
                          $rating = $row['Rating'];
                          $ketemu = 0;
                          foreach ($fav->result_array() as $key)
                          {
                             if ($key['Kode_product'] == $id)
                             {
                                $ketemu = 1;
                                break;
                             }
                          }
                          echo '<div class="col-xl-4 col-md-6">';
                              echo '<div class="product">';
                                  echo "<div class='product_image'><img src='../assets/img/$var_img'></div>";   
                                      echo '<div class="product_content">';
                                          echo '<div class="product_info d-flex flex-row align-items-start justify-content-start">';
                                              echo '<div>';
                                                  echo '<div>';
                                                      echo "<div class='product_name'><a>$nama</a></div>";
                                                  echo '</div>';
                                              echo '</div>';
                  
                                          echo '<div class="ml-auto text-right">';
                                         echo "<div class=\"rating_r rating_r_$rating home_item_rating\"><i></i><i></i><i></i><i></i><i></i></div>";
                                              echo "<div class=\"product_price text-right\"><span>Rp.$harga,00</span></div>";
                                              echo "<div class='product_price text-right'><span>$stok stock</span></div>";
                                          echo '</div>';
                                      echo '</div>';
                                      echo '<div class="product_buttons">';
                                          echo '<div class="text-right d-flex flex-row align-items-start justify-content-start">';
                                              echo '<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">';
                                                  echo '<div><div>';
                                                  if ($ketemu==1)
                                                   {
                                                      
                                                   echo "<button type=\"submit\" name = \"submitfav\" style = \"background-color: white;border-style: none;\"><div><img src=\"../images/heart3.svg\" alt=\"\" style = \"width:50px; height:30px; \"></div></button>";
                                                  
                                                   }
                                                   else
                                                   {
                                                      echo "<form method = 'POST'>";
                                                   echo "<input type = 'hidden' name = 'idfav' value = '$id'>";
                                                   echo "<button type=\"submit\" name = \"submitfav\" style = \"background-color: white;border-style: none;\"><div><img src=\"../images/heart_2.svg\" alt=\"\" style = \"width:50px; height:30px; \"></div></button>";
                                                   echo "</form>";
                                                   }  
                                                                          echo'<div>+</div></div></div>';
                                              echo '</div>';
                                              echo '<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">';
                                                  echo '<div><div>';
                                                  echo "<form action = 'Modal_ctrl' method = 'POST'>"; 
                                                  echo "<input type = 'hidden' name = 'Submit' value = '$id'>";
                                                  echo "<button type=\"submit\" name = \"submit\" style = \"background-color: white;border-style: none;\"><div><img src=\"../images/cart.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
                                                  echo "</form>";   
                                                  echo'<div>+</div></div></div>';
                                              echo '</div>';
                                          echo '</div>';
                                      echo '</div>';
                                  echo '</div>';
                              echo '</div>';
                          echo '</div>';
                  
                          }
                      
                      }
                      else
                      {
                        echo "Sorry, we can't find product from your keywords";
                      }
                      echo '</div>';
               }
                  
                  if (isset($_POST['submitfav']))
                  {
                      echo "<script type='text/javascript'>alert('added to my favorite');</script>";
                      $id = $_POST['idfav'];
                      $data['User'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();		
                      if($data['User']>0){
                          $this->Search->favorite($user['id'],$id);
                          redirect('Main_menu_ctrl');
                      } 
                      else
                      {
                          redirect('Auth');
                      }
                  }
              echo '</div>';
          echo '</div>';
       echo '</div>';
  ?>
</body>
</html>