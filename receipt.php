<!DOCTYPE html>
<?php 
session_start();
 ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="receipt.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>

<body>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12">
                <div class="card" id="invoice">
                <div> <a href ="Account.php">Back Account Detail</a></div> <br>
                    <div class="card-header bg-transparent header-elements-inline">
                        <h2 style="color: #ed8142; font-weight:bold;">TMFlix</h2>
						<h4>Payment Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4 pull-left">

                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>TMFlix Headquarter</li>
                                        <li>Kota Samarahan, Sarawak, 94300</li>
                                        <li>Phone | +60123456789</li>
										<li>Fax | 123456</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4 ">
                                    <div class="text-sm-right">
                                        <h4 class="invoice-color mb-2 mt-md-2">Invoice #BBB1243</h4>
                                        <ul class="list list-unstyled mb-0">
                                            <li>Plan Start Date: <?php echo $_SESSION['startdate']?> <span class="font-weight-semibold"><p id="date"></p></span></li>
											<script>
                                            document.getElementById("date").innerHTML=localStorage.getItem("date");
                                            </script>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex flex-md-wrap">
                            <div class="mb-4 mb-md-2 text-left"> <span class="text-muted">Receipt for: <?php echo $_SESSION['Username']?></span>
                                <ul class="list list-unstyled mb-0">
                                    <li>
                                    <h5 class="my-2" id="fullname"></h5>
								    <script>
                                    document.getElementById("fullname").innerHTML=localStorage.getItem("fullname");
                                    </script>
                                    </li>
                                    <li><span class="font-weight-semibold">Card Number: <?php echo $_SESSION['cardnum']?> 
                                    <p id="card_number">
                                    </p></span></li>
                                    <script>
                                    document.getElementById("card_number").innerHTML=localStorage.getItem("card_number");
                                    </script>
									<li><span class="font-weight-semibold">Plan End Date: <?php echo $_SESSION['enddate']?><p id="expired_date"></p></span></li>
									<script>
                                    document.getElementById("expired_date").innerHTML=localStorage.getItem("expired_date");
                                    </script>
                                    <li><span class="font-weight-semibold">Email: <?php echo $_SESSION['Email']?><p id="CVV"></p></span></li>
									<script>
                                    document.getElementById("CVV").innerHTML=localStorage.getItem("CVV");
                                    </script>
		
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>Plan</th> 
                                    <th>Membership Type</th>
									<th>Membership Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <?php echo $_SESSION['ID']?>
                                    </td>
									
                                    <td>
                                    <?php echo $_SESSION['plan']?>
				                    </td>

                                    <td><?php echo $_SESSION['membership']?></td>
									
									
                                    <td><h6 id="addrequest"></h6>
									<?php echo $_SESSION['price']?>
									</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
					
					
					
                    <div class="card-body">
                        <div class="d-md-flex flex-md-wrap">
                            <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="text-left">Sum:</th>
                                                <td class="text-right"><?php echo $_SESSION['price']?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Grand Total:</th>
                                                <td class="text-right text-primary">
                                                    <h5>RM<?php echo $_SESSION['price']?></h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
							
                        </div>
                    </div>
                    
            </div>
            <br>
            <div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download"> download pdf</button>
            </div>
                            </div>
        </div>
		
    </div>
	
</body>

</html>