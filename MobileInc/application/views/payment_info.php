<!DOCTYPE html>
<html>
<head>
	<title>Payment Info</title>
	<?php
		echo $js; echo $otherjs;
        echo $css; echo $othercss;
	?>
</head>
<body>
	<div class="super_container">
	<div class="super_container">
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
  <div class="cart_info">
	<?php
		$id = $user['id'];
		$name = $user['name'];
		$total = $this->Payment_info->get_bill($id)->result_array();
		$alamat = $user['address'];
		$email = $user['email'];
		foreach ($total as $row) 
		{
			$jumlah = $row['total'];
		}
		echo "<div class=\"container\" style=\"margin-top:50\">";
		echo "<div class=\"row justify-content-center\">";
		echo "<div class=\"col-lg-7\">";
		echo "<div class=\"card o-hidden border-0 shadow-lg my-5\">";
		echo "<div class=\"card-body p-0\">";
		echo "<!-- Nested Row within Card Body -->";
		echo "<div class=\"row\">";
		echo "<div class=\"col-lg\">";
		echo "<div class=\"p-5\">";
		echo "<div class=\"text-center\">";
		echo "<h1 class=\"h4 text-black-50 mb-4\">Customer Detail</h1>";
		echo "</div>";
		echo "<form class=\"user\" method=\"post\" action=\"Konfirmasi_ctrl\">";
		echo "<!-- Cust Name -->";
		echo "<div class=\"form-group\">";
		echo "<label for = 'name'> Name : </label>";
		echo "<input type=\"text\" class=\"form-control form-control-user\" id=\"name\" name=\"name\" value='$name'>";
		echo "</div>";
		echo "<!-- Cust Email -->";
		echo "<div class=\"form-group\">";
		echo "<label for = 'email'> Email : </label>";
		echo "<input type=\"text\" class=\"form-control form-control-user\" id=\"email\" name=\"email\"  value='$email'>";
		echo "</div>";
		echo "<!-- Cust Total Payment -->";
		echo "<div class=\"form-group\">";
		echo "<label for = 'jumlah'> Total : </label>";
		echo "<input type=\"hidden\" class=\"form-control form-control-user\" id=\"totalHarga\" name=\"jumlah\" value='$jumlah'>";
		echo "<p style=\"color:black; font-weight:bold;\">Rp ";echo number_format($jumlah);echo "</p>";
		echo "</div>";
		echo "<!-- Cust Address -->";
		echo "<div class=\"form-group\">";
		echo "<label for = 'Alamat'> Address : </label>";
		echo "<input type=\"text\" class=\"form-control form-control-user\" id=\"address\" name=\"Alamat\" value='$alamat'>";
		echo "</div>";
		echo "<!-- Payment Method -->";
		echo "<div class=\"form-group\">";
		echo "<label for = 'metode'> Payment Method : </label><br>";
		echo "<input type=\"radio\"  name=\"metode\" id='metode' value=\"atm\" style=\"color:black\" checked>  ATM<br>";
		echo "<input type=\"radio\" name=\"metode\" id='metode' value=\"minimarket\">  Grocery Store<br>";
		echo "</div>";
		echo "<!-- Button confirmation -->";
		echo "<button type=\"submit\" class=\"btn btn-primary btn-user btn-block\" name='bayar' id='metode'>";
		echo 'Checkout and Go to Confirmation Page';
		echo "</button>";
		echo "</form>";
		echo "<hr>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
	?>
</body>
</html>