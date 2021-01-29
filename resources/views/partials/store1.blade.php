<section class="page-section cta">
    <div class="container">
      @foreach ($store1 as $item)
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper">{{$item->span1}}</span>
              <span class="section-heading-lower">{{$item->span2}}</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              <li class="list-unstyled-item list-hours-item d-flex">
                {{$item->li1}}
                <span class="ml-auto">{{$item->span5}}</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                {{$item->li2}}
                <span class="ml-auto">{{$item->span3}}</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                {{$item->li3}}
                <span class="ml-auto">{{$item->span3}}</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                {{$item->li4}}
                <span class="ml-auto">{{$item->span3}}</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                {{$item->li5}}
                <span class="ml-auto">{{$item->span3}}</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                {{$item->li6}}
                <span class="ml-auto">{{$item->span3}}</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                {{$item->li7}}
                <span class="ml-auto">{{$item->span4}}</span>
              </li>
            </ul>
            <p class="address mb-5">
              <em>
                <strong>{{$item->p1}}</strong>
                <br>
                {{$item->p2}}
              </em>
            </p>
            <p class="mb-0">
              <small>
                <em>{{$item->p3}}</em>
              </small>
              <br>
              {{$item->p4}}
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>