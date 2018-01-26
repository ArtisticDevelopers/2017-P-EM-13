@extends('layouts.app')
@section('content')
<!-- Blog Banner Start -->
<div class="blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $type->hotel_type }}</h2>
            </div>
        </div>
    </div>
</div>
<!-- Blog Banner End -->
<!-- Blog Body Start -->
<div class="blog-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
            @forelse($hotels as $hotel)
            <?php
            $image = \App\Traits\Database::get_front_image('hotel', $hotel->hotel_id);
            ?>
                <!-- Blog Box Start -->
                <div class="thumbnail blog-box clearfix">
                    <img src="../../../../../uploads/hotel/{{ $image }}" alt="{{$hotel->hotel_name}}">
                    <!-- detail -->
                    <div class="caption detail">
                        <!-- Title -->
                        <h1 class="title">
                        <a href="/hotel/{{ $hotel->hotel_id }}">{{$hotel->hotel_name}}</a>
                        </h1>
                        <!-- Post Materials-->
                        <div class="post-materials">
                            <div class="header">
                                Facilities:
                                @forelse($hotel->hotel_facilities as $fac)
                                <a>{{ $fac->hotel_facility }}</a> /
                                @empty
                                @endforelse
                                <br />
                                Surroundings:
                                @forelse($hotel->hotel_surroundings as $surr)
                                <a>{{ $surr->hotel_surrounding }}</a> /
                                @empty
                                @endforelse
                                <br/>
                                <?php $rooms = $hotel->hotel_rooms; ?>
                                @if($rooms && $rooms > 0)
                                Room count: <a>{{ count($rooms) }}</a>
                                <br />
                                Average Price: <a>${{ $rooms[0]->room_average_price }}</a>
                                @endif
                            </div>
                            <!-- paragraph -->
                            <p>{{ $hotel->hotel_description }}.</p>
                            <!-- Btn -->
                            <a href="/hotel/{{ $hotel->hotel_id }}" class="btn btn-fill btn-md">Visit</a>
                        </div>
                    </div>
                </div>
                <!-- Blog Box ENd -->
                @empty
                
                    <p>We are sorry. Currently there are no hotels under {{ $type->hotel_type }} category.</p>
                
                @endforelse
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="sidebar">
                    
                    <!-- TAGs Box Start -->
                    <div class="tags-box mgn-btm clearfix">
                        <h2 class="title">View More</h2>
                        
                        @forelse($types as $type)
                        <a href="/hotel/type/{{ $type->ht_id }}" class="tags">{{ $type->hotel_type }}</a>
                        @empty
                        <a>No types to show</a>
                        @endforelse
                    </div>
                    <!-- Tags  Box End -->
                    <!-- Popular Rooms Start -->
                    <div class="Recent-news popular-rooms mgn-btm">
                        <!-- Title-->
                        <h2 class="title">More Hotels</h2>
                        @forelse($random_hotels as $rh)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="../../../../../uploads/hotel/{{ \App\Traits\Database::get_front_image('hotel', $rh->hotel_id) }}" alt="{{ $rh->hotel_name }}">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="rooms-details">{{ $rh->hotel_name }}</a>
                                <span>{{ $rh->hotel_type->hotel_type }}</span>
                                <a href="/hotel/{{ $rh->hotel_id }}">view</a>
                            </div>
                        </div>
                        @empty
                        @endforelse
                        
                    </div>
                    <!-- Recent News End -->
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog body End End -->
@endsection