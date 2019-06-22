<?php
session_start();
include 'dbconnect.php';
include 'check_user_login_status.php';
?>
<?php include 'header.php'; ?>
  <!-- //navbar ends here -->
<!-- banner -->
 <div class="banner-bg-inner">
<!-- banner-text -->
<div class="banner-text-inner">
	<div class="container">
		<h2 class="title-inner">
			world of reading
		</h2>
	</div>
</div>
<!-- //banner-text -->
</div>
<!-- //banner -->
     <!-- about -->
  <div class="about-sec section">
      <div class="container">
          <!-- about-left-grid -->
          <div class=" col-md-12">
            <h4 class="rad-txt">
                <span class="abtxt1"> BOOKTube </span>
                <span class="abtext">Originals</span>
            </h4>
  					     <div class="wrapper_top_shop">
  						           <!-- top picked book section -->

              							<!-- row1-->

                            <?php

                                    
                                     $result1=mysqli_query($con,"select * from free_books WHERE Dymenson_Exclusive = 'Yes'  ORDER BY Book_ID DESC LIMIT 3");
                                     $c=0;
                                     while($row1=mysqli_fetch_array($result1))
                                     {

                                        $c++;
                                      if($c==1)
                                      {

                                                  ?>

                          <div class="product-sec1">

                            <?php
                                       $icon="../Books/".$row1["Book_Front_Image"];
                            ?>
              							<div class="col-md-4 product-men">
              								<div class="product-chr-info chr">
              									<div class="thumbnail">
              										<a href="read_section.php?book_id=<?php echo $row1["Book_ID"];?>">
              											<img src="<?php echo $icon; ?>" alt="">
              										</a>
              									</div>
              									<div class="caption">
              										<h4><?php echo $row1["Book_Name"]; ?></h4>
              										<p><?php echo $row1["Poster_Name"]; ?></p>
              										<div class="matrlf-mid">
              											<ul class="rating">
              												<li>
              													<a href="#">
              														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
              													</a>
              												</li>
              												<li>
              													<a href="#">
              														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
              													</a>
              												</li>
              												<li>
              													<a href="#">
              														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
              													</a>
              												</li>
              												<li>
              													<a href="#">
              														<span class="fa fa-star gray-star" aria-hidden="true"></span>
              													</a>
              												</li>
              												<li>
              													<a href="#">
              														<span class="fa fa-star gray-star" aria-hidden="true"></span>
              													</a>
              												</li>
              											</ul>
              											<div class="clearfix"> </div>
              										</div>
                                  <form action="read_section.php"  method="get">
                      						 <input type="hidden" name="book_id" value="<?php echo $row1["Book_ID"]; ?>">
                                   <button onclick="window.location.href='read_section.php?<?php echo $row1["Book_ID"];?>'" class="chr-cart pchr-cart" >
                                     Read this book
                                     <i class="fa fa-book" aria-hidden="true"></i>
                                   </button>
                      						</form>


              									</div>
              								</div>
              							</div>

                            <?php
                    							}
                    							else if($c==2)
                    							{
  					               ?>

                           <?php
                                      $icon="../Books/".$row1["Book_Front_Image"];
                           ?>
                           <div class="col-md-4 product-men">
                             <div class="product-chr-info chr">
                               <div class="thumbnail">
                                 <a href="read_section.php?book_id=<?php echo $row1["Book_ID"];?>">
                                   <img src="<?php echo $icon; ?>" alt="">
                                 </a>
                               </div>
                               <div class="caption">
                                 <h4><?php echo $row1["Book_Name"]; ?></h4>
                                 <p><?php echo $row1["Poster_Name"]; ?></p>
                                 <div class="matrlf-mid">
                                   <ul class="rating">
                                     <li>
                                       <a href="#">
                                         <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                       </a>
                                     </li>
                                     <li>
                                       <a href="#">
                                         <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                       </a>
                                     </li>
                                     <li>
                                       <a href="#">
                                         <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                       </a>
                                     </li>
                                     <li>
                                       <a href="#">
                                         <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                       </a>
                                     </li>
                                     <li>
                                       <a href="#">
                                         <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                       </a>
                                     </li>
                                   </ul>
                                   <div class="clearfix"> </div>
                                 </div>
                                 <form action="read_section.php"  method="get">
                                  <input type="hidden" name="book_id" value="<?php echo $row1["Book_ID"]; ?>">
                                  <button onclick="window.location.href='read_section.php?<?php echo $row1["Book_ID"];?>'" class="chr-cart pchr-cart" >
                                    Read this book
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                  </button>
                                 </form>


                               </div>
                             </div>
                           </div>

                           <?php
              							}
              							else if($c==3)
              							{
              							  $c=0;
              							?>

                            <?php
                                       $icon="../Books/".$row1["Book_Front_Image"];
                            ?>
                            <div class="col-md-4 product-men">
                              <div class="product-chr-info chr">
                                <div class="thumbnail">
                                  <a href="read_section.php?book_id=<?php echo $row1["Book_ID"];?>">
                                    <img src="<?php echo $icon; ?>" alt="">
                                  </a>
                                </div>
                                <div class="caption">
                                  <h4><?php echo $row1["Book_Name"]; ?></h4>
                                  <p><?php echo $row1["Poster_Name"]; ?></p>
                                  <div class="matrlf-mid">
                                    <ul class="rating">
                                      <li>
                                        <a href="#">
                                          <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                        </a>
                                      </li>
                                    </ul>
                                    <div class="clearfix"> </div>
                                  </div>
                                  <form action="read_section.php"  method="get">
                                   <input type="hidden" name="book_id" value="<?php echo $row1["Book_ID"]; ?>">
                                   <button onclick="window.location.href='read_section.php?<?php echo $row1["Book_ID"];?>'" class="chr-cart pchr-cart" >
                                     Read this book
                                     <i class="fa fa-book" aria-hidden="true"></i>
                                   </button>
                                  </form>


                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                            	<?php }} ?>
                              <div class="clearfix"></div>
                              <div>
                                <button onclick="window.location.href='our_books.php'" class="btn btn-primary" style="float:right; margin-top:10px;" >
                                  Show More
                                  <i class="fa fa-book" aria-hidden="true"></i>
                                </button>

                              </div>
              				      <!-- //row1 -->


              					<!--		<div class="clearfix"></div>-->



          						<!-- //end of top picked booksec -->
          					<!--<div class="clearfix"></div>-->
		            </div>

	          </div>

            <div class="clearfix"></div>
              <!-- //about left bottom - services ends here -->
      </div>


  </div>
  <div class="about-sec section">
      <div class="container">
          <!-- about-left-grid -->
          <div class=" col-md-12">
  <h4 class="rad-txt">
      <span class="abtxt1"> From </span>
      <span class="abtext">The Globe </span>
  </h4>
  <div class="wrapper_top_shop">
          <!-- top picked book section -->

             <!-- row1-->

             <?php
                      
                      $result1=mysqli_query($con,"select * from free_books WHERE Dymenson_Exclusive = 'No'  ORDER BY Book_ID DESC LIMIT 3");
                      $c=0;
                      while($row1=mysqli_fetch_array($result1))
                      {

                        $c++;
                        if($c==1)
                        {

                                  ?>

                        <div class="product-sec1">

                        <?php
                        $icon="../Books/".$row1["Book_Front_Image"];
                        ?>
                        <div class="col-md-4 product-men">
                        <div class="product-chr-info chr">
                        <div class="thumbnail">
                        <a href="read_section.php?book_id=<?php echo $row1["Book_ID"];?>">
                        <img src="<?php echo $icon; ?>" alt="">
                        </a>
                        </div>
                        <div class="caption">
                        <h4><?php echo $row1["Book_Name"]; ?></h4>
                        <p><?php echo $row1["Poster_Name"]; ?></p>
                        <div class="matrlf-mid">
                        <ul class="rating">
                        <li>
                        <a href="#">
                          <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                          <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                          <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                          <span class="fa fa-star gray-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                          <span class="fa fa-star gray-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        </ul>
                        <div class="clearfix"> </div>
                        </div>
                        <form action="read_section.php"  method="get">
                        <input type="hidden" name="book_id" value="<?php echo $row1["Book_ID"]; ?>">
                        <button onclick="window.location.href='read_section.php?<?php echo $row1["Book_ID"];?>'" class="chr-cart pchr-cart" >
                        Read this book
                        <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        </form>


                        </div>
                        </div>
                        </div>

                        <?php
                        }
                        else if($c==2)
                        {
                        ?>

                        <?php
                        $icon="../Books/".$row1["Book_Front_Image"];
                        ?>
                        <div class="col-md-4 product-men">
                        <div class="product-chr-info chr">
                        <div class="thumbnail">
                        <a href="read_section.php?book_id=<?php echo $row1["Book_ID"];?>">
                        <img src="<?php echo $icon; ?>" alt="">
                        </a>
                        </div>
                        <div class="caption">
                        <h4><?php echo $row1["Book_Name"]; ?></h4>
                        <p><?php echo $row1["Poster_Name"]; ?></p>
                        <div class="matrlf-mid">
                        <ul class="rating">
                        <li>
                        <a href="#">
                         <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                         <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                         <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                         <span class="fa fa-star gray-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                         <span class="fa fa-star gray-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        </ul>
                        <div class="clearfix"> </div>
                        </div>
                        <form action="read_section.php"  method="get">
                        <input type="hidden" name="book_id" value="<?php echo $row1["Book_ID"]; ?>">
                        <button onclick="window.location.href='read_section.php?<?php echo $row1["Book_ID"];?>'" class="chr-cart pchr-cart" >
                        Read this book
                        <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        </form>


                        </div>
                        </div>
                        </div>

                        <?php
                        }
                        else if($c==3)
                        {
                        $c=0;
                        ?>

                        <?php
                        $icon="../Books/".$row1["Book_Front_Image"];
                        ?>
                        <div class="col-md-4 product-men">
                        <div class="product-chr-info chr">
                        <div class="thumbnail">
                        <a href="read_section.php?book_id=<?php echo $row1["Book_ID"];?>">
                        <img src="<?php echo $icon; ?>" alt="">
                        </a>
                        </div>
                        <div class="caption">
                        <h4><?php echo $row1["Book_Name"]; ?></h4>
                        <p><?php echo $row1["Poster_Name"]; ?></p>
                        <div class="matrlf-mid">
                        <ul class="rating">
                        <li>
                        <a href="#">
                          <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>bbbbbbb
                        </li>
                        <li>
                        <a href="#">
                          <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                          <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                          <span class="fa fa-star gray-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                          <span class="fa fa-star gray-star" aria-hidden="true"></span>
                        </a>
                        </li>
                        </ul>
                        <div class="clearfix"> </div>
                        </div>
                        <form action="read_section.php"  method="get">
                        <input type="hidden" name="book_id" value="<?php echo $row1["Book_ID"]; ?>">
                        <button onclick="window.location.href='read_section.php?<?php echo $row1["Book_ID"];?>'" class="chr-cart pchr-cart" >
                        Read this book
                        <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        </form>


                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        <?php }} ?>
                    </div>
                    <div>
                      <button onclick="window.location.href='other_books.php'" class="btn btn-primary" style="float:right; margin-top:10px;" >
                        Show More
                        <i class="fa fa-book" aria-hidden="true"></i>
                      </button>

                    </div>
      </div>
    </div>
  </div>
</div>


  <!-- //about ends here -->

<?php include 'footer.php'; ?>