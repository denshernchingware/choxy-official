 <section class="bg-dark-gray">
     <div class="container">
         <div class="row justify-content-center mb-5 sm-mb-30px">
             <div class="col-xl-6 col-lg-8 col-md-10 text-center"
                 data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                 <h3 class="text-white mb-0 fw-600">Subjects Offered</h3>
             </div>
         </div>
         <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-0"
             data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 300, "delay":0, "staggervalue": 100, "easing": "easeOutQuad" }'>
             <!-- start features box item -->
             @foreach ($subjects as $subject )
                <div class="col icon-with-text-style-04 transition-inner-all">
                 <div
                     class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 border-color-transparent-white-light border-color-transparent-on-hover">
                     <div class="feature-box-icon">
                         <i class="{{$subject->icon}} icon-extra-large text-base-color mb-15px"></i>
                     </div>
                     <div class="feature-box-content">
                         <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">{{$subject->name}}</span>
                     </div>
                     <div class="feature-box-overlay bg-base-color"></div>
                 </div>
             </div>
             @endforeach

         </div>
     </div>
 </section>
