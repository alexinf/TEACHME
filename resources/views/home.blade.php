@extends(Auth::user() ? 'layouts.master': 'layouts.landpage')
@section('title', '.:Home:.')

@section('content')

    <div class="content-wrapper">

        <section class="content">

            <div class="box">

                <div class="box-header with-border">

                    <h3 class="box-title">Teach-Me</h3>

                </div>

                <div class="box-body">

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Cumque dicta doloremque et ipsa nulla numquam perferendis, qui quis reprehenderit.
                    Accusamus aliquam animi assumenda deserunt eaque illo laudantium, maxime minima nisi!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ad alias ex modi nesciunt quod reiciendis reprehenderit vitae.
                    A ex iste laudantium molestias neque, repellat. Cumque distinctio dolores earum in nisi.

                </div>

            </div>

        </section>

    </div>

@endsection
