<?php require'sidebar.php'; ?>
<?php
// Endpoint URL
$url = 'https://new.pet.fitness/webservices/index.php';

if(isset($_POST['submit'])){
// Data to be sent
$data = array(
    'user_id' => '2',
    'f_name' => $_POST['first_name'],
    'l_name' => $_POST['last_name'],
    'street_address' => $_POST['street_address'],
    'address_line' => $_POST['address_line'],
    'city' => $_POST['city'],
    'state' => $_POST['state'],
    'zipcode' => $_POST['zip_code'],
    'phone_number' => $_POST['phone'],
);

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Handle the response
echo $response;
}
?>

<!--Page Container--> 
<section class="page-container">
  <div class="page-content-wrapper">

    <!--Main Content-->

    <div class="content sm-gutter">
      <div class="container-fluid padding-25 sm-padding-10">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h5>Shipping</h5>
            </div>
          </div>

          <div class="col-md-12">
            <div class="block form-block mb-4">

              <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="form-row">

                  <div class="form-group col-md-12">

                    <input type="text" value="" placeholder="First name" name="first_name" class="form-control" required="">
                    <label></label>
                    <input type="text" value="" placeholder="Last name" name="last_name" class="form-control" required="">
										<label></label>
                    <input type="text" value="" placeholder="Street Address" name="street_address" class="form-control" required="">
										<label></label>
                    <input type="text" value="" placeholder="Address Line" name="address_line" class="form-control" required="">
										<label></label>
                    <input type="text" value="" placeholder="City" name="city" class="form-control" id="city" required="">
										<label></label>
                    <select class="custom-select form-control" name="state">
                      <option value selected>State</option>
                      <option value="1">California</option>
                      <option value="0">Alaska</option>
                    </select>
										<label></label>
										<input type="text" name="zip_code" placeholder="Zip Code" class="form-control" >
										<label></label>
										<input type="number" name="phone" placeholder="Phone number" class="form-control" >

                  </div>
                  <hr>
                  <input type="submit" name="submit" value="Save" class="form-control" >
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
