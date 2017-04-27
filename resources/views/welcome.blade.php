

<!DOCTYPE html>
<title>welcome</title>

<!-- Bootstrap 4 alpha CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">


		
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>


<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>


@include('menuactive')


<div class="container-fluid">
		

<div id="my-pics" class="carousel slide carousel-fade" data-ride="carousel"  style="width:1300px">

      <ol class="carousel-indicators">
          <li data-target="#my-pics" data-slide-to="0" class="active"></li>
          <li data-target="#my-pics" data-slide-to="1"></li>
          <li data-target="#my-pics" data-slide-to="2"></li>
      </ol>


      <div class="carousel-inner" role="listbox" >

               
                <div class="carousel-item active">
                    <img src="oct1.jpg" style="width:1300px"  >
                </div>

                
                <div class="carousel-item">
                    <img src="oct1.jpg" style="width:1300px" >
                    <div class="carousel-caption">
                    </div>
                </div>

             
                <div class="carousel-item">
                    <img src="oct1.jpg" style="width:1300px"  >
                    <div class="carousel-caption">
                    </div>
                </div>

        </div>

      
          <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
          </a>


          <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
          </a>

</div>


<style scoped>
.carousel-item img{
    margin: 5 auto;
}
</style>


</div>


