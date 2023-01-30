@extends('layouts.web')

@section('content')
    
@include('web.components.header')

<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Blog</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index-2.html"><span>Home</span></a></li>
                <li class="trail-item trail-begin"><a href="index-2.html"><span>Blog</span></a></li>
                <li class="trail-item trail-end active"><span>Single Blog</span>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="main-container right-sidebar has-sidebar">
    <!-- POST LAYOUT -->
    <div class="container">
        <div class="row">
            <div class="main-content col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <article
                        class="post-item post-single post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                    <div class="single-post-thumb">
                        <div class="post-thumb">
                            <img src="assets/images/blogpost1.jpg"
                                 class="attachment-full size-full wp-post-image" alt="img"></div>
                    </div>
                    <div class="single-post-info">
                        <h2 class="post-title"><a href="#">Not
                            your ordinary baby service.</a></h2>
                        <div class="post-meta">
                            <div class="date">
                                <a href="#">December 19, 2018 </a>
                            </div>
                            <div class="post-author">
                                By:<a href="#"> admin </a>
                            </div>
                        </div>
                    </div>
                    <div class="post-content">
                        <div id="output">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque litora
                                dapibus primis lacinia condimentum non mauris, rutrum duis vitae fringilla vulputate
                                nulla neque. Per convallis pulvinar sem faucibus blandit commodo nec vulputate, class
                                fames accumsan duis eleifend quisque phasellus.</p>
                            <blockquote><p>Arcu dictum odio elementum torquent tincidunt aptent nec convallis massa
                                ultrices, urna nisl eu sollicitudin proin imperdiet curabitur vestibulum dis diam,
                                pretium porttitor lectus senectus parturient sodales purus dapibus porta.</p>
                            </blockquote>
                            <p>Ultricies pretium etiam sapien dictum libero eleifend justo laoreet a, at in scelerisque
                                augue posuere lectus ornare magna penatibus vitae, eu leo molestie lacinia faucibus mi
                                quis viverra. Eleifend suspendisse fermentum pretium nulla taciti laoreet dictumst
                                dignissim vitae, fusce enim nibh cras natoque nam placerat tristique sagittis, lacus
                                pharetra magna non hendrerit imperdiet sollicitudin per.</p>
                        </div>
                        <p>&nbsp;</p>
                        <div id="gallery-1" class="gallery galleryid-195 gallery-columns-2 gallery-size-full">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="#"><img
                                            src="assets/images/blog-gallery-1.jpg"
                                            class="attachment-full size-full" alt="img"></a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="#"><img
                                            src="assets/images/blog-gallery-2.jpg"
                                            class="attachment-full size-full" alt="img"></a>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="tags"><a href="#" rel="tag">Just In</a>, <a
                            href="#" rel="tag">Life Style</a></div>
                    <div class="post-footer">
                        <div class="lynessa-share-socials">
                            <h5 class="social-heading">Share: </h5>
                            <a target="_blank" class="facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                            <a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                            <a target="_blank" class="googleplus" href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="categories">
                            <span>Categories: </span>
                            <a href="#">Just In</a>,
                            <a href="#">Dresses</a>,
                            <a href="#">Life Style</a>
                        </div>
                    </div>
                </article>
                <div id="comments" class="comments-area">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a comment</h3>
                        <form id="commentform" class="comment-form">
                            <p class="comment-notes"><span
                                    id="email-notes">Your email address will not be published.</span> Required fields
                                are marked <span class="required">*</span></p>
                            <p class="comment-reply-content"><input name="author" id="name" class="input-form name"
                                                                    placeholder="Name*" type="text"></p>
                            <p class="comment-reply-content"><input name="email" id="email" class="input-form email"
                                                                    placeholder="Email*" type="text"></p>
                            <p class="comment-form-comment"><textarea class="input-form" id="comment" name="comment"
                                                                      cols="45" rows="6" aria-required="true"
                                                                      placeholder="Enter you comment here..."></textarea>
                            </p><input name="wpml_language_code" value="en" type="hidden">
                            <p class="form-submit"><input name="submit" id="submit" class="submit"
                                                          value="Post a comment" type="submit"></p>
                        </form>
                    </div><!-- #respond -->
                </div><!-- #comments -->
            </div>
            <div class="sidebar lynessa_sidebar col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <div id="widget-area" class="widget-area sidebar-blog">
                    <div id="search-3" class="widget widget_search">
                        <form role="search" method="get" class="search-form" >
                            <input class="search-field" placeholder="Your search here…" value="" name="s" type="search">
                            <button type="submit" class="search-submit"><span class="fa fa-search"
                                                                              aria-hidden="true"></span></button>
                            <input name="lang" value="en" type="hidden"></form>
                    </div>
                    <div id="categories-3" class="widget widget_categories"><h2 class="widgettitle">Categories<span
                            class="arrow"></span></h2>
                        <ul>
                            <li class="cat-item cat-item-51"><a href="#">Just In</a>
                            </li>
                            <li class="cat-item cat-item-49"><a href="#">Fashion</a>
                            </li>
                            <li class="cat-item cat-item-52"><a href="#">Dresses</a>
                            </li>
                            <li class="cat-item cat-item-53"><a href="#">Collection</a>
                            </li>
                            <li class="cat-item cat-item-50"><a href="#">Life
                                Style</a>
                            </li>
                        </ul>
                    </div>
                    <div id="widget_lynessa_post-2" class="widget widget-lynessa-post"><h2 class="widgettitle">Recent
                        Post<span class="arrow"></span></h2>
                        <div class="lynessa-posts">
                            <article
                                    class="post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="assets/images/blogpost1-83x83.jpg"
                                                 class="img-responsive attachment-83x83 size-83x83" alt="img" width="83"
                                                 height="83"> </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="block-title">
                                            <h2 class="post-title"><a
                                                    href="#">Not
                                                your ordinary baby service.</a></h2>
                                        </div>
                                        <div class="date">December 19, 2018</div>
                                    </div>
                                </div>
                            </article>
                            <article
                                    class="post-192 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion category-multi category-life-style tag-light tag-fashion tag-multi">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="assets/images/blogpost5-83x83.jpg"
                                                 class="img-responsive attachment-83x83 size-83x83" alt="img" width="83"
                                                 height="83"> </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="block-title">
                                            <h2 class="post-title"><a
                                                    href="#">The
                                                child is sleeping on the bed</a></h2>
                                        </div>
                                        <div class="date">December 19, 2018</div>
                                    </div>
                                </div>
                            </article>
                            <article
                                    class="post-189 post type-post status-publish format-video has-post-thumbnail hentry category-table category-life-style tag-multi tag-life-style post_format-post-format-video">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="assets/images/blogpost9-83x83.jpg"
                                                 class="img-responsive attachment-83x83 size-83x83" alt="img" width="83"
                                                 height="83"> </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="block-title">
                                            <h2 class="post-title"><a
                                                    href="#">The
                                                light is hugging the dog on the room</a></h2>
                                        </div>
                                        <div class="date">December 19, 2018</div>
                                    </div>
                                </div>
                            </article>
                            <article
                                    class="post-186 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-life-style tag-life-style">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="assets/images/blogpost4-83x83.jpg"
                                                 class="img-responsive attachment-83x83 size-83x83" alt="img" width="83"
                                                 height="83"> </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="block-title">
                                            <h2 class="post-title"><a
                                                    href="#">The
                                                child is swimming with a buoy</a></h2>
                                        </div>
                                        <div class="date">December 19, 2018</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div id="widget_lynessa_socials-2" class="widget widget-lynessa-socials">
                        <h2 class="widgettitle">Follow us<span class="arrow"></span></h2>
                        <div class="content-socials">
                            <ul class="socials-list">
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <span class="fa fa-facebook"></span>
                                        Facebook </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <span class="fa fa-instagram"></span>
                                        Instagram </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <span class="fa fa-twitter"></span>
                                        Twitter </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/" target="_blank">
                                        <span class="fa fa-pinterest-p"></span>
                                        Pinterest </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="widget_lynessa_instagram-3" class="widget widget-lynessa-instagram"><h2
                            class="widgettitle">Instagram<span class="arrow"></span></h2>
                        <div class="content-instagram">
                            <a target="_blank" href="#" class="item">
                                <img class="img-responsive" src="assets/images/insta1.jpg"
                                     alt="Not your ordinary multi service.">
                            </a>
                            <a target="_blank" href="#" class="item">
                                <img class="img-responsive" src="assets/images/insta2.jpg"
                                     alt="Not your ordinary multi service.">
                            </a>
                            <a target="_blank" href="#" class="item">
                                <img class="img-responsive" src="assets/images/insta3.jpg"
                                     alt="Not your ordinary multi service.">
                            </a>
                            <a target="_blank" href="#" class="item">
                                <img class="img-responsive" src="assets/images/insta4.jpg"
                                     alt="Not your ordinary multi service.">
                            </a>
                            <a target="_blank" href="#" class="item">
                                <img class="img-responsive" src="assets/images/insta5.jpg"
                                     alt="Not your ordinary multi service.">
                            </a>
                            <a target="_blank" href="#" class="item">
                                <img class="img-responsive" src="assets/images/insta6.jpg"
                                     alt="Not your ordinary multi service.">
                            </a>
                        </div>
                    </div>
                    <div id="tag_cloud-3" class="widget widget_tag_cloud"><h2 class="widgettitle">Tags<span
                            class="arrow"></span></h2>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link tag-link-46 tag-link-position-1" aria-label="Just In (4 items)">Just In</a>
                            <a href="#"
                               class="tag-cloud-link tag-link-43 tag-link-position-2"
                               aria-label="Fashion (5 items)">Fashion</a>
                            <a href="#"
                               class="tag-cloud-link tag-link-47 tag-link-position-3"
                               aria-label="Dresses (4 items)">Dresses</a>
                            <a href="#"
                               class="tag-cloud-link tag-link-48 tag-link-position-4"
                               aria-label="Collection (4 items)">Collection</a>
                            <a href="#"
                               class="tag-cloud-link tag-link-45 tag-link-position-5"
                               aria-label="Life Style (7 items)">Life Style</a></div>
                    </div>
                </div><!-- .widget-area -->
            </div>
        </div>
    </div>
</div>

</body>
