<?php

 $curl = curl_init();

 $url = "https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/submit-profile/rounds-invitations.html";

 curl_setopt($curl, CURLOPT_URL, $url);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

 $result = curl_exec($curl);
 

 $sections = array();

 //match section
 preg_match_all('!<p><strong>.*?<\/strong><\/p>!', $result, $match);
 preg_match_all('!<p><strong>.*?<\/strong>.*?<\/p>!', $result, $match1);
 preg_match_all('!<li>.*?<\/li>!', $result, $match2);

?>

@extends('layouts.layout')

@section('content')
  <div class="pb-4 " style="background-color: #efeef2;">
    <nav class="row flex-nowrap justify-content-between align-items-center px-4">
      <div class="col-4">
        <a class="blog-header-logo text-dark" href="#">DreamC</a>
      </div>

      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-outline-secondary free-btn" href="{{ route('dreamc.create') }}">
          <i class="fas fa-chevron-circle-right" ></i>
          Free Assessment
        </a>
      </div>
    </nav>


    <div class="p-4 p-md-5 mb-4 text-white rounded backImg">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
      </div>
    </div>
  </div>

  <main class="container">

  <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">Featured post</h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">Post title</h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            </div>
          </div>
        </div>
      </div>


    <div class="row mb-2">
      <h1>Take Our Asessment</h1>
      <p>By responding to a few question, we can let you know your chances of passing the total screening process for immigration.</p>
      <a class="btn btn-outline-secondary free-btn" href="http://127.0.0.1:8000/dreamc/create">
        <i class="fas fa-chevron-circle-right" ></i>
        Free Assessment
       </a>
    </div>

    <div class="row">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          From the Firehose
        </h3>

        <article class="blog-post">
          <h2 class="blog-post-title">Explore Provinces</h2>
          <div class="row mb-2 mt-2">
            <div class="col-md-3 border offset-md-1">Hello</div>
            <div class="col-md-3 border offset-md-1">Hello</div>
            <div class="col-md-3 border offset-md-1">Hello</div>
          </div>

          <div class="part3 mb-2 mt-2">
            <div class="p3a">
                <img src="mayne.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super prime">PLUS</span>
                            <span class="middle">Mayne Island</span>
                        </div>
                        <span class="right"><i class="fas fa-star" style="color: #8e1ea1;"></i>4.97</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="mayne.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super prime">PLUS</span>
                            <span class="middle">Mayne Island</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: #8e1ea1;"></i>4.97</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="mayne.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super prime">PLUS</span>
                            <span class="middle">Mayne Island</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: #8e1ea1;"></i>4.97</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="mayne.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super prime">PLUS</span>
                            <span class="middle">Mayne Island</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: #8e1ea1;"></i>4.97</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="mayne.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super prime">PLUS</span>
                            <span class="middle">Mayne Island</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: #8e1ea1;"></i>4.97</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="mayne.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super prime">PLUS</span>
                            <span class="middle">Mayne Island</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: #8e1ea1;"></i>4.97</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="lala.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super">SUPERHOST</span>
                            <span class="middle">La Habana</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: red;"></i>4.87</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="medina.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super">SUPERHOST</span>
                            <span class="middle">Medina . Marakesh</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: red;"></i>4.89</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="mount.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super">SUPERHOST</span>
                            <span class="middle">Mount Nathan</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: red;"></i>4.90</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="joshua.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super">SUPERHOST</span>
                            <span class="middle">Joshua Tree</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: red;"></i>4.92</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="bali.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super">SUPERHOST</span>
                            <span class="middle">Balie . Singaraja</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: red;"></i>4.90</span>
                    </div>
                </div>
            </div>
            <div class="p3a">
                <img src="sechelt.jpg" class="p3Img" alt="">
                <div class="marg">
                    <div class="p3b">
                        <div>
                            <span class="super">SUPERHOST</span>
                            <span class="middle">Sechelt</span>
                        </div>

                        <span class="right"><i class="fas fa-star" style="color: red;"></i>4.97</span>
                    </div>
                  </div>
                </div>
                <div class="p3a">
                    <img src="fujida.jpg" class="p3Img" alt="">
                    <div class="marg">
                        <div class="p3b">
                            <div>
                                <span class="super">SUPERHOST</span>
                                <span class="middle">Fujieda</span>
                            </div>

                            <span class="right"><i class="fas fa-star" style="color: red;"></i>4.78</span>
                        </div>
                    </div>
                </div>
            </div>

          <h2>Heading</h2>
          <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <h3>Sub-heading</h3>
          <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          <pre><code>Example code block</code></pre>
          <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <h3>Sub-heading</h3>
          <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <ul>
            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
            <li>Donec id elit non mi porta gravida at eget metus.</li>
            <li>Nulla vitae elit libero, a pharetra augue.</li>
          </ul>
          <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
          <ol>
            <li>Vestibulum id ligula porta felis euismod semper.</li>
            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
            <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
          </ol>
          <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
        </article><!-- /.blog-post -->

        <article class="blog-post">
          <h2 class="blog-post-title">Another blog post</h2>
          <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

          <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
          <blockquote>
            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          </blockquote>
          <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        </article><!-- /.blog-post -->

        <article class="blog-post">
          <h2 class="blog-post-title">New feature</h2>
          <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

          <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <ul>
            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
            <li>Donec id elit non mi porta gravida at eget metus.</li>
            <li>Nulla vitae elit libero, a pharetra augue.</li>
          </ul>
          <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
        </article><!-- /.blog-post -->

        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </nav>

      </div>

      <div class="col-md-4">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="font-italic">Results: Rounds of invitations</h4>
          <p class="mb-0">
            @php 
              print_r($match[0][0]);
              print_r($match1[0][1]);
              print_r($match1[0][2]);
              print_r($match1[0][3]);
              print_r($match1[0][4]);
              print_r($match1[0][5]);
              print_r($match1[0][6]);
            @endphp

          </p>
        </div>

        <div class="p-4">
          <h4 class="font-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2014</a></li>
            <li><a href="#">February 2014</a></li>
            <li><a href="#">January 2014</a></li>
            <li><a href="#">December 2013</a></li>
            <li><a href="#">November 2013</a></li>
            <li><a href="#">October 2013</a></li>
            <li><a href="#">September 2013</a></li>
            <li><a href="#">August 2013</a></li>
            <li><a href="#">July 2013</a></li>
            <li><a href="#">June 2013</a></li>
            <li><a href="#">May 2013</a></li>
            <li><a href="#">April 2013</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="font-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <h1 class="text-center">Total Visits</h1>
          <h2 class="text-center">42</h2>
        </div>
        <div class="col-md-6">
          <h1 class="text-center">Todays Visitors</h1>
          <h2 class="text-center">1</h2>
        </div>
      </div>



    </div>
  </main>
@endsection

