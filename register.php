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
<div class="wrapper"><!-- start .wrapper -->
    <!-- Header Section -->
        <?php include_once('inc/header.php'); ?>
    <!-- Header Section --> 
    <div class="container">
        <div class="bg_navbar">
            <div class="row">
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="register_content">
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <div class="register-page">
                                    <form>
                                        <div class="header-register text-center">
                                            <h2>สมัครสมาชิก</h2>
                                            <br/>
                                        </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" >
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="ที่อยู่" >
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email" placeholder="เบอร์โทรศัพท์" >
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" placeholder="Email" >
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="name" placeholder="รหัสผ่าน" >
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="pasword" class="form-control" name="email" placeholder="ยืนยันรหัสผ่าน" >
                                                </div>
                                            </div>
                                            
                                            <div class="center-content">
                                                <input type="submit" value="สมัครสมาชิก" class="btn-ghost btn-green">
                                            </div>

                                            <div class="center-content my-10">
                                              <span>หรือ</span>
                                            </div>
                                    </form>
                                    <div class="center-content">
                                          <button type="submit" data-toggle="modal" data-target="#myModal" class="btn-ghost btn-green">เข้าสู่ระบบ</button>
                                    </div>
                              </div>
                                      
                          </div>
                      </div>

                </div>
            </div>
        </section>
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เข้าสู่ระบบ</h4>
      </div>
      <div class="modal-body">
        <form>
              <div class="col-sm-12">
                  <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email" >
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <input type="password" class="form-control" name="name" placeholder="รหัสผ่าน" >
                  </div>
              </div>
              <div class="center-content">
                  <input type="submit" value="เข้าสู่ระบบ" class="btn-ghost btn-green">
              </div>

      </form>
      </div>
    </div>
  </div>
</div>

              <!-- footer section -->
        <?php include_once('inc/footer.php'); ?>
        <?php include_once('inc/footer-script.php');?>
        
  </body>
</html>