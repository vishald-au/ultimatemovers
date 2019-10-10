<div class="row footer text-center">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
        <p>Copyright © <span id="year">2019</span> ultimatemoversoc.com</p>
    </div>
</div>
<div class="fl-menu">
    <ul>
        <li class="cl-box" id="cl1"><a><i class="fas fa-chevron-right"></i></a></li>
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php#estimate">FREE ESTIMATES</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php">Moving Services</a></li>
        <li><a href="support.php">SUPPORT</a></li>
    </ul>
</div>
<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
<script>
    $("#mm").click(function(){
      $("#mm").toggleClass("active");
      $(".fl-menu").toggleClass("show");
      $(".float-side").toggleClass("move");
    });
    $("#cl1").click(function(){
      $("#mm").toggleClass("active");
      $(".fl-menu").toggleClass("show");
      $(".float-side").toggleClass("move");
    });
</script>
<script>
    $("#tab1 h4").click(function(){
      $(this).addClass("active");
      $("#tab1 p").addClass("show");
      $("#tab2 h4").removeClass("active");
      $("#tab2 p").removeClass("show");
      $("#tab3 h4").removeClass("active");
      $("#tab3 p").removeClass("show");
    });
    $("#tab2 h4").click(function(){
      $(this).addClass("active");
      $("#tab2 p").addClass("show");
      $("#tab1 h4").removeClass("active");
      $("#tab1 p").removeClass("show");
      $("#tab3 h4").removeClass("active");
      $("#tab3 p").removeClass("show");
    });
    $("#tab3 h4").click(function(){
      $(this).addClass("active");
      $("#tab3 p").addClass("show");
      $("#tab1 h4").removeClass("active");
      $("#tab1 p").removeClass("show");
      $("#tab2 h4").removeClass("active");
      $("#tab2 p").removeClass("show");
    });
</script>
</body>
</html>