<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3005">
    <div class="container-custom">
        <div class="row">
            <div class="col-6 phone-image">
                <img src="smartphone_img.png" alt="Phone">
                <div class="rating-box">
                    <div class="rating-excellent">Excellent</div>
                    <div class="rating-stars">★★★★☆</div>
                    <div class="rating-number">4.7</div>
                    <div class="rating-text">Client Ratings</div>
                </div>
            </div>

            <div class="col-6 text-content">
                <h2>Affordable, Professional Phone Repairs Done Right Every Time.</h2>
                <p>Aliquam pellentesque quam aenean bibendum mollis per. Duis non rhoncus vulputate maximus enim ornare. Diam eu id rutrum lobortis netus neque integer venenatis letius libero a.</p>
                <ul class="features-list">
                    <li>Affordable Pricing</li>
                    <li>High-Quality Parts</li>
                    <li>Convenient Service</li>
                    <li>Expert Technicians</li>
                    <li>Free Diagnostics</li>
                    <li>Same-Day Service</li>
                </ul>
                <a href="#" class="learn-more-btn">LEARN MORE</a>
            </div>
        </div>
    </div>
</div>