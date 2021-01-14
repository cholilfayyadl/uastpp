<footer>
    <section class="sec-global">
        <div class="sec-body-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12 ">
                        <div class="info">
                            <div style="margin-top:0;">
                                <img alt="WeCare.id" src="/ecom/asset/images/logo.png"
                                style="display:inline-block;height:48px;vertical-align:middle; margin-bottom:10px;">
                                <div class="cl-logo d-none d-sm-none d-md-inline-block">
                                    <b>
                                        <span class="w_word">E-</span>
                                        <span class="c_word">Sponsor.tk</span>
                                    </b>
                                </div>
                            </div>
                            <div class="content-footer">
                                <p><span class="text-color font-bold"> E-Sponsor.tk </span> adalah situs web yang
                                dibangun khusus menghubungkan Pencari dan Pemberi sponsor kegiatan.</p>
                            </div>

                            <div class="content-footer">
                                <p><span class="text-color font-bold">Universitas AMIKOM Yogyakarta</span><br>Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281 <br><a href="mailto:support@esponsor.tk"
                                    class="">support@esponsor.tk</a></p>
                                </div>

                                

                            </div>
                        </div>
                        
                        <div class="col-md-2">   
                            
                        </div>

                        <div class="col-md-2 col-5">
                            <div class="title-footer">LEARN</div>
                            
                            <div class="content-footer">
                                <ul class="menu-footer">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">General Question</a></li>
                                    <li><a href="#">Transparency</a></li>
                                    <li><a href="#">Countinuity</a></li>
                                    <li><a href="#" target="_blank">Blog</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-5">
                            <div class="title-footer">CAMPAIGN</div>
                            <hr>
                            <div class="content-footer">
                                <ul class="menu-footer">
                                    <li><a href="#">Become a Fundraiser</a></li>
                                    <li><a href="#">E-Sponsor in Yogyakarta</a></li>
                                </ul>
                            </div>


                            <div class="content-footer">
                                <ul class="socmed-list">
                                    <li>
                                        <a href="#" target="_blank"
                                        class="socmed-badge socmed-facebook"><span
                                        class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"
                                        class="socmed-badge socmed-twitter"><span
                                        class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                        target="_blank" class="socmed-badge socmed-youtube"><span
                                        class="fab fa-youtube"></span></a>
                                    </li>
                                    
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-default sec-main-footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <p class="copyright">Copyrights ©2019 Kelompok E-Sponsor Sistem Informasi 07 (E-Commerce 2019) | E-Sponsor. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/ecom/asset/css/main.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- JQUERY -->
    <script src="/ecom/asset/js/jquery-3.3.1.min.js"></script>

    <!-- Js -->


    <script type="text/javascript" src="/ecom/asset/js/autoNumeric.js"></script>
    <script type="text/javascript" src="/ecom/asset/js/jquery.lazy.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script type="text/javascript" src="/ecom/asset/js/navbar.js"></script>

<script>
    $("nav").addClass("navbar-home")

    $(document).ready(function(){



        $(".postal_code").each(function(){
            var address_container_el = $(this)
            let address_id = address_container_el.attr("data-id")
            let data = {
                param : "get_adrress",
                id62 : address_id
            }
            $.get("/index/ajax/", data=data, function(response){
                response.results[0].address_components.forEach(function(currentValue, index, arr){
                    if(currentValue.types[0] == "administrative_area_level_2"){
                        address_container_el.html(
                            " <a target='blank' href='https://www.google.com/maps/place/"+
                            response.results[0].geometry.location.lat+
                            ","+
                            response.results[0].geometry.location.lng+
                            "'>"+
                            currentValue.short_name+
                            " <i class='fas fa-map-marked-alt'></i></a>"
                            )
                    }
                })
                
            })
        })
    })
</script>
<script>
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop) {
            $('.lazy-load').lazy({
                effect: "fadeIn",
                effectTime: 700,
                threshold: 0
            });
        }
        $('.lazy').lazy({
            effect: "fadeIn",
            effectTime: 700,
            threshold: 0
        });
    });
</script>

</body>

</html>