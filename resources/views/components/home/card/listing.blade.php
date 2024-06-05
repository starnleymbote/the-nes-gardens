@props(['isFeatured', 'type', 'listType', 'name', 'location', 'numberOfBeds', 'numberOfBathsRooms', 'size'])

<div class="col-xl-4 col-lg-6 col-md-6">
    <div class="homeya-box">
        <div class="archive-top">
            <a href="property-details-v1.html" class="images-group">
                <div class="images-style">
                    <img src="images/home/house-1.jpg" alt="img">
                </div>
                <div class="top">
                    <ul class="d-flex gap-8">
                        {{-- @if (!empty($isFeatured))
                            <li class="flag-tag success">{{ $isFeatured }}</li>
                        @endif
                        @if (!empty($type))
                            <li class="flag-tag style-1">{{ $type }}</li>
                        @endif --}}

                    </ul>
                    <ul class="d-flex gap-4">
                        <li class="box-icon w-32">
                            <span class="icon icon-arrLeftRight"></span>
                        </li>
                        <li class="box-icon w-32">
                            <span class="icon icon-heart"></span>
                        </li>
                        <li class="box-icon w-32">
                            <span class="icon icon-eye"></span>
                        </li>
                    </ul>
                </div>
                {{-- @if (!empty($listType))
                    <div class="bottom">
                        <span class="flag-tag style-2">{{ $listType }}</span>
                    </div>
                @endif --}}
            </a>
            <div class="content">
                {{-- @if (!empty($name))
                    <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">
                            {{ $name }}</a></div>
                @endif
                @if (!empty($location))
                    <div class="desc"><i class="fs-16 icon icon-mapPin"></i>
                        <p>{{ $location }}</p>
                    </div>
                @endif --}}
                <ul class="meta-list">
                    {{-- @if (!empty($numberOfBeds))
                        <li class="item">
                            <i class="icon icon-bed"></i>
                            <span>{{$numberOfBeds}}</span>
                        </li>
                    @endif
                    @if (!empty($numberOfBathRooms))
                        <li class="item">
                            <i class="icon icon-bathtub"></i>
                            <span>{{$numberOfBathRooms}}</span>
                        </li>
                    @endif
                    @if (!empty($size))
                        <li class="item">
                            <i class="icon icon-ruler"></i>
                            <span>{{$size}} SqFT</span>
                        </li>
                    @endif --}}
                </ul>
            </div>
        </div>
        <div class="archive-bottom d-flex justify-content-between align-items-center">
            <div class="d-flex gap-8 align-items-center">
                <div class="avatar avt-40 round">
                    <img src="images/avatar/avt-6.jpg" alt="avt">
                </div>
                <span>Arlene McCoy</span>
            </div>
            <div class="d-flex align-items-center">
                <h6>$7250,00</h6>
                <span class="text-variant-1">/SqFT</span>
            </div>
        </div>
    </div>
</div>
