@extends('layouts.app');

@section('content')
<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-8 col-12 mx-auto  mt-4">
                <p class="">
                    <a href="#" class="blog-show-button btn btn-primary px-5"> Educational </a>
                </p>
                <h1 class="text-left font-weight-bold text-dark mb-4">
                    My first Day in Akwa Ibom State University
                </h1>
                <p>
                    by
                    <a href="#"  class="font-weight-bold">Elisha Ukpong</a>
                     |  March 20th, 2019
                </p>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 cover-image">
                <img src="{{asset('img/blog1.jpg')}}" alt="blog image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-10 col-12 mx-auto  mt-4">
              <p class="blog-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta accusamus nemo obcaecati soluta iusto, dolor minima sed necessitatibus dolorem molestias tempore voluptatibus quos. Possimus, ea maiores iste obcaecati autem quam, sint vitae dolores repellendus molestiae fuga sit pariatur praesentium accusamus placeat laboriosam iusto quod earum dolorum ab velit enim deleniti corporis. Repudiandae aliquid deleniti reprehenderit quod necessitatibus tenetur qui corporis veritatis exercitationem quibusdam? Consequuntur nihil, voluptate saepe ducimus corrupti, architecto veritatis, reprehenderit repellendus quae modi autem assumenda. Quasi temporibus architecto provident natus quae eum ducimus sunt vel similique dignissimos placeat assumenda debitis esse, doloremque eligendi corporis labore animi porro qui aut maiores, aliquam officiis est? Rerum at repellat aliquid ipsam ea, iure libero expedita harum autem eos, ut eius alias quaerat iusto esse? Ex ad quia, voluptatem rerum deserunt distinctio atque minus veniam! In ex nobis, veritatis perferendis at minima unde saepe pariatur doloremque sequi assumenda doloribus omnis tempore nulla praesentium libero expedita voluptatem vero ratione veniam deleniti maxime quos mollitia! Ipsam fugiat, impedit a ipsa incidunt earum fugit, provident itaque hic consectetur ducimus est nam minus perspiciatis ipsum natus mollitia quo sunt. Numquam ratione maiores ut cum tenetur iusto, quaerat eius nisi eligendi, voluptatem quis nobis deserunt illo alias.
              </p>

              <p class="blog-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta accusamus nemo obcaecati soluta iusto, dolor minima sed necessitatibus dolorem molestias tempore voluptatibus quos. Possimus, ea maiores iste obcaecati autem quam, sint vitae dolores repellendus molestiae fuga sit pariatur praesentium accusamus placeat laboriosam iusto quod earum dolorum ab velit enim deleniti corporis. Repudiandae aliquid deleniti reprehenderit quod necessitatibus tenetur qui corporis veritatis exercitationem quibusdam? Consequuntur nihil, voluptate saepe ducimus corrupti, architecto veritatis, reprehenderit repellendus quae modi autem assumenda. Quasi temporibus architecto provident natus quae eum ducimus sunt vel similique dignissimos placeat assumenda debitis esse, doloremque eligendi corporis labore animi porro qui aut maiores, aliquam officiis est? Rerum at repellat aliquid ipsam ea, iure libero expedita harum autem eos, ut eius alias quaerat iusto esse? Ex ad quia, voluptatem rerum deserunt distinctio atque minus veniam! In ex nobis, veritatis perferendis at minima unde saepe pariatur doloremque sequi assumenda doloribus omnis tempore nulla praesentium libero expedita voluptatem vero ratione veniam deleniti maxime quos mollitia! Ipsam fugiat, impedit a ipsa incidunt earum fugit, provident itaque hic consectetur ducimus est nam minus perspiciatis ipsum natus mollitia quo sunt. Numquam ratione maiores ut cum tenetur iusto, quaerat eius nisi eligendi, voluptatem quis nobis deserunt illo alias.
              </p>
            </div>

        </div>
    </div>
</section>

<section>
<div class="container">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h3>
                        Previous Post
                    </h3>
                    <p>Lets take you to the prev post</p>
                </div>
                <div class="col-md-6 text-right">
                    <h3>
                        Next Post
                    </h3>
                    <p>Lets take you to the prev post</p>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
@endsection
