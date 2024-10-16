<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3021">
    <header class="top-header">
        <div class="container">
            <div class="welcome-text">
                <p>Welcome to RepairPlus Experts, Theme for Repair Shops</p>
            </div>
            <div class="social-icons">
                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-google"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </header>
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="RepairPlus Logo">
            </div>
            <div class="info">
                <div class="info-item">
                    <i class="bi bi-house"></i>
                    <div class="info-text">
                        <p>321, Breaking Street</p>
                        <span>Newyork, USA 10002</span>
                    </div>
                </div>
                <div class="info-item">
                    <i class="bi bi-clock"></i>
                    <div class="info-text">
                        <p>Opening Time</p>
                        <span>Mon - Sat: 09.00 to 18.00</span>
                    </div>
                </div>
                <div class="info-item">
                    <i class="bi bi-envelope"></i>
                    <div class="info-text">
                        <p>Mail Us</p>
                        <span>Supportyou@Repairplus.com</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Smartphone Repair</a></li>
                        <li><a href="#">Tablet & iPad Repair</a></li>
                        <li><a href="#">Desktop & Mac Repair</a></li>
                        <li><a href="#">Game Console Repair</a></li>
                        <li><a href="#">LCD & LED TV Repair</a></li>
                        <li><a href="#">MP3 & MP4 Player Repair</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Pages</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Meet Our Team</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">FAQs Single</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Pricing Plans</a></li>
                        <li><a href="#">404 Page</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Shop</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Shop Products</a></li>
                        <li><a href="#">Single Product</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Blog</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Blog Default</a></li>
                        <li><a href="#">Blog Single</a></li>
                    </ul>     
                </li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="customer-care">
                <i class="bi bi-phone"></i>
                <p>Customer Care</p>
                <span>1800-56-78-9012</span>
                <button class="search-button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </nav>
</div>