<div class="container-fluid" id='tabs'>
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs" id="tabList" role="tablist">
                <li class="nav-item mx-auto">
                    <a class="nav-link active" id="mntprev-tab" data-toggle="tab" href="#mntprev" role="tab" aria-controls="mntprev" aria-selected="true">Maintenance préventive</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" id="mntcur-tab" data-toggle="tab" href="#mntcur" role="tab" aria-controls="mntcur" aria-selected="false">Maintenance curative</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" id="contrat-tab" data-toggle="tab" href="#contrat" role="tab" aria-controls="contrat" aria-selected="false">Contrat</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" id="devis-tab" data-toggle="tab" href="#devis" role="tab" aria-controls="devis" aria-selected="false">Devis</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" id="factures-tab" data-toggle="tab" href="#factures" role="tab" aria-controls="factures" aria-selected="factures">Factures</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" id="clients-tab" data-toggle="tab" href="#clients" role="tab" aria-controls="clients" aria-selected="false">Clients</a>
                </li>
            </ul>
            <div class="tab-content container-fluid" id="tabsContent">
                <div class="p-4 tab-pane fade show active" id="mntprev" role="tabpanel" aria-labelledby="mntprev-tab">
                    <div class="row">
                        <div class="col-12 col-md-4 align-self-center">
                            <div class="tab-text p-4">
                                {!! $hp->tab1_text !!}
                            </div>
                        </div>
                        <div class="col-12 col-md-8 align-self-center">
                            <img class='w-100' src="storage/{{$hp->tab1_img}}">
                        </div>
                    </div>
                </div>
                <div class="p-4 tab-pane fade" id="mntcur" role="tabpanel" aria-labelledby="mntcur-tab">
                    <div class="row">
                        <div class="col-12 col-md-4 align-self-center">
                            <div class="tab-text p-4">
                                {!! $hp->tab2_text !!}
                            </div>
                        </div>
                        <div class="col-12 col-md-8 align-self-center">
                            <img class='w-100' src="storage/{{$hp->tab2_img}}">
                        </div>
                    </div>
                </div>
                <div class="p-4 tab-pane fade" id="contrat" role="tabpanel" aria-labelledby="contrat-tab">
                    <div class="row">
                        <div class="col-12 col-md-4 align-self-center">
                            <div class="tab-text p-4">
                                {!! $hp->tab3_text !!}
                            </div>
                        </div>
                        <div class="col-12 col-md-8 align-self-center">
                            <img class='w-100' src="storage/{{$hp->tab3_img}}">
                        </div>
                    </div>
                </div>
                <div class="p-4 tab-pane fade" id="devis" role="tabpanel" aria-labelledby="devis-tab">
                    <div class="row">
                        <div class="col-12 col-md-4 align-self-center">
                            <div class="tab-text p-4">
                                {!! $hp->tab4_text !!}
                            </div>
                        </div>
                        <div class="col-12 col-md-8 align-self-center">
                            <img class='w-100' src="storage/{{$hp->tab4_img}}">
                        </div>
                    </div>
                </div>
                <div class="p-4 tab-pane fade" id="factures" role="tabpanel" aria-labelledby="factures-tab">
                    <div class="row">
                        <div class="col-12 col-md-4 align-self-center">
                            <div class="tab-text p-4">
                                {!! $hp->tab5_text !!}
                            </div>
                        </div>
                        <div class="col-12 col-md-8 align-self-center">
                            <img class='w-100' src="storage/{{$hp->tab5_img}}">
                        </div>
                    </div>
                </div>
                <div class="p-4 tab-pane fade" id="clients" role="tabpanel" aria-labelledby="clients-tab">
                    <div class="row">
                        <div class="col-12 col-md-4 align-self-center">
                            <div class="tab-text p-4">
                                {!! $hp->tab6_text !!}
                            </div>
                        </div>
                        <div class="col-12 col-md-8 align-self-center">
                            <img class='w-100' src="storage/{{$hp->tab6_img}}">
                        </div>
                    </div>
                </div>
            </div>
            <div id="accordion"></div>
        </div>
    </div>
</div>