<div class="slider-area">
    <div id="slider" class="nivoSlider">
        @foreach ($posts as $post)
        <img style ="display:none" src="{{asset('images')}}/{{$post->image}}"  data-thumb="{{asset('assets/frontend')}}/images/slider/1.jpg"  alt="" title="#htmlcaption1"/>      
        @endforeach
        
    </div>
    @foreach ($posts as $key=>$post)
    <div id="htmlcaption{{$key+1}}" class="pos-slideshow-caption nivo-html-caption nivo-caption">
        <div class="timing-bar"></div>
        <div class="pos-slideshow-info pos-slideshow-info1">
            <div class="container">
                <div class="pos_description hidden-xs">
                    <div class="title2"><span class="txt">{{$post->title}}</span></div>
                    <div class="title1"><span class="txt">{{$post->exerpt}}</span></div>
                    <div class="pos-slideshow-readmore">
                        <a href="#">READ MORE <i class="icofont icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @endforeach
    
</div>