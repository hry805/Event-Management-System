
<?php
$ret = "Select  PhoneNumber,address,EmailId,footercontent from tblgenralsettings ";
$querys = $dbh -> prepare($ret);
$querys->execute();
$resultss=$querys->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($querys->rowCount() > 0)
{
foreach($resultss as $rows)
{ ?>


 <div class="information-area off-white ptb100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="single-information singleffoter text-center">
                                    <div class="info-icon">
                                        <i class="zmdi zmdi-phone"></i>
                                    </div>
                                    <h4 class="phonestyle">Phone</h4>
                                    <p><?php echo htmlentities($rows->PhoneNumber);?></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="single-information singleffoter text-center">
                                    <div class="info-icon">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <h4 class="phonestyle">E-Mail</h4>
                                    <p><a href="mailto:company@email.com"><?php echo htmlentities($rows->EmailId);?></a></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="single-information singleffoter text-center">
                                    <div class="info-icon">
                                        <i class="zmdi zmdi-city-alt"></i>
                                    </div>
                                    <h4 class="phonestyle"><?php echo htmlentities($rows->address);?></h4>
                                
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            <!--information area are start-->

            <!--footer area are start-->
            <div class="footer-area" align="center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12  pt30" >
                            <div class="social-area" style="color: gray ;">
                                <h4>   <?php echo htmlentities($rows->footercontent);?></h4>
                          
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <?php }} ?>