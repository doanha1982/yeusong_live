<?php /* Template Name: BMI */
get_header();
?>

<div class="content-area">
    <main id="main" class="site-main">
        <div class="content-block content-block-1 clear">
            <div class="section-heading">
                <h3 class="section-title">Tính chỉ số khối cơ thể
                </h3>
            </div>
            <div class="page-content">
                <h4>Công cụ dùng để tính chỉ số BMI và tìm hiểu mối liên hệ với sức khỏe của bạn</h4>
                <div id="bmi-request-form" class="bmi-request-form">
                    <div class="bmi-form">
                        <p>
                            <label for="">Chiều cao (centimet)</label>
                            <input id="bmi-height" type="number" min="15" max="300" class="bmi-input"/>
                        </p>
                        <p>
                            <label for="">Cân nặng (kilogram)</label>
                            <input id="bmi-weight" type="number" min="1" max="300" class="bmi-input"/>
                        </p>
                        <p>
                            <button id="btn-bmi-submit" type="button"
                                    class="submit-btn">Tính toán</button>
                        </p>
                    </div>
                    <div class="bmi-notice">
                        <h4>
                            Chỉ số BMI là gì?
                        </h4>
                        <ul>
                            <li>Chỉ số BMI (chỉ số khối cơ thể) là điểm số tiêu chuẩn để xác định mức cân nặng của một
                                người dựa trên chiều cao, cân nặng của cơ thể. Với chỉ số BMI bạn có thể biết được cơ
                                thể của mình thuộc tình trạng: nhẹ cân, bình thường, thừa cân hay béo phì.
                            </li>
                            <li>Công thức BMI được áp dụng cho cả nam và nữ và chỉ áp dụng cho người trưởng thành (trên
                                18 tuổi), không áp dụng cho phụ nữ mang thai, vận động viên, người tập thể hình, người
                                già và có sự thay đổi giữa các quốc gia.
                            </li>
                            <li>Nên đánh giá chỉ số BMI ít nhất mỗi tháng 1 lần.</li>
                            <li>
                                Chỉ số BMI được tính bằng cân nặng của bạn (kg) chia cho bình phương chiều cao (mét hoặc
                                cm). Hãy kiểm tra chỉ số BMI của bạn bằng cách:
                            </li>
                            <li>Nhập cân nặng (kg) và chiều cao (cm) của bạn vào mẫu bên trái.</li>
                            <li>Bám vào “Tính Toán” và kết quả chỉ số BMI của bạn sẽ được trả về.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="bmi-response-form" class="content-block content-block-1 bmi-response-form clear" style="display: none">
            <div class="bmi-container">
                <div class="bmi-input-bar">
                    Theo cân nặng và chiều cao của bạn lần lượt là <span class="span-weight"></span> kg và <span
                            class="span-height"></span> cm.
                    Điểm số BMI cơ thể bạn là:
                </div>
                <div class="bmi-score-bar" style="display: none">
                    <div class="bmi-score" style="left:40%"></div>
                </div>
                <div class="bmi-index-bar">
                    <span style="width:18.5%">Nhẹ cân</span>
                    <span style="width:23%">Khỏe mạnh</span>
                    <span style="width: 10%">Thừa cân</span>
                    <span style="width: 24%">Béo phì độ 1</span>
                    <span style="width: 24.5%;margin-right: 0">Béo phì độ 2</span>
                </div>
                <div class="bmi-color-bar"></div>
                <div class="bmi-result-bar"></div>
            </div>
            <div class="page-content bmi-container">
                <ul>
                    <li>Chỉ số BMI nằm trong khoảng từ 18.5 - 22.9 là bình thường.</li>
                    <li>Nếu dưới 18.5 là nhẹ cân.</li>
                    <li>Từ 23 đến 24.9 được coi là thừa cân</li>
                    <li>Từ 25 đến 29.9 là tình trạng béo phì độ I</li>
                    <li>Từ 30 trở lên là mức béo phì độ II</li>
                </ul>
                <p>Mặc dù có mối tương quan giữa chỉ số BMI và lượng mỡ trong cơ thể, nhưng vẫn có sự khác biệt nhất
                    định, dựa trên giới tính, độ tuổi và khả năng tập luyện thể thao. Những khác biệt thể hiện như
                    sau:</p>
                <ul>
                    <li>Phụ nữ có xu hướng có lượng mỡ cơ thể cao hơn nam giới.</li>
                    <li>Người cao tuổi có xu hướng có nhiều mỡ hơn người trẻ.</li>
                    <li>Những người thường xuyên luyện tập cường độ cao (như vận động viên thể hình) sẽ có chỉ số BMI
                        cao do khối lượng cơ bắp cao, làm gia tăng cân nặng.
                    </li>
                </ul>
                <div class="thua-can tu-van">
                    <h5>Những nguy cơ liên quan tới chỉ số BMI cao:</h5>
                    <ul>
                        <li>Tăng huyết áp</li>
                        <li>Béo phì</li>
                        <li>Bệnh tim mạch</li>
                        <li>Đột quỵ</li>
                        <li>Các vấn đề liên quan đến xương khớp</li>
                        <li>Một số loại ung thư</li>
                        <li>Nguy cơ ngưng thở khi ngủ và các vấn đề về hô hấp.</li>
                    </ul>
                    <h5>Những thông tin bạn có thể quan tâm:</h5>
                    <ul>
                        <li><a href="<?php echo esc_url(get_permalink(2477)); ?>">Nguyên nhân làm tăng cân</a></li>
                        <li><a href="<?php echo esc_url(get_permalink(2453)); ?>">8 lời khuyên ăn uống lành mạnh</a></li>
                        <li><a href="<?php echo esc_url(get_permalink(2479)); ?>">Phương pháp giảm cân hiệu quả</a></li>
                        <li><a href="<?php echo esc_url(get_permalink(2481)); ?>">Tháp dinh dưỡng cho người Việt Nam</a></li>
                        <li><a href="<?php echo esc_url(get_permalink(2464)); ?>">Tính chỉ số tiêu hao năng lượng cơ bản</a></li>
                        <li><a href="<?php echo esc_url(get_permalink(2468)); ?>">Kiểm tra cân nặng lý tưởng</a></li>
                    </ul>
                </div>
                <div class="nhe-can tu-van">
                    <h5>Những thông tin bạn cần biết để tăng cân:</h5>
                    <ul>
                        <li><a href="<?php echo esc_url(get_permalink(2474)); ?>">Cẩm nang giúp tăng cân hiệu quả và an toàn</a></li>
                        <li><a href="<?php echo esc_url(get_permalink(2453)); ?>">8 lời khuyên ăn uống lành mạnh</a></li>
                        <li><a href="<?php echo esc_url(get_permalink(2481)); ?>">Tháp dinh dưỡng cho người Việt Nam</a></li>
                        <li><a href="<?php echo esc_url(get_permalink(2464)); ?>">Tính chỉ số tiêu hao năng lượng cơ bản</a></li>
                        <li><a href="<?php echo esc_url(get_permalink(2468)); ?>">Kiểm tra cân nặng lý tưởng</a></li>
                    </ul>
                </div>
                <button type="button" onclick="reset_form()">Kiểm tra lại</button>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(() => {
                jQuery('#btn-bmi-submit').click(() => {
                    let w = jQuery('#bmi-weight').val();
                    let h = jQuery('#bmi-height').val();
                    let txt_color = '#fff';
                    if (w.length === 0 || h.length === 0) return;
                    w = parseFloat(w);
                    h = parseFloat(h);
                    h = (h / 100);
                    let r = (w / (h * h)).toFixed(2);
                    let txt = '';

                    if (r < 18.5) {
                        txt = 'Nhẹ cân';
                        txt_color = '#2b95ff';
                        jQuery('.bmi-score').css('left', r + '%');
                        jQuery('.nhe-can').css('display', 'block');
                    } else if (r <= 22.99) {
                        txt = 'Khỏe mạnh';
                        txt_color = '#00a12b';
                        jQuery('.bmi-score').css('left', (1.8 * r).toFixed(2) + '%');
                    } else if (r <= 24.99) {
                        txt = 'Thừa cân';
                        txt_color = '#fc7f03';
                        jQuery('.bmi-score').css('left', (2.06 * r).toFixed(2) + '%');
                        jQuery('.thua-can').css('display', 'block');
                    } else if (r <= 29.99) {
                        txt = 'Béo phì độ I';
                        txt_color = '#dc1900';
                        jQuery('.bmi-score').css('left', (2.52 * r).toFixed(2) + '%');
                        jQuery('.thua-can').css('display', 'block');
                    } else {
                        txt = 'Béo phì độ II';
                        txt_color = '#dc1900';
                        max = 40;
                        if (r > 40) pos = 2.475 * 40;
                        else pos = 2.475 * r;
                        jQuery('.bmi-score').css('left', (pos).toFixed(2) + '%');
                        jQuery('.thua-can').css('display', 'block');
                    }
                    jQuery('.bmi-result-bar').text(txt).css('color', txt_color);
                    if (r <= 40) jQuery('.bmi-score').text(r);
                    else jQuery('.bmi-score').text('40+');
                    jQuery('.bmi-response-form ,.bmi-score-bar').show();
                    jQuery('.span-weight').text(w);
                    jQuery('.span-height').text(jQuery('#bmi-height').val());
                    document.getElementById('bmi-response-form').scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
                })
            })

            function reset_form() {
                jQuery('#bmi-weight').val('');
                jQuery('#bmi-height').val('');
                jQuery('.bmi-response-form, .tu-van').css('display', 'none');
                document.getElementById('bmi-request-form').scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
            }
        </script>
    </main>
</div>

<?php get_footer(); ?>
