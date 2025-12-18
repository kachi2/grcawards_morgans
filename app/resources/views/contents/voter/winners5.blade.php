<!DOCTYPE html>
<html lang="en">
@section('title', '2025 Winners')
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/accordion.css')}}">
@endsection

<head>
    @include('partials.voter.head')
</head>

<body id="conference-page">
    <!-- =============== PRELOADER =============== -->
    @include('partials.voter.preloader')
    <!-- ============== PRELOADER END ============== -->
    <!-- ================= HEADER ================= -->
    @include('partials.voter.topbar')
    <!-- =============== HEADER END =============== -->
    <!-- Page title -->
    <div class="page-title" style="background-color:#D4AF37">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('landing.index')}}">Home</a></li>
                    <li>Winners</li>
                </ul>
            </div>
            <h1 class="title">2025 Winners</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">Winners for Governance Risk Compliance and Financial Crime Prevention Awards</h4>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 30px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category1" checked />
                            <label class="accordion-label" for="category1">GRC & FINANCIAL CRIME PREVENTION EXCELLENCE AWARDS CATEGORY </label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <h4>Banking</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/axa_investment_managers.jpeg') }}" height="50">
                                                                <p>AXA Investment Managers</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/jp_morgan.jpeg') }}" height="50">
                                                                <p>J.P. Morgan Asset Management (Europe operations)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Insurance</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/lloyds.jpeg') }}" height="50">
                                                                <p>Lloyd's</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/lloyds.jpeg') }}" height="50">
                                                                <p>Lloyd's</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Asset And Wealth Management</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/nordea_asset_management.jpeg') }}" height="50">
                                                                <p>Nordea Asset Management</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/jp_morgan.jpeg') }}" height="50">
                                                                <p>J.P. Morgan Asset Management (Europe operations)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Credit Unions & Building Society</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/nationwide_building_society.jpeg') }}" height="50">
                                                                <p>Nationwide Building Society</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/nationwide_building_society.jpeg') }}" height="50">
                                                                <p>Nationwide Building Society</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Fintech/Regtech/Paytech</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/starling.jpeg') }}" height="50">
                                                                <p>Starling Bank (UK)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/banking_circle.jpeg') }}" height="50">
                                                                <p>Banking Circle (Denmark)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Public Sector</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Public Sector Parastatals Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/financial_conduct_authority.jpeg') }}" height="50">
                                                                <p>Financial Conduct Authority</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Healthcare and Life Sciences</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Pharmaceutical Governance, Compliance & Ethical Practice</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/pwc.jpeg') }}" height="50">
                                                                <p>PwC (Pharma & Life Sciences GRC Practice)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Law Enforcement & Intelligence Agencies</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Law Enforcement & Intelligence</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/metropolitan_police.jpeg') }}" height="50">
                                                                <p>Metropolitan Police Service (MPS)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Utilites Providers</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Law Enforcement & Intelligence</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/centrica.jpeg') }}" height="50">
                                                                <p>Centrica (UK)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Healthcare Providers (Public & Private)</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Healthcare Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/uni_college_london_hospitals.jpeg') }}" height="50">
                                                                <p>University College London Hospitals NHS Foundation Trust (UCLH)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Pharmaceutical</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Pharmaceutical Governance, Compliance & Ethical Practice</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/gsk.jpeg') }}" height="50">
                                                                <p>GlaxoSmithKline (UK)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Transportation & Logistics</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/fedex.jpeg') }}" height="50">
                                                                <p>FedEx Express Europe</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Law Enforcement & Intelligence</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/british_airways.jpeg') }}" height="50">
                                                                <p>British Airways (IAG)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Telecommunications</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence - Utility Service Providers</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/orange.jpeg') }}" height="50">
                                                                <p>Orange S.A. (France)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Real Estate & Construction</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Real Estate & Construction</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/british_land.jpeg') }}" height="50">
                                                                <p>British Land (UK)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Energy/Oil & Gas</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in GRC & Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/shell.jpeg') }}" height="50">
                                                                <p>Shell</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Charities & NGOs</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in GRC & Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/oxfam_intl.jpeg') }}" height="50">
                                                                <p>Oxfam International – EU office</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Aviation & Aerospace</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in GRC & Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/airbus.jpeg') }}" height="50">
                                                                <p>Airbus</p>
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
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category1-1" checked />
                            <label class="accordion-label" for="category1-1">ESG AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <!-- <h4>Commercial Banks</h4> -->
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>ESG Initiative of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/centrica.jpeg') }}" height="50">
                                                                <p>Centrica</p>
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
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category1-1-1" checked />
                            <label class="accordion-label" for="category1-1-1">GRC & FINANCIAL CRIME PREVENTION TEAM OF THE YEAR AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <!-- <h4>Commercial Banks</h4> -->
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Team of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/weil.jpeg') }}" height="50">
                                                                <p>Weil, Brussels</p>
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
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category2" checked />
                            <label class="accordion-label" for="category2">GRC & FINANCIAL CRIME PREVENTION CHAMPIONS AWARDS CATEGORY</label>
                            <div class="accordion-content" style="max-height:700vh">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <h4>Internal Audit and Assurance</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Internal Audit and Assurance Champions</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/alex_eagle.jpeg')}}" height="100">
                                                                <p>Alex Eagle (Weil, Brussels)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <h4>Cybersecurity & Data Governance</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Cybersecurity & Data Governance Champions</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/henrik_parkkinen.jpeg')}}" height="100">
                                                                <p>Henrik Parkkinen</p>
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
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category3" checked />
                            <label class="accordion-label" for="category3">WOMEN IN GRC & FINANCIAL CRIME PREVENTION AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Governance Risk & Compliance - Woman of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/elena_pykhova.jpeg') }}" height="120">
                                                                <p>Elena Pykhova</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Financial Crime Prevention - Woman of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/sophia_lis.jpeg') }}" height="120">
                                                                <p>Sophie Lis</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Internal Audit & Assurance - Woman of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/sophie_lis.jpeg') }}" height="120">
                                                                <p>Sophie Lis</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Emerging Talent/Rising Star</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/stephanie_gibaud.jpeg') }}" height="120">
                                                                <p>Stéphanie Gibaud (UBS whistleblower – tax evasion)</p>
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
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category3-1" checked />
                            <label class="accordion-label" for="category3-1">GRC & FINANCIAL CRIME PREVENTION MEDIA/PROMOTER AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC & Financial Crime Prevention Influencer of the year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/alex_eagle.jpeg')}}" height="120">
                                                                <p>Alex Eagle (Weil, Brussels)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC & Financial Crime Prevention Reporter & TV Station of the year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/europol.jpeg') }}" height="50">
                                                                <p>Europol’s Financial & Economic Crime Centre (EFECC) Media Team</p>
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
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category4" checked />
                            <label class="accordion-label" for="category4">GRC & FINANCIAL CRIME PREVENTION PARTNER AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Best GRC & Financial Crime Prevention Advisory and Managed Service</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/fenergo.jpeg')}}" height="50">
                                                                <p>Fenergo</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Best GRC & Financial Crime Prevention Recruitment & Talents Firm</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/aca_group.jpeg')}}" height="50">
                                                                <p>ACA Group</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Best GRC & Financial Crime Prevention Solution Provider of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/scrut_io.jpeg')}}" height="50">
                                                                <p>Scrut.io (Fintech Risk and Compliance Insights)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Best GRC & Financial Crime Prevention Training Provider of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/intl_compliance_assoc.jpeg')}}" height="50">
                                                                <p>International Compliance Association (ICA)</p>
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
                    </div>
                   
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category10" checked />
                            <label class="accordion-label" for="category10">LIFETIME ACHIEVEMENT AWARDS</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNER</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Lifetime Achievement Award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/graham_barrow.jpeg')}}" height="120">
                                                                <p>Graham Barrow – UK-based financial crime expert and global thought leader in KYC and anti-fraud analytics.</p>
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
                    </div>
                </div>
                <!--================= SIDEBAR =================-->
                @include('partials.voter.sidebar')
                <!--=============== SIDEBAR END ===============-->
            </div>
        </div>
    </section>

    <!--==================== FOOTER ====================-->
    @include('partials.voter.footer')
    <!--================== FOOTER END ==================-->

    <!--=================== TO TOP ===================-->
    <a class="to-top" href="#home">
        <i class="mdi mdi-chevron-double-up" aria-hidden="true"></i>
    </a>
    <!--================= TO TOP END =================-->

    <!--=================== SCRIPT	===================-->
    @include('partials.voter.scripts')
</body>

</html>