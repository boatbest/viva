<!doctype html>
<html class="no-js" lang=""> 

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VIVA</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

  <body>

    <!-- Header Section -->
        <?php include_once('inc/header.php'); ?>
    <!-- Header Section --> 
    <section id="profile" class="section">
      <div class="container">
                        <div class="register_content">
                        <!-- <div class="col-md-6 col-md-offset-3 col-sm-offset-3"> -->
                                    <form class="">
                                        <div class="header-register text-center">
                                            <h3>ข้อมูลสมาชิก</h3>
                                        </div>
                                        
                                            <!-- display -->
                                            <div class="col-sm-12 col-md-3">
                                                <div class="col-md-12 center-content">
                                                    <img src="images/display.png" class="img-display">
                                                </div>
                                                 <div class="form-group">
                                                        <input type="file" class="form-control" name="imเg-idcard"  required="" value="">
                                                </div>
                                            </div>

                                            <!-- information -->
                                            <div class="col-md-12 col-md-9">
                                                <div class="col-sm-12 sub-header-user-info">
                                                    <label class="">ข้อมูลทั่วไป</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>ชื่อ-นามสกุล :</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" required="" value="สมปอง สมหมาย">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>ที่อยู่ :</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="address" placeholder="ที่อยู่" required="" value="เขตวงศ์สว่าง แขวงบางซื่อ กรุงเทพฯ 10200">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>เบอร์โทรศัพท์ :</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="tel" placeholder="เบอร์โทรศัพท์" required="" value="0871657719">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>email :</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" placeholder="Email" required="" value="sompong@mail.com">
                                                    </div>
                                                </div>
                                            </div>    

                                                <div class="center-content">
                                                    <input type="submit" value="บันทึก" class="btn-ghost btn-green">
                                                </div>
                                    </form>
                                <!-- </div> -->
  
                </div>
      </div>
    </section>

              <!-- footer section -->
        <?php include_once('inc/footer.php'); ?>
        <?php include_once('inc/footer-script.php');?>
        
  </body>
</html>