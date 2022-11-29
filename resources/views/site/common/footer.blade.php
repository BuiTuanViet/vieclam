<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-logo-and-info">
                    <a href="" class="logo-wrapper"
                       title="{{ isset($information['ten-cong-ty']) ? $information['ten-cong-ty'] : '' }}">
                        <img src="{{ isset($information['logo']) ? $information['logo'] : '' }}"
                             alt="{{ isset($information['ten-cong-ty']) ? $information['ten-cong-ty'] : '' }}"
                             class="lazy img-responsive center-block"/>
                    </a>
                    <div style="color: #fff; font-size: 12px">
                        {!! isset($information['thong-tin-footer']) ? $information['thong-tin-footer'] : '' !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3>Thông tin công ty</h3>
                    <ul class="list-menu has-click">

                        <li><a href="" title="Trang chủ" rel="nofollow">Trang chủ</a></li>

                        <li><a href="gioi-thieu" title="Giới thiệu" rel="nofollow">Giới thiệu</a></li>

                        <li><a href="collections/all" title="Dịch vụ" rel="nofollow">Dịch vụ</a></li>

                        <li><a href="nguoi-giup-viec" title="Người Giúp Việc" rel="nofollow">Người Giúp Việc</a></li>

                        <li><a href="bang-bao-gia-giup-viec" title="Báo giá" rel="nofollow">Báo giá</a></li>

                        <li><a href="tin-tuc" title="Tin tức" rel="nofollow">Tin tức</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3>Hỗ trợ khách hàng</h3>
                    <ul class="list-menu has-click">

                        <li><a href="" title="Trang chủ" rel="nofollow">Trang chủ</a></li>

                        <li><a href="gioi-thieu" title="Giới thiệu" rel="nofollow">Giới thiệu</a></li>

                        <li><a href="collections/all" title="Dịch vụ" rel="nofollow">Dịch vụ</a></li>

                        <li><a href="nguoi-giup-viec" title="Người Giúp Việc" rel="nofollow">Người Giúp Việc</a></li>

                        <li><a href="bang-bao-gia-giup-viec" title="Báo giá" rel="nofollow">Báo giá</a></li>

                        <li><a href="tin-tuc" title="Tin tức" rel="nofollow">Tin tức</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3>Fanpage</h3>
                    <div>
                        {!! isset($information['fanpage']) ? $information['fanpage'] : '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <span>{!! isset($information['copyright']) ? $information['copyright'] : '' !!}</span>
                </div>
            </div>

            <div class="back-to-top text-center" title="Lên đầu trang">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="15px" height="15px" viewBox="0 0 284.929 284.929"
                     style="enable-background:new 0 0 284.929 284.929;" xml:space="preserve"><path
                            d="M282.082,195.285L149.028,62.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665,0.953-6.567,2.856L2.856,195.285   C0.95,197.191,0,199.378,0,201.853c0,2.474,0.953,4.664,2.856,6.566l14.272,14.271c1.903,1.903,4.093,2.854,6.567,2.854   c2.474,0,4.664-0.951,6.567-2.854l112.204-112.202l112.208,112.209c1.902,1.903,4.093,2.848,6.563,2.848   c2.478,0,4.668-0.951,6.57-2.848l14.274-14.277c1.902-1.902,2.847-4.093,2.847-6.566   C284.929,199.378,283.984,197.188,282.082,195.285z"
                            data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"></svg>
            </div>

        </div>
    </div>
</footer>
