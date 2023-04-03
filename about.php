<?php require('layout/header.php') ?>
<style>
    main {
        font-family: "Encode Sans SC", sans-serif;
    }

    .row img {
        max-width: 100%;
    }
</style>
<main>
    <div class="container">
        <div id="ant-layout">
            <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="thucdon.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm món hoặc thức ăn">
                </form>
            </section>
            <section class="main">
                <div class="row">
                    <h3>The Mansion House là gì?</h3>
                    <p>Tại The Mansion House, chúng tôi hiểu rằng một bữa ăn ngon có thể mang lại cho bạn sức khoẻ và tinh thần thoải mái nhất.</p>
                </div>
                <div class="row">
                    <h3>The Mansion House Coffe hoạt động như thế nào?</h3>
                    <p>The Mansion House Coffe hoạt động từ 7h đến 22h hằng ngày, tuỳ theo khu vực của bạn và thời gian mở cửa cụ thể của từng nhà hàng, quán ăn.</p>
                </div>
                <!-- <div class="row">
                    <img src="images/bg/GrabFood.jpg" alt="">

                    <h3>Những nhà hàng, quán ăn nào trong khu vực của tôi giao hàng qua GrabFood?</h3>
                    <p>Để xem danh sách các nhà hàng, quán ăn có giao hàng qua GrabFood bạn chỉ cần nhập địa chỉ của mình trên ứng dụng. Để đảm bảo đồ ăn nóng hổi, tươi ngon và được giao đến bạn nhanh chóng, GrabFood sẽ quét vị trí của bạn và gợi ý danh sách nhà hàng, quán ăn ở gần vị trí bạn nhất.</p>
                </div> -->
                <div class="row">
                    <h3>Tôi có thể thanh toán bằng tiền mặt không?</h3>
                    <p>Có nhé!</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể thanh toán bằng Internet Banking không?</h3>
                    <p>Có luôn nếu bạn không muốn trả bằng tiền mặt</p>
                </div>
                <div class="row">
                    <h3>Chi phí được tính như thế nào?</h3>
                    <p>Chi phí hiển thị trên ứng dụng bao gồm chi phí của phần ăn theo đơn giá của nhà hàng và phí vận chuyển.</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể đặt giao nhận những món ăn nào qua The Mansion House Coffe?</h3>
                    <p>Danh sách đa dạng các món ăn của chúng tôi bao gồm: món Việt, Tây, Á, món theo phong cách Fusion,… có thể phục vụ cho mọi nhu cầu ăn uống của bạn.</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể tìm thấy những nhà hàng, quán ăn nào trong khu vực của mình?</h3>
                    <p>Danh sách nhà hàng, quán ăn được sắp xếp dựa theo khoảng cách và thời gian giao hàng dự kiến từ Địa chỉ giao thức ăn đến vị trí của bạn.</p>
                </div>
                <iframe src="https://www.google.com/maps/place/The+Mansion+House/@21.2917083,105.6186079,17z/data=!3m1!4b1!4m5!3m4!1s0x3134fbac1c00071f:0x7e99de6391cab554!8m2!3d21.2917033!4d105.6207965" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <iframe width="560" height="315" src="https://www.facebook.com/100064024931326/videos/1244324702844384" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
        </div>
    </div>
</main>
<?php require('layout/footer.php') ?>