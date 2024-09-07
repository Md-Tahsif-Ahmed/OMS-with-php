
<html>
<head>
<meta name="description" content="Twitter botstrap tab" />
<script src="https://code.jquery.com/jquery.min.js"></script>
<link href="https://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="https://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap.js"></script>
  <meta charset="utf-8">
  <title>JS Bin</title>
</head>

<style>
body{
  font-family:Georgia;
}
a{
  color:black;
}
.nav .nav-tab{
  box-shadow: 0 1px 3px rgba(0,0,0,.25);
}
.tab-content{
  padding:3px 0px 0px 8px;
  
  border: 5px solid green;
  box-shadow: 0 1px 3px rgba(0,0,0,.25);
  margin-left:1px;
}
.box-shadow(@shadow: 0 1px 3px rgba(0,0,0,.25)) {
  -webkit-box-shadow: @shadow;
     -moz-box-shadow: @shadow;
          box-shadow: @shadow;
}
</style>



<body>
  <br /><br /><br />
  <div class="container">
			<ul class="nav nav-tabs" id="myTab" style="margin-bottom:0px">
              <li class="active"><a data-toggle="tab" href="#home" style="background-color:white"><i class="icon-home"></i> Home</a></li>
              <li><a data-toggle="tab" href="#profile" style="background-color:blue"><i class="icon-user"></i> Profile</a></li>
              <li class="dropdown" >
                <a data-toggle="dropdown" class="dropdown-toggle" style="background-color:orange" href="#" >Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu" style="background-color:red" >
                  <li style="background-color:red"><a data-toggle="tab" style="background-color:red" href="#dropdown1">@fat</a></li>
                  <li><a data-toggle="tab" style="background-color:red" href="#dropdown2">@mdo</a></li>
                </ul>
              </li>
            </ul>

  <div class="tab-content box-shadow" id="myTabContent" >
              <div id="home" class="tab-pane fade in active">
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
              </div>
              <div id="profile" class="tab-pane fade">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
              </div>
              <div id="dropdown1" class="tab-pane fade">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              </div>
              <div id="dropdown2" class="tab-pane fade">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
              </div>
            </div>
  </div>
  
</body>

<script>
$(document).ready(function(){
  $("a[data-toggle='tab']").click(function(e){
    $(".tab-content").css("border-color",$(this).css('backgroundColor'));
  });
});
</script>
