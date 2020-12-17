<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bootstrap Carousel</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="css/style.css?v2.0">
</head>

<body>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">

				<div class="page-header">
					<h3>Bootstrap Carousel with Sliding Panel</h3>
					<p>Sliding panel with ajax request</p>
					<p>something wrong with the fontawesome </p>

					<i class="fa fa-chevron-left"></i>
				</div>
				<div class="container-fluid">



					<!--Carousel Wrapper-->
					<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

						<!--Controls-->
						<div class="controls-top">
							<a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i>Back</a>
							<a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i>Next</a>
						</div>
						<!--/.Controls-->

						<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#multi-item-example" data-slide-to="0" class="active">1</li>
							<li data-target="#multi-item-example" data-slide-to="1">2</li>
							<li data-target="#multi-item-example" data-slide-to="2">3</li>
						</ol>
						<!--/.Indicators-->

						<!--Slides-->
						<div class="carousel-inner" role="listbox">

							<!--First slide-->
							<div class="carousel-item active">

								<div class="row">
									<div class="col-md-4">
										<div class="card mb-2">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
											<div class="card-body">
												<h4 class="card-title">
													<a href="#0" class="cd-btn js-cd-panel-trigger btn btn-primary" data-panel="main" data-id="123">123</a>
												</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
													card's content.</p>

											</div>
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="card mb-2">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
													card's content.</p>
												<a class="btn btn-primary">Button</a>
											</div>
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="card mb-2">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
													card's content.</p>
												<a class="btn btn-primary">Button</a>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!--/.First slide-->

							<!--Second slide-->
							<div class="carousel-item">

								<div class="row">
									<div class="col-md-4">
										<div class="card mb-2">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
													card's content.</p>
												<a class="btn btn-primary">Button</a>
											</div>
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="card mb-2">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
													card's content.</p>
												<a class="btn btn-primary">Button</a>
											</div>
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="card mb-2">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
													card's content.</p>
												<a class="btn btn-primary">Button</a>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!--/.Second slide-->

							<!--Third slide-->
							<div class="carousel-item">

								<div class="row">
									<div class="col-md-4">
										<div class="card mb-2">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" alt="Card image cap">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
													card's content.</p>
												<a class="btn btn-primary">Button</a>
											</div>
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="card mb-2">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg" alt="Card image cap">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
													card's content.</p>
												<a class="btn btn-primary">Button</a>
											</div>
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="card mb-2">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg" alt="Card image cap">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
													card's content.</p>
												<a class="btn btn-primary">Button</a>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!--/.Third slide-->

						</div>
						<!--/.Slides-->

					</div>
					<!--/.Carousel Wrapper-->


				</div>



				<div class="carousel slide" id="myCarousel">
					<div class="carousel-inner">
						<div class="item active">




						</div><!-- /Slide1 -->


					</div>

					<div class="text-center" style="float: right;width:150px;">
						<a data-slide="prev" href="#myCarousel" class="carousel-control left"><i class="fas fa-chevron-circle-left"></i></a>
						<a data-slide="next" href="#myCarousel" class="carousel-control right"><i class="fas fa-chevron-circle-right"></i></a>
					</div><!-- /.control-box -->

				</div><!-- /#myCarousel -->

			</div><!-- /.span12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->




	<div class="cd-panel cd-panel--from-right js-cd-panel-main" id="view_contact">
		<header class="cd-panel__header">
			<a href="#0" class="cd-panel__close js-cd-close">Close</a>
		</header>
		<div class="cd-panel__container">
			<div class="cd-panel__content">
				<p id="showid"></p>
				<h2 id="result"></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam magnam accusamus obcaecati nisi eveniet quo veniam quibusdam veritatis autem accusantium doloribus nam mollitia maxime explicabo nemo quae aspernatur impedit cupiditate dicta molestias consectetur, sint reprehenderit maiores. Tempora, exercitationem, voluptate. Sapiente modi officiis nulla sed ullam, amet placeat, illum necessitatibus, eveniet dolorum et maiores earum tempora, quas iste perspiciatis quibusdam vero accusamus veritatis. Recusandae sunt, repellat incidunt impedit tempore iusto, nostrum eaque necessitatibus sint eos omnis! Beatae, itaque, in. Vel reiciendis consequatur saepe soluta itaque aliquam praesentium, neque tempora. Voluptatibus sit, totam rerum quo ex nemo pariatur tempora voluptatem est repudiandae iusto, architecto perferendis sequi, asperiores dolores doloremque odit. Libero, ipsum fuga repellat quae numquam cumque nobis ipsa voluptates pariatur, a rerum aspernatur aliquid maxime magnam vero dolorum omnis neque fugit laboriosam eveniet veniam explicabo, similique reprehenderit at. Iusto totam vitae blanditiis. Culpa, earum modi rerum velit voluptatum voluptatibus debitis, architecto aperiam vero tempora ratione sint ullam voluptas non! Odit sequi ipsa, voluptatem ratione illo ullam quaerat qui, vel dolorum eligendi similique inventore quisquam perferendis reprehenderit quos officia! Maxime aliquam, soluta reiciendis beatae quisquam. Alias porro facilis obcaecati et id, corporis accusamus? Ab porro fuga consequatur quisquam illo quae quas tenetur.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque similique, at excepturi adipisci repellat ut veritatis officia, saepe nemo soluta modi ducimus velit quam minus quis reiciendis culpa ullam quibusdam eveniet. Dolorum alias ducimus, ad, vitae delectus eligendi, possimus magni ipsam repudiandae iusto placeat repellat omnis veritatis adipisci aliquam hic ullam facere voluptatibus ratione laudantium perferendis quos ut. Beatae expedita, itaque assumenda libero voluptatem adipisci maiores voluptas accusantium, blanditiis saepe culpa laborum iusto maxime quae aperiam fugiat odit consequatur soluta hic. Sed quasi beatae quia repellendus, adipisci facilis ipsa vel, aperiam, consequatur eaque mollitia quaerat. Iusto fugit inventore eveniet velit.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque similique, at excepturi adipisci repellat ut veritatis officia, saepe nemo soluta modi ducimus velit quam minus quis reiciendis culpa ullam quibusdam eveniet. Dolorum alias ducimus, ad, vitae delectus eligendi, possimus magni ipsam repudiandae iusto placeat repellat omnis veritatis adipisci aliquam hic ullam facere voluptatibus ratione laudantium perferendis quos ut. Beatae expedita, itaque assumenda libero voluptatem adipisci maiores voluptas accusantium, blanditiis saepe culpa laborum iusto maxime quae aperiam fugiat odit consequatur soluta hic. Sed quasi beatae quia repellendus, adipisci facilis ipsa vel, aperiam, consequatur eaque mollitia quaerat. Iusto fugit inventore eveniet velit.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam magnam accusamus obcaecati nisi eveniet quo veniam quibusdam veritatis autem accusantium doloribus nam mollitia maxime explicabo nemo quae aspernatur impedit cupiditate dicta molestias consectetur, sint reprehenderit maiores. Tempora, exercitationem, voluptate. Sapiente modi officiis nulla sed ullam, amet placeat, illum necessitatibus, eveniet dolorum et maiores earum tempora, quas iste perspiciatis quibusdam vero accusamus veritatis. Recusandae sunt, repellat incidunt impedit tempore iusto, nostrum eaque necessitatibus sint eos omnis! Beatae, itaque, in. Vel reiciendis consequatur saepe soluta itaque aliquam praesentium, neque tempora. Voluptatibus sit, totam rerum quo ex nemo pariatur tempora voluptatem est repudiandae iusto, architecto perferendis sequi, asperiores dolores doloremque odit. Libero, ipsum fuga repellat quae numquam cumque nobis ipsa voluptates pariatur, a rerum aspernatur aliquid maxime magnam vero dolorum omnis neque fugit laboriosam eveniet veniam explicabo, similique reprehenderit at. Iusto totam vitae blanditiis. Culpa, earum modi rerum velit voluptatum voluptatibus debitis, architecto aperiam vero tempora ratione sint ullam voluptas non! Odit sequi ipsa, voluptatem ratione illo ullam quaerat qui, vel dolorum eligendi similique inventore quisquam perferendis reprehenderit quos officia! Maxime aliquam, soluta reiciendis beatae quisquam. Alias porro facilis obcaecati et id, corporis accusamus? Ab porro fuga consequatur quisquam illo quae quas tenetur.</p>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	<script src="js/index.js"></script>
	<script>
		/*
$(document).on("click", ".cd-btn", function() {
    var adminid = $(this).data('id');
    $("#view_contact #showid").text(adminid);
    //$('#view_contact').modal('show');
});
*/



		$(document).on("click", ".cd-btn", function() {
			var numValue = $(this).data('id');
			// Send the input data to the server using get
			$.get("test.php", {
				number: numValue
			}, function(data) {
				// Display the returned data in browser
				$("#result").html(data);
			});
		});
	</script>
</body>

</html>