<!--- banner ---->
<div class="banner">
    <div class="container">
        <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Green Wheels - Best in Class for Travel & Hotels</h1>
    </div>
</div>
<div class="container">
    <div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
        <i class="fa fa-columns"></i>
        <h3>WORLD'S MOST TRAVEL BRAND</h3>
    </div>
    <div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
        <h2>Online Tickets with Zero Booking Fees</h2>


        <?php echo form_open('Users/searchBus') ?>
        <div class="ban-top">
            <div class="bnr-left">
                <label class="inputLabel">From</label>
                <input name="start" class="city" type="text" value="Enter a city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required>
            </div>
            <div class="bnr-left">
                <label class="inputLabel">To</label>
                <input name="end" class="city" type="text" value="Enter a city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="ban-bottom">
            <div class="bnr-right">
                <label class="inputLabel">Date of Journey</label>
                <input type="date" name="dDate" required>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="sear">
            <button class="seabtn" type="submit">Search Buses</button>
        </div>
        </form>


    </div>
    <div class="clearfix"></div>
</div>
<!--- /banner ---->
<!--- rupes ---->
<div class="container">
    <div class="rupes">
        <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
            <div class="rup-left">
                <a href="offers.html"><i class="fa fa-usd"></i></a>
            </div>
            <div class="rup-rgt">
                <h3>UP TO USD. 50 OFF</h3>
                <h4><a href="offers.html">TRAVEL SMART</a></h4>
                <p>CODE:YBMAR12<br>Book Using Pay Money</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
            <div class="rup-left">
                <a href="offers.html"><i class="fa fa-h-square"></i></a>
            </div>
            <div class="rup-rgt">
                <h3>UP TO 70% OFF</h3>
                <h4><a href="offers.html">ON HOTELS ACROSS WORLD</a></h4>
                <p>Offer CODE:YBMAR12</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
            <div class="rup-left">
                <a href="offers.html"><i class="fa fa-mobile"></i></a>
            </div>
            <div class="rup-rgt">
                <h3>FLAT USD. 50 OFF</h3>
                <h4><a href="offers.html">BUS APP OFFER</a></h4>
                <p>book via the yellow Bus App<br>CODE:YBMAR12</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /rupes ---->
<!---holiday---->
<div class="container">
    <div class="holiday">
        <div class="col-md-3 holiday-left animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
            <img src="<?php echo base_url('assets/user/images/4.jpg') ?>" class="img-responsive" alt="">
        </div>
        <div class="col-md-6 holiday-mid animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
            <h3>Travel Holiday Packages</h3>
            <p>Private Guide and Driver in any language and in any departure date. For more information please contact us....</p>
        </div>
        <div class="col-md-3 holiday-left animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
            <img src="<?php echo base_url('assets/user/images/5.jpg') ?>" class="img-responsive" alt="">
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!---/holiday---->
<!---track---->
<div class="container">
    <div class="track">
        <div class="col-md-6 track-right wow fadeInLeft animated" data-wow-delay=".5s">
            <a href="track.html"><img src="<?php echo base_url('assets/user/images/map1.png"') ?> class=" img-responsive" alt=""></a>
        </div>
        <div class="col-md-6 track-left wow fadeInRight animated" data-wow-delay=".5s">
            <h3>TRACK MY BUS</h3>
            <p>First of its own kind,bus tracking feature on bus</p>
            <a href="track.html" class="learn">Learn More</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /track ---->
<!--- routes ---->
<div class="routes">
    <div class="container">
        <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
            <div class="rou-left">
                <a href="#"><i class="fa fa-truck"></i></a>
            </div>
            <div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
                <h3>80000</h3>
                <p>ROUTES</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4 routes-left">
            <div class="rou-left">
                <a href="#"><i class="fa fa-user"></i></a>
            </div>
            <div class="rou-rgt">
                <h3>1900</h3>
                <p>BUS OPERATORS</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
            <div class="rou-left">
                <a href="#"><i class="fa fa-ticket"></i></a>
            </div>
            <div class="rou-rgt">
                <h3>7,00,00,000+</h3>
                <p>TICKETS SOLD</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /routes ---->