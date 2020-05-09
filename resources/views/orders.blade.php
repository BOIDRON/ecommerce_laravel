@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Commande</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Commande</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
    <!-- End Banner Area -->
    

    <div class="container my-5">
        <div class="orders">
            <h2 class="text-center"> Détails de la Commande</h2>
            <div class="table-responsive orders_details_table">
                <div class="d-flex justify-content-between my-5 px-5">
                 <h4>
                    <i class="fas fa-receipt"></i>
                    Cde #030408
                 </h4>
                 <h4>Date : 03/04/2008</h4>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <td class="col">Produit</td>
                            <td class="col">Quantité</td>
                            <td class="col">Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nom du Produit</td>
                            <td>x 1</td>
                            <td>€ 6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection