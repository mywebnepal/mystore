@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
		@include('client.sidebar')
		<div class="col-md-9">
		    <div class="card border-0 rounded-0 mb-3 mb-md-4">
		        <div class="card-body">
		        <div class="row">
		          <div class="col col-7"> <!-- hotel slider -->
		          	  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		          	    <ol class="carousel-indicators">
		          	      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		          	      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		          	      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		          	    </ol>
		          	    <div class="carousel-inner" role="listbox">
		          	      <div class="carousel-item active">
		          	        <img class="d-block img-fluid" src="..." alt="First slide">
		          	      </div>
		          	      <div class="carousel-item">
		          	        <img class="d-block img-fluid" src="..." alt="Second slide">
		          	      </div>
		          	      <div class="carousel-item">
		          	        <img class="d-block img-fluid" src="..." alt="Third slide">
		          	      </div>
		          	    </div>
		          	    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		          	      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		          	      <span class="sr-only">Previous</span>
		          	    </a>
		          	    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		          	      <span class="carousel-control-next-icon" aria-hidden="true"></span>
		          	      <span class="sr-only">Next</span>
		          	    </a>
		          	  </div>
		          </div><!-- endinf of hotel slider -->
		          <div class="col col-5">
		          sdfdsaf
			          	<div class="carousel-item"> <!-- room slider -->
			          	  <img src="..." alt="...">
			          	  <div class="carousel-caption d-none d-md-block">
			          	    <h3>room slider</h3>
			          	    <p>this hotel is one of the best hotel</p>
			          	  </div>
			          	</div>
		          </div>
		          
		        </div>
		            
		        </div>
		    </div>

		    <article class="cstm-horizontal-nav-pills">
		        <div class="row">
		            <div class="col-md-12 col-lg-12">
		                <div class="second-content position-relative">
		                    <ul class="nav nav-pills mb-3 bg-white" id="pills-tab" role="tablist">
		                        <li class="nav-item nav-justified">
		                            <a class="nav-link active" id="pills-new-description-tab" data-toggle="pill" href="#pills-new-description" role="tab" aria-controls="pills-new-description" aria-expanded="true">
		                                description
		                            </a>
		                        </li>
		                        <li class="nav-item nav-justified">
		                            <a class="nav-link" id="pills-offers-items-tab" data-toggle="pill" href="#pills-offers-items" role="tab" aria-controls="pills-offers-items" aria-expanded="true">
		                                Comment
		                            </a>
		                        </li>

		                        <li class="nav-item nav-justified">
		                            <a class="nav-link" id="pills-offers-items-tab" data-toggle="pill" href="#product-vedio" role="tab" aria-controls="pills-offers-items" aria-expanded="true">
		                                Product Vedio
		                            </a>
		                        </li>
		                    </ul>
		                    <div class="tab-content bg-white mb-sm-2 mb-md-4" id="first-pills-tabContent">
		                        <div class="tab-pane fade show active" id="pills-new-description" role="tabpanel" aria-labelledby="pills-new-description-tab">
		                            <div class="">
		                                <p class="mb-2">
		                                    <small><strong>Featured Description</strong></small>
		                                </p>
		                                <p>
		                                   asdfsadfdsaf
		                                </p>
		                            </div>
		                        </div>

		                        <div class="tab-pane fade" id="pills-offers-items" role="tabpanel" aria-labelledby="pills-offers-items-tab">
		                          sdfsdafsdf
		                           
		                            <div class="">
		                                dsfdfds
		                                     
		                                     sfdsdaf

		                                      <div class="form-group float-label-control">
		                                         <p class="pull-right">
		                                          sdfsadf
		                                         </p>
		                                      </div>
		                                sdfsdaf
		                            </div>
		                        </div>

		                        <div class="tab-pane fade" id="product-vedio" role="tabpanel" aria-labelledby="product-vedio">
		                            <div class=""> 
		                            
		                               
		                            </div>
		                        </div>

		                    </div>
		                </div>
		            </div>
		        </div>
		     
		    </article>
		    <article class="aside-left card rounded-0 border-0 mb-4">
		        <div class="card-header bg-white">
		            <div class="card-title mb-0">
		                SIMILAR PRODUCTS
		            </div>
		        </div>
		        <div class="card-body">
		            <div class="owl-carousel featured-products owl-theme custom-control-top">
		               sdafsdfsad
		            </div>
		        </div>
		    </article>

		    <!--  -->

		    <!--  -->
		</div>
</div>
@endsection