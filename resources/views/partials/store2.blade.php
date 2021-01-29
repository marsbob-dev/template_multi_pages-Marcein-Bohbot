<section class="page-section about-heading">
    <div class="container">
      @foreach ($store2 as $item)
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{$item->img}}" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$item->span1}}</span>
                <span class="section-heading-lower">{{$item->span2}}</span>
              </h2>
              <p>{{$item->p1}}</p>
              <p class="mb-0">{{$item->p2}}
                <em>{{$item->p3}}</em>{{$item->p4}}
                </p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
  </div>
  </section>