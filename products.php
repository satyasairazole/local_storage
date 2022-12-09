<?php include_once("header.php");?>
<script src="assets/js/data.js"></script>


<div class="uni-banner">
            <div class="container">
                <div class="uni-banner-text">
                    <h1><span id="pro_name">Power Drives Pulleys</span></h1>
                    <!--<ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Products</li>-->
                        <!--<li id="pro_name" ></li>--
                    </ul>-->
                </div>
            </div>
        </div>
        <!-- uni-banner area end -->

        <!-- project details area start -->
        <div class="project-details ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="service-details-text-area">
                            <img  id="pro_image"src="assets/images/products/power_drive.jpg" alt="image">
                            <h3 id="head_name">Power Drives Pulleys</h3>
                          <p id="cont">We are a leading Exporter of Power Drives Pulleys</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pd-sidebar">
                            <div class="side-bar-section project-details-list">
                                <h3>Products Details</h3>
                                 <ul style="overflow:auto;height:400px">
                                            <li class="nav-item"><a  id="Power_Drives_Pulley" onclick="product_click(this.id)">Power Drives Pulleys</a></li>
                                            <li class="nav-item"><a href="#" id="Machine_Tools" onclick="product_click(this.id)"  >Machine Tools</a></li>
                                            <li class="nav-item"><a href="#" id="Pin_Bush_Couplings" onclick="product_click(this.id)" >Pin Bush Couplings</a></li>
                                            <li class="nav-item"><a href="#" id="Star_Type_Couplings" onclick="product_click(this.id)" >Star Type Couplings</a></li>
                                            <li class="nav-item"><a href="#" id="Taper_Fit_Pulley" onclick="product_click(this.id)" >Taper Fit Pulley</a></li>
                                            <li class="nav-item"><a href="#" id="Tyre_Couplings" onclick="product_click(this.id)" >Tyre Couplings</a></li>
                                            <li class="nav-item"><a href="#" id="Gear_Couplings" onclick="product_click(this.id)" >Gear Couplings</a></li>
                                            <li class="nav-item"><a href="#" id="HRC_Couplings" onclick="product_click(this.id)" >HRC Couplings</a></li>
                                            <li class="nav-item"><a href="#" id="Crusher_Pulleys" onclick="product_click(this.id)" >Crusher_Pulleys</a></li>
                                            <li class="nav-item"><a href="#" id="Timer_Pulleys" onclick="product_click(this.id)" >Timer Pulleys</a></li>
                                            <li class="nav-item"><a href="#" id="Weldon_Hubs" onclick="product_click(this.id)" >Weldon Hubs</a></li>


                                </ul>





                                    
                                <!-- localStorage.getItem("lastname");-->

                                   <!-- <li id="pro_name"><span >Product :</span >Power Drives Pulleys</li>
                                    <li><span>Material :</span>Iron</li>-->
                                    <!--<li><span>Capacity :</span> </li>-->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- project details area end -->
<script>
   let products_name=localStorage.getItem("item_name");
   
  document.getElementById("pro_name").innerHTML =products_name;
   //document.getElementById("check").innerHTML=products_name;
   document.getElementById("head_name").innerHTML=products_name;
   for(var i=0;i<=products.length-1;i++){
    //alert(products[i].product_name+products_name);
    if(products[i].product_name.trim()==products_name.trim()){
        
        document.getElementById("cont").innerHTML=products[i].content;
        document.getElementById("pro_image").src =products[i].img_path;
    }
    
   }
   //alert(products[0].product_name);
</script>

<?php include_once("footer.php");?>