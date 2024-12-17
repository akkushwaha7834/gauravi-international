<?php include ('include/header.php'); ?>

<!-- Breadcrumb section -->
<section class="section-space bg-image breadcrumb-overlay position-relative"
    style="background-image: url('assets/images/banner.jpg')">
    <div class="container position-relative z-1 py-md-5 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h1 class="h1 mb-2 text-white">Product Catalog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-white"><a href="./" class="text-white">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Product Catalog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->


<section class="top-traded-markets why-trade-sec">
   <div class="container">
      <div class="row g-4 align-items-center justify-content-center">
         <div class="col-lg-12">
            <div class="tabs_with_accordion_wrapper  tabs-sec-two  tabs-box position-relative z-1">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="tab-btns  h-100">
                        <!-- Nav Tabs List -->
                        <ul class="nav nav-tabs d-none d-lg-block" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link  active" id="#Forex-tab" data-bs-toggle="tab" data-bs-target="#Forex" type="button" role="tab" aria-controls="Forex" aria-selected="true">Luxury Bedding Collections <i class="ri-arrow-right-line"></i></button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link " id="Commodities-tab" data-bs-toggle="tab" data-bs-target="#Commodities" type="button" role="tab" aria-controls="Commodities" aria-selected="false" tabindex="-1">Handloom Treasures<i class="ri-arrow-right-line"></i></button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link " id="Indices-tab" data-bs-toggle="tab" data-bs-target="#Indices" type="button" role="tab" aria-controls="Indices" aria-selected="false" tabindex="-1">Specialized B2B Offerings<i class="ri-arrow-right-line"></i></button>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-7">

                     <!-- Nav Tabs Content -->
                     <div class="tab-content tabs-content-two position-relative h-100" id="myTabContent">
                        <div class="tab-pane accordion-item fade show active" id="Forex" role="tabpanel" aria-labelledby="Forex-tab">
                           <h2 class="accordion-header mobile-btn d-lg-none" id="headingForex">
                              <button class="accordion-button gap-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseForex" aria-expanded="true" aria-controls="collapseForex">24/5 Trading </button>
                           </h2>
                           <div id="collapseForex" class="accordion-collapse collapse show" aria-labelledby="headingForex" data-bs-parent="#myTabContent">
                              <div class="accordion-body">
                                 <h3 class="tab-content-title">24/5 Trading</h3>
                                 <p>Forex trading distinguishes itself by operating 24 hours a day, five days a week, transcending time zones and enabling you to trade at your convenience, without being constrained by daylight hours.</p>
                                 <img src="https://www.nxgmarkets.com/images/bgg.png" alt="" class="w-100">
                              </div>
                           </div>
                           
                        </div>
                        <div class="tab-pane accordion-item fade" id="Commodities" role="tabpanel" aria-labelledby="Commodities-tab">
                           <h2 class="accordion-header  mobile-btn d-lg-none" id="headingCommodities">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCommodities" aria-expanded="false" aria-controls="collapseCommodities">Transparent Costs </button>
                           </h2>
                           <div id="collapseCommodities" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingCommodities" data-bs-parent="#myTabContent">
                              <div class="accordion-body">
                                 <h3 class="tab-content-title">Transparent Costs </h3>
                                 <p>Trading at NXGMarkets.com is straightforward and transparent; all costs are incorporated into the spread, ensuring no hidden fees or commissions. This transparency allows you to confidently understand the cost of your trades.</p>
                                 <img src="https://www.nxgmarkets.com/images/bgg.png" alt="" class="w-100">
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane accordion-item fade" id="Indices" role="tabpanel" aria-labelledby="Indices-tab">
                           <h2 class="accordion-header  mobile-btn d-lg-none" id="headingIndices">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndices" aria-expanded="false" aria-controls="collapseIndices">Versatile Market Opportunities </button>
                           </h2>
                           <div id="collapseIndices" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingIndices" data-bs-parent="#myTabContent">
                              <div class="accordion-body">
                                 <h3 class="tab-content-title">Versatile Market Opportunities</h3>
                                 <p>The forex market provides traders with a distinct advantage, allowing opportunities in both rising and falling markets. Unlike other markets, there are no restrictions or additional costs for short selling.</p>
                                 <img src="https://www.nxgmarkets.com/images/bgg.png" alt="" class="w-100">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>

      </div>
   </div>
</section>

<?php include ('include/footer.php'); ?>