<?php
function component($productname, $productprice,$productquantity, $productimg, $productid, $productdesc){
    $element = "
	<div class=\"col-md-3 col-sm-6 my-3 ny-md-0\">
		<form action=\"indexbynina.php\" method=\"post\">
			<div class=\"card shadow\">
				<div>
					<img src=\"$productimg\" alt=\"image1\" class=\"img-fluid img-fluid card-img-top\">
				</div>
				<div class=\"card-body\">
					<h5 class=\"card-title\">$productname</h5> 
					<p class=\"card-text\">
						$productdesc 
					</p>

					<h5 class=\"price\">
						<span class=\"price\">$productprice Baht</span>
					</h5>
                    <h5>
                       <span class=\"badge badge-pill badge-secondary\">Quantity : $productquantity</span>
                    </h5>
					<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart<i class=\"fas fa-shopping-cart\"></i></button>
					<input type='hidden' name='product_id' value='$productid'>
				</div>
			</div>
		</form>
	</div>
	";
    echo $element;

	
}
	
function displayorder($OrderID, $OrderTotalprice,  $OrderFullname, $OrderPayment){
        $element = " 	
                   <h4>Name : $OrderFullname</h4>
                        
                   <form action=\"deleteorder.php\" method=\"post\">
                        <table class=\"table table-bordered extra-padding bg-white text-dark\">
    						<tbody>
                             <thead class=\"thead-light\">
    							<tr>
    								<th>Order ID</th>
    								<th>Cart Subtotal</th>
    								<th>Shipping and Handling</th>
    								<th>Order total</th>
                                    <th>PaymentType</th>
    								<th>Action</th>
                                    
    							</tr>
                              </thead>
    							<tr>
    								<td>$OrderID</td>
    								<td>$OrderTotalprice Baht</td>
    								<td>FREE SHIPPING</td>
    								<td>$OrderTotalprice Baht</td>
                                    <td>$OrderPayment</td>
    								<td><button class=\"btn btn-danger\" name=\"delete\" href=\"deleteorder.php\">Cancel</button></td>
    							</tr>
    						</tbody>
                            <input type='hidden' name='order_id' value='$OrderID'>
					   </table>
                    </form>";
                echo $element;      
    }

/*--------------------------*/
function cartElement($productimg, $productname, $productprice,$productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">$productprice Baht</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}


function cartElementpim($productimg, $productname, $productprice,$productid,$productqty){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                
                                <h5 class=\"pt-2\">$productprice Baht</h5>
                                <h6 class=\"pt-2\">Quantity : 1 pack</h6> 
                            </div>

                            <div class=\"col-md-3 py-5\">
                                <div>
                                       
                                       <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>                          
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
//<input type=\"number\" name=\"qty\" class=\"form-control itemQty\" min=1 max=$productqty>



function cartElementmae($productimg, $productname, $productprice){
    $element = "
    
    <form action=\"carttestbynina.php\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input id=\"demoInput\" type=\"number\" min=\"1\" max=\"100\">
                                    
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

