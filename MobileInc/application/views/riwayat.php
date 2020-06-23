<!DOCTYPE html>
<html>

<head>
   <?php
   echo $js;
   echo $otherjs;
   echo $css;
   echo $othercss;
   ?>
   <script>
      $(document).ready(function() {
         $('#example').DataTable();
      });
   </script>
</head>

<body>

   <div class="super_container">
      <header class="header">
         <div class="header_overlay"></div>
         <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
               <form method="POST">
                  <button type="submit" name="kembali" style="border-style: none; background-color: transparent;">
                     <a>
                        <div class="d-flex flex-row align-items-center justify-content-start">
                           <div><img src="../images/logo_1.png" alt=""></div>


                           <div>Mobile.Inc</div>

                        </div>
                     </a>
                  </button>
               </form>
               <?php
               if (isset($_POST['kembali'])) {
                  redirect('Main_menu_ctrl');
               }
               ?>
            </div>
            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
               <!-- Search -->
               <div class="header_search">
                  <form action="Search_ctrl" method="POST">
                     <input type="text" name="carivalue" class="search_input" placeholder="Search Item" required="required">
                     <button name="cari" type="submit" class="header_search_button"><img src="../images/search.png" alt=""></button>
                  </form>
               </div>
               <form action="Favorite_ctrl" method="POST">
                  <button type="submit" name="submit" style="background-color: white;border-style: none;">
                     <div><img src="../images/heart_2.svg" alt="https://www.flaticon.com/authors/freepik" style="width:50px; height:30px; "></div>
                  </button>
                  <label for='submit'>MyFavorite</label>
               </form>
               <div class="user">
                  <?php
                  if ($user > 0) {
                     echo "<form action = 'Auth/logout' method = 'POST'>";
                     echo "<button type=\"submit\" name = \"submit\" style = \"background-color: white;border-style: none;\"><div><img src=\"../images/logout.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
                     echo "<label for = 'submit'>Logout</label>";
                     echo "</form></div>";
                  } else {
                     echo "<form  method = 'POST'>";
                     echo "<button type=\"submit\" name = \"login\" style = \"background-color: white;border-style: none;\"><div><img src=\"../images/user.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
                     echo "<label for = 'login'>Login</label>";
                     echo "</form></div>";
                     if (isset($_POST['login'])) {
                        redirect('Auth');
                     }
                  }
                  $id = $user['id'];
                  ?>
                  <form action="Cart_ctrl" method="POST">
                     <?php echo "<input type = \"hidden\" value=\"$id\" name = \"total\">";  ?>
                     <button type="submit" name="submit" style="background-color: white;border-style: none;">
                        <div><img src="../images/cart.svg" alt="https://www.flaticon.com/authors/freepik" style="width:50px; height:30px; "></div>
                     </button>
                     <label for='submit'>Cart/checkout</label>
                  </form>
               </div>
            </div>
            </a>
         </div>
   </div>
   </div>
   </header>
   <div class="cart_info">
      <div class="container">
         <div class="row">
            <div class="col">
            </div>
         </div>
         <table class="table table-striped table-bordered" id="example" style="text-align: center;">
            <thead>
               <tr>
                  <th style="text-align: center;">#</th>
                  <th style="text-align: center;">Product Name</th>
                  <th style="text-align: center;">Quantity</th>
                  <th style="text-align: center;">Total</th>
                  <th style="text-align: center;">Address</th>
               </tr>
            </thead>
            <tbody>
               <?php
               echo $js;
               echo $css;
               $index = 1;
               $history = $this->Riwayat->ambil_riwayat($user['id'])->result_array();
               foreach ($history as $row) {
                  $nama = $row['nama'];
                  $jumlah = $row['jumlah'];
                  $total = $row['total'];
                  $alamat = $row['alamat'];
                  echo '<tr>';
                  echo "<td> $index </td>";
                  echo "<td> $nama </td>";
                  echo "<td> $jumlah </td>";
                  echo "<td>Rp ";
                  echo number_format($total);
                  echo " </td>";
                  echo "<td> $alamat </td>";
                  echo '</tr>';
                  ++$index;
               }
               ?>
            </tbody>
            <tfoot>
               <tr>
                  <th style="text-align: center;">#</th>
                  <th style="text-align: center;">Product Name</th>
                  <th style="text-align: center;">Quantity</th>
                  <th style="text-align: center;">Total</th>
                  <th style="text-align: center;">Address</th>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
   </div>
</body>

</html>